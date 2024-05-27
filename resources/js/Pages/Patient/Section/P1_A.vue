<template>
    <!-- Section A -->
    <div>
      <div class="bg-gray-400 border border-gray-400 p-2">
        <div>
          <span class="text-xm text-black">A. PAST ILLNESSES {{ checkedItems }}</span>
        </div>
      </div>
      <!-- next Page -->
      <div class="container">
        <div v-for="(illness_group, index) in records" :key="index" class="border border-gray-300 grid grid-cols-12 gap-x-4">
          <div class="p-2 col-span-12 sm:col-span-2 overflow-y-auto text-left align-center">
            {{ illness_group.id }}. {{ illness_group.name }}
          </div>
          <div class="p-2 col-span-12 sm:col-span-10">
            <div class="pb-3 sm:flex sm:items-left justify-between">
              <div class="flex flex-wrap">
                <div class="flex-none w-full sm:w-64">
                  <div>
                    <input type="checkbox" class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                    <label class="text-sm text-gray-800 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                      None
                    </label>
                  </div>
                </div>
                <div v-for="symp in illness_group.illnesses" :key="symp.id" class="flex-none w-full sm:w-64">
                  <div>
                    <input @change="updateCheckItem(illness_group.id, symp.id, 'symp', $event.target.checked)" type="checkbox" class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                    <label class="text-sm text-gray-800 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                      {{ symp.id }}. {{ symp.name }}
                    </label>
                  </div>
                </div>
                <div class="flex-none w-full sm:w-64">
                  <div>
                    <input
                    v-model="othersChecked[illness_group.id]"
                    @change="updateCheckItem(illness_group.id, 0, 'others', $event.target.checked)"
                    type="checkbox" class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                    <label class="text-sm text-gray-800 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                      {{ illness_group.id }}.Others
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <div class="w-full">
                <textarea
                @focusout="checkAllItems"
                v-model="othersDetails[illness_group.id]"
                :disabled="!othersChecked[illness_group.id]"
                rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Details:"></textarea>
              </div>
            </div>
          </div>
        </div>
        <button type="button" @click="checkAllItems" class="text-white mt-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Check</button>

        <!-- Oncology -->
        <div class="border border-gray-300 grid grid-cols-12 gap-x-4">
          <div class="p-2 col-span-12 sm:col-span-2 overflow-y-auto text-left align-center">
            Oncology
          </div>
          <div class="p-2 col-span-12 sm:col-span-10">
            <div class="pb-3">
              <div class="flex flex-wrap">
                <div class="flex-none w-full sm:w-64 mt-1.5">
                  <input type="checkbox" class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                  <label class="text-sm text-gray-800 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2">
                    None
                  </label>
                </div>
                <div class="flex w-full sm:w-auto pb-3 sm:justify-between items-center">
                  <div class="flex-none mt-1.5">
                    <input type="checkbox" class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                    <label class="text-sm text-gray-800 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2">
                      Cancertype:
                    </label>
                  </div>
                  <div class="flex-grow sm:ml-3">
                    <input type="text" class="w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                  </div>
                </div>
              </div>
            </div>
            <div class="pb-1">
              <div class="flex flex-wrap">
                <div class="flex w-full sm:w-auto pb-3 sm:justify-between items-center">
                  <div class="flex-none mt-1.5">
                    <input type="checkbox" class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                    <label class="text-sm text-gray-800 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2">
                      Stage:
                    </label>
                  </div>
                  <div class="flex-grow sm:ml-3">
                    <input type="text" class="w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                  </div>
                </div>
                <div class="flex-none w-full sm:w-64 mt-1.5 sm:ml-3">
                  <input type="checkbox" class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                  <label class="text-sm text-gray-800 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2">
                    On Chemotherapy:
                  </label>
                </div>
                <div class="flex w-full sm:w-auto pb-3 sm:justify-between items-center mt-1.5 sm:ml-3">
                  <div class="flex-none mt-1.5">
                    <input type="checkbox" class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                    <label class="text-sm text-gray-800 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2">
                      Type:
                    </label>
                  </div>
                  <div class="flex-grow sm:ml-3">
                    <input type="text" class="w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end -->

        <!-- Exposure -->
        <div class="border border-gray-300 grid grid-cols-12 gap-x-4">
          <div class="p-2 col-span-12 sm:col-span-2 overflow-y-auto text-left align-center">
            Exposure
          </div>
          <div class="p-2 col-span-12 sm:col-span-10">
            <div class="pb-3">
              <div class="flex flex-wrap">
                <div class="flex w-full sm:w-6/12 mt-1.5">
                  <p class="text-sm text-gray-800 px-2">
                    Have you ever engaged in any activity which has put you at risk of getting HIV/AIDS?
                  </p>
                </div>
                <div class="flex items-center w-full sm:w-20 mt-1.5 sm:justify-start">
                  <input type="checkbox" class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                  <label class="text-sm text-gray-800 px-2">No</label>
                </div>
                <div class="flex flex-wrap w-full sm:w-auto pb-3 sm:justify-between mt-1.5 sm:ml-5">
                  <div class="flex-none mt-1.5">
                    <input type="checkbox" class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                    <label class="text-sm text-gray-800 px-2">Yes</label>
                  </div>
                  <div class="flex-grow sm:ml-3">
                    <input type="text" class="w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                  </div>
                </div>
              </div>
            </div>
            <div class="pb-1">
              <div class="flex flex-wrap">
                <div class="flex w-full sm:w-6/12 mt-1.5">
                  <p class="text-sm text-gray-800 px-2">
                    Have you ever worked with chemicals or hazardous materials?
                  </p>
                </div>
                <div class="flex items-center w-full sm:w-20 mt-1.5 sm:justify-start">
                  <input type="checkbox" class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                  <label class="text-sm text-gray-800 px-2">No</label>
                </div>
                <div class="flex flex-wrap w-full sm:w-auto pb-3 sm:justify-between mt-1.5 sm:ml-5">
                  <div class="flex-none mt-1.5">
                    <input type="checkbox" class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                    <label class="text-sm text-gray-800 px-2">Yes</label>
                  </div>
                  <div class="flex-grow sm:ml-3">
                    <input type="text" class="w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end -->
      </div>
    </div>
    </template>
<script>
import { ref } from 'vue';
import axios from 'axios';

export default {
    props: { pa: Array },
  data() {
    return {
      records: [],
      checkedItems: [],
      othersChecked: {},
      othersDetails: {},
      pa:{},
    };
  },
  methods: {
    updateCheckItem(illness_group_id, illness_id, type, isChecked) {
      const item = { illness_group_id, illness_id };

      if (isChecked) {
        this.checkedItems.push(item);
      } else {
        this.checkedItems = this.checkedItems.filter(
          (i) => !(i.illness_group_id === illness_group_id && i.illness_id === illness_id)
        );

        // if (type === 'others') {
        //   this.$delete(this.othersDetails, illness_group_id);
        // }
      }

      this.checkAllItems()
    },
    async getData() {
      try {
        const response = await axios.get(route('illness.getlistSympV2'));
        this.records = response.data;
        console.log('Response data:', this.records);
      } catch (error) {
        console.error('Error fetching records:', error);
      }
    },
    checkAllItems() {
      const result = this.checkedItems.map((item) => {
        if (item.illness_id === 0 && this.othersChecked[item.illness_group_id]) {
          return { ...item, details: this.othersDetails[item.illness_group_id] || '' };
        }
        return item;
      });
      this.pa.pa = result

      console.log('XXXXXXXXXX:', this.pa.pa );
    }
  },
  mounted() {
    this.getData();
  }
};
</script>

    <!-- <script setup>
    import { ref } from 'vue';
    import axios from 'axios';

    const records = ref([]);
    const checkedItems = ref([]);
    const othersChecked = ref({});
    const othersDetails = ref({});

    const updateCheckItem = (illness_group_id, illness_id, type, isChecked) => {
      const item = { illness_group_id, illness_id };

      if (type === 'others') {
        othersChecked.value[illness_group_id] = isChecked;
        if (!isChecked) {
          delete othersDetails.value[illness_group_id];
        }
      }

      if (isChecked) {
        checkedItems.value.push(item);
      } else {
        checkedItems.value = checkedItems.value.filter(
          (i) => !(i.illness_group_id === illness_group_id && i.illness_id === illness_id)
        );

        if (type === 'others') {
          delete othersDetails.value[illness_group_id];
        }
      }

      console.log(`Updated checked items: ${JSON.stringify(checkedItems.value)}`);
      console.log(`Others details: ${JSON.stringify(othersDetails.value)}`);
    };

    const getData = async () => {
      try {
        const response = await axios.get(route('illness.getlistSympV2'));
        records.value = response.data;
        console.log('Response data:', records.value);
      } catch (error) {
        console.error('Error fetching records:', error);
      }
    };

    const checkAllItems = () => {
      const result = checkedItems.value.map((item) => {
        if (item.illness_id === 0 && othersChecked.value[item.illness_group_id]) {
          return { ...item, details: othersDetails.value[item.illness_group_id] || '' };
        }
        return item;
      });

      console.log('All checked items with details:', result);
    };

    getData();
    </script> -->

    <!-- <script>
    export default {
      props: {
        pa: Array,
      },
      methods: {
        checkAllItems() {
      const result = this.checkedItems.map((item) => {
        if (item.illness_id === 0 && this.othersChecked[item.illness_group_id]) {
          return { ...item, details: this.othersDetails[item.illness_group_id] || '' };
        }
        return item;
      });

      console.log('All checked items with details:', result);
    },
    },
    };
    </script> -->
