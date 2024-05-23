<template>
    <form @submit.prevent="submitPost">
      <div class="grid items-end gap-6 mb-6">
        <div class="relative">
          <input
            type="text"
            id="name"
            v-model="form.name"
            class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" "
          />
          <label for="name" class="absolute text-sm text-gray-700 duration-300 transform -translate-y-3 scale-80 top-1 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-80 peer-focus:-translate-y-3 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
            Illness Name
          </label>
        </div>

        <div id="app">
          <label class="inline-flex items-center cursor-pointer">
            <input
              type="checkbox"
              v-model="form.is_active"
              class="sr-only peer"
            />
            <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
            <span class="ms-3 text-sm font-medium text-gray-700">Active</span>
          </label>
        </div>


      </div>
      <div class="md:grid-cols-3">
        <div class="relative mb-2 flex justify-between">
            <h3 class="mb-3">Illness Category</h3>

            <button type="button" @click="addSymptom" class="text-white bg-blue-700 hover:bg-blue-400 rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900 mb-3">
            Add Symptom
            </button>
        </div>

          <div v-for="(symptom, index) in form.symptoms" :key="index">
            <div class="mb-2 flex justify-between">
                <div class="relative w-full">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-2 pointer-events-none text-gray-500">
                        {{ index+1 }}.
                    </div>
                    <input
                    type="text"
                    id =index
                    v-model="symptom.name"
                    class="block pt-2 ps-7 text-sm text-gray-900 w-full border border-gray-300 rounded w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Symptom Name">
                </div>

                <!-- <button type="button" class="text-black bg-gray-200 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-left">
                {{ index+1 }}
              </button>
              <input
                type="text"
                id =index
                v-model="symptom.name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full"
                placeholder="Symptom Name"
              /> -->
              <!-- <label for=index class="absolute text-sm text-gray-700 duration-300 transform -translate-y-3 scale-60 top-1 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-60 peer-focus:-translate-y-3 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                Symptom Name
              </label> -->
              <button type="button" @click="removeSymptom(index)" class="text-white ml-2 bg-red-500 hover:bg-red-800 font-medium rounded text-sm w-full sm:w-auto px-5 text-center">
                X
              </button>
            </div>
          </div>
        </div>
      <button type="submit" class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
    </form>
  </template>
  <script>
  import axios from 'axios';

  export default {
    data() {
      return {
        form: {
          name: '',
          is_active: false,
          symptoms: [],
        },
        statusText: '',
        errors: {},
      };
    },
    methods: {
      setStatus() {
        this.statusText = this.form.is_active ? 'Active' : 'Inactive';
      },

      addSymptom() {
        this.form.symptoms.push({ name: '' });
      },

      removeSymptom(index) {
        this.form.symptoms.splice(index, 1);
      },

      submitPost() {
        axios.post('/illness', { formdata: this.form })
          .then(response => {
            console.log(response.data);
            if (response.data.message === 'success') {
              this.$emit('formSubmitted');
            }
          })
          .catch(err => {
            if (err.response && err.response.status === 422) {
              this.errors = err.response.data.errors;
            }
          });
      },
    },
  };
  </script>
