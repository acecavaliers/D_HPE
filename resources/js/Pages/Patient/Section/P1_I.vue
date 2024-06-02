<template>
    <!-- Section A -->
    <div>
      <div class="bg-gray-400 p-2">
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
    </div>



    <div class="border-0 border-b ">

      <div class="bg-gray-400 p-2 mt-5">
        <div>
          <span class="text-xm text-black"><b> VITAL SIGNS/ PAIN SCALE </b>  TO THE DMC LWC NURSE: ENTER REQUIRED INFORMATION. CHECK (✓) THE APPROPRIATE TICK BOX </span>
        </div>
      </div>

      <div class="grid grid-cols-12 gap-x-4 px-2 py-5">
        <div class="col-span-12 lg:col-span-3">
          <div class="pt-2">
            <input
              type="text"
              class="block p-2.5 w-full text-sm text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500"
              placeholder="HEIGHT (cm)"
            >
          </div>
        </div>

        <div class="col-span-12 lg:col-span-3">
          <div class="pt-2">
            <input
              type="text"
              class="block p-2.5 w-full text-sm text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500"
              placeholder="WEIGHT (kg)"
            >
          </div>
        </div>

        <div class="col-span-12 lg:col-span-3">
          <div class="pt-2">
            <input
              type="text"
              class="block p-2.5 w-full text-sm text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500"
              placeholder="BODY MASS INDEX (kg/m2)"
            >
          </div>
        </div>

        <div class="col-span-12 lg:col-span-3">
          <div class="flex justify-between pt-2">
            <div class="flex-none mt-1.5">
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

            <div class="flex-none mt-1.5">
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

            <div class="flex-none mt-1.5">
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


      <div class="grid grid-cols-12 gap-x-4 px-2 pb-5">
        <div class="col-span-12 lg:col-span-3">
          <div class="pt-2">
            <input
              type="text"
              class="block p-2.5 w-full text-sm text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500"
              placeholder="BLOOD PRESSURE (mmHg)"
            >
          </div>
        </div>

        <div class="col-span-12 lg:col-span-3">
          <div class="pt-2">
            <input
              type="text"
              class="block p-2.5 w-full text-sm text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500"
              placeholder="PULSE RATE (bpm)"
            >
          </div>
        </div>

        <div class="col-span-12 lg:col-span-3">
          <div class="pt-2">
            <input
              type="text"
              class="block p-2.5 w-full text-sm text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500"
              placeholder="RESPIRATION RATE (cpm)"
            >
          </div>
        </div>

        <div class="col-span-12 lg:col-span-3">
          <div class="pt-2">
            <input
              type="text"
              class="block p-2.5 w-full text-sm text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500"
              placeholder="TEMPERATURE (C)"
            >
          </div>
        </div>
      </div>

    </div>

    <div class="border-0 border-b ">
        <div class="grid grid-cols-1 sm:grid-cols-12">
            <div class="border text-center col-span-12 sm:col-span-2 flex items-center justify-center">
              Pain
            </div>
            <div class="col-span-12 sm:col-span-10">
              <div>
                  <table class="w-full">
                    <thead>
                      <tr>
                        <!-- Headers based on painvalues -->
                        <th v-for="(pain, index) in painvalues" :key="index" class="text-center w-24  border border-gray-200 ">
                        
                            <button class="w-full h-10 hover:bg-gray-200">{{ index }}</button>
                          
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="text-center">
                        <!-- Cells with specified colspans -->
                        <td colspan="1" class="border">None</td>
                        <td colspan="3" class="border">Mild</td>
                        <td colspan="3" class="border">Moderate</td>
                        <td colspan="4" class="border">Severe</td>
                      </tr>
                      
                      <tr>
                        
                        <!-- Cells with specified colspans -->
                        <td colspan="1" class="flex justify-center py-2"><svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.508 13.941c-1.513 1.195-3.174 1.931-5.507 1.931-2.335 0-3.996-.736-5.509-1.931l-.492.493c1.127 1.72 3.2 3.566 6.001 3.566 2.8 0 4.872-1.846 5.999-3.566l-.492-.493zm.492-3.939l-.755.506s-.503-.948-1.746-.948c-1.207 0-1.745.948-1.745.948l-.754-.506c.281-.748 1.205-2.002 2.499-2.002 1.295 0 2.218 1.254 2.501 2.002zm-7 0l-.755.506s-.503-.948-1.746-.948c-1.207 0-1.745.948-1.745.948l-.754-.506c.281-.748 1.205-2.002 2.499-2.002 1.295 0 2.218 1.254 2.501 2.002z"/></svg></td>
                        <td colspan="1">
                          
                        </td>
                        <td colspan="1" class="flex justify-center py-2"><span><svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16"  viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.507 13.941c-1.512 1.195-3.174 1.931-5.506 1.931-2.334 0-3.996-.736-5.508-1.931l-.493.493c1.127 1.72 3.2 3.566 6.001 3.566 2.8 0 4.872-1.846 5.999-3.566l-.493-.493zm-9.007-5.941c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5-.672-1.5-1.5-1.5zm7 0c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5-.672-1.5-1.5-1.5z"/></svg></span></td>
                        <td colspan="1">
                          
                        </td>



                        <td colspan="1" class="flex justify-center py-2"><span><svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16"  viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4 17h-8v-2h8v2zm-7.5-9c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5-.672-1.5-1.5-1.5zm7 0c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5-.672-1.5-1.5-1.5z"/></svg></span></td>
                        <td colspan="1">
                          
                        </td>
                        <td colspan="1" class="flex justify-center py-2"><span><svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16"  viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.001 14c-2.332 0-4.145 1.636-5.093 2.797l.471.58c1.286-.819 2.732-1.308 4.622-1.308s3.336.489 4.622 1.308l.471-.58c-.948-1.161-2.761-2.797-5.093-2.797zm-3.501-6c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5-.672-1.5-1.5-1.5zm7 0c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5-.672-1.5-1.5-1.5z"/></svg></span></td>
                        <td colspan="1">
                          
                        </td>
                        <td colspan="1" class="flex justify-center py-2"><span><svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16"  viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.001 14c-2.332 0-4.145 1.636-5.093 2.797l.471.58c1.286-.819 2.732-1.308 4.622-1.308s3.336.489 4.622 1.308l.471-.58c-.948-1.161-2.761-2.797-5.093-2.797zm-3.501-6c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5-.672-1.5-1.5-1.5zm7 0c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5-.672-1.5-1.5-1.5z"/></svg></span></td>
                        <td colspan="1">
                          
                        </td>
                        <td colspan="1" class="flex justify-center py-2"><span><svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16"  viewBox="0 0 24 24"><path d="M18.414 10.727c.17 1.304-1.623 2.46-2.236 3.932-.986 2.479 2.405 3.747 3.512 1.4.931-1.974-.454-4.225-1.276-5.332zm.108 3.412c-.407.428-.954.063-.571-.408.227-.28.472-.646.667-1.037.128.338.236 1.097-.096 1.445zm-.522-4.137l-.755.506s-.503-.948-1.746-.948c-1.207 0-1.745.948-1.745.948l-.754-.506c.281-.748 1.205-2.002 2.499-2.002 1.295 0 2.218 1.254 2.501 2.002zm-7 0l-.755.506s-.503-.948-1.746-.948c-1.207 0-1.745.948-1.745.948l-.754-.506c.281-.748 1.205-2.002 2.499-2.002 1.295 0 2.218 1.254 2.501 2.002zm1-10.002c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 22c-5.514 0-10-4.486-10-10s4.486-10 10-10 10 4.486 10 10-4.486 10-10 10zm3.582-4.057c-.303.068-.645.076-1.023-.003-.903-.19-1.741-.282-2.562-.282-.819 0-1.658.092-2.562.282-1.11.233-1.944-.24-2.255-1.015-.854-2.131 1.426-3.967 4.816-3.967 1.207 0 2.245.22 3.062.588-.291.522-.44.912-.515 1.588-1.797-.874-6.359-.542-5.752 1.118.138.377 1.614-.279 3.205-.279 1.061 0 2.039.285 2.633.373.162.634.415 1.116.953 1.597z"/></svg></span></td>
                      </tr>
                    </tbody>
                  </table>
              </div>            
            </div>
        </div>        
    </div>

    <div class="flex justify-end p-2">
      <div class="mr-4">
        <input id="nursename" type="text" class="border-0 border-b w-full">
        <label for="nursename" class="block text-center">
          Nurse's Signature Above Printed Name
        </label>
      </div>
      
      <div>
        <input id="nurse_date" type="text" class="border-0 border-b w-full">
        <label for="nurse_date" class="block text-center">
          Date (MMM/DD/YYYY) and Time
        </label>
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
        };
      },
      mounted() {
        // Initialize pain values from 0 to 10 with null values
        for (let i = 0; i <= 10; i++) {
          this.painvalues.push(0);
        }
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
