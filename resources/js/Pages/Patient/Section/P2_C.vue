<template>


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

   <div class="grid md:grid-cols-6 ">
        <div class="col-span-1  text-left">
            <div class="py-2">
                <div class="w-full mt-2 p-2">
                    <input
                    id="is_applied_0"
                    value="0"

                    type="radio"
                    class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                    <label for="is_applied_0" class="px-2 text-sm text-gray-800  w-full">
                        Not Applicable
                    </label>
                </div>
                <div class="w-full mt-2 p-2">
                    <input
                    id="is_applied_1"
                    value="1"
                    v-model="p2c.is_applied"
                    type="radio"
                    class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                    <label for="is_applied_1" class="px-2 text-sm text-gray-800  w-full">
                        Previously Positive
                    </label>
                </div>
                <div class="w-full mt-2 p-2">
                    <input
                    id="is_applied_2"
                    value="2"
                    v-model="p2c.is_applied"
                    type="radio"
                    class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" />
                    <label for="is_applied_2"  class="px-2 text-sm text-gray-800  w-full">
                        Refused
                    </label>
                </div>
            </div>
        </div>
        <div class="col-span-5 w-full border-x">
            <div class="flex justify-between">
                <div class="border-r border-b w-full text-center">
                    <label class="text-md font-bold text-gray-900 w-full px-5">FIRST STEP PPD SKIN TEST</label>
                    <div class="border-t">
                        <div class="flex justify-between border-b">
                            <div class="w-full border-r text-center">
                                <div class="px-2 py-1">
                                    <div>
                                        <label for="ppd1st_date" class="block text-left font-medium text-sm ">
                                            DATE AND TIME ADMINISTERED
                                        </label>
                                        <input id="ppd1st_date" v-model="p2c.fst_ppd_datetime_administered" type="datetime-local" class="text-sm border border-gray-300 rounded-md bg-gray-50 w-full">

                                    </div>
                                </div>
                            </div>
                            <div class="w-full text-left">
                                <div class="space-x-2 py-1 px-4">
                                    <input
                                    id="fst_ppd_result_0"
                                    value="1"
                                    v-model="p2c.fst_ppd_result"
                                    class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                                    type="radio"
                                    />
                                    <label for="fst_ppd_result_0"
                                    class="text-sm text-gray-800"
                                    > Positive (mm)
                                    </label>
                                </div>
                                <div class="space-x-2 px-4">
                                    <input
                                    id="fst_ppd_result_1"
                                    value="2"
                                    v-model="p2c.fst_ppd_result"
                                    class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                                    type="radio"
                                    />
                                    <label for="fst_ppd_result_1"
                                    class="text-sm text-gray-800"
                                    > Negative (mm)
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <div class="w-full border-r text-center">
                                <div class="px-2 py-1">
                                    <div>
                                        <label for="fst_ppd_administered_by" class="block text-left font-medium text-sm ">
                                            ADMINISTERED BY
                                        </label>
                                        <input id="fst_ppd_administered_by" v-model="p2c.fst_ppd_administered_by" type="text" class="text-sm border border-gray-300 rounded-md bg-gray-50  w-full">

                                    </div>
                                </div>
                            </div>

                            <div class="w-full text-center">
                                <div class="px-2 py-1">
                                    <div>
                                        <label for="fst_ppd_interpreted_by" class="block text-left font-medium text-sm ">
                                            INTERPRETED BY
                                        </label>
                                        <input id="fst_ppd_interpreted_by" v-model="p2c.fst_ppd_interpreted_by" type="text" class="text-sm border border-gray-300 rounded-md bg-gray-50  w-full">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- 2nd Test -->
                <div class="border-b w-full text-center">
                    <label class="text-md font-bold text-gray-900 w-full px-5">SECOND STEP PPD SKIN TEST</label>
                    <div class="border-t">
                        <div class="flex justify-between border-b">
                            <div class="w-full border-r text-center">
                                <div class="px-2 py-1">
                                    <div>
                                        <label for="snd_ppd_datetime_administered" class="block text-left font-medium text-sm ">
                                            DATE AND TIME ADMINISTERED
                                        </label>
                                        <input id="snd_ppd_datetime_administered" v-model="p2c.snd_ppd_datetime_administered" type="datetime-local" class="text-sm border border-gray-300 rounded-md bg-gray-50 w-full">

                                    </div>
                                </div>
                            </div>
                            <div class="w-full text-left">
                                <div class="space-x-2 py-1 px-4">
                                    <input
                                    id="snd_ppd_result_0"
                                    value="1"
                                    v-model="p2c.snd_ppd_result"
                                    class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                                    type="radio"
                                    />
                                    <label for="snd_ppd_result_0"
                                    class="text-sm text-gray-800"
                                    > Positive (mm)
                                    </label>
                                </div>
                                <div class="space-x-2 px-4">
                                    <input
                                    id="snd_ppd_result_1"
                                    value="2"
                                    v-model="p2c.snd_ppd_result"
                                    class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                                    type="radio"
                                    />
                                    <label for="snd_ppd_result_1"
                                    class="text-sm text-gray-800"
                                    > Negative (mm)
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <div class="w-full border-r text-center">
                                <div class="px-2 py-1">
                                    <div>
                                        <label for="snd_ppd_administered_by" class="block text-left font-medium text-sm ">
                                            ADMINISTERED BY
                                        </label>
                                        <input id="snd_ppd_administered_by" v-model="p2c.snd_ppd_administered_by" type="text" class="text-sm border border-gray-300 rounded-md bg-gray-50  w-full">

                                    </div>
                                </div>
                            </div>

                            <div class="w-full text-center">
                                <div class="px-2 py-1">
                                    <div>
                                        <label for="snd_ppd_interpreted_by" class="block text-left font-medium text-sm ">
                                            INTERPRETED BY
                                        </label>
                                        <input id="snd_ppd_interpreted_by" v-model="p2c.snd_ppd_interpreted_by" type="text" class="text-sm border border-gray-300 rounded-md bg-gray-50  w-full">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

  </template>

  <script>
  export default {
    props: { p2c: Object},
    data() {
      return {

      };
    },
    methods:{


    },
  };
  </script>


