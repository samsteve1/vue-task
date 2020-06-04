<template>
    <div>
              <div class="w-full inline-block px-4 pb-4">
        <div class="flex w-full items-center">
          <div class="mr-3">
            <img src="/images/emp.png" class="w-12 rounded-full" />
          </div>
          <div>
            <p class="text-gray-700 text-base font-semibold">All Employees</p>
          </div>
        </div>
      </div>
      <div class="text-sm font-bold px-4">
        <h4 class="text-gray-500">PROJECT</h4>
      </div>
      <div class="px-4">
        <div
          class="flex w-full items-center my-2 hover:bg-gray-200 rounded-lg p-3"
          :class="{'bg-gray-200': x == 2}"
          v-for="x in 5"
          :key="x"
        >
          <div class="mr-3">
            <img
              :src="'https://api.adorable.io/avatars/285/' + x + '.png'"
              class="w-12 rounded-full"
            />
          </div>
          <div>
            <p class="text-gray-700 text-base font-semibold">{{ label[x - 1] }}</p>
          </div>
        </div>
      </div>
      <div class="text-sm font-bold px-4">
        <h4 class="text-gray-500">STATUS</h4>
      </div>
      <div class="px-4">
        <div
          class="flex w-full items-center my-2 hover:bg-gray-200 rounded-lg p-3"
          v-for="x in 2"
          :key="x"
        >
          <div class="mr-3">
            <img
              :src="'https://api.adorable.io/avatars/285/' + x + '.png'"
              class="w-12 rounded-full"
            />
          </div>
          <div>
            <p class="text-gray-700 text-base font-semibold">{{ status[x - 1] }}</p>
          </div>
        </div>
        <button
          class="bg-purple-700 hover:bg-purple-900 text-white font-bold py-2 px-8 rounded-full"
        >Add Project</button>
      </div>
    </div>
</template>

<script>
export default {
    data() {
    return {
      user: null,
      label: [
        "Omatek",
        "Paystack",
        "Jumia Mobile",
        "Soupa Market",
        "Flutterwave"
      ],
      status: ["Full time", "Part time"]
    };
  },
}
</script>