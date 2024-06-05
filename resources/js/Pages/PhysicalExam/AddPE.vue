<template>
    <form @submit.prevent="submitPost">
      <div class="grid items-end gap-6 mb-6">
        <div class="relative">
          <input
            type="text"
            id="name"
            v-model="form.name"
            class="block px-2.5 pb-1.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" "
          />
          <label for="name" class="absolute text-sm text-gray-700 duration-300 transform -translate-y-3 scale-80 top-1 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-80 peer-focus:-translate-y-3 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Physical Exam Name</label>
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
        <!-- <label class="inline-flex items-center cursor-pointer">
          <input
            type="checkbox"
            v-model="form.is_active"
            class="sr-only peer"

          />
          <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
          <span class="ms-3 text-sm font-medium text-gray-700">Active</span>
        </label> -->
      </div>
      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
    </form>
  </template>
<script>
import axios from 'axios';
// import { useRoute } from 'vue-router';

export default {
  data() {
    return {
      form: {
        // name: '',
        // created_by: '',
        // is_active: false,
      },
      statusText:'',
      errors: {}
    };
  },
  methods: {
    setStatus(){
        this.statusText=computed(() => {
          return is_active.value ? 'Active' : 'Inactive';
        });
    },

    submitPost() {
      axios.post('physicalExam',{formdata:this.form})
        .then(response => {
          console.log(response.data);
          if (response.data === 'success') {
            this.$emit('formSubmitted');
          }
        })
        .catch(err => {
          if (err.response && err.response.status === 422) {
            this.errors = err.response.data.errors;
          }
        });
    }
  }
};
</script>
