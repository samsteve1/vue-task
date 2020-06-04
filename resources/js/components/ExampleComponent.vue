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
        <employees :employees="employees"/>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      employees: []
    };
  },
  async created() {
    await axios.get("/api/employees").then(response => {
      this.employees = response.data.data;
    });
  }
};
</script>
<style scoped>
.custom-label input:checked + svg {
  display: block !important;
}
</style>