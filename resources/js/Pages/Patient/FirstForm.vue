<template>
  <MainLayout>
    <section
      class="bg-slate-50 dark:bg-gray-900 w-full h-full border border-dashed border-black dark:border-white"
    >
      <div class="py-8 px-4 w-full h-full lg:py-16">
        <div>
          <img class="dark:text-white" src="/img/DMC.png" />

          <br />
          <span class="text-xs text-slate-400"
            >Allado Compound, Leon Llido St., 9500 General Santos City, Philippines
          </span>
        </div>
        <div>
          <div class="mb-4 text-xl text-right font-bold text-gray-900 dark:text-white">
            History & Physical Examination Form
          </div>
        </div>
        <span class="flex dark:text-black bg-gray-400 dark:bg-gray-500 text-xl border"
          >TO DMC LWC PATIENT: ENTER REQUIRED INFORMATION. CHECK (✓) THE APPROPRIATE TICK
          BOX. MINOR PATIENT TO BE ASSISTED BY A PARENT OR GUARDIAN.
        </span>

        <form action="#" class="mt-3">
          <div v-for="information in informations">
            <!-- first page -->
            <div class="grid items-end gap-6 mb-6 md:grid-cols-4 sm:grid-cols-1">
              <div>
                <div class="relative">
                  <input
                    type="text"
                    id="name"
                    aria-describedby="outlined_success_help"
                    class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                    placeholder=" "
                  />
                  <label
                    for="name"
                    class="absolute text-sm text-gray-600 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-slate-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                    >{{ information.fullname }}</label
                  >
                </div>
              </div>
              <div>
                <div class="relative">
                  <input
                    type="text"
                    id="Hospital#"
                    aria-describedby="outlined_success_help"
                    class="block px-2.5 pb-2.5 pt-4 w-80 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                    placeholder=" "
                  />
                  <label
                    for="Hospital#"
                    class="absolute text-sm text-gray-600 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-slate-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                    >{{ information.hospitalNo }}</label
                  >
                </div>
              </div>
              <div>
                <div class="relative">
                  <input
                    type="text"
                    id="Case#"
                    aria-describedby="outlined_success_help"
                    class="block px-2.5 pb-2.5 pt-4 w-80 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                    placeholder=" "
                  />
                  <label
                    for="Case#"
                    class="absolute text-sm text-gray-600 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-slate-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                    >{{ information.caseNo }}</label
                  >
                </div>
              </div>
              <div>
                <div class="relative">
                  <input
                    type="text"
                    id="date"
                    aria-describedby="outlined_success_help"
                    class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                    placeholder=" "
                  />
                  <label
                    for="date"
                    class="absolute text-sm text-gray-600 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-slate-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                    >{{ information.date }}</label
                  >
                </div>
              </div>
            </div>

            <!-- second page -->
            <div class="grid items-end gap-6 mb-6 md:grid-cols-4">
              <div>
                <div class="relative">
                  <input
                    type="text"
                    id="address"
                    aria-describedby="outlined_success_help"
                    class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                    placeholder=" "
                  />
                  <label
                    for="address"
                    class="absolute text-sm text-gray-600 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-slate-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                    >{{ information.address }}</label
                  >
                </div>
              </div>
              <div>
                <div class="relative">
                  <input
                    type="text"
                    id="Age"
                    aria-describedby="outlined_success_help"
                    class="block px-2.5 pb-2.5 pt-4 w-50 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                    placeholder=" "
                  />
                  <label
                    for="Age"
                    class="absolute text-sm text-gray-600 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-slate-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                    >{{ information.age }}</label
                  >
                </div>
              </div>
              <div>
                <div class="relative">
                  <input
                    type="text"
                    id="Sex"
                    aria-describedby="outlined_success_help"
                    class="block px-2.5 pb-2.5 pt-4 w-50 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                    placeholder=" "
                  />
                  <label
                    for="SEX"
                    class="absolute text-sm text-gray-600 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-slate-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                    >{{ information.sex }}</label
                  >
                </div>
              </div>
              <div>
                <div class="relative">
                  <input
                    type="text"
                    id="birthdate"
                    aria-describedby="outlined_success_help"
                    class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                    placeholder=" "
                  />
                  <label
                    for="birthdate"
                    class="absolute text-sm text-gray-600 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-slate-50 dark:bg-gray-900 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                    >{{ information.birthdate }}
                  </label>
                </div>
              </div>
            </div>

            <!-- third page -->
            <div
              class="grid items-end gap-6 mb-6 md:grid-cols-2 sm:grid-cols-1 border border-dashed"
            >
              <div>
                <div class="relative mt-3">
                  <div>
                    <input
                      class="ml-20 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                      id="pre-employ"
                      aria-describedby="outlined_success_help"
                      type="checkbox"
                    />
                    <label
                      for="pre-employ"
                      class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-800 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                    >
                      PRE-EMPLOYMENT:</label
                    >
                    <label
                      for="jobtitle"
                      class="ml-16 text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] dark:bg-gray-900 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                      >Job Title:</label
                    >
                    <input
                      type="text"
                      class="w-60 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-600 appearance-none dark:text-white dark:border-gray-500 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
                      id="jobtitle"
                    />
                  </div>
                  <br />
                  <div class="mb-3">
                    <input
                      class="ml-20 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                      id="check"
                      type="checkbox"
                    />
                    <label
                      for="check"
                      class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                      >ANNUAL EXECUTIVE CHECK-UP</label
                    >
                  </div>
                </div>
              </div>

              <div>
                <div class="relative mt-3">
                  <div>
                    <input
                      class="ml-20 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                      id="pre-employ"
                      aria-describedby="outlined_success_help"
                      type="checkbox"
                    />
                    <label
                      for="pre-employ"
                      class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                    >
                      HMO:</label
                    >
                  </div>
                  <br />
                  <div>
                    <input
                      class="ml-20 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                      id="pre-employ"
                      aria-describedby="outlined_success_help"
                      type="checkbox"
                    />
                    <label
                      for="pre-employ"
                      class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                    >
                      CORPORATE ACCOUNT:</label
                    >
                  </div>
                  <br />
                  <div class="mb-3">
                    <input
                      class="ml-20 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                      id="check"
                      type="checkbox"
                    />
                    <label
                      for="check"
                      class="text-sm text-gray-800 dark:text-gray-100 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                      >PRIVATE ACCOUNT
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="grid gap-6 mb-6 md:grid-cols-2 bg-gray-400 dark:bg-gray-500 border"
            >
              <span class="w-full text-sm bg-black text-white text-center bg-center">
                PART I : PATIENT CLINICAL INFORMATION</span
              >
              <div class="text-sm">
                <span class="bg-black text-white">TO DMC LWC PHYSICIAN:</span>
                <span class="ml-2"
                  >ENTER REQUIRED INFORMATION. CHECK (✓) THE APPROPRIATE TICK BOX. MINOR
                  PATIENT TO BE ASSISTED BY A PARENT OR GUARDIAN.</span
                >
              </div>
            </div>
            <div>
              <!-- nextPage -->
              <SecondForm :illness="illnesses" :titles="titles"></SecondForm>
            </div>

            <div>
              <ThirdForm :titles="titles" :MIAPHAS="MIAPHAS"></ThirdForm>
            </div>

            <div>
              <ForthForm></ForthForm>
            </div>
            <div>
              <FiveForm></FiveForm>
            </div>
            <div>
              <SixForm></SixForm>
            </div>

            <div>
              <SevenForm></SevenForm>
            </div>
          </div>
          <button
            type="submit"
            class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800"
          >
            Add product
          </button>
        </form>
      </div>
    </section>
  </MainLayout>
</template>
<script setup>
</script>

<script>
export default {
  props: { information: Array },

  data() {
    return {
      titles: [
        {
          A: "A. PAST ILLNESSES ",
          B: "B. MEDICAL ILLNESSES AND PREVIOUS HOSPITALIZATIONS AND SURGERIES",
          C: "C. CURRENT AND MAINTENANCE MEDICATIONS",
          D: "D. ALLERGIES",
          E: "E. PERSONAL/SOCIAL HISTORY",
        },
      ],
      illnesses: [
        {
          name: "Skin/Scalp",
          none: "None",
          illness1: "Rashes",
          illness2: "HairLoss",
          illness3: "Scaling",
          other: "Others:",
          details: "Details:",
        },
        {
          name: " Ophthalmological ",
          none: "None",
          illness1: "Error of Refraction	",
          illness2: "Glaucoma",
          illness3: "Infectio",
          other: "Others:",
          details: "Details:",
        },
        {
          name: "Ears, Nose, Throat",
          none: "None",
          illness1: "Hearing Loss",
          illness2: "Chronic Sinusitis",
          illness3: "Mass/ Lesions",
          other: "Others:",
          details: "Details:",
        },
        {
          name: "Pulmonary",
          none: "None",
          illness1: "Bronchial Asthma",
          illness2: "COPD",
          illness3: "Mass/ Lesions",
          other: "Others:",
          details: "Details:",
        },
        {
          name: "Cardiovascular",
          none: "None",
          illness1: "Hypertension",
          illness2: "COPD",
          illness3: "Mass/ Lesions",
          other: "Others:",
          details: "Details:",
        },
        {
          name: "Gastrointestinal",
          none: "None",
          illness1: "Liver Problems",
          illness2: "Gall Stones",
          illness3: "Acid Reflux Disease",
          other: "Others:",
          details: "Details:",
        },
        {
          name: "Renal",
          none: "None",
          illness1: "Renal Failure",
          illness2: "Kidney Stones",
          illness3: "Mass/ Lesions",
          other: "Others:",
          details: "Details:",
        },
        {
          name: "Reproductive",
          none: "None",
          illness1: "Mass/Cysts",
          illness2: "Bleeding/ Discharges",
          illness3: "Pain",
          other: "Others:",
          details: "Details:",
        },
        {
          name: "Neurological(Brain and Spinal Cord)",
          none: "None",
          illness1: "Previous Stroke",
          illness2: "Recurrent Headaches",
          illness3: "Seizures/ Epilepsy",
          other: "Others:",
          details: "Details:",
        },
        {
          name: "Endocrine",
          none: "None",
          illness1: "Diabetes",
          illness2: "Hyperthyroid",
          illness3: "Hypothyroid",
          other: "Others:",
          details: "Details:",
        },
        {
          name: "Musculoskeletal",
          none: "None",
          illness1: "Arthritis",
          illness2: "Muscle Weakness",
          illness3: "Chronic Muscle Pains",
          other: "Others:",
          details: "Details:",
        },
        {
          name: "Infectious Disease",
          none: "None",
          illness1: "PTB",
          illness2: "Hepatitis A",
          illness3: "Hepatitis B",
          other: "Others:",
          details: "Details:",
        },
        {
          name: "Psychological",
          none: "None",
          illness1: "Anxiety/Panic Disorder",
          illness2: "Clinical Depression",
          illness3: "Schizophrenia",
          other: "Others:",
          details: "Details:",
        },
      ],
      MIAPHAS: [
        {
          name: "None",
          other: "Other Medical illnesses",
          surgeries: "Hospitalizations and Surgeries (include dates and diagnoses)",
        },
      ],
      informations: [
        {
          fullname: "NAME:(Last Name, First Name, Middle Name)",
          hospitalNo: "HOSPITAL NO.",
          caseNo: "CASE NO.",
          date: "DATE(MMM/DD/YYYY)",
          address:
            "ADDRESS (House/ Unit No., Street No., Subdivision, Barangay, City, Province",
          age: "Age",
          sex: "Sex",
          birthdate: "BIRTHDAY (MMM/DD/YYYY)",
        },
      ],
    };
  },
  components: {
    ThirdForm,
    SecondForm,
  },
};
</script>
