<template>
    <!-- Section H -->
    <div class="flex-1">
      <div class="bg-gray-400 border border-gray-400 p-2">
        <div>
          <span class="text-xm text-black">H. VACCINATION HISTORY (Indicate Date of Last Dose)</span>
        </div>
      </div>
      <div class="grid grid-cols-12 gap-x-2 p-2">

        <div class="col-span-6">
          <div v-for="(vacc, index) in recordsLeft" :key="index" class=" mb-2  divide-y">
            <div class="flex justify-between" 
                :class="{'text-gray-700': vacc.checked , 'text-gray-500': !vacc.checked}">
              <div class="flex items-center mb-2 sm:mb-0 sm:w-48" >
                <input
                  :id="`vax-${vacc.id}`"
                  v-model="vacc.checked"
                  @change="updateChecked(vacc)"
                  class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 mr-2"
                  type="checkbox"
                />
                <label :for="`vax-${vacc.id}`" :class="{'font-bold': vacc.checked , 'font-regular': !vacc.checked}" class="w-full text-sm">{{ vacc.name }}</label>
              </div>
              <div class="w-full">
                <input
                  v-model="vacc.inputValue"
                  :disabled="!vacc.checked"
                  @change="updateChecked(vacc)"
                  :class="{'bg-white ': vacc.checked , 'bg-gray-200': !vacc.checked}"
                  class="w-full rounded text-sm bg-transparent border  mt-0.5 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600"
                  type="date"
                  placeholder="Date"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="col-span-6">
          <div v-for="(vacc, index) in recordsRight" :key="index" class=" mb-2  divide-y">
            <div class="flex justify-between" 
                :class="{'text-gray-700': vacc.checked , 'text-gray-500': !vacc.checked}">
              <div class="flex items-center mb-2 sm:mb-0 sm:w-48" >
                <input
                  :id="`vax-${vacc.id}`"
                  v-model="vacc.checked"
                  @change="updateChecked(vacc)"
                  class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 mr-2"
                  type="checkbox"
                />
                <label :for="`vax-${vacc.id}`" :class="{'font-bold': vacc.checked , 'font-regular': !vacc.checked}" class="w-full text-sm">{{ vacc.name }}</label>
              </div>
              <div class="w-full">
                <input
                  v-model="vacc.inputValue"
                  :disabled="!vacc.checked"
                  @change="updateChecked(vacc)"
                  :class="{'bg-white ': vacc.checked , 'bg-gray-200': !vacc.checked}"
                  class="w-full rounded text-sm bg-transparent border  mt-0.5 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600"
                  type="date"
                  placeholder="Date"
                />
              </div>
            </div>
          </div>
        </div>





        <!-- <div class="col-span-6">
          <div v-for="(vacc, index) in recordsRight" :key="index" class="flex flex-col sm:flex-row justify-between mb-2 border p-2 rounded-lg">
            <div class="flex items-center sm:mb-0 sm:w-48">
              <input
                v-model="vacc.checked"
                @change="updateChecked(vacc)"
                class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 mr-2"
                type="checkbox"
              />
              <label class="text-sm text-gray-800">{{ vacc.name }}</label>
            </div>
            <div class="w-full ml-2">
              <input
                v-model="vacc.inputValue"
                :disabled="!vacc.checked"
                @focusout="updateChecked(vacc)"
                :class="{'bg-white': vacc.checked , 'bg-gray-200': !vacc.checked}"
                class="w-full text-sm text-gray-900 bg-transparent border-0 border-b pb-0 mt-0.5 border-gray-400 focus:outline-none focus:ring-0 focus:border-blue-600"
                type="date"
                placeholder="Date"
              />
            </div>
          </div>
        </div> -->

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
