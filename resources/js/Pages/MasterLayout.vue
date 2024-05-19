<template>
    <!--
      This example requires updating your template:

      ```
      <html class="h-full bg-gray-100">
      <body class="h-full">
      ```
    -->
    <div>

      <TransitionRoot as="template" :show="sidebarOpen">
        <Dialog as="div" class="relative z-40 md:hidden" @close="sidebarOpen = false">
          <TransitionChild as="template" enter="transition-opacity ease-linear duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="transition-opacity ease-linear duration-300" leave-from="opacity-100" leave-to="opacity-0">
            <div class="fixed inset-0 bg-gray-600 bg-opacity-75" />
          </TransitionChild>

          <div class="fixed inset-0 z-40 flex">
            <TransitionChild as="template" enter="transition ease-in-out duration-300 transform" enter-from="-translate-x-full" enter-to="translate-x-0" leave="transition ease-in-out duration-300 transform" leave-from="translate-x-0" leave-to="-translate-x-full">
              <DialogPanel class="relative flex w-full max-w-xs flex-1 flex-col bg-white pt-5 pb-4">
                <TransitionChild as="template" enter="ease-in-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in-out duration-300" leave-from="opacity-100" leave-to="opacity-0">
                  <div class="absolute top-0 right-0 -mr-12 pt-2">
                    <button type="button" class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" @click="sidebarOpen = false">
                      <span class="sr-only">Close sidebar</span>
                      <XMarkIcon class="h-6 w-6 text-white" aria-hidden="true" />
                    </button>
                  </div>
                </TransitionChild>
                <div class="flex flex-shrink-0 items-center px-4">

                    <ApplicationLogo class="h-8 w-auto" />


                   <!--  <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" /> -->
                </div>
                <div class="mt-5 h-0 flex-1 overflow-y-auto">
                    <nav class="flex-1 space-y-1 bg-white" aria-label="Sidebar">

                    <template v-for="modulecategory in navigation" :key="modulecategory.id">
                            <div class="text-xs font-semibold leading-6 text-gray-400">{{ modulecategory.name}} </div>


                            <template v-for="item in modulecategory.modules" :key="item.id">

                        <div v-if="!item.has_children == 1">
                            <Link @click="updateModuleCurrentActive(item.id)" :href="route(item.href)" class="group w-full flex items-center pl-2 py-2 text-sm font-medium rounded-md" :class="{ 'navigation_sidebar_active_bg_color navigation_sidebar_active_txt_color': $page.url === '/'+item.href}">
                              <span :class="{'navigation_sidebar_active_txt_color': $page.url === '/'+item.href}" class="mr-3 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500"><font-awesome-icon :icon="'fa-solid '+item.icon" size="lg"/></span>
                              <!--   <component :is="item.icon"  :class="[item.is_current == 1 ? 'text-gray-500' : 'text-gray-400 group-hover:text-gray-500', 'mr-3 flex-shrink-0 h-6 w-6']" aria-hidden="true" /> -->
                            {{ item.name }}
                            </Link>
                        </div>
                        <Disclosure as="div" v-else class="space-y-1" v-slot="{ open }" :default-open="item.submodules.some(item => $page.url == '/'+item.url_name)">

                          <!-- :class="{'bg-gray-100 text-gray-900':$page.url === '/'+item.href}" -->
                          <!--default -- :class="[item.is_current == 1 ? 'bg-gray-100 text-gray-900' : 'bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900', 'group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500'] -->
                            <DisclosureButton class="group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" :class="{'bg-gray-100 text-gray-900':$page.url === '/'+item.href}">
                          <!--   <component :is="item.icon" class="mr-3 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" aria-hidden="true" /> -->
                          <span :class="{'text-gray-500': $page.url === '/'+item.href}" class="mr-3 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500"><font-awesome-icon :icon="'fa-solid '+item.icon" size="lg"/></span>
                          <span class="flex-1">{{ item.name }}</span>

                            <svg :class="[open ? 'text-gray-400 rotate-90' : 'text-gray-300', 'ml-3 h-5 w-5 flex-shrink-0 transform transition-colors duration-150 ease-in-out group-hover:text-gray-400']" viewBox="0 0 20 20" aria-hidden="true">
                                <path d="M6 6L14 10L6 14V6Z" fill="currentColor" />
                            </svg>

                            </DisclosureButton>

                          <!--     <DisclosurePanel class="space-y-1">
                                  <DisclosureButton v-for="subItem in item.submodules" :key="subItem.name" as="a" :href="route(subItem.href)" :class="{'font-black text-black-600 bg-gray-100 hover:bg-black-50 hover:text-black-900': $page.url === '/'+subItem.url_name}" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">{{ subItem.name }}</DisclosureButton>
                             </DisclosurePanel> -->

                             <DisclosurePanel class="space-y-1">
                            <div v-if="item.has_children == 1">
                          <!--  <DisclosureButton v-for="subItem in item.submodules" :key="subItem.name" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">

                              <Link :href="route(subItem.href)">{{ subItem.name }}</Link>
                            </DisclosureButton> -->
                          <!--   <DisclosureButton @click="updateCurrentActive(subItem.id)" v-for="subItem in item.submodules" :key="subItem.name" as="a" :href="route(subItem.href)" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm" :class="[subItem.is_current == 1 ? 'font-black text-black-600 bg-gray-200 hover:bg-black-50 hover:text-black-900': 'font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900']">{{ subItem.name }}</DisclosureButton> -->
                            <Link @click="updateCurrentActive(subItem.id)" v-for="subItem in item.submodules" :key="subItem.name" :href="route(subItem.href)" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm" :class="{'font-black navigation_sidebar_active_txt_color navigation_sidebar_active_bg_color hover:bg-black-50 hover:text-black-900': $page.url === '/'+subItem.url_name}">{{ subItem.name }}</Link>
                          </div>

                          </DisclosurePanel>



                        </Disclosure>
                        </template>
                        </template>
                    </nav>
                </div>
              </DialogPanel>
            </TransitionChild>
            <div class="w-14 flex-shrink-0" aria-hidden="true">
              <!-- Dummy element to force sidebar to shrink to fit close icon -->
            </div>
          </div>
        </Dialog>
      </TransitionRoot>

      <!-- Static sidebar for desktop -->
      <div class="hidden md:fixed md:inset-y-0 md:flex md:w-64 md:flex-col">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex flex-grow flex-col overflow-y-auto border-r border-gray-200 navigation_logo_header_bg_color pt-5">
          <div class="flex flex-shrink-0 items-center px-4 navigation_logo_bg_color">
           <!--  <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" /> -->
           <ApplicationLogo
                class="h-8 w-auto"
            />
          <!--   <h2> &nbsp;&nbsp;&nbsp;&nbsp;HRIS</h2> -->
            <img src='/dm_full_logo_with_tagline_onlytext.png' width="180" height="100"/>
        </div>
          <div class="mt-5 flex flex-grow flex-col navigation_sidebar_bg_color">
          <nav class="flex-1 space-y-1 navigation_sidebar_bg_color" aria-label="Sidebar">

            <template v-for="modulecategory in navigation" :key="modulecategory.id">
              <!--  text-gray-400 -->
                  <div class="text-xs font-semibold leading-6 text-center uppercase navigation_category_txt_color navigation_category_bg_color">{{ modulecategory.name}} </div>
                  <!-- MODULES LIST -->
                  <template v-for="item in modulecategory.modules" :key="item.id">

                    <div v-if="item.has_children == 0">

                      <Link  @click="updateModuleCurrentActive(item.id)" :href="route(item.href)" class="group w-full flex items-center pl-2 py-2 text-sm font-medium rounded-md navigation_sidebar_txt_color" :class="{'navigation_sidebar_active_bg_color navigation_sidebar_active_txt_color': $page.url === '/'+item.href}">
                        <span :class="{'navigation_sidebar_active_txt_color': $page.url === '/'+item.href}" class="navigation_sidebar_icon_txt_color group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"><font-awesome-icon :icon="'fa-solid '+item.icon" size="lg"/></span>

                      <!--   <component :is="item.icon" :class="[item.is_current == 1 ? 'text-gray-500' : 'text-gray-400 group-hover:text-gray-500', 'mr-3 flex-shrink-0 h-6 w-6']" aria-hidden="true" /> -->
                        {{ item.name }}
                      </Link>

                    </div>
                    <!-- :default-open="item.submodules.some(item => item.is_current == 1)" -->
                    <Disclosure as="div" v-else class="space-y-1" v-slot="{ open }"  :default-open="item.submodules.some(item => $page.url == '/'+item.url_name)">


                      <!-- :class="{'bg-gray-100 text-gray-900':$page.url === '/'+item.href}" -->
                      <DisclosureButton class="group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 navigation_sidebar_children_focus_ring_color navigation_sidebar_txt_color navigation_sidebar_children_active_header_bg_color" :class="{'navigation_sidebar_active_bg_color navigation_sidebar_active_txt_color':$page.url === '/'+item.href}">
                        <!-- <component :is="item.icon" class="mr-3 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" aria-hidden="true" /> -->
                        <span :class="{'text-gray-500': $page.url === '/'+item.href}" class="mr-3 h-6 w-6 flex-shrink-0 navigation_sidebar_icon_txt_color group-hover:text-gray-500"><font-awesome-icon :icon="'fa-solid '+item.icon" size="lg"/></span>
                        <span class="flex-1">{{ item.name }}</span>
                        <div v-if="item.has_children == 1">
                          <svg :class="[open ? 'text-gray-400 rotate-90' : 'text-gray-300', 'ml-3 h-5 w-5 flex-shrink-0 transform transition-colors duration-150 ease-in-out group-hover:text-gray-400']" viewBox="0 0 20 20" aria-hidden="true">
                              <path d="M6 6L14 10L6 14V6Z" fill="currentColor" />
                          </svg>
                        </div>
                      </DisclosureButton>
                      <DisclosurePanel class="space-y-1 navigation_sidebar_children_bg_color navigation_sidebar_children_txt_color">
                        <div v-if="item.has_children == 1">
                      <!--  <DisclosureButton v-for="subItem in item.submodules" :key="subItem.name" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">

                          <Link :href="route(subItem.href)">{{ subItem.name }}</Link>
                        </DisclosureButton> -->
                      <!--   <DisclosureButton @click="updateCurrentActive(subItem.id)" v-for="subItem in item.submodules" :key="subItem.name" as="a" :href="route(subItem.href)" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm" :class="[subItem.is_current == 1 ? 'font-black text-black-600 bg-gray-200 hover:bg-black-50 hover:text-black-900': 'font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900']">{{ subItem.name }}</DisclosureButton> -->
                        <Link @click="updateCurrentActive(subItem.id)" v-for="subItem in item.submodules" :key="subItem.name" :href="route(subItem.href)" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm" :class="{'font-black navigation_sidebar_active_txt_color navigation_sidebar_active_bg_color hover:bg-black-50 hover:text-black-900': $page.url === '/'+subItem.url_name}">{{ subItem.name }}</Link>
                      </div>

                      </DisclosurePanel>

                    </Disclosure>
                  </template>
            </template>





      </nav>
          </div>
        </div>
      </div>





      <div class="flex flex-1 flex-col md:pl-64">
        <div class="sticky top-0 z-10 flex h-16 flex-shrink-0 bg-white shadow">
          <button type="button" class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden" @click="sidebarOpen = true">
            <span class="sr-only">Open sidebar</span>
            <Bars3BottomLeftIcon class="h-6 w-6" aria-hidden="true" />
          </button>
          <div class="flex flex-1 justify-between px-4 pageheader_bg_color pageheader_txt_color">
            <div class="flex flex-1 mt-5">

              <h2 class="font-extrabold"><font-awesome-icon :icon="'fa-solid fa-people-roof'" size="lg"/> &nbsp;HUMAN RESOURCE INFORMATION SYSTEM</h2>
            <!--   <form class="flex w-full md:ml-0" action="#" method="GET">
                <label for="search-field" class="sr-only">Search</label>
                <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                  <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center">
                    <MagnifyingGlassIcon class="h-5 w-5" aria-hidden="true" />
                  </div>
                  <input id="search-field" class="block h-full w-full border-transparent py-2 pl-8 pr-3 text-gray-900 placeholder-gray-500 focus:border-transparent focus:placeholder-gray-400 focus:outline-none focus:ring-0 sm:text-sm" placeholder="Search" type="search" name="search" />
                </div>
              </form> -->
            </div>
            <div class="ml-4 flex items-center md:ml-6">
              <button type="button" class="rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <span class="sr-only">View notifications</span>
                <BellIcon class="h-6 w-6" aria-hidden="true" />
              </button>

              <!-- Profile dropdown -->
              <Menu as="div" class="relative ml-3">
                <div>
                  <MenuButton class="flex max-w-xs items-center rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                  </MenuButton>
                </div>
                <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
                  <MenuItems class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                    <MenuItem v-for="item in userNavigation" :key="item.name" v-slot="{ active }">
                      <span v-if="!item.name == 'Sign out'">
                        <a :href="item.href" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">{{ item.name }}</a>
                      </span>
                      <span v-else>
                        <Link
                        :href="item.href"
                        method="post"
                        :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']"
                        >{{ item.name }}</Link>
                      </span>



                    </MenuItem>
                  </MenuItems>
                </transition>
              </Menu>
            </div>
          </div>
        </div>

        <main class="flex-1">
          <div>
            <div class="mx-auto px-4 sm:px-6 md:px-8 py-5 navbar_bg_color">
              <h1 class="text-2xl font-semibold navbar_txt_color">
                <slot name="header" />
              </h1>
            </div>
            <!-- mx-auto px-4 sm:px-6 md:px-8 -->
            <div class="mx-auto">
              <!-- Replace with your content -->
         <!--      <div class="py-4">
                <div class="h-96 rounded-lg border-4 border-dashed border-gray-200" />
              </div> -->


              <slot />
              <!-- /End replace -->

            </div>
          </div>
        </main>
      </div>
    </div>

    <span v-if="autologoutenabled">
      <AutoLogout></AutoLogout>
    </span>



  </template>

  <script setup>
  import { ref } from 'vue'
  import {
    Dialog,
    DialogPanel,
    Menu,
    MenuButton,
    MenuItem,
    MenuItems,
    TransitionChild,
    TransitionRoot,
  } from '@headlessui/vue'
  import {
    Bars3BottomLeftIcon,
    BellIcon,
    CalendarIcon,
    ChartBarIcon,
    FolderIcon,
    HomeIcon,
    InboxIcon,
    UsersIcon,
    XMarkIcon,
  } from '@heroicons/vue/24/outline'
  import { MagnifyingGlassIcon } from '@heroicons/vue/20/solid'
  import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
  import ApplicationLogo from '@/Components/ApplicationLogo.vue';
  import { Link } from '@inertiajs/vue3';
import axios from 'axios'
import AutoLogout from '@/Pages/AutoLogout.vue';
import getThemeColor from '@/Hooks/getThemeColor.js';

  const sidebarOpen = ref(false)
  const userNavigation = [
  { name: 'Your profile', href: route('profile.edit') },
  { name: 'Sign out', href: route('logout') },
]

  </script>



<script>
export default {

    data(){
        return {
            navigation: [],
            currentactivesidebar: [],
            modulecategories: [],
            autologoutenabled: false,
            themecolorsettings: [],
           
           

        }
    },

    methods: {

        async getThemeColorSelected(){
          this.themecolorsettings = (await getThemeColor()).responseData
         
          document.documentElement.style.setProperty('--navigation_sidebar_bg_color', this.themecolorsettings.navigation_sidebar_bg_color)
          document.documentElement.style.setProperty('--navigation_logo_bg_color', this.themecolorsettings.navigation_logo_bg_color)
          document.documentElement.style.setProperty('--navigation_logo_header_bg_color', this.themecolorsettings.navigation_logo_header_bg_color)
          document.documentElement.style.setProperty('--navigation_category_bg_color', this.themecolorsettings.navigation_category_bg_color)
          document.documentElement.style.setProperty('--navigation_category_txt_color', this.themecolorsettings.navigation_category_txt_color)
          document.documentElement.style.setProperty('--navigation_sidebar_txt_color', this.themecolorsettings.navigation_sidebar_txt_color)
          document.documentElement.style.setProperty('--navigation_sidebar_icon_txt_color', this.themecolorsettings.navigation_sidebar_icon_txt_color)
          document.documentElement.style.setProperty('--navigation_sidebar_children_bg_color', this.themecolorsettings.navigation_sidebar_children_bg_color)
          document.documentElement.style.setProperty('--navigation_sidebar_children_txt_color', this.themecolorsettings.navigation_sidebar_children_txt_color)
          document.documentElement.style.setProperty('--navigation_sidebar_children_focus_ring_color', this.themecolorsettings.navigation_sidebar_children_focus_ring_color)
          document.documentElement.style.setProperty('--navigation_sidebar_active_bg_color', this.themecolorsettings.navigation_sidebar_active_bg_color)
          document.documentElement.style.setProperty('--navigation_sidebar_active_txt_color', this.themecolorsettings.navigation_sidebar_active_txt_color)
          document.documentElement.style.setProperty('--navigation_sidebar_children_active_header_bg_color', this.themecolorsettings.navigation_sidebar_children_active_header_bg_color)
          document.documentElement.style.setProperty('--navbar_bg_color', this.themecolorsettings.navbar_bg_color)
          document.documentElement.style.setProperty('--navbar_txt_color', this.themecolorsettings.navbar_txt_color)
          document.documentElement.style.setProperty('--pageheader_bg_color', this.themecolorsettings.pageheader_bg_color)
          document.documentElement.style.setProperty('--pageheader_txt_color', this.themecolorsettings.pageheader_txt_color)
          

        },

        getModuleCategories(){
          axios.get(route('modulecategory.getlistactive')).then(response => {
            this.modulecategories = response.data;
        
          })
        },

        getNavigation(){
            axios.get(route('modules')).then(response => {
                this.navigation = response.data;
          

            })
        },

        updateCurrentActive(submoduleID, item){

          axios.patch(route('submodule.updatecurrentactive'), {
            id: submoduleID
          }).then(response => {

         /*    this.emitter.emit('currentSidebar', item) */
          })

        },

        updateToDefault(){
          axios.patch(route('module.updateDefault')).then(respones => { this.emitter.emit('goBacktoDashboard');})
        },



        updateModuleCurrentActive(moduleID){
          axios.patch(route('module.updatecurrentactive'), {
            id: moduleID
          }).then(response => {
         /*    this.emitter.emit('currentSidebar', response.data) */
          })
        },

       



      /*   getcurrentactive(){
          axios.get('/getcurrentactive').then(response => {
            this.currentactivesidebar = response.data;
            this.emitter.emit('getcurrentactive', response.data)
          })
        } */






    },

    mounted(){
     /*  axios.get('/get-permissions').then(
        response => {
          window.Laravel.jsPermissions = response.data;
        
        }
      ); */
    },

  
    created(){
      this.getModuleCategories();
        this.getNavigation();
        this.getThemeColorSelected();

    }



}

</script>


<style>


</style>
