<template>
    <!-- Section B -->
    <div>
      <div class="bg-gray-400 border border-gray-400 p-2">
        <div>
          <span class="text-xm text-black"> B. MEDICAL ILLNESSES AND PREVIOUS HOSPITALIZATIONS AND SURGERIES</span>
        </div>
      </div>
      <div class="border border-gray-300 p-2">
        <div class="flex-none mt-1.5">
          <input
            id="none"
            class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
            type="checkbox"
            v-model="noneChecked"
            @change="handleNoneChange"
          />
          <label for="none"
            class="text-sm text-gray-800 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
          >None
          </label>
        </div>
        <!-- other illness -->
        <div>
          <div class="flex-none mt-1.5">
            <input
            id="med"
              class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
              type="checkbox"
              v-model="otherIllnessesChecked"
              :disabled="noneChecked"
              @change="handleCheckboxChange('otherIllnessesChecked')"
            />
            <label for="med"
              class="text-sm text-gray-800 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
            >Other Medical Illnesses
            </label>
          </div>
          <div class="pt-2 w-full">
            <textarea
              v-model="pb.med_illness"
              rows="2"
              :class="{'bg-white': otherIllnessesChecked && !noneChecked, 'bg-gray-100': !otherIllnessesChecked || noneChecked}"
              class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
              placeholder="Details:"
              :disabled="!otherIllnessesChecked || noneChecked"
            ></textarea>
          </div>
        </div>
        <!-- hospitalizations -->
        <div>
          <div class="flex-none mt-1.5">
            <input
            id="hsptl"
              class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
              type="checkbox"
              v-model="hospitalizationsChecked"
              :disabled="noneChecked"
              @change="handleCheckboxChange('hospitalizationsChecked')"
            />
            <label for="hsptl"
              class="text-sm text-gray-800 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
            >Hospitalizations and Surgeries (include dates and diagnoses)
            </label>
          </div>
          <div class="pt-2 w-full">
            <textarea
              v-model="pb.hospt_surgery"
              rows="2"
              :class="{'bg-white': hospitalizationsChecked && !noneChecked, 'bg-gray-100': !hospitalizationsChecked || noneChecked}"
              class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
              placeholder="Details:"
              :disabled="!hospitalizationsChecked || noneChecked"
            ></textarea>
          </div>
        </div>
      </div>
    </div>
  </template>

  <script>
    export default {
      props: { pb: Object },
      data() {
        return {
          noneChecked: false,
          otherIllnessesChecked: false,
          hospitalizationsChecked: false,
        };
      },
      methods: {
        handleNoneChange() {
          if (this.noneChecked) {
            this.otherIllnessesChecked = false;
            this.hospitalizationsChecked = false;
            this.pb.med_illness = "";
            this.pb.hospt_surgery = "";
          }
        },
        handleCheckboxChange(checkbox) {
          if (this[checkbox]) {
            this.noneChecked = false;
          }
        }
      },
    };
  </script>

  <style scoped>
  /* Add your styles here */
  </style>
