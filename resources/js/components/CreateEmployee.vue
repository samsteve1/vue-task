<template>
  <div>
    <form class="bg-white shadow-md rounded px-8 pt-3 pb-8 mb-4 w-full lg:w-2/3 mx-auto">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Name</label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="name"
          name="name"
          type="text"
          v-model="form.name"
          v-validate="'required|alpha'"
        />
        <p class="text-sm text-red-500" v-if="errors.has('name')">{{ errors.first('name') }}</p>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="job_title">Job Title</label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="job_title"
          name="job_title"
          type="text"
          v-model="form.job_title"
          v-validate="'required'"
        />
        <p
          class="text-sm text-red-500"
          v-if="errors.has('job_title')"
        >{{ errors.first('job_title') }}</p>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="salary">Salary</label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="salary"
          name="salary"
          type="number"
          v-model="form.salary"
          v-validate="'required|numeric'"
        />
        <p class="text-sm text-red-500" v-if="errors.has('salary')">{{ errors.first('salary') }}</p>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="work_type">Work Type</label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="work_type"
          name="work_type"
          type="text"
          v-model="form.work_type"
          v-validate="'required'"
        />
        <p
          class="text-sm text-red-500"
          v-if="errors.has('work_type')"
        >{{ errors.first('work_type') }}</p>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="status">Status</label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="status"
          name="status"
          type="text"
          v-model="form.status"
          v-validate="'required'"
        />
        <p class="text-sm text-red-500" v-if="errors.has('status')">{{ errors.first('status') }}</p>
      </div>

      <div class="flex items-center justify-between">
        <button
          class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
          type="button"
          @click.prevent="submit"
        >Add Employee</button>
      </div>
    </form>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      form: {
        name: "",
        job_title: "",
        salary: "",
        work_type: "",
        status: ""
      },
      submitting: false
    };
  },
  methods: {
    async submit() {
      this.$validator.validateAll().then(async res => {
        if (res) {
          // validation successful
          this.submitting = true;
          await axios
            .post("/api/employees", this.form)
            .then(response => {})
            .catch(() => {
              alert("something went wront...check the console!");
            })
            .finally(() => {
              this.submitting = false;
            });
        } else {
          // throw error
        }
      });
    }
  }
};
</script>