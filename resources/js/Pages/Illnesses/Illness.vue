
<template>
    <Head title="Dashboard" />
    <MasterLayout>
        <span v-if="layOut == 'main'">
            <IllnessMain></IllnessMain>
        </span>
        <span v-else-if="layOut == 'child'">
            <IllnessChild></IllnessChild>
        </span>
    </MasterLayout>
</template>


<script setup>
import MasterLayout from '@/Layouts/MasterLayout.vue';
import { Head } from '@inertiajs/vue3';
import IllnessMain from '@/Pages/Illnesses/IllnessMain.vue'
import AddIllness from '@/Pages/Illnesses/component/AddIllness.vue'
import IllnessChild from '@/Pages/Illnesses/component/IllnessChild.vue'

</script>
<script>
export default {
    data(){
        return{
            layOut: 'main'
        }
    },
    created(){
        this.emitter.on('layOut', (layout) => {
              this.layOut = layout
          })
    }
}
</script>
