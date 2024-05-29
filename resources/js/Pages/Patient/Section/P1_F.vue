<template>
    <!-- Section F -->
    <div class="flex-1">
      <div class="bg-gray-400 border border-gray-400 p-2">
        <div>
          <span class="text-xm text-black"> F. FAMILY HISTORY {{ fh_checked }}</span>
        </div>
      </div>
      <div class="p-2">
        <div v-for="(fh, index) in records" :key="index">
          <div v-if="fh.with_input == 0" class="right-0 w-full">
            <div class="flex-none mt-1.5">
              <input
                :id="`fh-${fh.id}`"
                v-model="fh.checked"
                @change="updateChecked(fh)"
                class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                type="checkbox"
              />
              <label :for="`fh-${fh.id}`"
                class="ml-2 text-sm text-gray-800"
              > {{  fh.name }}
              </label>
            </div>
          </div>
          <div v-else class="right-0 w-full flex sm:items-left sm:justify-between">
            <div class="flex-none w-32 mt-1.5">
              <input
                :id="`fh-${fh.id}`"
                v-model="fh.checked"
                @change="updateChecked(fh)"
                class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                type="checkbox"
              />
              <label :for="`fh-${fh.id}`"
                class="ml-2 text-sm text-gray-800"
              >{{  fh.name }} :
              </label>
            </div>
            <div class="w-full">
              <input
                v-model="fh.inputValue"
                :disabled="!fh.checked"
                @input="updateChecked(fh)"
                :class="{'bg-white': fh.checked , 'bg-gray-100': !fh.checked}"
                class="w-full text-sm text-gray-900 border-0 border-b pb-0 mt-0.5 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600"
                type="text"
              />
            </div>
          </div>
        </div>
        <div class="right-0 w-full flex sm:items-left sm:justify-between">
          <div class="flex-none w-32 mt-1.5">
            <input
              v-model="othersChecked"
              @change="updateOthersChecked"
              class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
              type="checkbox"
            />
            <label
              class="ml-2 text-sm text-gray-800"
            >Others:
            </label>
          </div>
          <div class="w-full">
            <input
              v-model="othersInput"
              :disabled="!othersChecked"
              @input="updateOthersChecked"
              :class="{'bg-white': othersChecked , 'bg-gray-100': !othersChecked}"
              class="w-full text-sm text-gray-900 border-0 border-b pb-0 mt-0.5 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600"
              type="text"
            />
          </div>
        </div>
      </div>
    </div>
  </template>

  <script>
    export default {
      props: { pf: Array },
      data() {
        return {
          records: [],
          fh_checked: [],
          othersChecked: false,
          othersInput: ""
        };
      },
      methods: {
        async getData() {
          try {
            const response = await axios.get(route('fh.getlistAdd'));
            this.records = response.data.map(record => ({
              ...record,
              checked: false,
              inputValue: ""
            }));
            console.log('HHHHHHHHHHHHHHH:', this.records);
          } catch (error) {
            console.error('Error fetching records:', error);
          }
        },
        updateChecked(fh) {
          const index = this.fh_checked.findIndex(item => item.id === fh.id);
          if (fh.checked) {
            if (fh.with_input === 0) {
              if (index === -1) {
                this.fh_checked.push({ family_history_id: fh.id });
              }
            } else {
              if (index === -1) {
                this.fh_checked.push({ family_history_id: fh.id, details: fh.inputValue });
              } else {
                this.fh_checked[index].value = fh.inputValue;
              }
            }
          } else {
            if (index !== -1) {
              this.fh_checked.splice(index, 1);
            }
            if (fh.with_input !== 0) {
              fh.inputValue = "";
            }
          }
        },
        updateOthersChecked() {
          const index = this.fh_checked.findIndex(item => item.id === 'others');
          if (this.othersChecked) {
            if (index === -1) {
              this.fh_checked.push({ family_history_id: '', details: this.othersInput });
            } else {
              this.fh_checked[index].value = this.othersInput;
            }
          } else {
            if (index !== -1) {
              this.fh_checked.splice(index, 1);
            }
            this.othersInput = "";
          }
        }
      },
      mounted() {
        this.getData();
      }
    }
  </script>
