<template>
    <div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100 p-4 md:p-8">
        <!-- Header -->
        <div class="max-w-7xl mx-auto mb-6">
            <div class="flex items-center gap-3 mb-2">
                <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h1 v-if="!loading" class="text-2xl md:text-3xl font-bold text-slate-800">
                    {{ country.id ? `Update Country` : 'Create New Country' }}
                </h1>
            </div>
            <p v-if="country.id && !loading" class="text-slate-500 ml-13">
                Editing: <span class="font-medium text-indigo-600">{{ country.name }}</span>
            </p>
        </div>

        <div class="max-w-7xl mx-auto">
            <Spinner v-if="loading"
                class="fixed inset-0 bg-white/80 backdrop-blur-sm flex items-center justify-center z-50" />
            <form v-else @submit.prevent="onSubmit">
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                    <div
                        class="bg-gradient-to-r from-indigo-600 to-indigo-700 px-6 py-4 flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-white flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Country Information
                        </h2>
                    </div>

                    <div class="p-6 space-y-6">
                        <!-- Name Field -->
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">
                                Country Name<span class="text-red-500">*</span>
                            </label>
                            <CustomInput v-model="country.name" :errors="errors.name"
                                placeholder="Enter Country Name" />
                        </div>

                        <!-- Route Name Field -->
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">
                                Route Name
                            </label>
                            <CustomInput v-model="country.route_name" :errors="errors.route_name"
                                placeholder="Enter Route Name (optional)" />
                        </div>

                        <!-- Active Status -->
                        <div class="flex items-center gap-3">
                            <input type="checkbox" v-model="country.is_active" id="is_active"
                                class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <label for="is_active" class="text-sm font-medium text-slate-700">Is Active</label>
                        </div>

                        <!-- Image Upload -->
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">Country Image</label>
                            <div class="relative">
                                <input type="file" id="country-image" class="hidden" accept="image/*"
                                    @change="e => handleFileChange(e.target.files[0])" />
                                <label for="country-image" class="flex flex-col items-center justify-center w-full h-64 
                    border-2 border-dashed border-slate-300 rounded-xl cursor-pointer
                    hover:border-indigo-400 hover:bg-indigo-50/50 transition-all duration-200
                    overflow-hidden group">
                                    <img v-if="imagePreview" :src="imagePreview" alt="Country Preview"
                                        class="w-full h-full object-cover" />
                                    <div v-else class="text-center p-6">
                                        <svg class="w-12 h-12 mx-auto text-slate-300 group-hover:text-indigo-400 
                      transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <p class="mt-2 text-sm text-slate-500">Click to upload country image</p>
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
                <!-- Actions Footer -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 px-6 py-4 
                flex flex-col-reverse sm:flex-row sm:items-center sm:justify-between gap-3 mt-6">
                    <RouterLink :to="{ name: 'app.countries' }" class="inline-flex items-center justify-center gap-2 px-5 py-2.5 
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
                            Save Country
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import Spinner from './../../components/Core/Spinner.vue'
import { ref, onMounted, watch } from 'vue'
import { useRoute, useRouter } from "vue-router";
import store from "../../store/index.js"
import CustomInput from '../../components/Core/CustomInput.vue';

const route = useRoute()
const router = useRouter()

const loading = ref(false)
const country = ref({
    id: null,
    name: '',
    route_name: '',
    is_active: true,
    image: null,
})

const errors = ref({
    name: [],
    route_name: [],
    is_active: [],
    image: [],
})

const imagePreview = ref(null)

function handleFileChange(image) {
    if (image) {
        country.value.image = image
        imagePreview.value = URL.createObjectURL(image)
    }
}



function fetchCountry(id) {
    loading.value = true
    store.dispatch('countries/getCountry', id)
        .then((response) => {
            loading.value = false;
            country.value = { ...response.data }
            imagePreview.value = country.value.image
            country.value.image = null
        })
}

function onSubmit($event, close = false) {
    loading.value = true;
    errors.value = {}
    const action = country.value.id ? 'countries/updateCountry' : 'countries/createCountry';
    const successStatus = country.value.id ? 200 : 201;
    const successMessage = country.value.id ? 'Country has successfully updated' : 'Country has successfully created';

    store.dispatch(action, country.value)
        .then(response => {
            loading.value = false;
            if (response.status === successStatus) {
                store.commit('showToast', successMessage);
                router.push({ name: 'app.countries' });

            }
        })
        .catch(err => {
            loading.value = false;
            if (err.response && err.response.status === 422) {
                errors.value = err.response.data.errors;
            } else {
                store.commit('showErrorToast', 'An error occurred while submitting the form.');
            }
        });
}

onMounted(() => {
    if (route.params.id) {
        fetchCountry(route.params.id)
    }
})

</script>

<style scoped></style>
