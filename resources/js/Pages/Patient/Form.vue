
<template>
    <div class="container mx-auto">
        <form-wizard @on-complete="onComplete" shape="tab" color="#094899">
        <!-- <template #title>Personal details</template> -->
        <!-- <form @submit.prevent="submitForm"> -->
          <tab-content title="Personal details">
            <PersonalInfo></PersonalInfo>
          </tab-content>
          <tab-content title="PATIENT CLINICAL INFORMATION" >
            <!-- PART I : PATIENT CLINICAL INFORMATION -->
            <Part1></Part1>
          </tab-content>
          <tab-content title="PHYSICAL EXAMINATION" >
            <!-- PART II: PHYSICAL EXAMINATION -->
            <!-- <Part2></Part2> -->
          </tab-content>
          <tab-content title="ASSESSMENT & RECOMMENDATION" >
            <!-- PART III: ASSESSMENT & RECOMMENDATION -->
            <!-- <Part3></Part3> -->
          </tab-content>

          <button type="submit" class="mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
        <!-- </form> -->
        
        </form-wizard>
    </div>

  </template>

  <script setup>
  import axios from 'axios';
  import PersonalInfo from '@/Pages/Patient/PersonalInfo.vue'
  import Part1 from '@/Pages/Patient/Part1.vue'
  import Part2 from '@/Pages/Patient/Part2.vue'
  import Part3 from '@/Pages/Patient/Part3.vue'
  </script>

  <script>
  import { FormWizard, TabContent } from "vue3-form-wizard";
  import "vue3-form-wizard/dist/style.css";
  export default {
    props: { information: Array },
    name: "CustomTitleSlost",
    components: {
      FormWizard,
      TabContent,
    },
    data() {
        return {
      records: [],
      age:'',
      form: {},
      errors: {}
    };
    },
    methods: {
       onComplete() {
        alert("Yay. Done!");
        // this.$refs.formWizard.reset();
      },
      submitForm() {
        axios.post('patient',{formdata:this.form})
        .then(response => {
          console.log(response.data);
          if (response.data === 'success') {
            // this.$emit('formSubmitted');
          }
        })
        .catch(err => {
          if (err.response && err.response.status === 422) {
            this.errors = err.response.data.errors;
          }
        });
      }
    },
  };
  </script>
