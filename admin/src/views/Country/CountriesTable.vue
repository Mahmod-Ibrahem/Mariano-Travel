<template>
    <div class="bg-white p-4 rounded-lg shadow animate-fade-in-down">
        <div class="flex justify-between border-b-2 pb-3">
            <div class="flex items-center">
                <span class="whitespace-nowrap mr-3">Per Page</span>
                <select @change="getCountries(null)" v-model="perPage"
                    class="appearance-none relative block w-24 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                <span class="ml-3">Found {{ countries.total }} countries</span>
            </div>
            <div>
                <input v-model="search" @change="getCountries(null)"
                    class="appearance-none relative block w-48 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                    placeholder="Type to Search countries">
            </div>
        </div>

        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="border-b-2 p-2 text-left">ID</th>
                    <th class="border-b-2 p-2 text-left">Name</th>
                    <th class="border-b-2 p-2 text-left">Status</th>
                    <th class="border-b-2 p-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody v-if="countries.loading || !countries.data">
                <tr>
                    <td colspan="4">
                        <Spinner v-if="countries.loading" />
                        <p v-else class="text-center py-8 text-gray-700">
                            There are no countries
                        </p>
                    </td>
                </tr>
            </tbody>
            <tbody v-else>
                <tr v-for="country of countries.data" :key="country.id">
                    <td class="border-b p-2">{{ country.id }}</td>
                    <td class="border-b p-2">
                        {{ country.name }}
                    </td>
                    <td class="border-b p-2">
                        <span v-if="country.is_active"
                            class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">Active</span>
                        <span v-else
                            class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">Inactive</span>
                    </td>
                    <td class="border-b p-2 ">
                        <div class="flex items-center gap-2">
                            <RouterLink :to="{ name: 'app.countries.edit', params: { id: country.id } }"
                                class="p-2 text-indigo-600 hover:bg-indigo-50 rounded-lg transition-colors duration-200"
                                title="Edit">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </RouterLink>
                            <button @click="deleteCountry(country.id)"
                                class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors duration-200"
                                title="Delete">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div v-if="!countries.loading" class="flex justify-between items-center mt-5">
            <div v-if="countries.data.length">
                Showing from {{ countries.from }} to {{ countries.to }}
            </div>
            <nav v-if="countries.total > perPage"
                class="relative z-0 inline-flex justify-center rounded-md shadow-sm -space-x-px"
                aria-label="Pagination">
                <a v-for="(link, i) of countries.links" :key="i" :disabled="!link.url" href="#"
                    @click="getForPage($event, link)" aria-current="page"
                    class="relative inline-flex items-center px-4 py-2 border text-sm font-medium whitespace-nowrap"
                    :class="[
                        link.active
                            ? 'z-10 bg-indigo-50 border-indigo-500 text-indigo-600'
                            : 'bg-white border-gray-300 text-gray-500 hover:bg-gray-50',
                        i === 0 ? 'rounded-l-md' : '',
                        i === countries.links.length - 1 ? 'rounded-r-md' : '',
                        !link.url ? ' bg-gray-100 text-gray-700' : ''
                    ]" v-html="link.label">
                </a>
            </nav>
        </div>
    </div>
</template>

<script setup>
import { computed, onMounted, ref } from "vue";
import store from "../../store";
import Spinner from "../../components/Core/Spinner.vue";

const perPage = ref(10);
const search = ref('');
const countries = computed(() => store.state.countries);

function getForPage(ev, link) {
    ev.preventDefault();
    if (!link.url || link.active) {
        return;
    }

    getCountries(link.url)
}

function getCountries(url = null) {
    store.dispatch('countries/getCountries', {
        url,
        search: search.value,
        perPage: perPage.value
    })
}

function deleteCountry(id) {
    if (confirm(`Are you sure you want to delete this country?`)) {
        store.dispatch('countries/deleteCountry', id)
            .then(res => {
                store.commit('showToast', 'Country was successfully deleted');
                getCountries();
            })
    }
}

onMounted(() => {
    getCountries();
})
</script>

<style scoped></style>
