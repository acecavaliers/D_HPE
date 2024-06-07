
<template>
    <MasterLayout>
        <div class="bg-white h-screen -mt-10 rounded-lg">
            <div class="flex justify-center items-center w-full">
                <div class="flex justify-center items-center w-full">
                    <img class="h-auto w-1/12" src="/dmc_logo.png" />
                    <img class="h-auto w-1/3" src="/dm_full_logo_with_tagline_onlytext.png" alt="Your Company" />
                </div>
            </div>

            <div class="flex justify-center items-center w-full">
                <div class="flex justify-center items-center w-full">
                    <h1 class="text-6xl font-bold">LIFESTYLE AND WELLNESS CENTER</h1>
                </div>
            </div>
        </div>


    </MasterLayout>


</template>

<script setup>
import MasterLayout from '@/Layouts/MasterLayout.vue';
import { Head } from '@inertiajs/vue3';
import Form from '@/Pages/Patient/Form.vue'

const user = {
  name: 'Tom Cook',
  email: 'tom@example.com',
  imageUrl:
    'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
}
const navigation = [
  { name: 'Dashboard', href: '#', current: true },
  { name: 'Team', href: '#', current: false },
  { name: 'Projects', href: '#', current: false },
  { name: 'Calendar', href: '#', current: false },
  { name: 'Reports', href: '#', current: false },
]
const userNavigation = [
  { name: 'Your Profile', href: '#' },
  { name: 'Settings', href: '#' },
  { name: 'Sign out', href: '#' },
]
</script>
<script>
</script>

