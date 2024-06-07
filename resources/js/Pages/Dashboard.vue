
<template>
    <MasterLayout :usessss="usessss">
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
                    <p>{{ usessss}}</p>
                </div>
            </div>
        </div>


    </MasterLayout>


</template>

<script setup>
import MasterLayout from '@/Layouts/MasterLayout.vue';

</script>
<script>
export default {
    data(){
        return{
            usessss:'',
        }
    }
};
</script>

