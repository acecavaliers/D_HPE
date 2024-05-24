<template>
  <div>
    <div
      class="bg-gray-400 dark:bg-gray-500 border border-black grid grid-cols-1 gap-x-4"
    >
      <div>
        <span class="text-xm text-black"> A. PRESENT ILLNESS</span>
      </div>
    </div>
  </div>
  <div class="border border-black grid grid-cols-1 gap-x-4">
    <div class="p-4">
      <div class="pb-3 flex sm:flex justify-between">
        <div class="flex flex-none">
          <div class="flex sm:items-center">
            <div>
              <input
                type="checkbox"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
              />
              <label
                class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                >None</label
              >
            </div>
          </div>
        </div>
      </div>
      <div class="w-full">
        <div>
          <input
            type="checkbox"
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
          />
          <label
            class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
            >Chief Complaint:</label
          >
          <input
            class="w-full mt-1 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            type="text"
          />
          <input
            class="w-full mt-1 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            type="text"
          />
          <input
            class="w-full mt-1 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            type="text"
          />
        </div>
      </div>
    </div>
  </div>

  <!--  -->
  <div class="bg-gray-400 dark:bg-gray-500 border border-black grid grid-cols-4 gap-x-4">
    <div>
      <span class="text-xm text-black"> VITAL SIGNS/ PAIN SCALE</span>
    </div>
    <div class="text-sm col-span-3">
      <span class="bg-black text-white">TO THE DMC LWC NURSE:</span>
      <span class="ml-2">
        ENTER REQUIRED INFORMATION. CHECK (✓) THE APPROPRIATE TICK BOX</span
      >
    </div>
  </div>
  <!--  -->
  <div class="border border-black grid grid-cols-1 gap-4">
    <div class="p-4">
      <div class="pb-3 justify-between grid grid-cols-5 gap-4">
        <div class="flex">
          <div>
            <label
              class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
            >
              HEIGHT (cm)</label
            >
            <input
              class="w-28 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
              type="text"
            />
          </div>
        </div>
        <div class="flex">
          <div>
            <label
              class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
            >
              WEIGHT (kg)</label
            >
            <input
              class="w-28 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
              type="text"
            />
          </div>
        </div>
        <div class="flex">
          <div>
            <label
              class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
            >
              BODY MASS INDEX (kg/m2)</label
            >
            <input
              class="w-16 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
              type="text"
            />
          </div>
        </div>
        <div class="flex col-span-2">
          <div>
            <label
              class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
            >
              BODY BUILT:
            </label>
            <input
              type="checkbox"
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
            />
            <label
              class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
            >
              Sthenic</label
            >

            <input
              type="checkbox"
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
            />
            <label
              class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
            >
              Asthenic</label
            >
            <input
              type="checkbox"
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
            />
            <label
              class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
            >
              Hypersthenic</label
            >
          </div>
        </div>
      </div>

      <div class="pb-3 justify-between grid grid-cols-4 gap-4">
        <div class="flex">
          <div>
            <label
              class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
            >
              BLOOD PRESSURE (mmHg)</label
            >
            <input
              class="w-28 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
              type="text"
            />
          </div>
        </div>
        <div class="flex">
          <div>
            <label
              class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
            >
              PULSE RATE (bpm)</label
            >
            <input
              class="w-28 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
              type="text"
            />
          </div>
        </div>
        <div class="flex">
          <div>
            <label
              class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
            >
              RESPIRATION RATE (cpm)</label
            >
            <input
              class="w-28 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
              type="text"
            />
          </div>
        </div>
        <div class="flex">
          <div>
            <label
              class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
            >
              TEMPERATURE (OC)
            </label>
            <input
              class="w-28 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
              type="text"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  -->

  <div class="border border-black grid grid-cols-12 gap-x-4">
    <div
      class="p-4 col-span-12 sm:col-span-2 overflow-y-auto text-center mt-10 dark:text-gray-100"
    >
      PAIN SCALE
    </div>
    <div class="p-4 col-span-12 sm:col-span-10">
      <div class="pb-3">
        <div class="flex">
          <div class="w-full flex justify-between">
            <div class="flex-none">
              <button
                type="button"
                class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
              >
                0
              </button>
            </div>
            <div class="flex-none">
              <label
                class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >
                1</label
              >
            </div>
            <div class="flex-none">
              <label
                class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >
                2</label
              >
            </div>
            <div class="flex-none">
              <label
                class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >
                3</label
              >
            </div>
            <div class="flex-none">
              <label
                class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >
                4</label
              >
            </div>
            <div class="flex-none">
              <label
                class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >
                5</label
              >
            </div>
            <div class="flex-none">
              <label
                class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >
                6</label
              >
            </div>
            <div class="flex-none">
              <label
                class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >
                7</label
              >
            </div>
            <div class="flex-none">
              <label
                class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >
                8</label
              >
            </div>
            <div class="flex-none">
              <label
                class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >
                9</label
              >
            </div>
            <div class="flex-none">
              <label
                class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >
                10</label
              >
            </div>
          </div>
        </div>
      </div>
      <div class="pb-3">
        <div class="flex">
          <div class="w-full flex justify-between">
            <div class="flex-none">
              <label
                class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >
                None</label
              >
            </div>
            <div class="flex-none">
              <label
                class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >
                Mild</label
              >
            </div>
            <div class="flex-none">
              <label
                class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >
                Moderate</label
              >
            </div>
            <div class="flex-none">
              <label
                class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
              >
                Severe</label
              >
            </div>
          </div>
        </div>
      </div>
      <div class="pb-3">
        <div class="flex">
          <div class="w-full flex justify-between">
            <div class="flex-none">
              <img class="rounded-full w-16 h-16" src="/img/1.png" />
            </div>
            <div class="flex-none">
              <img class="rounded-full w-16 h-16" src="/img/2.png" />
            </div>
            <div class="flex-none">
              <img class="rounded-full w-16 h-16" src="/img/3.png" />
            </div>
            <div class="flex-none">
              <img class="rounded-full w-16 h-16" src="/img/4.png" />
            </div>
            <div class="flex-none">
              <img class="rounded-full w-16 h-16" src="/img/5.png" />
            </div>
            <div class="flex-none">
              <img class="rounded-full w-16 h-16" src="/img/6.png" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="border border-black grid grid-cols-12 gap-x-4">
    <div class="p-4 sm:col-span-6 items-center">
      <div class="pb-3 flex items-center justify-center mx-auto">
        <div class="flex-none">
          <div class="overline dark:text-white text-black mt-10">
            Nurse's Signature Above Printed Name
          </div>
        </div>
      </div>
    </div>
    <div class="p-4 sm:col-span-6 items-center">
      <div class="pb-3 flex items-center justify-center mx-auto">
        <div class="flex-none">
          <div class="overline dark:text-white text-black mt-10">
            Date <span class="text-gray-500 dark:text-slate-500">(MMM/DD/YYYY)</span> and
            Time
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
