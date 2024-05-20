
<template>
    <form-wizard @on-complete="onComplete" shape="tab" color="#094899">
      <template #title>Personal details</template>

      <tab-content title="Personal details">
        <PersonalInfo></PersonalInfo>
      </tab-content>
      <tab-content title="PATIENT CLINICAL INFORMATION" >
        PART I : PATIENT CLINICAL INFORMATION
        <Part1></Part1>
      </tab-content>
      <tab-content title="PHYSICAL EXAMINATION" >
        PART II: PHYSICAL EXAMINATION
        <Part2></Part2>
      </tab-content>
      <tab-content title="ASSESSMENT & RECOMMENDATION" >
        PART III: ASSESSMENT & RECOMMENDATION
        <Part2></Part2>
      </tab-content>
    </form-wizard>
  </template>

  <script setup>
  import PersonalInfo from './PersonalInfo.vue'
  import Part1 from './Part1.vue'
  import Part2 from './Part2.vue'
  </script>

  <script>
  import { FormWizard, TabContent } from "vue3-form-wizard";
  import "vue3-form-wizard/dist/style.css";
  export default {
    name: "CustomTitleSlost",
    components: {
      FormWizard,
      TabContent,
    },
    methods: {
       onComplete() {
        alert("Yay. Done!");
      },
    },
  };
  </script>
