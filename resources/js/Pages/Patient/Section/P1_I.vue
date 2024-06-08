<template>
    <!-- Section A -->
    <div>
      <div class="bg-gray-400  rounded-t-lg p-2">
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

      <!-- asdsadasdsa -->
      <div>
            <div class="border-0 border-b">
                <div class="bg-gray-400 p-2 mt-5">
                    <div>
                        <span class="text-xm text-black"><b> VITAL SIGNS/ PAIN SCALE </b>  TO THE DMC LWC NURSE: ENTER REQUIRED INFORMATION. CHECK (✓) THE APPROPRIATE TICK BOX </span>
                    </div>
                </div>

                <!-- ASSADAS -->
                <div class="grid md:grid-cols-4">
                    <div class="flex justify-between border py-2">
                        <label class="block text-sm font-medium text-gray-900 mt-2 px-2 whitespace-nowrap">HEIGHT (cm)</label>
                        <input v-model="pj.height" type="text"  class="mr-2 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full" />
                    </div>

                    <div class="flex justify-between border py-2">
                        <label class="block text-sm font-medium text-gray-900 mt-2 px-2 whitespace-nowrap">WEIGHT (kg)</label>
                        <input v-model="pj.weight"  type="text" class="mr-2 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full" />
                    </div>


                    <div class="flex justify-between border py-2">
                        <label class="block text-sm font-medium text-gray-900 mt-2 px-2 whitespace-nowrap">BODY MASS INDEX (kg/m2)</label>
                        <input v-model="pj.bmi"  type="text" class="mr-2 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full" />
                    </div>

                    <div class="flex justify-between border py-2">
                        <label class="block text-sm font-medium text-gray-900 mt-2 px-2 whitespace-nowrap">BODY BUILT:</label>
                        <div class="flex w-full items-center">
                            <div class="flex-none -mt-1.5">
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

                        <div class="flex-none -mt-1.5">
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

                        <div class="flex-none -mt-1.5">
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

                <!-- bbbbb -->
                <div class="grid md:grid-cols-4">
                    <div class="flex justify-between border py-2">
                        <label class="block text-sm font-medium text-gray-900 mt-2 px-2 whitespace-nowrap">BLOOD PRESSURE (mmHg)</label>
                        <input v-model="pj.blood_pressure"  type="text" class="mr-2 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full" />
                    </div>

                    <div class="flex justify-between border py-2">
                        <label class="block text-sm font-medium text-gray-900 mt-2 px-2 whitespace-nowrap">PULSE RATE (bpm)</label>
                        <input v-model="pj.pulse_rate"  type="text" class="mr-2 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full" />
                    </div>


                    <div class="flex justify-between border py-2">
                        <label class="block text-sm font-medium text-gray-900 mt-2 px-2 whitespace-nowrap">RESPIRATION RATE (cpm)</label>
                        <input v-model="pj.respiration_rate"  type="text" class="mr-2 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full" />
                    </div>

                    <div class="flex justify-between border py-2">
                        <label class="block text-sm font-medium text-gray-900 mt-2 px-2 whitespace-nowrap">TEMPERATURE (C):</label>
                        <input v-model="pj.Temperature"  type="text" class="mr-2 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full" />
                    </div>
                </div>


            </div>

            <div class="border-0 border-b ">
                <div class="grid grid-cols-1 sm:grid-cols-12">
                    <div class="border-r text-center col-span-12 sm:col-span-2 flex items-center justify-center">
                        <h1 class="text-xl font-bold text-gray-700">PAIN</h1>
                        <input type="text" v-model="pj.pain" hidden>
                    </div>
                    <div class="col-span-12 sm:col-span-10 border">
                        <div>
                            <table class="w-full">
                            <thead>
                                <tr>
                                <!-- Headers based on painvalues -->
                                <th v-for="(pain, index) in painvalues" :key="index" class="text-center w-24  border-l border-gray-200 ">

                                    <button @click.prevent="pj.pain = index"
                                    :class="{'text-blue-600 font-bold border-0 border-b-4 border-blue-600': pj.pain === index,  'text-gray-500 font-light border-gray-300': pj.pain !== index}"
                                        class="w-full h-10 hover:bg-blue-200">
                                        {{ index }}
                                    </button>

                                </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center border">
                                <!-- Cells with specified colspans -->
                                <td colspan="1"
                                :class="{'text-blue-400 font-bold': pj.pain === 0,  'font-light border-gray-300':pj.pain>0}"
                                class="border-l">None</td>
                                <td colspan="3"
                                :class="{'text-blue-400 font-bold': pj.pain <= 3 && pj.pain>0,  'font-light border-gray-300':pj.pain>3}"
                                class="border-l">Mild</td>
                                <td colspan="3"
                                :class="{'text-blue-400 font-bold': pj.pain >= 4 && pj.pain <= 6,  'font-light border-gray-300':pj.pain>6 && pj.pain<4}" class="border-l">Moderate</td>
                                <td colspan="4"
                                :class="{'text-blue-400 font-bold': pj.pain >= 7 && pj.pain <= 10,  'font-light border-gray-300':pj.pain<7}"class="border-l">Severe</td>
                                </tr>

                                <tr class="border text-gray-500">

                                <!-- Cells with specified colspans -->
                                <td colspan="1" class="flex justify-center py-2 hover:text-gray-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-16 h-16 bi bi-emoji-wink" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m1.757-.437a.5.5 0 0 1 .68.194.93.93 0 0 0 .813.493c.339 0 .645-.19.813-.493a.5.5 0 1 1 .874.486A1.93 1.93 0 0 1 10.25 7.75c-.73 0-1.356-.412-1.687-1.007a.5.5 0 0 1 .194-.68"/>
                                    </svg>
                                </td>
                                <td colspan="1">

                                </td>
                                <td colspan="1" class="flex justify-center py-2 hover:text-gray-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-16 h-16 bi bi-emoji-smile" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5"/>
                                    </svg>
                                </td>
                                <td colspan="1">

                                </td>

                                <td colspan="1" class="flex justify-center py-2 hover:text-gray-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-16 h-16 bi bi-emoji-neutral" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="M4 10.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5m3-4C7 5.672 6.552 5 6 5s-1 .672-1 1.5S5.448 8 6 8s1-.672 1-1.5m4 0c0-.828-.448-1.5-1-1.5s-1 .672-1 1.5S9.448 8 10 8s1-.672 1-1.5"/>
                                    </svg>
                                </td>
                                <td colspan="1">

                                </td>
                                <td colspan="1" class="flex justify-center py-2 hover:text-gray-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-16 h-16 bi bi-emoji-frown" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.5 3.5 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.5 4.5 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5"/>
                                    </svg>
                                </td>
                                <td colspan="1">

                                </td>
                                <td colspan="1" class="flex justify-center py-2 hover:text-gray-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-16 h-16 bi bi-emoji-tear" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="M6.831 11.43A3.1 3.1 0 0 1 8 11.196c.916 0 1.607.408 2.25.826.212.138.424-.069.282-.277-.564-.83-1.558-2.049-2.532-2.049-.53 0-1.066.361-1.536.824q.126.27.232.535.069.174.135.373ZM6 11.333C6 12.253 5.328 13 4.5 13S3 12.254 3 11.333c0-.706.882-2.29 1.294-2.99a.238.238 0 0 1 .412 0c.412.7 1.294 2.284 1.294 2.99M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5m-1.5-3A.5.5 0 0 1 10 3c1.162 0 2.35.584 2.947 1.776a.5.5 0 1 1-.894.448C11.649 4.416 10.838 4 10 4a.5.5 0 0 1-.5-.5M7 3.5a.5.5 0 0 0-.5-.5c-1.162 0-2.35.584-2.947 1.776a.5.5 0 1 0 .894.448C4.851 4.416 5.662 4 6.5 4a.5.5 0 0 0 .5-.5"/>
                                    </svg>
                                </td>
                                <td colspan="1">

                                </td>
                                <td colspan="1" class="flex justify-center py-2 hover:text-gray-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-16 h-16 bi bi-emoji-dizzy" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="M9.146 5.146a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708m-5 0a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 1 1 .708.708l-.647.646.647.646a.5.5 0 1 1-.708.708L5.5 7.207l-.646.647a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708M10 11a2 2 0 1 1-4 0 2 2 0 0 1 4 0"/>
                                    </svg>
                                </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-end mt-5 p-2 pb-5">
                <div class="mr-4 w-1/4">
                    <input @focusout="updateDateTime" v-model="nursename" id="nursename" type="text" class="text-center w-full font-bold border-0 border-b  focus:ring-blue-500">
                    <label for="nursename" class="block text-center text-sm">
                        Nurse's Signature Above Printed Name
                    </label>
                </div>

                <div>
                    <input id="nurse_date" v-model="nurseDate" type="datetime-local" class="border-0 border-b w-full" disabled>
                    <label for="nurse_date" class="block text-center text-sm">
                        Date (MM/DD/YYYY) and Time
                    </label>
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
          patientpain:0,
          nursename: '',
          nurseDate: '',
      };
      },
      mounted() {
        // Initialize pain values from 0 to 10 with null values
        for (let i = 0; i <= 10; i++) {
          this.painvalues.push(0);
        }
      },
      methods: {
        updateDateTime() {
            if (this.nursename) {
                this.setCurrentDateTime();
            }
        },
        setCurrentDateTime() {
          var currentDateTime = new Date();
          var offset = currentDateTime.getTimezoneOffset(); // Gets local timezone offset in minutes
          var philippinesOffset = 960; // Philippine time offset in minutes (UTC+8)
          currentDateTime.setMinutes(currentDateTime.getMinutes() + offset + philippinesOffset); // Adjusts time to Philippine time
          this.nurseDate = currentDateTime.toISOString().slice(0, 16);
        },
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
