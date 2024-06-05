<template>
    <div class="grid md:grid-cols-6 border">

        <div class="text-center border-r">
            <div class=" border-b py-1">
                <label class="text-sm font-bold text-gray-900 w-full">VISUAL ACUITY</label>
            </div>
            <p class="text-xs  py-1">
                UNCORRECTED (w/o glasses/contact lenses)
            </p>
        </div>

        <div class="text-center border-r">
            <div class=" border-b py-1">
                <label class="text-sm font-bold text-gray-900 w-full">FAR VISION</label>
            </div>
            <div class="">
                <div class="flex justify-between pt-2 pb-1 px-2 space-x-2">
                    <div class="relative">
                        <input
                            type="number"
                            id="od20"
                            class="block px-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-md border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" "
                        />
                        <label for="od20" class="absolute font-medium text-sm text-gray-600 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">OD 20/</label>
                    </div>

                    <div class="relative">
                        <input
                            type="number"
                            id="os20"
                            class="block px-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-md border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" "
                        />
                        <label for="os20" class="absolute font-medium text-sm text-gray-600 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">OS 20/</label>
                    </div>
                </div>
            </div>
        </div>


        <div class="text-center border-r">
            <div class=" border-b py-1">
                <label class="text-sm font-bold text-gray-900 w-full">NEAR VISION</label>
            </div>
            <div class="">
                <div class="flex justify-between pt-2 px-2  space-x-2">
                    <div class="relative">
                        <input
                            type="number"
                            id="odj"
                            class="block px-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-md border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" "
                        />
                        <label for="odj" class="absolute font-medium text-sm text-gray-600 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">OD J/</label>
                    </div>

                    <div class="relative">
                        <input
                            type="number"
                            id="osj"
                            class="block px-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-md border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" "
                        />
                        <label for="osj" class="absolute font-medium text-sm text-gray-600 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">OS J/</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center border-r">
            <div class=" border-b py-1">
                <label class="text-sm font-bold text-gray-900 w-full">ISHIHARA</label>
            </div>
            <div class="">
                <div class="flex justify-between pt-2 px-2 ">
                    <div class="flex-none mt-1.5">
                        <input
                        class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                        type="checkbox"
                        />
                        <label
                        class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                        > XXXXXX
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-left border-r">
            <div class="text-center border-b py-1">
                <label class="text-sm font-bold text-gray-900 w-full">HEARING</label>
            </div>
            <div class="">
                <div class="flex justify-between">
                    <div class="w-12 text-center border-r">
                        <p class="mt-2">AD</p>
                    </div>
                    <div class="w-full py-0">
                        <div class="px-2 py-0">
                            <input
                            class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                            type="checkbox"
                            />
                            <label
                            class="text-sm text-gray-800 "
                            > Normal
                            </label>
                        </div>
                        <div class="px-2 py-0">
                            <input
                            class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                            type="checkbox"
                            />
                            <label
                            class="text-sm text-gray-800 "
                            > Hearing Loss
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class=" border-b py-1">
                <label class="text-sm font-bold text-gray-900 w-full">CLARITY OF SPEECH</label>
            </div>
            <div class="">
                <div class="flex justify-between pt-2 px-2">
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


