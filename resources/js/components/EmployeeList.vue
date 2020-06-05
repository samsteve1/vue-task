<template>
  <div>
    <div class="w-full h-full fixed block top-0 left-0 opacity-75 z-50" v-if="loading">
      <span
        class="text-green-500 opacity-75 top-1/2 my-0 mx-auto block relative w-0 h-0"
        style="top: 50%;"
      >
        <i class="fas fa-circle-notch fa-spin fa-5x"></i>
      </span>
    </div>
    <employees
      :employees="employees"
      @deleting="loading = true"
      @stop_loading="loading = false"
      v-if="ready"
    />
  </div>
</template>

<script>
export default {
  data() {
    return {
      employees: [],
      loading: true,
      ready: false
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
        this.ready = true;
      });
  }
};
</script>