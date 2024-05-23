<template>
    <div class="min-h-screen bg-gray-100">
      <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
          <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
              <button
                data-drawer-target="logo-sidebar"
                data-drawer-toggle="logo-sidebar"
                aria-controls="logo-sidebar"
                type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
              >
                <span class="sr-only">Open sidebar</span>
                <svg
                  class="w-6 h-6"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    clip-rule="evenodd"
                    fill-rule="evenodd"
                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
                  ></path>
                </svg>
              </button>
              <a href="#" class="flex ms-2 md:me-24"> ZD </a>
            </div>
            <div  ref="modalContainer" class="relative inline-block text-left flex items-center">
              <div class="flex items-center ms-3">
                <div>
                  <button
                    type="button"
                    class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300"
                    @click="openUser"
                  >
                    <span class="sr-only">Open user menu</span>
                    <img
                      class="w-8 h-8 rounded-full"
                      src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                      alt="user photo"
                    />
                  </button>
                </div>
                <div v-if="isModalVisible" class="absolute right-0 z-10 mt-5 w-48 overflow-auto origin-top-right max-h-96 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                  <div class="px-4 py-3" role="none">
                    <p class="text-sm text-gray-900" role="none"> Neil Sims </p>
                  </div>
                  <ul class="py-1" role="none">
                    <li>
                      <a
                        href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                        role="menuitem"
                        >Settings</a
                      >
                    </li>
                    <li>
                      <a
                        href="/logout"
                        @click="logout"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                        role="menuitem"
                        >Sign out</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>

      <div
        id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0"
        aria-label="Sidebar"
      >
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
          <ul class="space-y-2 font-medium">
            <li>
              <Link
                href="#"
                class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100"
              >
                <svg
                  class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor"
                  viewBox="0 0 22 21"
                >
                  <path
                    d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"
                  />
                  <path
                    d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"
                  />
                </svg>
                <span class="ms-3">Dashboard</span>
              </Link>
            </li>
            <li>
              <Link
                href="/account"
                class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100"
              >
                <svg
                  class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor"
                  viewBox="0 0 22 21"
                >
                  <path
                    d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"
                  />
                  <path
                    d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"
                  />
                </svg>
                <span class="ms-3">Accounts</span>
              </Link>
            </li>
            <li>
              <Link
                href="/illness"
                class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100"
              >
                <svg
                  class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor"
                  viewBox="0 0 22 21"
                >
                  <path
                    d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"
                  />
                  <path
                    d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"
                  />
                </svg>
                <span class="ms-3">Illnesses</span>
              </Link>
            </li>
            <li>
              <Link
                href="/patient/view"
                class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100"
              >
                <svg
                  class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor"
                  viewBox="0 0 22 21"
                >
                  <path
                    d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"
                  />
                  <path
                    d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"
                  />
                </svg>
                <span class="ms-3">Patients</span>
              </Link>
            </li>
          </ul>
        </div>
      </div>

      <main class="bg-gray-100">
        <div class="p-2 sm:ml-64">
          <div class="mx-auto px-4 sm:px-6 md:px-8 py-5 navbar_bg_color">
            <h1 class="text-2xl font-semibold navbar_txt_color">
              <slot name="header" />
            </h1>
          </div>

          <div class="mt-14">
            <slot />
          </div>
        </div>
      </main>
    </div>
  </template>

<script setup>
import MasterLayout from '@/Layouts/MasterLayout.vue';
import PatientList from '@/Pages/Patient/PatientList.vue'
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import Form from '@/Pages/Patient/Form.vue'

</script>
<script>
export default {
    data(){
        return{
            isModalVisible: false,
        }
    },
  methods: {

    openUser(){
        this.isModalVisible = !this.isModalVisible;
    },
    logout() {
      // Clear authentication tokens or user data
      // For example, if you're using localStorage or Vuex:
      localStorage.removeItem('authToken');
      this.$router.push('/login'); // Redirect to the login page
    },

    handleClickOutside(event) {
        const modalElement = this.$refs.modalContainer; // Reference to the division modal container

        if (!modalElement.contains(event.target)) {
            this.isModalVisible = false; // Close division modal if clicked outside
        }
    },
  },


  mounted() {
    document.addEventListener("click", this.handleClickOutside);
  },

    beforeDestroy() {
    // Remove the document click listener when the component is destroyed
    document.removeEventListener("click", this.handleClickOutside);
  },
};
</script>
