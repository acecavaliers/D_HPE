<template>
    <!-- Section B -->
    <div>
      <div class="bg-gray-400 border border-gray-400 p-2">
        <div>
          <span class="text-xm text-black"> A. PRESENT ILLNESS </span>
        </div>
      </div>
      <div class="border border-gray-300 p-2">
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
              class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
              placeholder="Chief Complaint :"
              :disabled=" i_noneChecked"
            ></textarea>
          </div>
        </div>



      </div>
    </div>
  </template>

  <script>
    export default {
      props: { pi: Object },
      data() {
        return {
          i_noneChecked: false,
        };
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
