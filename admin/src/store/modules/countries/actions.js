import axiosClient from "../../../axios";

export function getCountries({commit}, {url = null,search = null, perPage = 20} = {}) {
    url = url || '/countries';
    return axiosClient.get(url, {
        params: {perPage , search}
    }).then(({data}) => {
        commit('setCountries', data)
    })
}

export function getCountry({commit}, countryId) {
    return axiosClient.get(`/countries/${countryId}`)
}

export function createCountry({commit}, country) {
    const form = new FormData();
    form.append('name', country.name);
    form.append('is_active', country.is_active ? 1 : 0);
    if (country.image) {
        form.append('image', country.image);
    }
    return axiosClient.post('/countries', form)
}

export function updateCountry({commit}, country) {
    const id = country.id;
    const form = new FormData();
    form.append('name', country.name);
    form.append('is_active', country.is_active ? 1 : 0);
    if (country.image instanceof File) {
        form.append('image', country.image);
    }
    form.append('_method', 'PUT');
    return axiosClient.post(`/countries/${id}`, form);
}

export function deleteCountry({commit}, id) {
    return axiosClient.delete(`/countries/${id}`)
}
