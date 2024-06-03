<template>
    <h1 class="text-md font-semibold text-gray-900">Full Form</h1>
    <div class="transition-colors duration-300">
        <!-- Step Header Tabs -->
      <div class="flex justify-between mb-6">
        <button
          v-for="(step, index) in steps"
          :key="index"
          :class="{'text-blue-600 border rounded-lg border-blue-600': currentStep === index, 'text-gray-500': currentStep !== index}"
          class="py-2 px-4 w-full focus:outline-none"
          @click="currentStep = index"
        >
          {{ step.name }}
        </button>
      </div>
        <div class="bg-white rounded-lg">

          <form @submit.prevent="submitForm">

            <div v-if="currentStep === 0">
                <div class="grid grid-cols-1">
                    <Personal_Info :form="form"/>
                </div>
            </div>

            <div v-if="currentStep === 1">
                <div class="bg-gray-200 border border-gray-800 flex justify-start">
                    <div  class="bg-gray-800 text-md font-black text-white p-2">
                        PART I : PATIENT CLINICAL INFORMATION
                    </div>
                    <div class="p-2 text-sm">
                        <b>TO DMC LWC PHYSICIAN:</b> ENTER REQUIRED INFORMATION. CHECK (✓) THE APPROPRIATE TICK BOX. MINOR PATIENT TO BE ASSISTED BY A PARENT OR GUARDIAN.
                    </div>
                </div>
                <div class="grid grid-cols-1 border border-gray-400">
                    <P1_A :pa="pa" @update-pa="updatePa" />

                </div>
            </div>
            <div v-if="currentStep === 2">
                <div class="grid grid-cols-1 border border-gray-400">
                    <P1_B :pb="pb"/>
                    <P1_C :pc="pc"/>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 border border-gray-400">
                    <P1_D :pd="pd"/>
                    <P1_E :pe="pe"/>
                </div>

            </div>
            <div v-if="currentStep === 3">
                <div class="grid grid-cols-1 md:grid-cols-2 border border-gray-400">
                    <P1_F :pf="pf" @update-pf="updatePF"/>
                    <P1_G :pg="pg"/>

                </div>
                <div class="grid grid-cols-1 border border-gray-400">
                    <P1_H :ph="ph" @update-ph="updatePH"/>
                </div>
            </div>
            <div v-if="currentStep === 4">
                <div class="grid grid-cols-1 border border-gray-400">
                    <P1_I :pi="pi" :pj="pj"/>
                </div>
            </div>


            <div v-if="currentStep === 5">
                <div class="bg-gray-200 border border-gray-800 flex justify-start">
                    <div  class="bg-gray-800 text-md font-black text-white p-2">PART II: PHYSICAL EXAMINATION</div>
                    <div class="p-2 text-sm"><b>TO DMC LWC PHYSICIAN:</b> ENTER REQUIRED INFORMATION. CHECK (✓) THE APPROPRIATE TICK BOX.</div>
                </div>
                <div class="grid grid-cols-1 border border-gray-400">
                    <P2_A :p2a="p2a"/>
                </div>
            </div>

            <div class="flex justify-between mt-5">
            <button
              type="button"
              v-if="currentStep > 0"
              @click="currentStep--"
              class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
            >
              Previous
            </button>
            <button
              type="button"
              v-if="currentStep < steps.length - 1"
              @click="currentStep++"
              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ml-auto"
            >
              Next
            </button>
            <button
              type="submit"
              v-if="currentStep === steps.length - 1"
              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ml-auto"
            >
              Submit
            </button>
          </div>


            <!-- <button type="submit" class="text-white mt-5 bg-blue-300 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button> -->
          </form>
        </div>

    </div>
  </template>


<script setup>
import { ref } from 'vue';

const currentStep = ref(0);
const steps = ref([
  { name: 'Patient Information' },
  { name: 'P1 A' },
  { name: 'P1 B-E' },
  { name: 'P1 F-H' },
  { name: 'P1 I' },
  { name: 'P1 J' },
  { name: 'Part II' }
]);

</script>


<script>
import axios from 'axios';
import P1_A from './Section/P1_A.vue';
import P1_B from './Section/P1_B.vue';
import P1_C from './Section/P1_C.vue';
import P1_D from './Section/P1_D.vue';
import P1_E from './Section/P1_E.vue';
import P1_F from './Section/P1_F.vue';
import P1_G from './Section/P1_G.vue';
import P1_H from './Section/P1_H.vue';
import P1_I from './Section/P1_I.vue';
import P2_A from './Section/P2_A.vue';
import Personal_Info from './Section/Personal_Info.vue';

  export default {
    components: {
        P1_A,P1_B,P1_C,P1_D,P1_E,P1_F,P1_G,P1_H,P1_I,P2_A,
  },
    data() {
        return {
    //   records: [],
      age:'',
      form: {},
      pa: [],
      pb: {},
      pc:{},
      pd:{},
      pe:{},
      pf:[],
      pg:{},
      ph:[],
      pi: {},
      pj: {},
      p2a:{},
    //   errors: {}
    };
    },
    methods: {
        updatePa(newPa) {
            this.pa = newPa;
        },
        updatePF(newPf) {
            this.pf = newPf;
        },
        updatePH(newPh) {
            this.ph = newPh;
        },

      submitForm() {

        console.log('RRRRRR:', this.ph);
        axios.post('patient',
          {formdata:this.form,
            padata:this.pa,
            pbdata:this.pb,
            pcdata:this.pc,
            pddata:this.pd,
            pedata:this.pe,
            pfdata:this.pf,
            phdata:this.ph,
            pidata:this.pi,

          }
         )
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
    // mounted() {
    //   this.getData();
    // },
  };
</script>

