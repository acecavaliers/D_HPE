<template>

  <!-- Section B -->
  <div>
    <div class="bg-gray-400 border border-gray-400 p-2">
      <div>
        <span class="text-xm text-black"> B. MEDICAL ILLNESSES AND PREVIOUS HOSPITALIZATIONS AND SURGERIES</span>
      </div>
    </div>
    <div class="border border-gray-300 p-2">
      <div class="flex-none mt-1.5">
          <input
            class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
            type="checkbox"
          />
          <label
            class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
            >None
          </label>
      </div>
      <!-- other illness -->
      <div>
        <div class="flex-none mt-1.5">
            <input
              class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
              type="checkbox"
            />
            <label
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >Other Medical Illnesses
            </label>
        </div>
        <div class="pt-2 w-full">
          <textarea v-model="pb.med_illness" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Details:"></textarea>
        </div>

      </div>

      <!-- hospitalizations -->
      <div>
        <div class="flex-none mt-1.5">
            <input
              class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
              type="checkbox"
            />
            <label
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >Hospitalizations and Surgeries (include dates and diagnoses)
            </label>
        </div>
        <div class="pt-2 w-full">
          <textarea v-model="pb.hospt_surgery"  rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Details:"></textarea>
        </div>

      </div>

    </div>

  </div>
</template>

<script>
  export default {
    props: { pb: Array },
  }
</script>


