<template>
  <!-- Section G -->
  <div class="flex-1 border-l border-gray-300">
    <div class="bg-gray-400  rounded-tr-lg  p-2">
      <div>
        <span class="text-xm text-black">G. OBSTETRICAL/GYNECOLOGICAL HISTORY</span>
      </div>
    </div>
    <div class="p-2 pb-5">
      <div class="flex-none mt-1.5">
            <input
              id="g_none"
              v-model="g_none"
              class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
              type="checkbox"
            />
            <label for="g_none"
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              > None
            </label>
        </div>
      <div class="right-0 w-full pb-3 flex sm:items-left sm:justify-between">
        <div class="flex-none mt-1.5">
            <input
                id="gyne_surgery"
              v-model="pg.gyne_surgery"
              class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
              type="checkbox"
            />
            <label for="gyne_surgery"
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              > Gyne Surgery:
            </label>
        </div>
        <div class="w-full">
          <input
            v-model="pg.gyne_surgery"
            class="w-full text-sm text-gray-900 bg-transparent bg-transparent border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="text"/>
        </div>
      </div>


      <div class="right-0 w-full pb-3 flex sm:items-left sm:justify-between">
        <div class="flex-none mt-1.5">
            <input
            id="is_pregnant"
              v-model="pg.is_pregnant"
              class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
              type="checkbox"
            />
            <label for="is_pregnant"
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              > Pregnant:
            </label>
        </div>
        <div class="mt-1.5">
          <label
              class="text-sm text-gray-800"
              > G
            </label>
        </div>
        <div class="w-full px-1">
          <input
            v-model="pg.g"
            placeholder="G"
            class="w-full text-sm text-gray-900 bg-transparent bg-transparent border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="text"/>
        </div>
        <div class="mt-1.5">
          <label
              class="text-sm text-gray-800"
              > P
            </label>
        </div>
        <div class="w-full px-1">
          <input
            v-model="pg.p"
            placeholder="P"
            class="w-full text-sm text-gray-900 bg-transparent bg-transparent border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="text"/>
        </div>
      </div>

      <div class="right-0 w-full pb-3 flex sm:items-left sm:justify-between">
        <div class="flex-none mt-1.5">
           <label
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              > Age of Gestation
            </label>
        </div>
       <div class="w-full px-1">
          <input
            v-model="pg.age_of_gestation"
            placeholder=" "
            class="w-full text-sm text-gray-900 bg-transparent bg-transparent border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="text"/>
        </div>

        <div class="flex-none mt-1.5">
           <label
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              > Expected Delivery Date:
            </label>
        </div>
        <div class="w-full px-1">
          <input
            v-model="pg.expected_delivery"
            placeholder=" "
            class="w-full text-sm text-gray-900 bg-transparent bg-transparent border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="date"/>
        </div>
      </div>

      <div class="right-0 w-full pb-3 flex sm:items-left sm:justify-between">
        <div class="flex-none mt-1.5">
           <label
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              > Last Menstrual Period
            </label>
        </div>
        <div class="w-full px-1">
          <input
            v-model="pg.last_menstrual_period"
            placeholder="Last Menstrual Period"
            class="w-full text-sm text-gray-900 bg-transparent bg-transparent border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="date"/>
        </div>
      </div>

      <div class="right-0 w-full pb-3 flex sm:items-left sm:justify-between">
        <div class="flex-none mt-1.5">
           <label
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              > Previous Menstrual Period
            </label>
        </div>
        <div class="w-full px-1">
          <input
            v-model="pg.prev_menstrual_period"
            placeholder="Previous Menstrual Period"
            class="w-full text-sm text-gray-900 bg-transparent bg-transparent border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="date"/>
        </div>
      </div>

      <div class="right-0 w-full pb-3 flex sm:items-left sm:justify-between">
        <div class="flex-none mt-1.5">
           <label
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              > Age of menarche
            </label>
        </div>
        <div class="w-full px-1">
          <input
            v-model="pg.age_of_menarche"
            placeholder="Age of menarche"
            class="w-full text-sm text-gray-900 bg-transparent bg-transparent border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="text"/>
        </div>

        <div class="flex-none mt-1.5">
           <label
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              > Menopausal Age
            </label>
        </div>
        <div class="w-full px-1">
          <input
            v-model="pg.age_of_menopausal"
            placeholder="Menopausal Age"
            class="w-full text-sm text-gray-900 bg-transparent bg-transparent border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="text"/>
        </div>
      </div>

      <div class="right-0 w-full pb-3 flex sm:items-left sm:justify-between">
        <div class="flex-none mt-1.5">
            <input
                id="is_birth_control"
              v-model="pg.is_birth_control"
              class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
              type="checkbox"
            />
            <label for="is_birth_control"
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              > Birth Control:
            </label>
        </div>
        <div class="w-full">
          <input
            v-model="pg.bc_type"
            placeholder="Type"
            class="w-full text-sm text-gray-900 bg-transparent bg-transparent border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="text"/>
        </div>
      </div>

      <div class="right-0 w-full pb-3 flex sm:items-left sm:justify-between">
        <div class="flex-none mt-1.5">
            <input
            id="pap_smear"
              class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
              type="checkbox"
            />
            <label for="pap_smear"
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              > Pap smear:
            </label>
        </div>
        <div class="w-full">
          <input
            v-model="pg.pap_smear"
            placeholder="(Date last done)"
            class="w-full text-sm text-gray-900 bg-transparent bg-transparent border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="date"/>
        </div>
      </div>

      <div class="right-0 w-full pb-3 flex sm:items-left sm:justify-between">
        <div class="flex-none mt-1.5">
            <input
            id="mammography"
              class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
              type="checkbox"
            />
            <label for="mammography"
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              > Mammography :
            </label>
        </div>
        <div class="w-full">
          <input
            v-model="pg.mammography"
            placeholder="(Date last done)"
            class="w-full text-sm text-gray-900 bg-transparent bg-transparent border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="date"/>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 ">
        <div class="flex-none mt-1.5">
            <input
            id="is_dysmenorrhea"
              v-model="pg.is_dysmenorrhea"
              class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
              type="checkbox"
            />
            <label for="is_dysmenorrhea"
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              > Dysmenorrhea
            </label>
        </div>
        <div class="flex-none mt-1.5">
            <input
            id="is_pain_viginal_sex"
              v-model="pg.is_pain_viginal_sex"
              class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
              type="checkbox"
            />
            <label for="is_pain_viginal_sex"
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              > Painful Vaginal Sexual Intercourse
            </label>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 ">
        <div class="flex-none mt-1.5">
            <input
            id="is_viginal_discharge"
              v-model="pg.is_viginal_discharge"
              class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
              type="checkbox"
            />
            <label for="is_viginal_discharge"
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              > Vaginal Discharge
            </label>
        </div>
        <div class="flex-none mt-1.5">
            <input
            id="is_vaginal_lesions_mass_warts"
              v-model="pg.is_vaginal_lesions_mass_warts"
              class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
              type="checkbox"
            />
            <label for="is_vaginal_lesions_mass_warts"
              class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              > Vaginal Lesions/Mass/Warts
            </label>
        </div>
      </div>

    </div>
  </div>
</template>

<script>
export default {
  props: { pg: Object },
  data() {
    return {
      g_none:false,

    };
  },
  watch: {
    g_none(newVal) {
      if (newVal) {
        // Clear other input fields if "None" checkbox is checked
        this.pg.gyne_surgery = false;
        // Clear other fields similarly
      }
    }
  }
};
</script>
