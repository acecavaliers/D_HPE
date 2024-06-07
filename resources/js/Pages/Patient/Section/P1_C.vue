<template>
   <!-- Section C -->
   <div>
    <div class="bg-gray-400 border border-gray-400 p-2">
      <div>
        <span class="text-xm text-black">C. CURRENT AND MAINTENANCE MEDICATIONS</span>
      </div>
    </div>
    <div class="border border-gray-300 p-2 pb-5">
      <div>
        <div class="pt-2 w-full">
          <textarea v-model="pc.name" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Details:"></textarea>
        </div>

      </div>

    </div>
  </div>
</template>
<script>
export default{
    props: { pc: Object  },
}
</script>

