import axiosClient from "../../../axios";

export function getSuperCategories({commit}, {url = null, search = null, sort_field = null, sort_direction = null, perPage = 20} = {}) {
    url = url || 'super-category';
    return axiosClient.get(url, {
        params: {perPage, search, sort_field, sort_direction}
    }).then(({data}) => {
        commit('setSuperCategories', data)
        return data
    })
}

export function getSuperCategory(__, id) {
    return axiosClient.get(`super-category/${id}`);
}

export function createSuperCategory({commit}, category) {
    return axiosClient.post("/super-category", category).then(({data}) => {
        return data;
    })
}

export function updateSuperCategory({commit}, category) {
    const id = category.id;
    category._method = "PUT";
    return axiosClient.post(`super-category/${id}`, category);
}

export function deleteSuperCategory({commit}, id) {
    return axiosClient.delete(`super-category/${id}`).then(() => {
        commit('showToast', 'Category Deleted Successfully', { root: true })
    })
}
