<template>
  <div class="flex flex-wrap">
    <div class="w-full px-3">
      <h3 class="text-2xl font-semibold text-gray-700">Employees</h3>
    </div>
    <div class="w-full lg:w-2/12 bg-white rounded-lg mx-2 my-2 shadow-md p-6">
      <side-bar/>
    </div>

    <div class="w-full lg:w-7/12 bg-purple-400 mx-2 rounded-lg my-2 shadow-md p-6">hello</div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      user: null,
    };
  },
  methods: {
    async getUser() {
      let response = await axios.get("/api/employees");
      this.user = response.data;
    }
  },
  mounted() {
    this.getUser();
  }
};
</script>
