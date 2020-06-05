<template>
  <div>
    <div class="w-full h-full fixed block top-0 left-0 opacity-75 z-50" v-if="submitting">
      <span
        class="text-pink-600 opacity-75 top-1/2 my-0 mx-auto block relative w-0 h-0"
        style="top: 50%;"
      >
        <i class="fas fa-circle-notch fa-spin fa-5x"></i>
      </span>
    </div>
    <form class="bg-white shadow-md rounded px-8 pt-3 pb-8 mb-4 w-full lg:w-2/3 mx-auto">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Name</label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="name"
          name="name"
          type="text"
          v-model="form.name"
          v-validate="'required'"
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
          v-validate="'required'"
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
          :class="{'disabled': submitting}"
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
        name: this.employee.name,
        job_title: this.employee.job_title,
        salary: this.employee.salaryAmount,
        work_type: this.employee.work_type,
        status: this.employee.status
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
            .patch(`/api/employees/${this.employee.id}`, this.form)
            .then(response => {
              window.location = '/'
              console.log(response)
            })
            .catch(() => {
              alert("something went wront...check the console!");
            })
            .finally(() => {
              this.submitting = false;
            });
        } else {
          // display error
        }
      });
    }
  },
  props: {
      employee: {
          type: Object,
          required: true
      }
  }
};
</script>