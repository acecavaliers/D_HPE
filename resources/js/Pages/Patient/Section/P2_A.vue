<template>
    <div class="grid md:grid-cols-6 border-b">
        <div class="text-center">
            <div class=" border-b py-1 ">
                <label class="text-sm font-bold text-gray-900 w-full">VISUAL ACUITY</label>
            </div>
            <p class="text-sm text-left px-2 pt-2 py-0">
                UNCORRECTED (w/o glasses/contact lenses)
            </p>
        </div>

        <div class="text-center border-x">
            <div class=" border-b py-1 ">
                <label class="text-sm font-bold text-gray-900 w-full">FAR VISION</label>
            </div>
            <div class="">
                <div class="flex justify-between py-1 px-2 space-x-2">
                    <label for="uncorrected_fv_od20" class="block text-sm font-medium text-gray-900 mt-1.5 whitespace-nowrap">OD 20/</label>
                    <input id="uncorrected_fv_od20" v-model="p2a.uncorrected_fv_od20" type="text" class="border px-1 bg-gray-50 border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 h-8 w-full" />

                    <label for="uncorrected_fv_os20" class="block text-sm font-medium text-gray-900 mt-1.5 whitespace-nowrap">OS 20/</label>
                    <input id="uncorrected_fv_os20" v-model="p2a.uncorrected_fv_os20" type="text" class="border px-1 bg-gray-50 border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 h-8 w-full" />
                </div>
            </div>
        </div>


        <div class="text-center border-r">
            <div class=" border-b py-1 ">
                <label class="text-sm font-bold text-gray-900 w-full">NEAR VISION</label>
            </div>
            <div class="">
                <div class="flex justify-between py-1 px-2 space-x-2">
                    <label for="uncorrected_nv_odj" class="block text-sm font-medium text-gray-900 mt-1.5 whitespace-nowrap">OD J/</label>
                    <input id="uncorrected_nv_odj" v-model="p2a.uncorrected_nv_odj" type="text" class="border px-1 bg-gray-50 border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 h-8 w-full" />

                    <label for="uncorrected_nv_osj" class="block text-sm font-medium text-gray-900 mt-1.5 whitespace-nowrap">OS J/</label>
                    <input id="uncorrected_nv_osj" v-model="p2a.uncorrected_nv_osj" type="text" class="border px-1 bg-gray-50 border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 h-8 w-full" />
                </div>
            </div>
        </div>

        <div class="text-center border-r">
            <div class=" border-b py-1 ">
                <label class="text-sm font-bold text-gray-900 w-full">ISHIHARA</label>
            </div>
            <div class="">
                <div class="flex justify-between px-2 ">
                    <div class="flex-none mt-1.5">
                        <input
                        id="ishihara_0"
                        value="0"
                        v-model="p2a.ishihara"
                        class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                        type="radio"
                        />
                        <label for="ishihara_0"
                        class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                        > Adequate
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-left border-r">
            <div class=" text-center border-b py-1 ">
                <label class="text-sm font-bold text-gray-900 w-full">HEARING</label>
            </div>
            <div class="">
                <div class="flex justify-between">
                    <div class="w-16 border-r text-center">
                        <p>AD</p>
                    </div>
                    <div class="w-full">
                        <div class="px-2">
                            <input
                            id="ad_hearing_0"
                            value="0"
                            v-model="p2a.ad_hearing"
                            class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                            type="radio"
                            />
                            <label for="ad_hearing_0"
                            class="text-sm text-gray-800 "
                            > Normal
                            </label>
                        </div>
                        <div class="px-2">
                            <input
                            id="ad_hearing_1"
                            value="1"
                            v-model="p2a.ad_hearing"
                            class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                            type="radio"
                            />
                            <label for="ad_hearing_1"
                            class="text-sm text-gray-800 "
                            > Hearing Loss
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center border-r">
            <div class=" border-b py-1 ">
                <label class="text-sm font-bold text-gray-900 w-full">CLARITY OF SPEECH</label>
            </div>
            <div class="">
                <div class="flex justify-between px-2 ">
                    <div class="flex-none mt-1.5">
                        <input
                        id="speech_0"
                        value="0"
                        v-model="p2a.speech"
                        class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                        type="radio"
                        />
                        <label for="speech_0"
                        class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                        > Normal
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 2nd row -->
    <div class="grid md:grid-cols-6 border-b">
        <div class="text-center ">
            <p class="text-sm text-left px-2 pt-2 py-0">
                CORRECTED (w/ glasses/contact lenses)

            </p>
        </div>

        <div class="text-center border-x">
            <div class="">
                <div class="flex justify-between py-1 px-2 space-x-2">
                    <label for="corrected_fv_od20"  class="block text-sm font-medium text-gray-900 mt-1.5 whitespace-nowrap">OD 20/</label>
                    <input id="corrected_fv_od20" v-model="p2a.corrected_fv_od20" type="text" class="border px-1 bg-gray-50 border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 h-8 w-full" />

                    <label for="corrected_fv_os20" class="block text-sm font-medium text-gray-900 mt-1.5 whitespace-nowrap">OS 20/</label>
                    <input id="corrected_fv_os20" v-model="p2a.corrected_fv_os20" type="text" class="border px-1 bg-gray-50 border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 h-8 w-full" />
                </div>
            </div>
        </div>


        <div class="text-center border-r">
            <div class="">
                <div class="flex justify-between py-1 px-2 space-x-2">
                    <label for="corrected_nv_odj" class="block text-sm font-medium text-gray-900 mt-1.5 whitespace-nowrap">OD J/</label>
                    <input id="corrected_nv_odj" v-model="p2a.corrected_nv_odj" type="text" class="border px-1 bg-gray-50 border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 h-8 w-full" />

                    <label for="corrected_nv_osj" class="block text-sm font-medium text-gray-900 mt-1.5 whitespace-nowrap">OS J/</label>
                    <input id="corrected_nv_osj" v-model="p2a.corrected_nv_osj" type="number" class="border px-1 bg-gray-50 border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 h-8 w-full" />
                </div>
            </div>
        </div>

        <div class="text-center border-r">
            <div class="">
                <div class="flex justify-between px-2 ">
                    <div class="flex-none mt-1.5">
                        <input
                        id="ishihara_1"
                        value="1"
                        v-model="p2a.ishihara"
                        class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                        type="radio"
                        />
                        <label for="ishihara_1"
                        class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                        > Deficient
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-left border-r">
            <div class="">
                <div class="flex justify-between">
                    <div class="w-16 border-r text-center">
                        <p>AS</p>
                    </div>
                    <div class="w-full">
                        <div class="px-2">
                            <input
                            id="as_hearing_0"
                            value="0"
                            v-model="p2a.as_hearing"
                            class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                            type="radio"
                            />
                            <label for="as_hearing_0"
                            class="text-sm text-gray-800 "
                            > Normal
                            </label>
                        </div>
                        <div class="px-2">
                            <input
                            id="as_hearing_1"
                            value="1"
                            v-model="p2a.as_hearing"
                            class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                            type="radio"
                            />
                            <label for="as_hearing_1"
                            class="text-sm text-gray-800 "
                            > Hearing Loss
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center border-r">
            <div class="">
                <div class="flex justify-between px-2 ">
                    <div class="flex-none mt-1.5">
                        <input
                        id="speech_1"
                        value="1"
                        v-model="p2a.speech"
                        class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                        type="radio"
                        />
                        <label for="speech_1"
                        class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                        > Abnormal
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>


  </template>

  <script>
  export default {
    props: { p2a: Object},
    data() {
      return {

      };
    },
    methods:{

    },
  };
  </script>


