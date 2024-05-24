<template>
  <div v-for="(value, index) in titles" :key="index">
    <div>
      <div class="bg-gray-400 dark:bg-gray-500 border border-black">
        <div>
          <span class="text-xm text-black"> {{ value.B }}</span>
        </div>
      </div>

      <!-- next page -->
      <div
        v-for="(MIAPHA, index) in MIAPHAS"
        :key="index"
        class="border border-black grid grid-cols-1 gap-x-4"
      >
        <div class="p-4">
          <div class="pb-3">
            <div class="flex flex-col">
              <div class="flex sm:items-center p-2">
                <input
                  type="checkbox"
                  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                />
                <label
                  class="text-xl text-gray-800 dark:text-gray-100 uration-300 transform scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                  >{{ MIAPHA.name }}</label
                >
                <input
                  class="w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                  type="text"
                />
              </div>
              <div class="flex sm:items-center p-2">
                <input
                  type="checkbox"
                  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                />
                <label
                  class="text-xl text-gray-800 dark:text-gray-100 uration-300 transform scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                  >{{ MIAPHA.other }}
                </label>
                <input
                  class="w-screen text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                  type="text"
                />
              </div>
              <div class="flex sm:items-center p-2">
                <input
                  type="checkbox"
                  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                />
                <label
                  class="text-xl text-gray-800 dark:text-gray-100 uration-300 transform scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                  >{{ MIAPHA.surgeries }}</label
                >
                <input
                  class="w-screen text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                  type="text"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- next column -->
    <div>
      <div
        class="bg-gray-400 dark:bg-gray-500 border border-black grid grid-cols-1 gap-x-4"
      >
        <div>
          <span class="text-xm text-black">
            {{ value.C }}
          </span>
        </div>
      </div>

      <!-- next page -->
      <div class="border border-black grid grid-cols-1 gap-x-4">
        <div class="p-4">
          <div class="pb-3">
            <div class="flex flex-col">
              <input
                class="w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                type="text"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- next Column -->

    <div>
      <div
        class="bg-gray-400 dark:bg-gray-500 border border-black grid grid-cols-2 gap-x-4"
      >
        <div>
          <span class="text-xm text-black"> {{ value.D }}</span>
        </div>
        <div>
          <span class="text-xm text-black">
            {{ value.E }}
          </span>
        </div>
      </div>

      <!-- next page -->
      <div class="border border-black grid grid-cols-2">
        <div class="p-4">
          <div class="pb-3 flex sm:flex justify-between grid-rows-2">
            <div class="flex flex-col">
              <div class="flex sm:items-center w-full p-3">
                <input
                  type="checkbox"
                  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                />
                <label
                  class="text-xm text-gray-800 dark:text-gray-100 uration-300 transform scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                  >None</label
                >
              </div>
              <div class="flex sm:items-center p-3">
                <input
                  type="checkbox"
                  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                />
                <label
                  class="text-xm text-gray-800 dark:text-gray-100 uration-300 transform scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                  >Food:</label
                >
                <input
                  class="w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                  type="text"
                />
              </div>
              <div class="flex sm:items-center p-3">
                <input
                  type="checkbox"
                  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                />
                <label
                  class="text-xm text-gray-800 dark:text-gray-100 uration-300 transform scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                  >Drugs:</label
                >
                <input
                  class="w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                  type="text"
                />
              </div>
              <div class="flex sm:items-center p-3">
                <input
                  type="checkbox"
                  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                />
                <label
                  class="text-xm text-gray-800 dark:text-gray-100 uration-300 transform scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                  >Others:</label
                >
                <input
                  class="w-96 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                  type="text"
                />
              </div>
            </div>
          </div>
        </div>

        <div class="p-4">
          <div class="pb-3">
            <div class="flex flex-col">
              <div class="flex sm:items-center w-full p-2">
                <input
                  type="checkbox"
                  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                />
                <label
                  class="text-xm text-gray-800 dark:text-gray-100 uration-300 transform scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                  >Caffeine (cups per day):</label
                >
                <input
                  class="w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                  type="text"
                />
              </div>

              <div class="flex sm:items-center p-2">
                <input
                  type="checkbox"
                  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                />
                <label
                  class="text-xm text-gray-800 dark:text-gray-100 uration-300 transform scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                  >Tobacco / Cigarette:
                </label>
                <input
                  class="text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                  type="text"
                />

                <div class="relative">
                  <input
                    type="text"
                    class="mx-2 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                  />
                  <label
                    class="mx-2 absolute text-xm text-gray-600 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-slate-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                    >pack per day</label
                  >
                </div>
                <div class="relative">
                  <input
                    type="text"
                    class="mx-2 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                  />
                  <label
                    class="mx-2 absolute text-xm text-gray-600 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-slate-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                    >year</label
                  >
                </div>
              </div>
              <div class="flex sm:items-center w-full p-2">
                <input
                  type="checkbox"
                  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                />
                <label
                  class="text-xm text-gray-800 dark:text-gray-100 uration-300 transform scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                  >Alcohol, last use:</label
                >
                <input
                  class="w-10/12 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                  type="text"
                />
              </div>
              <div class="flex sm:items-center w-full p-2">
                <input
                  type="checkbox"
                  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                />
                <label
                  class="text-xm text-gray-800 dark:text-gray-100 uration-300 transform scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                  >Prohibited Drugs, type:</label
                >
                <input
                  class="w-10/12 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                  type="text"
                />
                <div class="relative">
                  <input
                    type="text"
                    class="mx-2 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                  />
                  <label
                    class="mx-2 absolute text-xm text-gray-600 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-slate-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                    >last use:</label
                  >
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
  props: {
    titles: Array,
    MIAPHAS: Array,
  },
};
</script>
