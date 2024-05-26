<template>
    <Head title="Dashboard" />
    <MasterLayout>
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
                        <button @click="showModal = true" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Add Vaccine</button>
                        <Modal :title="'Add Vaccine'" :isVisible="showModal" @close="handleModalClose">
                            <AddVaccine @formSubmitted="handleFormSubmitted"/>
                        </Modal>
                    </div>
                </div>
            </div>
            <div class="">
                <VaccineList :key="accountListKey"/>
            </div>
        </div>
</MasterLayout>

</template>


<script setup>
import { ref } from 'vue';
import MasterLayout from '@/Layouts/MasterLayout.vue';
import Modal from '@/Layouts/Modal.vue';
import { Head } from '@inertiajs/vue3';
import AddVaccine from './AddVaccine.vue'
import VaccineList from './VaccineList.vue';

const showModal = ref(false);

const accountListKey = ref(0);

function handleFormSubmitted() {
  accountListKey.value++;
  showModal.value = false;
}

function handleModalClose() {
  showModal.value = false;
}
</script>



