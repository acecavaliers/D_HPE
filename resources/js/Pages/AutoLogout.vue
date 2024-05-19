<template>

<TransitionRoot as="template" :show="warningZone">
    <Dialog as="div" class="relative z-10" @close="warningZone = false">
      <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" />
      </TransitionChild>

      <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
          <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200" leave-from="opacity-100 translate-y-0 sm:scale-100" leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            <DialogPanel class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
              <div>
                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full">
                  <!-- <CheckIcon class="h-6 w-6 text-green-600" aria-hidden="true" /> -->
                  <font-awesome-icon icon="fa-solid fa-user-clock" class="-ml-0.5 h-5 w-5"/>
                </div>
                <div class="mt-3 text-center sm:mt-5">
                  <DialogTitle as="h3" class="text-base font-semibold leading-6 text-gray-900">You've been idle for {{warningShowSeconds}} seconds</DialogTitle>
                  <div class="mt-2">
                    <p class="text-sm text-gray-500">Logging out in... {{ countDown }} seconds</p>
                  </div>
                </div>
              </div>
             <!--  <div class="mt-5 sm:mt-6">
                <button type="button" class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" @click="open = false">Go back to dashboard</button>
              </div> -->
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</template>

<script setup>
import { ref } from 'vue'
import { Dialog, DialogPanel, DialogTitle, TransitionChild, TransitionRoot } from '@headlessui/vue'
import { CheckIcon } from '@heroicons/vue/24/outline'



</script>


<script>
export default {
    name: 'Autologout',

    data(){
        return {
            events: ['click', 'mousemove', 'mousedown', 'scroll', 'keypress', 'load'],
            warningTimer: null,
            logoutTimer: null,
            warningZone: false,
            countDown:10,
            warningShowSeconds: 5,
            logoutTimerSeconds: 10,
            countdowntimer: null,
           
        }
    },

    mounted(){
        this.events.forEach((event) => {
            window.addEventListener(event, this.resetTimer);
        }, this)
      
        this.setTimers();
    },

    destroyed(){
        this.events.forEach((event) => {
            window.removeEventListener(event, this.resetTimer);
        }, this)
        this.resetTimer();
    },

    methods: {
        setTimers(){
           
            this.warningTimer = setTimeout(this.warningMessage, this.warningShowSeconds*1000);
           
            this.warningZone = false;
           
        },

        warningMessage(){
            this.warningZone = true;
            this.logoutTimer = setTimeout(this.logoutUser, this.logoutTimerSeconds*1000);
            this.countDownTimer();
           
        },

        logoutUser(){
            axios.post(route('logout')).then(response => { 
                window.location.reload()
            })
            .catch(error => {
                console.log(error);
            });
        },

        resetTimer(){
            clearTimeout(this.warningTimer);
            clearTimeout(this.logoutTimer);
            clearTimeout(this.countdowntimer);
            this.countDown = this.logoutTimerSeconds;
            this.setTimers();

        },

        countDownTimer () {
            if (this.countDown > 0) {
               this.countdowntimer= setTimeout(() => {
                    this.countDown = this.countDown - 1
                    this.countDownTimer()
                }, 1000)
            }
        }
    },

}





</script>
