<template>
    <div>
        <p class="text-sm text-gray-900 mb-6 bg-gray-400 rounded-t-lg p-2">
            <b>TO DMC LWC PHYSICIAN:</b> ENTER REQUIRED INFORMATION. CHECK (✓) THE APPROPRIATE TICK BOX. MINOR PATIENT TO BE ASSISTED BY A PARENT OR GUARDIAN.
        </p>
    </div>
    <div class="p-5">
        <div class="py-3 grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="relative">
                <input
                    type="text"
                    id="last_name"
                    class="block px-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" "
                    v-model="form.last_name"
                />
                <label for="last_name" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 -top-1 z-10 origin-[0] bg-transparent px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:-top-1 peer-focus:scale-100 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Last Name</label>
            </div>

            <div class="relative">
                <input
                    type="text"
                    id="first_name"
                    class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" "
                    v-model="form.first_name"
                />
                <label for="first_name" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 -top-1 z-10 origin-[0] bg-transparent px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:-top-1 peer-focus:scale-100 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">First Name</label>
            </div>

            <div class="relative">
                <input
                    type="text"
                    id="middle_name"
                    class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" "
                    v-model="form.middle_name"
                />
                <label for="middle_name" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 -top-1 z-10 origin-[0] bg-transparent px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:-top-1 peer-focus:scale-100 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Middle Name</label>
            </div>
        </div>
        <!-- Gender DOB / Case no and Hospital -->
        <div class="pb-3 grid grid-cols-1 md:grid-cols-5 gap-6 mb-6">
            <div class="relative">
            <input
                type="text"
                id="case_no"
                class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" "
                v-model="form.case_no"
            />
            <label for="case_no" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 -top-1 z-10 origin-[0] bg-transaparent px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:-top-1 peer-focus:scale-100 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Case No.</label>
            </div>
            <div class="relative">
            <input
                type="text"
                id="hospital_no"
                class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" "
                v-model="form.hospital_no"
            />
            <label for="hospital_no" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 -top-1 z-10 origin-[0] bg-transaparent px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:-top-1 peer-focus:scale-100 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Hospital No.</label>
            </div>
            <div class="relative">
            <select
                id="sex"
                v-model="form.gender"
                class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    <option selected disabled>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

            <label for="sex" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 -top-1 z-10 origin-[0] bg-white px-2">Gender</label>
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
            <label for="birth_date" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 -top-1 z-10 origin-[0] bg-transaparent px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:-top-1 peer-focus:scale-100 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Birthday (mm/dd/yyyy)<span class="text-red-600">*</span></label>
            </div>
            <div class="relative">
            <input
                type="number"
                id="age"
                class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-gray-100 rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" "
                v-model="age"
                disabled
            />
            <label for="age" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 -top-1 z-10 origin-[0] bg-transaparent px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:-top-1 peer-focus:scale-100 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Age</label>
            </div>

        </div>
        <!-- Address -->
        <div class="pb-3">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="relative">
                <input
                type="text"
                id="country"
                class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" "
                v-model="form.country"
                />
                <label for="country" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 -top-1 z-10 origin-[0] bg-transaparent px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:-top-1 peer-focus:scale-100 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Country</label>
            </div>

            <div class="relative">
                <input
                type="text"
                id="region"
                class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" "
                v-model="form.region"
                />
                <label for="region" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 -top-1 z-10 origin-[0] bg-transaparent px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:-top-1 peer-focus:scale-100 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Region</label>
            </div>

            <div class="relative">
                <input
                type="text"
                id="province"
                class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" "
                v-model="form.province"
                />
                <label for="province" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 -top-1 z-10 origin-[0] bg-transaparent px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:-top-1 peer-focus:scale-100 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Province</label>
            </div>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">

            <div class="relative">
                <input
                type="text"
                id="city"
                class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" "
                v-model="form.city"
                />
                <label for="city" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 -top-1 z-10 origin-[0] bg-transaparent px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:-top-1 peer-focus:scale-100 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">City</label>
            </div>

            <div class="relative">
                <input
                type="text"
                id="barangay"
                class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" "
                v-model="form.barangay"
                />
                <label for="barangay" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 -top-1 z-10 origin-[0] bg-transaparent px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:-top-1 peer-focus:scale-100 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Barangay</label>
            </div>

            <div class="relative">
                <input
                type="text"
                id="zipcode"
                class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-gray-100 rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                disabled
                v-model="form.zipcode"
                />
                <label for="zipcode" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 -top-1 z-10 origin-[0] bg-transaparent px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:-top-1 peer-focus:scale-100 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Zip code</label>
            </div>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

            <div class="relative">
                <input
                type="text"
                id="bldgsubd"
                class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" "
                v-model="form.bldgsubd"
                />
                <label for="bldgsubd" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 -top-1 z-10 origin-[0] bg-transaparent px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:-top-1 peer-focus:scale-100 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">House/ Unit No</label>
            </div>

            <div class="relative">
                <input
                type="text"
                id="street"
                class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" "
                v-model="form.street"
                />
                <label for="street" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 -top-1 z-10 origin-[0] bg-transaparent px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:-top-1 peer-focus:scale-100 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Street</label>
            </div>



            </div>
        </div>
        <!-- Pre-Emp Job Tittle -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="relative">
            <!-- <h3 class="mb-4 font-semibold text-gray-900">Identification</h3> -->
                <ul class="flex justify-between w-full text-xs font-medium text-gray-900 bg-white">
                    <li class="w-full rounded-l-lg border border-gray-200">
                        <div class="flex items-center ps-3">
                            <input id="is_pre_employment_0" type="radio" value="0" v-model="form.is_pre_employment" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                            <label for="is_pre_employment_0" class="w-full py-3 ms-2 text-xs font-medium text-gray-900">PRE-EMPLOYMENT </label>
                        </div>
                    </li>
                    <li class="w-full rounded-r-lg border border-gray-200">
                        <div class="flex items-center ps-3">
                            <input id="is_pre_employment_1" type="radio" value="1" v-model="form.is_pre_employment" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                            <label for="is_pre_employment_1" class="w-full py-3 ms-2 text-xs font-medium text-gray-900">ANNUAL EXECUTIVE CHECK-UP</label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="relative">
                <input
                    type="text"
                    id="job_title"
                    class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" "
                    v-model="form.job_title"
                />
                <label for="job_title" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 -top-1 z-10 origin-[0] bg-transparent px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:-top-1 peer-focus:scale-100 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Job Title</label>
            </div>
        </div>
        <!-- Account Details -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">

            <div class="relative">
            <select
                id="acctypt"
                v-model="form.account_type_id"
                class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    <option selected disabled>Select Accoun type</option>
                    <option v-for="item in records" :key="item.id" :value="item.id">
                        <div class="bg-red-300">
                        {{ item.name }}
                        </div>
                    </option>
                </select>

            <label for="acctypt" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 -top-1 z-10 origin-[0] bg-white px-2 ">Account</label>
            </div>
            <div class="relative">
                <input
                    type="text"
                    id="account_detail"
                    class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" "
                    v-model="form.account_detail"
                />
                <label for="account_detail" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-100 -top-1 z-10 origin-[0] bg-transparent px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:-top-1 peer-focus:scale-100 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Account Detail</label>
            </div>

        </div>
    </div>


</template>

<script>
import axios from 'axios';

  export default {
    props: { form: Object },
    data() {
        return {
      records: [],
      age:'',

      errors: {}
    };
    },
    methods: {
      async getData() {
        try {
          const response = await axios.get(route('account.getAll'));
          this.records = response.data;
          console.log('AAAAA:', this.records);
        } catch (error) {
          // console.error('Error fetching records:', error);
        }
      },
      calculateAge() {
        if (this.form.birth_date) {
          const birthDate = new Date(this.form.birth_date);
          const today = new Date();
          let dayAge = today.getFullYear() - birthDate.getFullYear();
          const monthDiff = today.getMonth() - birthDate.getMonth();
          if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
            dayAge--;
          }
          this.age = dayAge;
        } else {
          this.age = '';
        }
      },

    },
    mounted() {
      this.getData();
    },
  };
</script>
