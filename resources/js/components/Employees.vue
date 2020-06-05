<template>
  <div>
    <table class="min-w-full leading-normal">
      <thead>
        <tr>
          <th
            class="border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
          >
            <label class="custom-label flex">
              <div
                class="bg-white rounded-lg shadow w-6 h-6 p-1 flex justify-center items-center mr-2 border-2"
              >
                <input type="checkbox" class="hidden" />
                <svg
                  class="hidden w-4 h-4 text-green-600 pointer-events-none"
                  viewBox="0 0 172 172"
                >
                  <g
                    fill="none"
                    stroke-width="none"
                    stroke-miterlimit="10"
                    font-family="none"
                    font-weight="none"
                    font-size="none"
                    text-anchor="none"
                    style="mix-blend-mode:normal"
                  >
                    <path d="M0 172V0h172v172z" />
                    <path
                      d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                      fill="currentColor"
                      stroke-width="1"
                    />
                  </g>
                </svg>
              </div>
              <span class="select-none"></span>
            </label>
          </th>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
          >
            EMPLOYEE
            <i class="fa fa-arrow-up text-gray-400"></i>
          </th>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
          >
            SALARY
            <i class="fa fa-arrow-up text-gray-400"></i>
          </th>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
          >
            STATUS
            <i class="fa fa-arrow-down text-gray-700"></i>
          </th>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
          >MANAGE</th>
        </tr>
      </thead>
      <tbody>
        <tr class="bg-white border-b-8" v-for="employee in local" :key="employee.id">
          <td>
            <label class="custom-label flex">
              <div
                class="bg-white rounded-lg shadow w-6 h-6 p-1 flex justify-center items-center mr-2 border-2"
              >
                <input type="checkbox" class="hidden" />
                <svg
                  class="hidden w-4 h-4 text-green-600 pointer-events-none"
                  viewBox="0 0 172 172"
                >
                  <g
                    fill="none"
                    stroke-width="none"
                    stroke-miterlimit="10"
                    font-family="none"
                    font-weight="none"
                    font-size="none"
                    text-anchor="none"
                    style="mix-blend-mode:normal"
                  >
                    <path d="M0 172V0h172v172z" />
                    <path
                      d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                      fill="currentColor"
                      stroke-width="1"
                    />
                  </g>
                </svg>
              </div>
              <span class="select-none"></span>
            </label>
          </td>
          <td class="py-5 text-sm flex inline-flex items-center">
            <span>
              <img
                class="hidden mr-1 md:mr-2 md:inline-block h-8 w-8 rounded-full object-cover"
                :src="employee.avatar"
                :alt="employee.name"
              />
            </span>
            <span class="py-3 w-40">
              <p class="text-gray-800 text-sm">{{ employee.name }}</p>
              <p class="text-xs text-gray-500 font-medium">{{ employee.job_title }}</p>
            </span>
          </td>
          <td class="px-5 py-5 text-sm">
            <p class="text-gray-900 whitespace-no-wrap">
              {{ employee.salary }}
              <span
                class="rounded-full text-xs px-1 text-white font-light"
                :class="[{' bg-teal-500' : employee.id % 2 == 0}, {' bg-red-500' : employee.id % 2 != 0}]"
              >{{ employee.id % 2 == 0 ? '+300' : '-25'}}</span>
            </p>
            <p class="text-xs text-gray-500 font-medium">{{ employee.type }}</p>
          </td>
          <td class="px-5 py-5 text-sm">
            <p class="text-gray-900 whitespace-no-wrap">{{ employee.status}}</p>
            <p class="text-xs text-gray-500 font-medium">{{ employee.created_at}}</p>
          </td>
          <td class="p-5 text-sm flex inline-flex items-center">
            <span class="mr-2">
              <a href="#" @click.prevent="redirect(employee.id)">
                <i class="fa fa-pen text-teal-400 text-2xl"></i>
              </a>
            </span>
            <span>
              <i class="fa fa-ellipsis-v text-gray-300 text-xl"></i>
            </span>
            <span class="ml-2">
              <a href="#" @click.prevent="deleteEmployee(employee.id)">
                <i class="fa fa-trash text-red-400 text-xl"></i>
              </a>
            </span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from "axios";
export default {
  props: {
    employees: {
      type: Array,
      required: true
    }
  },
  data() {
    return {
      local: this.employees
    };
  },
  methods: {
    async deleteEmployee(id) {
      this.$emit("deleting");
      await axios
        .delete(`/api/employees/${id}`)
        .then(res => {
          this.local = this.local.filter(e => e.id !== id);
        })
        .finally(() => {
          this.$emit("stop_loading");
        });
    },
    redirect(id) {
      window.location = `/edit/${id}`;
    }
  }
};
</script>
<style scoped>
.custom-label input:checked + svg {
  display: block !important;
}
</style>