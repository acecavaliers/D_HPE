<template>
    <Head title="Dashboard" />
    <MasterLayout>
        <div class="mb-3">
            <!-- Breadcrumb -->
            <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 mr-2">
                    <path d="M10 2a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0v-1.5A.75.75 0 0 1 10 2ZM10 15a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0v-1.5A.75.75 0 0 1 10 15ZM10 7a3 3 0 1 0 0 6 3 3 0 0 0 0-6ZM15.657 5.404a.75.75 0 1 0-1.06-1.06l-1.061 1.06a.75.75 0 0 0 1.06 1.06l1.06-1.06ZM6.464 14.596a.75.75 0 1 0-1.06-1.06l-1.06 1.06a.75.75 0 0 0 1.06 1.06l1.06-1.06ZM18 10a.75.75 0 0 1-.75.75h-1.5a.75.75 0 0 1 0-1.5h1.5A.75.75 0 0 1 18 10ZM5 10a.75.75 0 0 1-.75.75h-1.5a.75.75 0 0 1 0-1.5h1.5A.75.75 0 0 1 5 10ZM14.596 15.657a.75.75 0 0 0 1.06-1.06l-1.06-1.061a.75.75 0 1 0-1.06 1.06l1.06 1.06ZM5.404 6.464a.75.75 0 0 0 1.06-1.06l-1.06-1.06a.75.75 0 1 0-1.061 1.06l1.06 1.06Z" />
                    </svg>
                    Home
                </a>
                </li>
                <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">Flowbite</span>
                </div>
                </li>
            </ol>
            </nav>

        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white">

                <label for="table-search" class="sr-only">Search</label>
                <div class="relative px-5">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-7 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="text" id="table-search-users" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for users">
                </div>

                <div class="px-5">
                    <div>
                        <button @click="showModal = true" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Add Illness</button>
                        <Modal :title="'Add Illness'" :isVisible="showModal" @close="handleModalClose">
                            <AddIllness @formSubmitted="handleFormSubmitted"/>
                        </Modal>
                    </div>
                </div>
            </div>
            <div class="">
                <IllnessList :key="listKey"/>
            </div>
        </div>
</MasterLayout>

</template>


<script setup>
import { ref } from 'vue';
import MasterLayout from '@/Layouts/MasterLayout.vue';
import Modal from '@/Layouts/Modal.vue';
import { Head } from '@inertiajs/vue3';
import AddIllness from '@/Pages/Illnesses/AddIllness.vue';
import IllnessList from '@/Pages/Illnesses/IllnessList.vue';

const showModal = ref(false);

const listKey = ref(0);

function handleFormSubmitted() {
  listKey.value++;
  showModal.value = false;
}

function handleModalClose() {
  showModal.value = false;
}
</script>



