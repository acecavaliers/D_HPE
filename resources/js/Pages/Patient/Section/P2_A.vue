<template>

    <div class="py-3 grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="relative bg-gray-300">
                VISUAL ACUITY
                <div class="col-span-2">
                        SADSADSA
                </div>
                <div class="col-span-2">
                        SADSADS
                </div>

            </div>
            <div class="relative bg-red-300">
                FAR VISION
                <div class="">
                    <div class="flex justify-between">
                        <input v-model="formData.uncorrectedFarVisionOD" type="text" class="border-b" placeholder="OD 20">
                        <input v-model="formData.uncorrectedFarVisionOS" type="text" class="border-b" placeholder="OS 20">

                    </div>
                    <div class="flex justify-between">
                        <input v-model="formData.correctedFarVisionOD" type="text" class="border-b" placeholder="OD 20">
                        <input v-model="formData.correctedFarVisionOS" type="text" class="border-b" placeholder="OS 20">
                    </div>
                </div>
            </div>
            <div class="relative bg-blue-300">
                NEAR VISION
                <div class="">
                    <div class="flex justify-between">
                        <label for="">OD J</label>
                        <input v-model="formData.uncorrectedFarVisionOD" type="text" class="border-b" placeholder="OD J">
                        <label for="">OS J</label>
                        <input v-model="formData.uncorrectedFarVisionOS" type="text" class="border-b" placeholder="OS J">

                    </div>
                    <div class="flex justify-between">
                        <input v-model="formData.correctedFarVisionOD" type="text" class="border-b" placeholder="OD J">
                        <input v-model="formData.correctedFarVisionOS" type="text" class="border-b" placeholder="OS J">
                    </div>
                </div>

            </div>
            <!-- <div class="relative bg-green-300">
                ISHIHARA
            </div>
            <div class="relative bg-yellow-300">
                HEARING
            </div>
            <div class="relative bg-blue-300">
                CLARITY OF SPEECH
            </div> -->
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

  <style scoped>
  .grid {
    display: grid;
    gap: 1rem;
  }
  .border-b {
    border-bottom: 1px solid #000;
  }
  </style>
