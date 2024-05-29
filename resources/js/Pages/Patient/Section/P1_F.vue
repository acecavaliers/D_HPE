<template>
  <!-- Section F -->
  <div class="flex-1">
    <div class="bg-gray-400 border border-gray-400 p-2">
      <div>
        <span class="text-xm text-black"> F. FAMILY HISTORY</span>
      </div>
    </div>
    <div class="p-2">
        <div  v-for="(fh, index) in records" :key="index">
            <div v-if="fh.with_input == 0" class="right-0 w-full">
                <div class="flex-none mt-1.5">
                    <input
                    class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                    type="checkbox"
                    />
                    <label
                    class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                    > {{  fh.name }}
                    </label>
                </div>
            </div>
            <div v-else class="right-0 w-full flex sm:items-left sm:justify-between">
                <div class="flex-none mt-1.5">
                    <input
                    class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                    type="checkbox"
                    />
                    <label
                    class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                    >{{  fh.name }}:
                    </label>
                </div>
                <div class="w-full">
                <input
                    class="w-full text-sm text-gray-900 bg-transparent bg-transparent border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    type="text"/>
                </div>
            </div>
        </div>
        <div class="right-0 w-full flex sm:items-left sm:justify-between">
            <div class="flex-none mt-1.5">
                <input
                class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                type="checkbox"
                />
                <label
                class="text-sm text-gray-800 uration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                >Others:
                </label>
            </div>
            <div class="w-full">
            <input
                class="w-full text-sm text-gray-900 bg-transparent bg-transparent border-0 border-b  pb-0 mt-0.5  border-gray-600 appearance-none appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                type="text"/>
            </div>
        </div>






    </div>
  </div>
</template>
<script>
    export default{
        props: {pf:Array},
        data(){
            return{
                records: [],
            }

        },
        methods: {
            async getData() {
            try {
                const response = await axios.get(route('fh.getlistAdd'));
                this.records = response.data;
                console.log('HHHHHHHHHHHHHHH:', this.records);
            } catch (error) {
                console.error('Error fetching records:', error);
            }
            },
        },
        mounted() {
            this.getData();
        },

    }
</script>
