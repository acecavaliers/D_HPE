<template>
    <!-- Section A -->
     {{ p3 }}
    <div>
      <div class="flex justify-between border border-gray-200 bg-gray-300">
        <div class="border-r border-gray-200 w-full p-2">
          <span class="text-xm text-black px-2"> A. ASSESSMENT </span>
        </div>
        <div class="w-full p-2">
          <span class="text-xm text-black px-2"> B. RECOMMENDATIONS </span>
        </div>
      </div>
      <div class="flex justify-between px-2 border-b">
        <div class="border-r border-gray-200 p-2 w-full">
        <textarea
            v-model="p3.assessment"
            rows="3"
            class="block p-2.5 w-full text-sm text-gray-900 rounded-lg  focus:ring-blue-500 focus:border-blue-500"
            placeholder="ASSESSMENT :"
        ></textarea>
        </div>
        <div class="p-2 w-full">
        <textarea
            v-model="p3.recommendation"
            rows="3"
            class="block p-2.5 w-full text-sm text-gray-900 rounded-lg  focus:ring-blue-500 focus:border-blue-500"
            placeholder="RECOMMENDATIONS :"
        ></textarea>
        </div>
      </div>
      <div class="flex justify-end mt-5 p-2 pb-5">
            <div class="mr-4 w-1/4">
                <input @focusout="updateDocDateTime" v-model="p3.physician" id="physician" type="text" class="w-full text-sm font-bold text-gray-900 pb-0.5 border-0 border-b   border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer text-center"/>
                <label for="physician" class="block text-center text-sm">
                    DMC LWC Physician Signature Above Printed Name
                </label>
            </div>

            <div>
                <input id="docdate" v-model="p3.exam_date_time" type="datetime-local" class="w-full text-sm font-bold text-gray-900 pb-0.5 border-0 border-b   border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer text-center" disabled>
                <label for="docdate" class="block text-center text-sm">
                    Date (MM/DD/YYYY) and Time of Examination
                </label>
            </div>
        </div>
    </div>
  </template>

  <script>
    export default {
      props: { p3: Object },
      data() {
        return {
            // physician: '',


      };
      },

      methods: {
        updateDocDateTime() {
            if (this.p3.physician) {
                this.setDocCurrentDateTime();
            }
        },
        setDocCurrentDateTime() {
          var currentDateTime = new Date();
          var offset = currentDateTime.getTimezoneOffset(); // Gets local timezone offset in minutes
          var philippinesOffset = 960; // Philippine time offset in minutes (UTC+8)
          currentDateTime.setMinutes(currentDateTime.getMinutes() + offset + philippinesOffset); // Adjusts time to Philippine time
          this.p3.exam_date_time = currentDateTime.toISOString().slice(0, 16);
        },

      },
    };
  </script>

  <style scoped>
  /* Add your styles here */
  </style>
