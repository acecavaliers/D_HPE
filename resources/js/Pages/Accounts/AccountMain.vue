<template>
    <Head title="Dashboard" />
    <MasterLayout>
        <div>
            <button @click="showModal = true" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add Account</button>
            <Modal :title="'Add Account'" :isVisible="showModal" @close="showModal = false">
                <AddAccount />
            </Modal>
        </div>
        <div class="p-5">
            <AccountList />
        </div>
    </MasterLayout>
</template>


<script setup>
import { ref } from 'vue';
import MasterLayout from '@/Layouts/MasterLayout.vue';
import Modal from '@/Layouts/Modal.vue';
import { Head } from '@inertiajs/vue3';
import AddAccount from '@/Pages/Accounts/AddAccount.vue';
import AccountList from '@/Pages/Accounts/AccountList.vue';

const showModal = ref(false);
</script>


