<template>
    <nav class="flex items-center justify-between flex-wrap bg-white p-1 sm:p-3 rounded-t-lg shadow-md">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
              <img src="/images/logo2.png" width="50px" height="50px" alt="logo">
              <span class="font-bold text-3xl tracking-tight text-gray-800">Vue-Task</span>
            </div>
            <div class="block lg:hidden">
              <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white" @click="toggle">
                <svg class="fill-current text-black h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
              </button>
            </div>
            <div class="w-full flex-grow sm:flex sm:items-center sm:w-auto" :class="open ? 'block': 'hidden'">
              <div class="text-sm sm:flex-grow">
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0  hover:text-teal-600 mr-12 text-lg text-gray-900 border-b-2 border-teal-600">
                  Employee
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-600 hover:text-teal-600 mr-12 text-lg">
                  Calendar
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-600 hover:text-teal-600 mr-12 text-lg">
                  Static
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-600 hover:text-teal-600 mr-12 text-lg">
                  Client
                </a>
              </div>
              <div>
                <span><i class="fa fa-bell text-2xl text-gray-500 lg:mx-4 sm:my-2"></i></span>
              </div>
              <div>
                <span><i class="fa fa-envelope text-2xl text-gray-500 lg:mx-4 sm:my-2"></i></span>
              </div>
              <div>
                <img src="https://via.placeholder.com/50" class="rounded-full sm:my-4 lg:mx-2 sm:mx-0" alt="user">
              </div>
            </div>
          </nav>
</template>
<script>
export default {
    data() {
        return {
            open:false
        }
    },
    methods: {
        toggle() {
    	this.open = !this.open
    }
    },
}
</script>