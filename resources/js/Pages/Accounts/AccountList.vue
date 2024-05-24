<template>
    <div>

      <div class="relative overflow-x-auto border">
        <table class="w-full text-sm text-left text-gray-500 p-2 uppercase ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200">
            <tr class="border-b">
                <th scope="col" class="px-6 py-3 w-24">Id</th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Account Name
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
            <tr v-for="(item, index) in accounts.data" :key="index" class="bg-white border-b hover:bg-gray-50">
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
                    <button type="button" class="mr-2 rounded-lg relative inline-flex px-3 py-3 text-xs text-gray-900 hover:bg-gray-400 hover:text-white focus:z-10"><font-awesome-icon icon="fa-solid fa-eye" class="h-5 w-5" /></button>
                    <button type="button" class="mr-2 rounded-lg relative inline-flex px-3 py-3 text-xs text-blue-500 hover:bg-blue-500 hover:text-white focus:z-10"><font-awesome-icon icon="fa-solid fa-pen-to-square" class="h-5 w-5" /></button>
                    <button type="button" class="mr-2 rounded-lg relative inline-flex px-3 py-3 text-xs text-red-500 hover:bg-red-500 hover:text-white focus:z-10"><font-awesome-icon icon="fa-solid fa-trash" class="h-5 w-5" /></button>
                </span>
                </td>
            </tr>
            </tbody>
        </table>
      </div>
    </div>
    <div class="flex justify-end items-center p-4 bg-white">
      <button :disabled="!accounts.prev_page_url" @click="fetchAccounts(accounts.prev_page_url)" class="px-3 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600" :class="{'opacity-50': !accounts.prev_page_url}">
        Previous
      </button>
      <span class="mx-3">Page {{ accounts.current_page }} of {{ accounts.last_page }}</span>
      <button :disabled="!accounts.next_page_url" @click="fetchAccounts(accounts.next_page_url)" class="px-3 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600" :class="{'opacity-50': !accounts.next_page_url}">
        Next
      </button>
    </div>
  </template>

  <script setup>
  import { ref } from 'vue';
  import axios from 'axios';

  const accounts = ref({
    data: [],
    current_page: 1,
    last_page: 1,
    next_page_url: null,
    prev_page_url: null,
  });

  const fetchAccounts = async (url = null) => {
    try {
      const response = await axios.get(url || route('account.getlist'));
      accounts.value = response.data;
    } catch (error) {
      // console.error('Error fetching accounts:', error);
    }
  };

  fetchAccounts();
  </script>

  <script>
  export default {
    name: 'AccountList',
    data() {
      return {
        accounts: [],
      };
    },
    created() {
      // this.fetchAccounts();
    },
    methods: {
      // async fetchAccounts(url = null) {
      //   try {
      //     const response = await axios.get(url || route('account.getlist'));
      //     this.accounts = response.data;
      //   } catch (error) {
      //     console.error('Error fetching accounts:', error);
      //   }
      // },
    },
  };
  </script>
