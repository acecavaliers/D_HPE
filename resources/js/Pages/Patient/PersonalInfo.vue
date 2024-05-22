<template>
    <div class="transition-colors duration-300">
      <div class="container mx-auto p-4">
        <div class="bg-white shadow rounded-lg p-6">
          <h1 class="text-md font-semibold text-gray-900">PATIENT INFORMATION</h1>
          <p class="text-sm text-gray-900 mb-6 bg-gray-200 p-2"><b>TO DMC LWC PHYSICIAN:</b> ENTER REQUIRED INFORMATION. CHECK (✓) THE APPROPRIATE TICK BOX. MINOR PATIENT TO BE ASSISTED BY A PARENT OR GUARDIAN.</p>
          <form @submit.prevent="submitForm">
            <div class="grid items-end gap-6 mb-6">
              <div class="relative">
                <input
                  type="text"
                  id="last_name"
                  class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                  placeholder=" "
                  v-model="form.last_name"
                />
                <label for="last_name" class="absolute text-sm text-gray-700 duration-300 transform -translate-y-3 scale-80 top-1 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-80 peer-focus:-translate-y-3 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Last Name</label>
              </div>
              <div class="relative">
                <input
                  type="text"
                  id="first_name"
                  class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                  placeholder=" "
                  v-model="form.first_name"
                />
                <label for="first_name" class="absolute text-sm text-gray-700 duration-300 transform -translate-y-3 scale-80 top-1 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-80 peer-focus:-translate-y-3 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">First Name</label>
              </div>
              <div class="relative">
                <input
                  type="text"
                  id="middle_name"
                  class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                  placeholder=" "
                  v-model="form.middle_name"
                />
                <label for="middle_name" class="absolute text-sm text-gray-700 duration-300 transform -translate-y-3 scale-80 top-1 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-80 peer-focus:-translate-y-3 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Middle Name</label>
              </div>
              <div class="relative">
                <input
                  type="date"
                  id="birth_date"
                  class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                  placeholder=" "
                  v-model="form.birth_date"
                  @input="calculateAge"
                />
                <label for="birth_date" class="absolute text-sm text-gray-700 duration-300 transform -translate-y-3 scale-70 top-1 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-70 peer-focus:-translate-y-3 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">BIRTHDAY (MM/DD/YYYY)<span class="text-red-600">*</span></label>
              </div>
              <div class="relative">
                <input
                  type="number"
                  id="age"
                  class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                  placeholder=" "
                  v-model="form.age"
                  readonly
                />
                <label for="age" class="absolute text-sm text-gray-700 duration-300 transform -translate-y-3 scale-70 top-1 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-70 peer-focus:-translate-y-3 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Age</label>
              </div>


              <div class="relative">
                <select
                  type="number"
                  id="sex"
                  class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        <option selected disabled>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>

                <label for="sex" class="absolute text-sm text-gray-700 duration-300 transform -translate-y-3 scale-70 top-1 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-70 peer-focus:-translate-y-3 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Gender</label>
              </div>
              <div class="relative">
                <input
                  type="text"
                  id="created_by"
                  class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                  placeholder=" "
                  v-model="form.created_by"
                />
                <label for="created_by" class="absolute text-sm text-gray-700 duration-300 transform -translate-y-3 scale-80 top-1 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-80 peer-focus:-translate-y-3 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Created By</label>
              </div>


              <label class="inline-flex items-center cursor-pointer">
                <input
                  type="checkbox"
                  class="sr-only peer"
                  v-model="form.active"
                />
                <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                <span class="ms-3 text-sm font-medium text-gray-700">Active</span>
              </label>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        form: {
          last_name: '',
          first_name: '',
          middle_name: '',
          birth_date: '',
          age: '',
          created_by: '',
          active: false
        }
      };
    },
    methods: {
      calculateAge() {
        if (this.form.birth_date) {
          const birthDate = new Date(this.form.birth_date);
          const today = new Date();
          let age = today.getFullYear() - birthDate.getFullYear();
          const monthDiff = today.getMonth() - birthDate.getMonth();
          if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
            age--;
          }
          this.form.age = age;
        } else {
          this.form.age = '';
        }
      },
      submitForm() {
        // Handle form submission
        console.log(this.form);
      }
    }
  };
  </script>
