export function setSuperCategories(state, data) {
    if (data) {
        state.data = data.data;
        state.links = data.meta?.links;
        state.from = data.meta?.from;
        state.to = data.meta?.to;
        state.total = data.meta?.total;
        state.per_page = data.meta?.per_page;
    }
    state.loading = false
}
