<!-- src/Layouts/Modal.vue -->
<template>
    <div v-if="isOpen" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500">Are you sure you want to update <b>{{ title }}</b> ?</h3>
                    <button data-modal-hide="popup-modal" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Yes, I'm sure
                    </button>
                    <button @click="closeModal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">No, cancel</button>
                </div>
            </div>
        </div>

      <!-- <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
        <div class="px-4 py-3 border-b border-gray-200 flex justify-between items-center">
          <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{ title }}
          </h3>

        </div>
        <div class="px-4 py-5 sm:p-6">
          <slot></slot>
          <button @click="closeModal" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Close</button>
        </div>

      </div> -->
    </div>
  </template>

  <script>
  export default {
    props: {
      title: {
        type: String,
        required: true
      },
      isOpen: {
        type: Boolean,
        required: true
      }
    },
    methods: {
      closeModal() {
        this.$emit('close');
      }
    }
  };
  </script>

  <style scoped>
  /* Add any scoped styles for the modal here */
  </style>
