<template>
    <div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100 p-4 md:p-8">
        <!-- Header -->
        <div class="max-w-7xl mx-auto mb-6">
            <div class="flex items-center gap-3 mb-2">
                <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                    </svg>
                </div>
                <h1 v-if="!loading" class="text-2xl md:text-3xl font-bold text-slate-800">
                    {{ category.id ? `Update Category` : 'Create New Category' }}
                </h1>
            </div>
            <p v-if="category.id && !loading" class="text-slate-500 ml-13">
                Editing: <span class="font-medium text-indigo-600">{{ category.name }}</span>
            </p>
        </div>

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto">
            <Spinner v-if="loading"
                class="fixed inset-0 bg-white/80 backdrop-blur-sm flex items-center justify-center z-50" />

            <form v-else @submit.prevent="onSubmit" class="space-y-6">
                <!-- Basic Info Card -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="bg-gradient-to-r from-indigo-600 to-indigo-700 px-6 py-4">
                        <h2 class="text-lg font-semibold text-white flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Basic Information
                        </h2>
                    </div>

                    <div class="p-6 space-y-4">
                        <!-- Country Select -->
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">
                                Country <span class="text-red-500">*</span>
                            </label>
                            <Select v-model="category.country_id" :options="countriesOptions" optionLabel="name"
                                optionValue="id" placeholder="Select Country" class="w-full"
                                :class="{ 'border-red-400': errors.country_id?.[0] }" />
                            <p v-if="errors.country_id?.[0]"
                                class="mt-1.5 text-red-500 text-sm flex items-center gap-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                {{ errors.country_id[0] }}
                            </p>
                        </div>

                        <!-- Tour Section Select -->
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">
                                Tour Section <span class="text-red-500">*</span>
                            </label>
                            <select v-model="category.type" class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl 
                                focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20
                                transition-all duration-200 appearance-none cursor-pointer"
                                :class="{ 'border-red-400': errors.type?.[0] }">
                                <option value="" disabled>Select Tour Section</option>
                                <option value="day-tours">Day Tours</option>
                                <option value="tour-packages">Tour Packages</option>
                            </select>
                            <p v-if="errors.type?.[0]" class="mt-1.5 text-red-500 text-sm flex items-center gap-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                {{ errors.type[0] }}
                            </p>
                        </div>

                        <!-- Category Name -->
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">
                                Category Name <span class="text-red-500">*</span>
                            </label>
                            <CustomInput v-model="category.name" type="text" placeholder="Enter category name..."
                                :errors="errors.name" />
                        </div>

                        <!-- Category Header -->
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">
                                Category Header
                            </label>
                            <CustomInput v-model="category.header" type="text" placeholder="Enter category header..."
                                :errors="errors.header" />
                        </div>

                        <!-- Background Header Image URL -->
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">
                                Background Image Header URL
                            </label>
                            <CustomInput v-model="category.bg_header" type="text"
                                placeholder="Enter background image URL..." :errors="errors.bg_header" />
                        </div>
                    </div>
                </div>

                <!-- Description Card -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="bg-gradient-to-r from-emerald-600 to-emerald-700 px-6 py-4">
                        <h2 class="text-lg font-semibold text-white flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            Description
                        </h2>
                    </div>

                    <div class="p-6">
                        <label class="block text-sm font-medium text-slate-700 mb-1.5">
                            Category Description
                        </label>
                        <CustomInput type="textarea" v-model="category.description"
                            placeholder="Enter category description..." class="rounded-xl overflow-hidden"
                            :errors="errors.description" />
                    </div>
                </div>

                <!-- SEO & Media Card -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="bg-gradient-to-r from-amber-500 to-orange-500 px-6 py-4">
                        <h2 class="text-lg font-semibold text-white flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            SEO & Media
                        </h2>
                    </div>

                    <div class="p-6">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <!-- Left Column - SEO -->
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-1.5">
                                        Meta Title
                                    </label>
                                    <CustomInput v-model="category.title_meta" type="textarea"
                                        placeholder="Enter meta title for SEO..." :errors="errors.title_meta" />
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-1.5">
                                        Meta Description
                                    </label>
                                    <CustomInput v-model="category.description_meta" type="textarea"
                                        placeholder="Enter meta description for SEO..."
                                        :errors="errors.description_meta" />
                                </div>
                            </div>

                            <!-- Right Column - Image -->
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">Category Image</label>
                                <div class="relative">
                                    <input type="file" id="category-image" class="hidden" accept="image/*"
                                        @change="e => handleFileChange(e.target.files[0])" />
                                    <label for="category-image" class="flex flex-col items-center justify-center w-full h-64 
                                        border-2 border-dashed border-slate-300 rounded-xl cursor-pointer
                                        hover:border-indigo-400 hover:bg-indigo-50/50 transition-all duration-200
                                        overflow-hidden group">
                                        <img v-if="imagePreview" :src="imagePreview" alt="Category Preview"
                                            class="w-full h-full object-cover" />
                                        <div v-else class="text-center p-6">
                                            <svg class="w-12 h-12 mx-auto text-slate-300 group-hover:text-indigo-400 
                                                transition-colors" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            <p class="mt-2 text-sm text-slate-500">Click to upload category image</p>
                                        </div>
                                    </label>
                                </div>
                                <p v-if="errors.image?.[0]" class="mt-1 text-xs text-red-500 flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    {{ errors.image[0] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Actions -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 px-6 py-4 
                    flex flex-col-reverse sm:flex-row sm:items-center sm:justify-between gap-3">
                    <RouterLink :to="{ name: 'app.categories' }" class="inline-flex items-center justify-center gap-2 px-5 py-2.5 
                        text-slate-600 hover:text-slate-800 hover:bg-slate-100 
                        rounded-xl transition-all duration-200 font-medium">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Cancel
                    </RouterLink>

                    <div class="flex gap-3">
                        <button type="button" @click="onSubmit($event, true)" class="flex-1 sm:flex-none inline-flex items-center justify-center gap-2 
                            px-6 py-2.5 bg-gradient-to-r from-indigo-600 to-indigo-700 
                            hover:from-indigo-700 hover:to-indigo-800 text-white 
                            rounded-xl font-medium shadow-lg shadow-indigo-500/25 
                            transition-all duration-200">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import Spinner from './../../components/Core/Spinner.vue'
import { ref, onMounted, computed } from 'vue'
import { useRoute, useRouter } from "vue-router";
import store from "../../store/index.js"
import CustomInput from '../../components/Core/CustomInput.vue';
import Editor from 'primevue/editor';
import { Select } from "primevue";

const emit = defineEmits(['update:modelValue', 'close'])
const route = useRoute()
const router = useRouter()

const loading = ref(false)
const category = ref({
    id: null,
    header: '',
    categoryTranslationId: '',
    description: '',
    bg_header: '',
    type: '',
    country_id: null,
    name: '',
    image: '',
    locale: 'en',
    title_meta: '',
    description_meta: ''
})

const errors = ref({})
const imagePreview = ref(null)
const countriesOptions = computed(() => store.state.countries.data)

function handleFileChange(image) {
    const file = image
    if (file) {
        category.value.image = file
        imagePreview.value = URL.createObjectURL(file)
    }
}

function onSubmit($event, close = false) {
    loading.value = true;
    errors.value = {}
    const action = category.value.id ? 'updateCategory' : 'createCategory';
    const successStatus = action === 'updateCategory' ? 200 : 201;
    const successMessage = action === 'updateCategory' ? 'Category has successfully updated' : 'Category has successfully created';

    store.dispatch(action, category.value)
        .then(response => {
            loading.value = false;
            if (response.status === successStatus) {
                store.commit('showToast', successMessage);
                store.dispatch('getCategories');
                if (close) {
                    router.push({ name: 'app.categories' });
                } else if (action === 'createCategory') {
                    category.value = response.data
                    router.push({ name: 'app.categories.edit', params: { id: response.data.id } });
                }
            }
        })
        .catch(err => {
            loading.value = false;
            if (err.response.status === 422) {
                errors.value = err.response.data.errors;
                console.log(errors.value)
            } else if (err.response.status === 409) {
                store.commit('showErrorToast', err.response.data.message);
            } else {
                store.commit('showErrorToast', 'An error occurred while submitting the form.');
            }
        });
}

onMounted(() => {
    store.dispatch('countries/getCountries')
    if (route.params.id) {
        loading.value = true
        store.dispatch('getCategory', { id: route.params.id, locale: 'en' })
            .then((response) => {
                loading.value = false;
                category.value = response.data
                // Set image preview if category has an existing image
                if (category.value.image_url) {
                    imagePreview.value = category.value.image_url
                }
            })
    }
})
</script>

<style scoped>
/* Custom scrollbar */
::-webkit-scrollbar {
    width: 6px;
}

::-webkit-scrollbar-track {
    background: #f1f5f9;
    border-radius: 3px;
}

::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 3px;
}

::-webkit-scrollbar-thumb:hover {
    background: #94a3b8;
}

/* Editor styling */
:deep(.p-editor-container) {
    border-radius: 0.75rem;
    overflow: hidden;
    border: 1px solid #e2e8f0;
}

:deep(.p-editor-toolbar) {
    background: #f8fafc;
    border-bottom: 1px solid #e2e8f0;
}

:deep(.p-editor-content) {
    background: white;
}

:deep(.ql-editor) {
    font-size: 0.875rem;
}

:deep(.ql-editor a) {
    text-decoration: none !important;
}
</style>
