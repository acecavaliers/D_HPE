<template>
    <!-- Section A -->
    <div>
      <div class="bg-gray-400 p-2">
        <div>
          <span class="text-xm text-black"> A. PRESENT ILLNESS </span>
        </div>
      </div>
      <div class=" p-2">
        <div class="flex-none mt-1.5">
          <input
            id="i_none"
            class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
            type="checkbox"
            v-model="i_noneChecked"
            @change="handleNoneChange"
          />
          <label for="i_none"
            class="text-sm text-gray-800 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
          >None
          </label>
        </div>
        <!-- Chief Complaint -->
        <div>
          <div class="pt-2 w-full">
            <textarea
              v-model="pi.details"
              rows="3"
              :class="{'bg-white': !i_noneChecked, 'bg-gray-100':  i_noneChecked}"
              class="block p-2.5 w-full text-sm text-gray-900 rounded-lg  focus:ring-blue-500 focus:border-blue-500"
              placeholder="Chief Complaint :"
              :disabled=" i_noneChecked"
            ></textarea>
          </div>
        </div>
      </div>
    </div>



    <div>

      <div class="bg-gray-400 p-2 mt-5">
        <div>
          <span class="text-xm text-black"><b> VITAL SIGNS/ PAIN SCALE </b>  TO THE DMC LWC NURSE: ENTER REQUIRED INFORMATION. CHECK (✓) THE APPROPRIATE TICK BOX </span>
        </div>
      </div>

      <div class="grid grid-cols-12 gap-x-4 px-2 py-5">
        <div class="col-span-12 lg:col-span-3">
          <div class="pt-2">
            <input
              type="text"
              class="block p-2.5 w-full text-sm text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500"
              placeholder="HEIGHT (cm)"
            >
          </div>
        </div>

        <div class="col-span-12 lg:col-span-3">
          <div class="pt-2">
            <input
              type="text"
              class="block p-2.5 w-full text-sm text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500"
              placeholder="WEIGHT (kg)"
            >
          </div>
        </div>

        <div class="col-span-12 lg:col-span-3">
          <div class="pt-2">
            <input
              type="text"
              class="block p-2.5 w-full text-sm text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500"
              placeholder="BODY MASS INDEX (kg/m2)"
            >
          </div>
        </div>

        <div class="col-span-12 lg:col-span-3">
          <div class="flex justify-between pt-2">
            <div class="flex-none mt-1.5">
              <input
                id="i_Sthenic"
                class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                type="checkbox"
                v-model="pj.sthenic"
                @change="handleNoneChange"
              />
              <label for="i_Sthenic"
                class="text-sm text-gray-800 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >Sthenic
              </label>
            </div>
            
            <div class="flex-none mt-1.5">
              <input
                id="i_Asthenic"
                class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                type="checkbox"
                v-model="pj.asthenic"
                @change="handleNoneChange"
              />
              <label for="i_Asthenic"
                class="text-sm text-gray-800 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >Asthenic
              </label>
            </div>
            
            <div class="flex-none mt-1.5">
              <input
                id="i_Hypersthenic"
                class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                type="checkbox"
                v-model="pj.hypersthenic"
                @change="handleNoneChange"
              />
              <label for="i_Hypersthenic"
                class="text-sm text-gray-800 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >Hypersthenic
              </label>
            </div>
          </div>
        </div>
      </div>

      
      <div class="grid grid-cols-12 gap-x-4 px-2 pb-5">
        <div class="col-span-12 lg:col-span-3">
          <div class="pt-2">
            <input
              type="text"
              class="block p-2.5 w-full text-sm text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500"
              placeholder="BLOOD PRESSURE (mmHg)"
            >
          </div>
        </div>

        <div class="col-span-12 lg:col-span-3">
          <div class="pt-2">
            <input
              type="text"
              class="block p-2.5 w-full text-sm text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500"
              placeholder="PULSE RATE (bpm)"
            >
          </div>
        </div>

        <div class="col-span-12 lg:col-span-3">
          <div class="pt-2">
            <input
              type="text"
              class="block p-2.5 w-full text-sm text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500"
              placeholder="RESPIRATION RATE (cpm)"
            >
          </div>
        </div>

        <div class="col-span-12 lg:col-span-3">
          <div class="pt-2">
            <input
              type="text"
              class="block p-2.5 w-full text-sm text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500"
              placeholder="TEMPERATURE (C)"
            >
          </div>
        </div>
      </div>

    </div>

    <div class="p-4">
  <div class="grid grid-cols-1 sm:grid-cols-12 gap-1">
    <div class="text-center col-span-12 sm:col-span-2 flex items-center justify-center">
      Pain
    </div>
    <div class="p-2 col-span-12 sm:col-span-10">
      <div class="pb-3">
        <div class="flex justify-between">
          <!-- Modified v-for loop -->
          <div v-for="(pain, index) in painvalues" :key="index" class="flex w-full">
            <div class="bg-gray-500 w-full flex items-center ps-4 border border-gray-200 rounded">
                <input id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <label for="bordered-radio-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900">{{ index }}</label>
            </div>
          </div>
        </div>
      </div>
      <!-- Temperature input field -->
      <div class="col-span-12 lg:col-span-3">
        <div class="pt-2">
          <input
            type="text"
            class="block p-2.5 w-full text-sm text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500"
            placeholder="TEMPERATURE (C)"
          >
        </div>
      </div>
    </div>
  </div>
</div>



  </template>

  <script>
    export default {
      props: { pi: Object ,pj: Object },
      data() {
        return {
          i_noneChecked: false,
          painvalues:[],
        };
      },
      mounted() {
        // Initialize pain values from 0 to 10 with null values
        for (let i = 0; i <= 10; i++) {
          this.painvalues.push(0);
        }
      },
      methods: {
        handleNoneChange() {
          if (this.i_noneChecked) {
            this.pi.details = "";
          }
        },
        handleCheckboxChange(checkbox) {
          if (this[checkbox]) {
            this.i_noneChecked = false;
          }
        }
      },
    };
  </script>

  <style scoped>
  /* Add your styles here */
  </style>
