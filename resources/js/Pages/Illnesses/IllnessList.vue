<template>
    <div>

      <div class="relative overflow-x-auto border">
        <table class="w-full text-sm text-left text-gray-500 p-2 uppercase ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200">
            <tr class="border-b">
                <th scope="col" class="px-6 py-3 w-24">Id</th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Name
                        <a href="#">
                            <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                            </svg>
                        </a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3 w-24">
                    <div class="flex items-center">
                        Status
                        <a href="#">
                            <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                            </svg>
                        </a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3 w-48">
                    <div class="flex items-center">
                        Created By
                        <a href="#">
                            <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                            </svg>
                        </a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3 w-48">
                    <div class="flex items-center">
                        Updated By
                        <a href="#">
                            <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                            </svg>
                        </a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3 w-40">
                    <div class="flex items-center">
                        Created at
                        <a href="#">
                            <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                            </svg>
                        </a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3 w-40">
                    <div class="flex items-center">
                        Updated at
                        <a href="#">
                            <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                            </svg>
                        </a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3 w-40 text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(item, index) in records.data" :key="index" class="bg-white border-b hover:bg-gray-50">
                <td class="px-6 py-4">{{ item.id.toString().padStart(6, '0') }}</td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ item.name }}</th>
                <td class="px-6 py-4">
                <span v-if="item.is_active == 1" class="inline-flex items-center gap-x-1.5 rounded-full bg-green-100 px-2 py-1 text-xs font-medium text-green-700">
                    <svg class="h-1.5 w-1.5 fill-green-500" viewBox="0 0 6 6" aria-hidden="true">
                    <circle cx="3" cy="3" r="3" />
                    </svg>
                    Active
                </span>
                <span v-else class="inline-flex items-center gap-x-1.5 rounded-full bg-red-100 px-2 py-1 text-xs font-medium text-red-700">
                    <svg class="h-1.5 w-1.5 fill-red-500" viewBox="0 0 6 6" aria-hidden="true">
                    <circle cx="3" cy="3" r="3" />
                    </svg>
                    Inactive
                </span>
                </td>
                <td class="px-6 py-4">{{ item.created_by }}</td>
                <td class="px-6 py-4">{{ item.updated_by }}</td>
                <td class="px-6 py-4">{{ item.created_at.substring(0,10) }}</td>
                <td class="px-6 py-4">{{ item.updated_at.substring(0,10) }}</td>
                <td class="relative whitespace-nowrap px-2 py-4 text-right text-sm font-medium sm:pr-0">
                <span class="isolate inline-flex">
                    <a href="illnesschild" class="mr-2 rounded-lg relative inline-flex px-3 py-3 text-xs text-gray-900 hover:bg-gray-400 hover:text-white focus:z-10"><font-awesome-icon icon="fa-solid fa-eye" class="h-5 w-5" /></a>
                    <button type="button" @click="openModal(item.name,item.id)"  class="mr-2 rounded-lg relative inline-flex px-3 py-3 text-xs text-blue-500 hover:bg-blue-500 hover:text-white focus:z-10"><font-awesome-icon icon="fa-solid fa-pen-to-square" class="h-5 w-5" /></button>
                    <button type="button" class="mr-2 rounded-lg relative inline-flex px-3 py-3 text-xs text-red-500 hover:bg-red-500 hover:text-white focus:z-10"><font-awesome-icon icon="fa-solid fa-trash" class="h-5 w-5" /></button>
                </span>
                </td>
            </tr>
            </tbody>
        </table>
      </div>
    </div>
    <div class="flex justify-end items-center p-4">
      <button :disabled="!records.prev_page_url" @click="fetchAccounts(records.prev_page_url)" class="px-3 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600" :class="{'opacity-50': !records.prev_page_url}">
        Previous
      </button>
      <span class="mx-3">Page {{ records.current_page }} of {{ records.last_page }}</span>
      <button :disabled="!records.next_page_url" @click="fetchAccounts(records.next_page_url)" class="px-3 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600" :class="{'opacity-50': !records.next_page_url}">
        Next
      </button>
      <Modal :title="modalTitle" :isVisible="showModal" @close="handleModalClose">
        <div v-if="selectedIllness.length">
            <div v-for="(illness, index) in selectedIllness" :key="index">
                <div class="border-b mb-2">
                    <div class="mb-2 flex justify-between">
                        <div class="relative w-full">
                            <label>{{ index+1 }}. {{ illness.name }}</label>
                        </div>

                        <span v-if="illness.is_active == 1">
                            <label class="inline-flex items-center cursor-pointer">
                                <input
                                    checked
                                    @click="confirm(illness.name)"
                                    type="checkbox"
                                    class="sr-only peer"/>
                                <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-2 peer-focus:ring-blue-300 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                <span class="ms-3 text-sm font-medium text-gray-700">Active</span>
                            </label>
                        </span>
                        <span v-else>
                            <label class="inline-flex items-center cursor-pointer">
                                <input
                                    type="checkbox"
                                    @click="confirm(illness.name)"
                                    class="sr-only peer"/>
                                <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-2 peer-focus:ring-blue-300 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                <span class="ms-3 text-sm font-medium text-gray-700">Active</span>
                            </label>
                        </span>
                    </div>


                </div>


            </div>
        </div>
        <div v-else><h2> <i> No Illness </i></h2></div>
        <div class="mt-2 flex justify-end">
            <button type="button" @click="removeSymptom(index)" class="text-white mr-2 bg-blue-500 hover:bg-blue-800 font-medium rounded text-sm w-24 p-2 text-center">
                Save
            </button>
            <button type="button" @click="handleModalClose()" class="text-white ml-2 bg-gray-500 hover:bg-gray-800 font-medium rounded text-sm w-24 p-2 text-center">
                Cancel
            </button>
        </div>
     </Modal>

     <Confirmation :title="confirmitemName" :isOpen="confim" @close="confirm">

    </Confirmation>
    </div>
  </template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';
import Modal from '@/Layouts/Modal.vue';
import Confirmation from '@/Layouts/Confirmation.vue';

const records = ref({
    data: [],
    current_page: 1,
    last_page: 1,
    next_page_url: null,
    prev_page_url: null,
});
const showModal = ref(false);
const modalTitle = ref('');
const selectedIllness = ref([]);

function handleFormSubmitted() {
    listKey.value++;
    showModal.value = false;
}

function handleModalClose() {
    showModal.value = false;
}
const fetchIllnessData = async (id) => {
  try {
    const response = await axios.get(route('illness.getlistChild', {search: id}));
    selectedIllness.value = response.data;
    console.log('DDDDDDDDDD', this.selectedIllness)
  } catch (error) {
    console.error('Error fetching illness data:', error);
  }
};
function openModal(item,id) {
  modalTitle.value = item;
  fetchIllnessData(id); // Fetch illness data when modal is opened
  showModal.value = true;
}

const fetchAccounts = async (url = null) => {
    try {
        const response = await axios.get(url || route('illness.getlist'));
        records.value = response.data;
    } catch (error) {
        console.error('Error fetching records:', error);
    }
};

fetchAccounts();
</script>

  <script>
  export default {
    name: 'AccountList',
    data() {
      return {
        records: [],
        confim: false,
        confirmitemName:'',
        // modalTitle:'',
      };
    },
    created() {
      this.fetchAccounts();
    },
    methods: {
        confirm(name){
            this.confirmitemName=name
            this.confim = !this.confim;

        },
      async fetchAccounts(url = null) {
        try {
          const response = await axios.get(url || route('illness.getlist'));
          this.records = response.data;
        } catch (error) {
          console.error('Error fetching records:', error);
        }
      },
    },
  };
  </script>
