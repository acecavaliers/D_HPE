<template>
    <!-- Section A -->
    <div>
      <div class="bg-gray-400 border border-gray-400 p-2">
        <div>
          <span class="text-xm text-black">A. PAST ILLNESSES</span>
        </div>
      </div>
      <!-- next Page -->
      <div class="container">
        <div v-for="(illness_group, index) in records" :key="index" >

            <div v-if="illness_group.name !== 'Oncology' && illness_group.name !== 'Exposure'" class="border border-gray-300 grid grid-cols-12 gap-x-4">
                <div class="p-2 col-span-12 sm:col-span-2 overflow-y-auto text-left align-center">
                    {{ illness_group.id }}. {{ illness_group.name }}
                </div>
                <div class="p-2 col-span-12 sm:col-span-10">
                    <div class="pb-3 sm:flex sm:items-left justify-between">
                        <div class="flex flex-wrap">
                            <div class="flex-none w-full sm:w-64">
                            <div>
                                <input
                                id="none-{{ index }}"
                                type="checkbox"
                                :checked="isNoneChecked(illness_group.id)"
                                @change="handleNoneChange(illness_group.id, $event.target.checked)"
                                class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                                <label for="none-{{ index }}" class="px-2 text-sm text-gray-800">
                                None
                                </label>
                            </div>
                            </div>
                            <div v-for="symp in illness_group.illnesses" :key="symp.id" class="flex-none w-full sm:w-64">
                            <div>
                                <input
                                :id="`symp-${illness_group.id}-${symp.id}`"
                                :checked="isChecked(illness_group.id, symp.id)"
                                @change="updateCheckItem(illness_group.id, symp.id, 'symp', $event.target.checked)"
                                type="checkbox"
                                class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                                <label :for="`symp-${illness_group.id}-${symp.id}`" class="px-2 text-sm text-gray-800">
                                {{ symp.name }}
                                </label>
                            </div>
                            </div>
                            <div class="flex-none w-full sm:w-64">
                            <div>
                                <input
                                :id="`other-${illness_group.id}`"
                                v-model="othersChecked[illness_group.id]"
                                @change="updateCheckItem(illness_group.id, '', 'others', $event.target.checked)"
                                type="checkbox"
                                class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                                <label :for="`other-${illness_group.id}`" class="px-2 text-sm text-gray-800">
                                Others
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
                            :class="othersChecked[illness_group.id] ? 'bg-white' : 'bg-gray-100'"
                            rows="2"
                            class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Details:"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div v-else-if="illness_group.name === 'Oncology'" class="border border-gray-300 p-4">
                <div class="grid grid-cols-1 sm:grid-cols-12 gap-4">
                    <div class="col-span-12 sm:col-span-2">
                    {{ illness_group.id }}. {{ illness_group.name }}
                    </div>
                    <div class="col-span-12 sm:col-span-10">
                    <!-- None Checkbox -->
                    <div class="flex col-span-2">
                        <div>
                            <ul class="flex justify-between w-full text-sm font-medium text-gray-900 bg-white">
                                <li class="w-full">
                                    <div class="flex items-center w-24">
                                        <input id="chemical_0" name="chm_aaa" type="radio" value="0" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                        <label for="chemical_0" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">None </label>
                                    </div>
                                </li>
                                <li class="w-full">
                                    <div class="flex items-center w-24 ps-3">
                                        <input id="chemical_1" name="chm_aaa" type="radio" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                        <label for="chemical_1"  class="w-full py-3 ms-2 text-sm font-medium text-gray-900">Cancer</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-grow sm:ml-3">
                            <input type="text" class="w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Cancer type" />
                        </div>
                        <!-- <div class="flex items-center">
                            <input
                            id="none-{{ index }}"
                            type="checkbox"
                            :checked="isNoneChecked(illness_group.id)"
                            @change="handleNoneChange(illness_group.id, $event.target.checked)"
                            class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 mr-2" />
                            <label for="none-{{ index }}" class="text-sm text-gray-800">None</label>
                        </div>
                        <div class="ml-5 w-full flex items-center">
                            <input id="cancr" type="checkbox" class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 mr-2" />
                            <label for="cancr" class="text-sm text-gray-800 mr-2">Cancer type:</label>

                            <input type="text" class="flex-grow text-sm text-gray-900 bg-transparent border border-gray-300 rounded-lg focus:outline-none focus:ring-0 focus:border-blue-500" />
                        </div> -->
                    </div>

                    <div class="mt-3 flex col-span-2">
                        <!-- Stage -->
                        <div class="flex items-center">
                            <input id="stage" type="checkbox" class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 mr-2" />
                            <label for="stage" class="text-sm text-gray-800 mr-2">Stage:</label>

                            <input type="text" class="flex-grow text-sm text-gray-900 bg-transparent border border-gray-300 rounded-lg focus:outline-none focus:ring-0 focus:border-blue-500" />
                        </div>

                        <!-- On Chemotherapy and Type -->
                        <div class="ml-5 w-full flex flex-wrap items-center">
                            <div class="flex items-center mr-4">
                                <input id="chemo" type="checkbox" class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 mr-2" />
                                <label for="chemo" class="text-sm text-gray-800">On Chemotherapy</label>
                            </div>
                            <div class="flex w-96 items-center">
                                <input id="type" type="checkbox" class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 mr-2" />
                                <label for="type" class="text-sm text-gray-800 mr-2">Type:</label>
                                <input type="text" class="flex-grow text-sm text-gray-900 bg-transparent border border-gray-300 rounded-lg focus:outline-none focus:ring-0 focus:border-blue-500" />
                            </div>
                        </div>
                    </div>


                    </div>
                </div>
            </div>

            <div v-else-if="illness_group.name == 'Exposure'" class="border border-gray-300 grid grid-cols-12 gap-x-4">
                <div class="p-2 col-span-12 sm:col-span-2 overflow-y-auto text-left align-center">
                    {{ illness_group.id }}. {{ illness_group.name }}
                </div>
                <div class="p-2 col-span-12 sm:col-span-10">
                    <div class="pb-3">
                    <div class="flex flex-wrap">
                        <div class="flex w-full sm:w-6/12 mt-1.5">
                        <p class="text-sm text-gray-800 px-2">
                            Have you ever engaged in any activity which has put you at risk of getting HIV/AIDS?
                        </p>
                        </div>
                        <div>
                            <ul class="flex justify-between w-full text-sm font-medium text-gray-900 bg-white">
                                <li class="w-full">
                                    <div class="flex items-center w-24 ps-3">
                                        <input id="hiv_0" name="aaa" type="radio" value="0" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                        <label for="hiv_0" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">No </label>
                                    </div>
                                </li>
                                <li class="w-full">
                                    <div class="flex items-center w-24 ps-3">
                                        <input id="hiv_1" name="aaa" type="radio" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                        <label for="hiv_1"  class="w-full py-3 ms-2 text-sm font-medium text-gray-900">Yes</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-grow sm:ml-3">
                            <input type="text" class="w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
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
                        <div>
                            <ul class="flex justify-between w-full text-sm font-medium text-gray-900 bg-white">
                                <li class="w-full">
                                    <div class="flex items-center w-24 ps-3">
                                        <input id="chemical_0" name="chm_aaa" type="radio" value="0" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                        <label for="chemical_0" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">No </label>
                                    </div>
                                </li>
                                <li class="w-full">
                                    <div class="flex items-center w-24 ps-3">
                                        <input id="chemical_1" name="chm_aaa" type="radio" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                        <label for="chemical_1"  class="w-full py-3 ms-2 text-sm font-medium text-gray-900">Yes</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-grow sm:ml-3">
                            <input type="text" class="w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Type of chemical" />
                        </div>
                    </div>
                    </div>
                </div>
            </div>

        </div>
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
    };
  },
  methods: {
    isChecked(illness_group_id, illness_id) {
      return this.checkedItems.some(
        (item) => item.illness_group_id === illness_group_id && item.illness_id === illness_id
      );
    },
    isNoneChecked(illness_group_id) {
      return this.checkedItems.every(
        (item) => item.illness_group_id !== illness_group_id
      );
    },
    handleNoneChange(illness_group_id, isChecked) {
      if (isChecked) {
        // Uncheck all other checkboxes in this group
        this.checkedItems = this.checkedItems.filter(
          (item) => item.illness_group_id !== illness_group_id
        );

        // Uncheck "Others" checkbox and clear its details
        this.othersChecked[illness_group_id] = false;
        this.othersDetails[illness_group_id] = '';
      }
    },
    updateCheckItem(illness_group_id, illness_id, type, isChecked) {
      if (isChecked) {
        // Remove "none" if a symptom or "others" is checked
        this.checkedItems = this.checkedItems.filter(
          (item) => item.illness_group_id !== illness_group_id || item.illness_id !== 'none'
        );
        this.checkedItems.push({ illness_group_id, illness_id });
      } else {
        this.checkedItems = this.checkedItems.filter(
          (i) => !(i.illness_group_id === illness_group_id && i.illness_id === illness_id)
        );

        if (type === 'others') {
          this.othersDetails[illness_group_id] = '';
        }
      }

      this.checkAllItems();
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
        if (item.illness_id === '' && this.othersChecked[item.illness_group_id]) {
          return { ...item, details: this.othersDetails[item.illness_group_id] || '' };
        }
        return item;
      });
      this.pa.pa = result;
      this.$emit('update-pa', result);

      console.log('Updated pa:', result);
    },
  },
  mounted() {
    this.getData();
  },
};
</script>
