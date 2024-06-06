<template>
    {{ checked_pe }}
    <div v-for="(pex, index) in records_pe" :key="pex.id" class="grid md:grid-cols-6 border-b">
      <div class="col-span-1 text-left">
        <div class="py-2">
          <label class="text-sm font text-gray-900 w-full px-5">{{ index + 1 }}. {{ pex.name }} - {{ pex.id }}</label>
        </div>
      </div>
      <div class="col-span-5 w-full flex justify-start p-2 border-x">
        <div class="w-32 mt-2">
          <input
            :id="`nrml-${pex.id}`"
            type="radio"
            class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
            :value="true"
            v-model="pex.isNormal"
            @change="handleNormalChange(pex)"
          />
          <label :for="`nrml-${pex.id}`" class="px-2 text-sm text-gray-800 w-full">
            Normal
          </label>
        </div>
        <div class="w-56 mt-2">
          <input
            :id="`abnrml-${pex.id}`"
            type="radio"
            class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
            :value="false"
            v-model="pex.isNormal"
            @change="handleAbnormalChange(pex)"
          />
          <label :for="`abnrml-${pex.id}`" class="px-2 text-sm text-gray-800 w-full">
            Abnormal Findings:
          </label>
        </div>
        <div class="w-full">
          <textarea
            rows="2"
            v-model="pex.findings"
            :disabled="pex.isNormal"
            :class="{'bg-gray-100':pex.isNormal=== true, 'bg-white':pex.isNormal!== true }"
            class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
            placeholder="Details:"
            @blur="updateCheckedPe(pex)"
          ></textarea>
        </div>
      </div>
    </div>
  </template>
<script>
export default {
  props: { p2b: Object },
  data() {
    return {
      records_pe: [],
      checked_pe: []
    };
  },
  methods: {
    async getData() {
      try {
        const response = await axios.get(route('physicalExam.getAll'));
        this.records_pe = response.data.map(item => ({
          ...item,
          isNormal: true,
          findings: ''
        }));
      } catch (error) {
        console.error('Error fetching records_pe:', error);
      }
    },
    handleNormalChange(pex) {
      if (pex.isNormal) {
        pex.findings = '';
        this.checked_pe = this.checked_pe.filter(item => item.id !== pex.id);
      }
    },
    handleAbnormalChange(pex) {
      if (!pex.isNormal) {
        if (!this.checked_pe.find(item => item.id === pex.id)) {
          this.checked_pe.push({ id: pex.id, findings: pex.findings });
        }
      } else {
        this.checked_pe = this.checked_pe.filter(item => item.id !== pex.id);
      }
    },
    updateCheckedPe(pex) {
      const item = this.checked_pe.find(item => item.id === pex.id);
      if (item) {
        item.findings = pex.findings;
      }
    }
  },
  mounted() {
    this.getData();
  }
};
</script>
