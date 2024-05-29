<template>
    <!-- Section D -->
    <div class="flex-1 border-r border-gray-300">
      <div class="bg-gray-400 border border-gray-400 p-2">
        <div>
          <span class="text-xm text-black">D. ALLERGIES</span>
        </div>
      </div>
      <div class="p-2">
        <div>
          <div class="flex-none mt-1.5">
              <input
                  v-model="d_none"
                  id="d_none"
                  @change="d_NoneChange"
                  class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                  type="checkbox"
              />
              <label
                  for="d_none"
                  class="ml-2 text-sm text-gray-800"
              >None:</label>
          </div>
        </div>

        <div class="right-0 w-full flex sm:items-left sm:justify-between">
          <div class="flex-none w-20 mt-1.5">
              <input
                  v-model="pd.is_food"
                  id="d_food"
                  @change="d_CheckboxChange('food')"
                class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                type="checkbox"
              />
              <label
                  for="d_food"
                class="ml-2 text-sm text-gray-800"
                >Food:
              </label>
          </div>
          <div class="w-full">
            <input
              v-model="pd.food_details"
              :disabled="!pd.is_food"
              :class="{'bg-white': pd.is_food , 'bg-gray-200': !pd.is_food}"
              class="w-full text-sm text-gray-900  border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
              type="text"/>
          </div>
        </div>

        <div class="right-0 w-full flex sm:items-left sm:justify-between">
          <div class="flex-none w-20 mt-1.5">
              <input
                  v-model="pd.is_drugs"
                  id="d_drugs"
                  @change="d_CheckboxChange('drugs')"
                class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                type="checkbox"
              />
              <label
                  for="d_drugs"
                class="ml-2 text-sm text-gray-800"
                >Drugs:
              </label>
          </div>
          <div class="w-full">
            <input
              v-model="pd.drugs_details"
              :disabled="!pd.is_drugs"
              :class="{'bg-white': pd.is_drugs , 'bg-gray-200': !pd.is_drugs}"
              class="w-full text-sm text-gray-900  border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
              type="text"/>
          </div>
        </div>

        <div class="right-0 w-full flex sm:items-left sm:justify-between">
          <div class="flex-none w-20 mt-1.5">
              <input
                  v-model="pd.is_other"
                  id="d_others"
                  @change="d_CheckboxChange('other')"
                class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                type="checkbox"
              />
              <label
                  for ="d_others"
                class="ml-2 text-sm text-gray-800"
                >Others:
              </label>
          </div>
          <div class="w-full">
            <input
              v-model="pd.other_details"
              :disabled="!pd.is_other"
              :class="{'bg-white': pd.is_other , 'bg-gray-200': !pd.is_other}"
              class="w-full text-sm text-gray-900  border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
              type="text"/>
          </div>
        </div>
      </div>
    </div>
  </template>

  <script>
  export default {
    props: { pd: Object },
    data() {
      return {
        d_none: false,
      };
    },
    methods: {
      d_NoneChange() {
        if (this.d_none) {
          this.pd.is_food = false;
          this.pd.is_drugs = false;
          this.pd.is_other = false;
          this.pd.food_details = "";
          this.pd.drugs_details = "";
          this.pd.other_details = "";
        }
      },
      d_CheckboxChange(type) {
        this.d_none = false;
        if (type === 'food' && !this.pd.is_food) {
          this.pd.food_details = "";
        } else if (type === 'drugs' && !this.pd.is_drugs) {
          this.pd.drugs_details = "";
        } else if (type === 'other' && !this.pd.is_other) {
          this.pd.other_details = "";
        }
      }
    }
  };
  </script>
