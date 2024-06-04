<template>
    <div class="grid md:grid-cols-6">

        <div class="border">
            <label class="text-sm font-bold text-gray-900 w-full">VISUAL ACUITY</label>
            <div class="text-sm border-y">
                UNCORRECTED (w/o glasses/contact lenses)
            </div>
            <div class="text-sm">
                CORRECTED (w/ glasses/contact lenses)
            </div>

        </div>

        <div class="border  text-center">
            <label class="text-sm font-bold text-gray-900 w-full">FAR VISION</label>
            <div class="">
                <div class="flex justify-between border">
                    <label class="block text-xs px-2 font-medium text-gray-900 mt-2 whitespace-nowrap">OD 20/</label>
                    <input type="text" class="border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full" />

                    <label class="block text-xs px-2 font-medium text-gray-900 mt-2 whitespace-nowrap">OS 20/</label>
                    <input type="text" class="border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full" />
                </div>
                <div class="flex justify-between border">
                    <label class="block text-xs px-2 font-medium text-gray-900 mt-2 whitespace-nowrap">OD 20/</label>
                    <input type="text" class="border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full" />

                    <label class="block text-xs px-2 font-medium text-gray-900 mt-2 whitespace-nowrap">OS 20/</label>
                    <input type="text" class="border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full" />

                </div>
            </div>
        </div>


        <div class="border  text-center">
            <label class="text-sm font-bold text-gray-900 w-full"> NEAR VISION</label>
            <div class="">
                <div class="flex justify-between border">
                    <label class="block text-xs px-2 font-medium text-gray-900 mt-2 whitespace-nowrap">OD J/</label>
                    <input type="text" class="border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full" />

                    <label class="block text-xs px-2 font-medium text-gray-900 mt-2 whitespace-nowrap">OS J/</label>
                    <input type="text" class="border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full" />
                </div>
                <div class="flex justify-between border">
                    <label class="block text-xs px-2 font-medium text-gray-900 mt-2 whitespace-nowrap">OD J/</label>
                    <input type="text" class="border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full" />

                    <label class="block text-xs px-2 font-medium text-gray-900 mt-2 whitespace-nowrap">OS J/</label>
                    <input type="text" class="border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full" />

                </div>
            </div>
        </div>

        <div class="border  text-center">
            <label class="text-sm font-bold text-gray-900 w-full">ISHIHARA</label>
            <div class="px-2">
                <div class="flex justify-between border">
                    <div class="flex-none mt-1.5">
                        <input
                        class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                        type="checkbox"
                        />
                        <label
                        class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                        > None
                        </label>
                    </div>
                </div>
                <div class="flex justify-between border">
                    <div class="flex-none mt-1.5">
                        <input
                        class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                        type="checkbox"
                        />
                        <label
                        class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                        > None
                        </label>
                    </div>

                </div>
            </div>
        </div>

        <div class="border  text-center">
            <label class="text-sm font-bold text-gray-900 w-full">HEARING</label>
            <div class="px-2">
                
                <div class="flex justify-between border">
                    AD
                    <div class="flex-none mt-1.5">
                        <input
                        class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                        type="checkbox"
                        />
                        <label
                        class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                        > Normal
                        </label>
                    </div>
                    <div class="flex-none mt-1.5">
                        <input
                        class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                        type="checkbox"
                        />
                        <label
                        class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                        > Hearing Loss
                        </label>
                    </div>
                </div>

                
                <div class="flex justify-between border">
                    AS
                    <div class="flex-none mt-1.5">
                        <input
                        class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                        type="checkbox"
                        />
                        <label
                        class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                        > Normal
                        </label>
                    </div>
                    <div class="flex-none mt-1.5">
                        <input
                        class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                        type="checkbox"
                        />
                        <label
                        class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                        > Hearing Loss
                        </label>
                    </div>

                </div>
            </div>
        </div>

        <div class="border  text-center">
            <label class="text-sm font-bold text-gray-900 w-full">CLARITY OF SPEECH</label>
            <div class="px-2">
                <div class="flex justify-between border">
                    <div class="flex-none mt-1.5">
                        <input
                        class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                        type="checkbox"
                        />
                        <label
                        class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                        > Normal
                        </label>
                    </div>
                </div>
                <div class="flex justify-between border">
                    <div class="flex-none mt-1.5">
                        <input
                        class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                        type="checkbox"
                        />
                        <label
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
        formData: {
          uncorrectedFarVisionOD: "",
          correctedFarVisionOD: "",
          uncorrectedFarVisionOS: "",
          correctedFarVisionOS: "",
          uncorrectedNearVisionOD: "",
          correctedNearVisionOD: "",
          uncorrectedNearVisionOS: "",
          correctedNearVisionOS: "",
          ishihara: "",
          hearingAD: "",
          hearingAS: "",
          clarityOfSpeech: ""
        }
      };
    }
  };
  </script>


