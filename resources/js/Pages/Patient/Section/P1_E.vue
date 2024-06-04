<template>
  <!-- Section E -->
  <div class="flex-1">
    <div class="bg-gray-400 border border-gray-400 p-2">
      <div>
        <span class="text-xm text-black">E. PERSONAL/SOCIAL HISTORY</span>
      </div>
    </div>
    <div class="p-2 pb-10">
      <div class="right-0 w-full flex sm:items-left sm:justify-between">
        <div class="flex-none mt-1.5">
            <input
                v-model="pe.is_caffeine"
                id="e_coffee"
              class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
              type="checkbox"
            />
            <label for="e_coffee"
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              > Caffeine (cups per day):
            </label>
        </div>
        <div class="w-full">
          <input
            v-model="pe.caffeine_details"
            class="w-full text-sm text-gray-900 bg-transparent bg-transparent border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="text"/>
        </div>
      </div>

      <div class="right-0 w-full flex sm:items-left sm:justify-between">
        <div class="flex-none mt-1.5">
            <input
                v-model="pe.is_tobacco"
                id="e_cig"
              class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
              type="checkbox"
            />
            <label for="e_cig"
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >  Tobacco / Cigarette:
            </label>
        </div>
        <div class="w-full">
          <input
            v-model="pe.tobacco_pack_per_day"
            class="w-full text-sm text-gray-900 bg-transparent bg-transparent border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="text"/>
        </div>
        <div class="w-96 mt-1.5">
          <label
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >
          pack(s)/day for
            </label>
        </div>
        <div class="w-full">
          <input
            v-model="pe.tobacco_year"
            class="w-full text-sm text-gray-900 bg-transparent bg-transparent border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="text"/>
        </div>
        <div class=" mt-1.5">
          <label
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >year
            </label>
        </div>
      </div>

      <div class="right-0 w-full flex sm:items-left sm:justify-between">
        <div class="flex-none mt-1.5">
            <input
                id="e_alchol"
                v-model="pe.is_alcohol"
              class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
              type="checkbox"
            />
            <label for="e_alchol"
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              > Alcohol, last use:
            </label>
        </div>
        <div class="w-full">
          <input
            v-model="pe.alcohol_last_use"
            class="w-full text-sm text-gray-900 bg-transparent bg-transparent border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="text"/>
        </div>
      </div>

      <div class="right-0 w-full flex sm:items-left sm:justify-between">
        <div class="flex-none mt-1.5">
            <input
                id="e_drugs"
                v-model="pe.is_illegal_drugs"
              class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
              type="checkbox"
            />
            <label
            for="e_drugs"
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >Prohibited Drugs, type:
            </label>
        </div>
        <div class="w-full">
          <input
            v-model="pe.illegal_drugs_type"
            class="w-full text-sm text-gray-900 bg-transparent bg-transparent border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="text"/>
        </div>
        <div class="w-56 mt-1.5">
          <label
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >
              last use:
            </label>
        </div>
        <div class="w-full">
          <input v-model="pe.illegal_drugs_last_use"
            class="w-full text-sm text-gray-900 bg-transparent bg-transparent border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="text"/>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: { pe: Object },
  data() {
    return {

    };
  },
  methods: {

  }
};
</script>
