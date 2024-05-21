<!-- src/Layouts/Modal.vue -->
<template>
    <div v-if="isVisible" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50">
      <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
        <div class="px-4 py-3 border-b border-gray-200 flex justify-between items-center">
          <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{ title }}
          </h3>
          <button @click="closeModal" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">Close</span>
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>
        </div>
        <div class="px-4 py-5 sm:p-6">
          <slot></slot>
        </div>
        <!-- <div class="px-4 py-3 border-t border-gray-200 bg-gray-50 sm:px-6 flex justify-end">
          <button @click="closeModal" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Close</button>
        </div> -->
      </div>
    </div>
  </template>

  <script>
  export default {
    props: {
      title: {
        type: String,
        required: true
      },
      isVisible: {
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
