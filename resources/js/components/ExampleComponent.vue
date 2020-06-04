<template>
  <div class="flex flex-wrap">
    <div class="w-full px-3">
      <h3 class="text-2xl font-semibold text-gray-700">Employees</h3>
    </div>
    <div class="w-full lg:w-2/12 bg-white rounded-lg mx-2 my-2 shadow-md p-6">
      <side-bar />
    </div>
    <div class="w-full lg:w-7/12 bg-white mx-2 rounded-lg my-2 shadow-md p-6">
      <div class="flex justify-end">
        <button
          class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 lg:px-4 px-2 rounded-full"
        >Add Employee</button>
      </div>
      <div class="w-full mt-2 overflow-x-auto bg-gray-200">
        <div class="w-full h-full fixed block top-0 left-0 opacity-75 z-50" v-if="loading">
          <span
            class="text-green-500 opacity-75 top-1/2 my-0 mx-auto block relative w-0 h-0"
            style="top: 50%;"
          >
            <i class="fas fa-circle-notch fa-spin fa-5x"></i>
          </span>
        </div>
        <employees :employees="employees" />
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      employees: [],
      loading: true
    };
  },
  async created() {
    await axios
      .get("/api/employees")
      .then(response => {
        this.employees = response.data.data;
      })
      .finally(() => {
        this.loading = false;
      });
  }
};
</script>
