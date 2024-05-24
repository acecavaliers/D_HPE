<template>
    <!-- <Head title="Dashboard" /> -->
    <MasterLayout>
        <div class="mb-2">
            <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                    <Link href="illness" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 mr-2">
                        <path d="M10 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM6 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM1.49 15.326a.78.78 0 0 1-.358-.442 3 3 0 0 1 4.308-3.516 6.484 6.484 0 0 0-1.905 3.959c-.023.222-.014.442.025.654a4.97 4.97 0 0 1-2.07-.655ZM16.44 15.98a4.97 4.97 0 0 0 2.07-.654.78.78 0 0 0 .357-.442 3 3 0 0 0-4.308-3.517 6.484 6.484 0 0 1 1.907 3.96 2.32 2.32 0 0 1-.026.654ZM18 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM5.304 16.19a.844.844 0 0 1-.277-.71 5 5 0 0 1 9.947 0 .843.843 0 0 1-.277.71A6.975 6.975 0 0 1 10 18a6.974 6.974 0 0 1-4.696-1.81Z" />
                        </svg>
                        Illness List
                    </Link>
                    </li>
                    <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <Link href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2">New List</Link>
                    </div>
                    </li>
                    <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">Illness</span>
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
                <!-- <IllnessList :key="listKey"/> -->
                <span v-if="layOut == 'IllnessList'">
                    <IllnessList :key="listKey"></IllnessList>
                </span>
                <span v-else-if="layOut == 'child'">
                    <IllnessChild :key="listKey"></IllnessChild>
                </span>

            </div>
        </div>

</MasterLayout>

</template>


<script setup>
// import { ref } from 'vue';
import MasterLayout from '@/Layouts/MasterLayout.vue';
import Modal from '@/Layouts/Modal.vue';
import { Head, Link } from '@inertiajs/vue3';
import AddIllness from '@/Pages/Illnesses/component/AddIllness.vue';
import IllnessList from '@/Pages/Illnesses/component/IllnessList.vue';
import IllnessChild from '@/Pages/Illnesses/component/IllnessChild.vue';

</script>

<script>
export default {
    data(){
        return{
            showModal: false,
            listKey:0,
            layOut: 'IllnessList',
        }
    },
    methods: {
        handleFormSubmitted() {
        this.listKey++;
        this.showModal = false;
    },
    handleModalClose() {
        this.showModal = false;
    }
    },
    created(){

        this.emitter.on('layOut', (layout) => {
              this.layOut = layout
          })
    }
}
</script>



