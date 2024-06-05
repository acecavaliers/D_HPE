<template>
    <div class="grid md:grid-cols-6 border-b">
        <div class="text-center">
            <div class=" border-b py-1 bg-gray-300">
                <label class="text-sm font-bold text-gray-900 w-full">VISUAL ACUITY</label>
            </div>
            <p class="text-sm text-left px-2 pt-2 py-0">
                UNCORRECTED (w/o glasses/contact lenses)
            </p>
        </div>

        <div class="text-center border-x">
            <div class=" border-b py-1 bg-gray-300">
                <label class="text-sm font-bold text-gray-900 w-full">FAR VISION</label>
            </div>
            <div class="">
                <div class="flex justify-between py-1 px-2 space-x-2">
                    <label class="block text-sm font-medium text-gray-900 mt-1.5 whitespace-nowrap">OD 20/</label>
                    <input type="text" class="border px-1 bg-gray-50 border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 h-8 w-full" />

                    <label class="block text-sm font-medium text-gray-900 mt-1.5 whitespace-nowrap">OS 20/</label>
                    <input type="text" class="border px-1 bg-gray-50 border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 h-8 w-full" />
                </div>
            </div>
        </div>


        <div class="text-center border-r">
            <div class=" border-b py-1 bg-gray-300">
                <label class="text-sm font-bold text-gray-900 w-full">NEAR VISION</label>
            </div>
            <div class="">
                <div class="flex justify-between py-1 px-2 space-x-2">
                    <label class="block text-sm font-medium text-gray-900 mt-1.5 whitespace-nowrap">OD J/</label>
                    <input type="text" class="border px-1 bg-gray-50 border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 h-8 w-full" />

                    <label class="block text-sm font-medium text-gray-900 mt-1.5 whitespace-nowrap">OS J/</label>
                    <input type="text" class="border px-1 bg-gray-50 border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 h-8 w-full" />
                </div>
            </div>
        </div>

        <div class="text-center border-r">
            <div class=" border-b py-1 bg-gray-300">
                <label class="text-sm font-bold text-gray-900 w-full">ISHIHARA</label>
            </div>
            <div class="">
                <div class="flex justify-between px-2 ">
                    <div class="flex-none mt-1.5">
                        <input
                        class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                        type="checkbox"
                        />
                        <label
                        class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                        > Adequate
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-left border-r">
            <div class=" text-center border-b py-1 bg-gray-300">
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
                            class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                            type="checkbox"
                            />
                            <label
                            class="text-sm text-gray-800 "
                            > Normal
                            </label>
                        </div>
                        <div class="px-2">
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

        <div class="text-center border-r">
            <div class=" border-b py-1 bg-gray-300">
                <label class="text-sm font-bold text-gray-900 w-full">CLARITY OF SPEECH</label>
            </div>
            <div class="">
                <div class="flex justify-between px-2 ">
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
                    <label class="block text-sm font-medium text-gray-900 mt-1.5 whitespace-nowrap">OD 20/</label>
                    <input type="text" class="border px-1 bg-gray-50 border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 h-8 w-full" />

                    <label class="block text-sm font-medium text-gray-900 mt-1.5 whitespace-nowrap">OS 20/</label>
                    <input type="text" class="border px-1 bg-gray-50 border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 h-8 w-full" />
                </div>
            </div>
        </div>


        <div class="text-center border-r">
            <div class="">
                <div class="flex justify-between py-1 px-2 space-x-2">
                    <label class="block text-sm font-medium text-gray-900 mt-1.5 whitespace-nowrap">OD J/</label>
                    <input type="text" class="border px-1 bg-gray-50 border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 h-8 w-full" />

                    <label class="block text-sm font-medium text-gray-900 mt-1.5 whitespace-nowrap">OS J/</label>
                    <input type="text" class="border px-1 bg-gray-50 border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 h-8 w-full" />
                </div>
            </div>
        </div>

        <div class="text-center border-r">
            <div class="">
                <div class="flex justify-between px-2 ">
                    <div class="flex-none mt-1.5">
                        <input
                        class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                        type="checkbox"
                        />
                        <label
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
                            class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                            type="checkbox"
                            />
                            <label
                            class="text-sm text-gray-800 "
                            > Normal
                            </label>
                        </div>
                        <div class="px-2">
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

        <div class="text-center border-r">
            <div class="">
                <div class="flex justify-between px-2 ">
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
    <!-- PE -->
    <div class="grid md:grid-cols-6 border-b ">
        <div class="col-span-1  text-left">
            <div class="py-2">
                <label class="text-sm font-bold text-gray-900 w-full px-5">SKIN</label>
            </div>
        </div>
        <div class="col-span-5 w-full flex justify-start p-2  border-x">
            <div class="w-32 mt-2">
                <input
                type="checkbox"
                class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                <label  class="px-2 text-sm text-gray-800  w-full">
                    Normal
                </label>
            </div>
            <div  class="w-56 mt-2">
                <input
                type="checkbox"
                class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                <label  class="px-2 text-sm text-gray-800 w-full">
                    Abnormal Findings:
                </label>
            </div>
            <div class="w-full">
                <textarea
                rows="2"
                class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Details:"></textarea>
            </div>
        </div>
    </div>

   <!-- SKIN -->
   <div class="grid md:grid-cols-6 border-b ">
        <div class="col-span-1  text-left">
            <div class="py-2  bg-gray-300">
                <label class="text-sm font-bold text-gray-900 w-full px-5"> PPD SKIN TEST</label>
            </div>
        </div>
        <div class="col-span-5 w-full flex justify-start border-x bg-gray-300">
            <label class="text-sm text-gray-900 py-2 w-full px-5"> <b>TO DMC LWC NURSE:</b> ENTER REQUIRED INFORMATION. CHECK (✓) THE APPROPRIATE TICK BOX.</label>
        </div>
    </div>

   <div class="grid md:grid-cols-6 border-b ">
        <div class="col-span-1  text-left">
            <div class="py-2 ">
                <div class="w-32 mt-2 p-2">
                    <input
                    type="checkbox"
                    class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                    <label  class="px-2 text-sm text-gray-800  w-full">
                        Normal
                    </label>
                </div>
                <div class="w-32 mt-2 p-2">
                    <input
                    type="checkbox"
                    class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                    <label  class="px-2 text-sm text-gray-800  w-full">
                        Normal
                    </label>
                </div>
                <div class="w-32 mt-2 p-2">
                    <input
                    type="checkbox"
                    class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                    <label  class="px-2 text-sm text-gray-800  w-full">
                        Normal
                    </label>
                </div>
            </div>
        </div>
        <div class="col-span-5 w-full flex justify-start border-x">
            <div class="flex justify-between">
                <div>
                    <label class="text-sm text-gray-900 py-2 w-full px-5"> <b>TO DMC LWC NURSE:</b> ENTER REQUIRED INFORMATION. CHECK (✓) THE APPROPRIATE TICK BOX.</label>
                </div>
                <div>
                    <label class="text-sm text-gray-900 py-2 w-full px-5"> <b>TO DMC LWC NURSE:</b> ENTER REQUIRED INFORMATION. CHECK (✓) THE APPROPRIATE TICK BOX.</label>
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


