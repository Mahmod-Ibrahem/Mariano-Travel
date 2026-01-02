    <template>
        <div v-if="loading" class="absolute inset-0 bg-white/50 backdrop-blur-sm z-50 flex items-center justify-center">
            <Spinner />
        </div>

        <section v-else class="max-w-2xl mx-auto py-8 px-4">
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-slate-900 tracking-tight">
                    {{ superCategory.id ? 'Edit Super Category' : 'New Super Category' }}
                </h1>
                <p class="text-slate-500 text-sm mt-1 font-medium">
                    {{ superCategory.id ? `Modifying group: ${superCategory.name}` : "Create a new high-level grouping for your categories"}}
                </p>
            </div>

            <form @submit.prevent="onSubmit"
                class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-8 space-y-6">
                    <CustomInput v-model="superCategory.name" label="Super Category Name"
                        placeholder="e.g. Traditional Tours" :error="errors.name" />
                </div>

                <div class="px-8 py-6 bg-slate-50 border-t border-slate-100 flex flex-row-reverse gap-3">
                    <button @click="onSubmit($event, true)" type="submit"
                        class="px-6 py-2.5 bg-indigo-600 text-white text-xs font-bold uppercase tracking-widest rounded-xl hover:bg-indigo-700 transition-all shadow-lg shadow-indigo-100">
                        {{ superCategory.id ? 'Save Changes' : 'Create Group' }}
                    </button>
                    <RouterLink :to="{ name: 'app.super-categories' }"
                        class="px-6 py-2.5 bg-white text-slate-600 text-xs font-bold uppercase tracking-widest rounded-xl border border-slate-200 hover:bg-slate-50 transition-all">
                        Discard
                    </RouterLink>
                </div>
            </form>
        </section>
    </template>

<script setup>
import Spinner from "../../components/core/Spinner.vue";
import { ref, onMounted } from 'vue'
import store from "../../store"
import CustomInput from "../../components/core/CustomInput.vue";
import { RouterLink, useRoute } from "vue-router";
import router from "../../router";

const route = useRoute()
const loading = ref(false)
const errors = ref({})

const superCategory = ref({
    id: null,
    name: '',
})

function onSubmit($event, close = false) {
    loading.value = true;
    errors.value = {};

    // pick the right action + expected status + toast text
    const isUpdate = !!superCategory.value.id;
    const action = isUpdate ? 'superCategories/updateSuperCategory' : 'superCategories/createSuperCategory';
    const successStatus = isUpdate ? 200 : 201;
    const successMessage = isUpdate
        ? 'Super Category updated successfully'
        : 'Super Category created successfully';

    store.dispatch(action, superCategory.value)
        .then(response => {
            if (response.status === successStatus) {
                store.commit('showToast', successMessage);
                return store.dispatch('superCategories/getSuperCategories');
            }
        })
        .then(() => {
            router.push({ name: 'app.super-categories' });
        })
        .catch(err => {
            if (err.response?.status === 422) {
                errors.value = err.response.data.errors;
            } else {
                store.commit('showErrorToast', err.response?.data?.message || err.message);
            }
        })
        .finally(() => {
            loading.value = false;
        });
}

onMounted(() => {
    if (route.params.id) {
        loading.value = true
        store.dispatch('superCategories/getSuperCategory', route.params.id)
            .then(response => {
                superCategory.value = response.data
            })
            .finally(() => loading.value = false)
    }
})
</script>
