<template>
    <div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100 p-4 md:p-8">
        <!-- Header -->
        <div class="max-w-7xl mx-auto mb-6">
            <div class="flex items-center gap-3 mb-2">
                <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </div>
                <h1 v-if="!loading" class="text-2xl md:text-3xl font-bold text-slate-800">
                    {{ blog.id ? `Update Blog` : 'Create New Blog' }}
                </h1>
            </div>
            <p v-if="blog.id && !loading" class="text-slate-500 ml-13">
                Editing: <span class="font-medium text-indigo-600">{{ blog.title }}</span>
            </p>
        </div>

        <div class="max-w-7xl mx-auto">
            <Spinner v-if="loading"
                class="fixed inset-0 bg-white/80 backdrop-blur-sm flex items-center justify-center z-50" />

            <form v-else @submit.prevent="onSubmit">
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="bg-gradient-to-r from-indigo-600 to-indigo-700 px-6 py-4">
                        <h2 class="text-lg font-semibold text-white flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Blog Information
                        </h2>
                    </div>

                    <div class="p-6 space-y-6">
                        <!-- Blog Title -->
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">
                                Blog Title <span class="text-red-500">*</span>
                            </label>
                            <CustomInput v-model="blog.title" :errors="errors.title" placeholder="Enter Blog Title" />
                        </div>

                        <!-- Blog Content -->
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">
                                Blog Content <span class="text-red-500">*</span>
                            </label>
                            <Editor v-model="blog.blog" editorStyle="height: 320px" :errors="errors.blog"
                                :class="errors.blog?.[0] ? 'border-red-500' : ''" />
                            <p v-if="errors.blog?.[0]" class="mt-1 text-xs text-red-500 flex items-center gap-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                {{ errors.blog[0] }}
                            </p>
                        </div>

                        <!-- Blog Image -->
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">Blog Image</label>
                            <div class="relative w-1/3">
                                <input type="file" id="blog-image" class="hidden" accept="image/*"
                                    @change="e => handleFileChange(e.target.files[0])" />
                                <label for="blog-image" class="flex flex-col items-center justify-center w-full h-52
                                    border-2 border-dashed border-slate-300 rounded-xl cursor-pointer
                                    hover:border-indigo-400 hover:bg-indigo-50/50 transition-all duration-200
                                    overflow-hidden group">
                                    <img v-if="imagePreview" :src="imagePreview" alt="Blog Preview"
                                        class="w-full h-full object-cover" />
                                    <div v-else class="text-center p-6">
                                        <svg class="w-12 h-12 mx-auto text-slate-300 group-hover:text-indigo-400 
                                            transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <p class="mt-2 text-sm text-slate-500">Click to upload blog image</p>
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
                    <RouterLink :to="{ name: 'app.blogs' }" class="inline-flex items-center justify-center gap-2 px-5 py-2.5 
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
                            Save Blog
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
import Editor from "primevue/editor";
const emit = defineEmits(['update:modelValue', 'close'])
const route = useRoute()
const router = useRouter()

const loading = ref(false)
const blog = ref({
    id: null,
    title: '',
    blog: '',
    image: null,
})

const imagePreview = ref(null)

function handleFileChange(image) {
    const file = image
    if (file) {
        blog.value.image = file;
        imagePreview.value = URL.createObjectURL(file);
    }
}

const errors = ref({})

function onSubmit($event, close = false) {
    loading.value = true;
    errors.value = {}
    const action = blog.value.id ? 'updateBlog' : 'createBlog';
    const successStatus = action === 'updateBlog' ? 200 : 201;
    const successMessage = action === 'updateBlog' ? 'Blog has successfully updated' : 'Blog has successfully created';

    store.dispatch(action, blog.value)
        .then(response => {
            loading.value = false;
            if (response.status === successStatus) {
                store.commit('showToast', successMessage);
                if (close) {
                    router.push({ name: 'app.blogs' });
                } else if (action === 'createBlog') {
                    blog.value = response.data
                    router.push({ name: 'app.blogs.edit', params: { id: response.data.id } });
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
    if (route.params.id) {
        loading.value = true;
        store.dispatch('getBlog', route.params.id)
            .then(blogResponse => {
                blog.value = blogResponse.data;
                imagePreview.value = blog.value.image_url;
            })
            .catch(error => {
                console.error('An error occurred:', error);
            })
            .finally(() => {
                loading.value = false;
            });
    }
})
</script>
<style scoped>
::v-deep(.ql-editor a) {
    text-decoration: none !important;
    color: safety-orange !important;
}

.ql-editor a {
    color: safety-orange !important;
}
</style>
