<template>
    <!-- Section H -->
    <div class="flex-1">
      <div class="bg-gray-400 border border-gray-400 p-2">
        <div>
          <span class="text-xm text-black">H. VACCINATION HISTORY (Indicate Date of Last Dose) {{ ph }}</span>
        </div>
      </div>
      <div class="grid grid-cols-12 gap-x-4 p-2">
        <div class="col-span-6">
          <div v-for="(vacc, index) in recordsLeft" :key="index" class="flex justify-between mb-2">
            <div class="flex items-center">
              <input
                v-model="vacc.checked"
                @change="updateChecked(vacc)"
                class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 mr-2"
                type="checkbox"
              />
              <label class="text-sm text-gray-800">{{ vacc.name }}</label>
            </div>
            <div class="w-1/2 ml-2">
              <input
                v-model="vacc.inputValue"
                :disabled="!vacc.checked"
                @change="updateChecked(vacc)"
                :class="{'bg-white': vacc.checked , 'bg-gray-200': !vacc.checked}"
                class="w-full text-sm text-gray-900 bg-transparent border-0 border-b pb-0 mt-0.5 border-gray-600 focus:outline-none focus:ring-0 focus:border-blue-600"
                type="date"
                placeholder="Date"
              />
            </div>
          </div>
        </div>
        <div class="col-span-6">
          <div v-for="(vacc, index) in recordsRight" :key="index" class="flex justify-between mb-2">
            <div class="flex items-center">
              <input
                v-model="vacc.checked"
                @change="updateChecked(vacc)"
                class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 mr-2"
                type="checkbox"
              />
              <label class="text-sm text-gray-800">{{ vacc.name }}</label>
            </div>
            <div class="w-1/2 ml-2">
              <input
                v-model="vacc.inputValue"
                :disabled="!vacc.checked"
                @focusout="updateChecked(vacc)"
                :class="{'bg-white': vacc.checked , 'bg-gray-200': !vacc.checked}"
                class="w-full text-sm text-gray-900 bg-transparent border-0 border-b pb-0 mt-0.5 border-gray-600 focus:outline-none focus:ring-0 focus:border-blue-600"
                type="date"
                placeholder="Date"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>

  <script>
  export default {
    props: { ph: Array },
    data() {
      return {
        records: [],
        recordsLeft: [],
        recordsRight: [],
        othersChecked: false,
        othersInput: ""
      };
    },
    methods: {
      async getData() {
        try {
          const response = await axios.get(route('vaccine.getlistAdd'));
          this.records = response.data.map(record => ({
            ...record,
            checked: false,
            inputValue: ""
          }));
          this.splitRecords();
        } catch (error) {
          console.error('Error fetching records:', error);
        }
      },
      splitRecords() {
        const midpoint = Math.ceil(this.records.length / 2);
        this.recordsLeft = this.records.slice(0, midpoint);
        this.recordsRight = this.records.slice(midpoint);
      },
      updateChecked(vacc) {
        const index = this.ph.findIndex(item => item.vaccination_id === vacc.id);
        if (vacc.checked) {
          if (index === -1) {
            this.ph.push({ vaccination_id: vacc.id, last_dose_date: vacc.inputValue });
          } else {
            this.ph[index].last_dose_date = vacc.inputValue;
          }
        } else {
          if (index !== -1) {
            this.ph.splice(index, 1);
          }
          vacc.inputValue = "";
        }
        this.$emit('update-ph', this.ph); // Emit updated ph to parent component
      }
    },
    mounted() {
      this.getData();
    }
  }
  </script>
