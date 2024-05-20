<template>
    <form-wizard @on-complete="onComplete">
      <tab-content title="Personal details">
        My first tab content
      </tab-content>
      <tab-content title="Additional Info" >
        My second tab content
      </tab-content>
      <tab-content title="Last step" >
        Yuhuuu! This seems pretty damn simple
      </tab-content>
    </form-wizard>
  </template>

  <script>
  import {FormWizard,TabContent} from "vue3-form-wizard";
  import 'vue3-form-wizard/dist/style.css'
  export default {
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
