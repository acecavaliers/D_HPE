<template>



<TransitionRoot as="template" :show="open">
    <Dialog as="div" class="relative z-10" @close="open = false">
      <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" />
      </TransitionChild>

      <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
          <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200" leave-from="opacity-100 translate-y-0 sm:scale-100" leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            <DialogPanel class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-xl sm:p-6">
<!--                 <DialogPanel class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all xl:my-8 xl:w-full xl:max-w-[50%] xl:p-6"> -->
                <div>
               
                <div class="mt-3 text-center sm:mt-5">
                  <DialogTitle as="h3" class="text-base font-semibold leading-6 text-gray-900">SIGNATURE PAD</DialogTitle>
                  <div class="mt-2">
                   <!-- CONTENT -->
                   <Vue3Signature  ref="signature1" :sigOption="state.option" :w="'500px'" :h="'300px'"
                   :disabled="state.disabled" class="example"></Vue3Signature>

                   <span class="isolate inline-flex rounded-md shadow-sm">
                       <!--  <button @click="save('image/jpeg')" type="button" class="relative inline-flex items-center rounded-l-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">SAVE</button> -->
                        <button @click="clear" type="button" class="relative -ml-px inline-flex items-center bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">CLEAR</button>
                        <button @click="undo" type="button" class="relative -ml-px inline-flex items-center rounded-r-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">UNDO</button>
                    </span>
                   <!--  <button @click="save('image/jpeg')">Save</button>
                    <button @click="clear">Clear</button>
                    <button @click="undo">Undo</button>
                    <button @click="addWaterMark">addWaterMark</button>
                    <button @click="fromDataURL">fromDataURL</button>
                    <button @click="handleDisabled">disabled</button> -->
                  </div>
                </div>
              </div>
              <div class="mt-5 sm:mt-6 sm:grid sm:grid-flow-row-dense sm:grid-cols-2 sm:gap-3">
                <button type="button" class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:col-start-2" @click="save('image/jpeg')">OK</button>
                <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:col-start-1 sm:mt-0" @click="open = false" ref="cancelButtonRef">Cancel</button>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>




  
  </template>
  
  <script setup>
  import { Dialog, DialogPanel, DialogTitle, TransitionChild, TransitionRoot } from '@headlessui/vue'
  import {reactive, ref} from 'vue'
  import Vue3Signature from "vue3-signature"
/*   const signature1 = ref(null) */
  </script>

  <script>
    export default {
        data(){
            return{
                open: false,
                columnname: '',
                state: reactive({
                        count: 0,
                        option: {
                        penColor: "rgb(0, 0, 0)",
                        backgroundColor: "rgb(255,255,255)"
                        },
                        disabled: false
                    })
            }
        },

        methods: {
            
            save(t){ 
                //console.log(this.$refs.signature1.save(t))
             /*    var mydata = {
                    columnname: this.columnname,
                    data: this.$refs.signature1.save(t)
                } */

                
                this.emitter.emit('openSignaturePad', false)
                this.emitter.emit('getSignature',this.$refs.signature1.save(t))
              
            },

            clear(){
                this.$refs.signature1.clear()
            },

            undo(){
                this.$refs.signature1.undo();
            },
           /*  fromDataURL(url){
                signature1.value.fromDataURL("https://avatars2.githubusercontent.com/u/17644818?s=460&v=4");
            },
            handleDisabled(){
                this.state.disabled = !this.state.disabled
            },
            addWaterMark(){
                signature1.value.addWaterMark({
                    text: "DADIANGAS MEDICAL CENTER",          // watermark text, > default ''
                    font: "30px Arial",         // mark font, > default '20px sans-serif'
                    style: 'stroke',               // fillText and strokeText,  'all'/'stroke'/'fill', > default 'fill
                    fillStyle: "blue",           // fillcolor, > default '#333'
                    strokeStyle: "blue",	       // strokecolor, > default '#333'
                    x: 100,                     // fill positionX, > default 20
                    y: 200,                     // fill positionY, > default 20
                    sx: 100,                    // stroke positionX, > default 40
                    sy: 200                     // stroke positionY, > default 40
                    });
            } */
        },

        created() {
            this.emitter.on('openSignaturePad', (evt) => {
                this.open = evt;
              

            })
        }
    }


</script>
  
  <style scoped>
  .example{
    margin: 0 auto;
  }
  </style>