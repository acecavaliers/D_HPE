<template>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="pb-4 bg-white">
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative mt-1">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for items">
        </div>
    </div>
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr class="border-b ">
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    Account name
                </th>
                <th scope="col" class="px-6 py-3">
                    Created By
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(item, index) in accounts" :key="index" class="bg-white border-b hover:bg-gray-50">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ item.name }}
                </th>
                <td class="px-6 py-4">
                    {{ item.created_by }}
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                </td>
            </tr>

        </tbody>
    </table>
</div>

</template>
<script setup>
import axios from 'axios';

</script>
<script>
export default {
    name: 'Account List',

    data(){
        return{
            accounts:[],
        }
    },

    methods: {
        async getAccounts() {
            try {
                const response = await axios.get(route('account.getlist'));
                this.accounts = response.data.map((val) => ({
                id: val.id,
                name: val.name,
                created_by: val.created_by,
                }));
            } catch (error) {
                console.error('Error fetching accounts:', error);
            }
            console.log('DD',this.accounts)
        },

        // getEmpByDept(){
        //     axios.get(route('employeeworkschedule.getlist'),{
        //         params:{
        //             divID: this.findDivID,
        //             deptId: this.findDepID
        //         }
        //     }).then(response => {
        //         console.log('EEEEEEEEEEEE',response.data)
        //         this.employees = response.data;

        //     console.log('FFFF',this.employees)
        //     })
        // },
    },



    created(){

        this.getAccounts();
        // this.generatePayrollDays();
        // this.getDivisions();
    },


}



</script>
