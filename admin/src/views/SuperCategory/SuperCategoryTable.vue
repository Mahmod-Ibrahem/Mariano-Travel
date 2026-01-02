<template>
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div
            class="p-4 border-b border-slate-200 bg-slate-50/50 flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div class="flex items-center gap-4">
                <span class="text-sm text-slate-500">Found <span class="font-semibold text-slate-900">{{
                    superCategories.total
                        }}</span> groupings</span>
            </div>

            <div class="relative">
                <input v-model="search" @input="getSuperCategories"
                    class="pl-10 pr-4 py-2 border border-slate-300 rounded-lg text-sm focus:ring-indigo-500 focus:border-indigo-500 w-full md:w-64"
                    placeholder="Search groupings...">
                <svg class="w-5 h-5 text-slate-400 absolute left-3 top-2.5" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead class="bg-slate-50 text-slate-600 uppercase text-xs font-semibold">
                    <tr>
                        <TableHeadingCell field="id" class="px-6 py-4 border-b border-slate-200">
                            ID
                        </TableHeadingCell>
                        <TableHeadingCell field="name   " class="px-6 py-4 border-b border-slate-200">
                            Group Name
                        </TableHeadingCell>
                        <TableHeadingCell field="actions" class="px-6 py-4 border-b border-slate-200">
                            Actions
                        </TableHeadingCell>
                    </tr>
                </thead>
                <tbody v-if="superCategoryLoading">
                    <tr>
                        <td colspan="3" class="p-12 text-center">
                            <Spinner />
                            <p class="text-xs text-slate-400 mt-2 font-medium">Fetching groupings...</p>
                        </td>
                    </tr>
                </tbody>
                <tbody v-else class="divide-y divide-slate-200">
                    <tr v-for="(superCategory) in superCategories.data" :key="superCategory.id"
                        class="hover:bg-slate-50 transition-colors">
                        <td class="px-6 py-4 text-sm text-slate-600 font-medium">#{{ superCategory.id }}</td>
                        <td class="px-6 py-4">
                            <span class="font-semibold text-slate-700">{{ superCategory.name }}</span>
                        </td>
                        <td class="py-4 px-6 text-right">
                            <div class="flex  gap-1">
                                <!-- View -->
                                <RouterLink
                                    :to="{ name: 'app.super-categories.edit', params: { id: superCategory.id } }"
                                    class="inline-flex items-center gap-2 rounded-md px-1 py-1 text-sm text-indigo-600 hover:bg-indigo-50"
                                    title="View">
                                    <PencilIcon class="h-4 w-4" :class="active ? 'text-indigo-500' : 'text-gray-400'"
                                        aria-hidden="true" />
                                </RouterLink>

                                <!-- Delete -->
                                <button type="button" @click="deleteSuperCategory(superCategory)"
                                    class="inline-flex items-center gap-2 rounded-md px-1 py-2 text-sm text-red-600 hover:bg-red-50"
                                    title="Delete">
                                    <TrashIcon class="h-5 w-5" aria-hidden="true" />
                                </button>
                            </div>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>

        <div v-if="!superCategories.loading && superCategories.data.length"
            class="flex flex-col md:flex-row justify-between items-center p-6 bg-slate-50 border-t border-slate-100 gap-4">
            <div class="text-xs font-bold text-slate-500 uppercase tracking-widest">
                Showing {{ superCategories.from }} - {{ superCategories.to }} of {{ superCategories.total }} groups
            </div>
            <nav v-if="superCategories.total > superCategories.limit" class="flex items-center space-x-1">
                <button v-for="(link, i) in superCategories.links" :key="i" @click.prevent="getForPage($event, link)"
                    v-html="link.label" :disabled="!link.url"
                    class="px-3 py-2 rounded-lg text-xs font-bold transition-all" :class="[
                        link.active ? 'bg-indigo-600 text-white shadow-md shadow-indigo-100' :
                            link.url ? 'text-slate-600 hover:bg-white hover:shadow-sm border border-transparent hover:border-slate-200' :
                                'text-slate-300 cursor-not-allowed'
                    ]">
                </button>
            </nav>
        </div>
    </div>
</template>

<script setup>
import Spinner from "../../components/core/Spinner.vue";
import TableHeadingCell from "../../components/core/Table/TableHeadingCell.vue";
import { ref, computed, onMounted } from 'vue';
import store from "../../store"
import { Menu, MenuButton, MenuItem, MenuItems } from "@headlessui/vue";
import { EllipsisVerticalIcon, PencilIcon, TrashIcon } from "@heroicons/vue/24/outline";
import { RouterLink } from "vue-router";

const search = ref('')
const sortField = ref('id')
const sortDirection = ref('desc')

const superCategories = computed(() => store.state.superCategories)
const superCategoryLoading = computed(() => store.state.superCategories.loading)

function getSuperCategories(url = null) {
    store.dispatch('superCategories/getSuperCategories', {
        url,
        search: search.value,
        sort_field: sortField.value,
        sort_direction: sortDirection.value
    })
}

function getForPage(ev, link) {
    if (!link.url || link.active) return
    getSuperCategories(link.url)
}


function deleteSuperCategory(superCategory) {
    if (!confirm('Are you sure you want to delete this super category?')) return
    store.dispatch('superCategories/deleteSuperCategory', superCategory.id)
        .then(() => {
            store.commit('showToast', 'Super Category Deleted Successfully')
            getSuperCategories()
        })
}

onMounted(() => {
    getSuperCategories()
})
</script>
