<template>
  <div class="flex items-center justify-between mb-3 p-2">
    <RouterLink :to="{ name: 'app.countries.create' }" class="py-2 px-4 border border-transparent text-sm font-medium
      rounded-md text-white bg-indigo-600 hover:bg-indigo-700
      focus:outline-none focus:ring-2 focus:ring-offset-2
      focus:ring-indigo-500">
      Add new Country
    </RouterLink>
  </div>
  <CountriesTable @click-edit="EditCountry"></CountriesTable>
</template>

<script setup>
import { useRouter } from 'vue-router';
import CountriesTable from "./CountriesTable.vue";

const router = useRouter();

function EditCountry(country) {
  router.push({ name: 'app.countries.edit', params: { id: country.id } });
}
</script>

<style scoped></style>
