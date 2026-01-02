import {createStore} from "vuex"
import * as mutations from './mutations'
import * as actions from './actions'
import state from "./state"
import notifications from "./modules/notifications";
import bookings from "./modules/bookings";
import countries from "./modules/countries";
import superCategories from "./modules/SuperCategory";
const store=createStore({
    modules:{
        notifications:notifications,
        bookings:bookings,
        countries:countries,
        superCategories:superCategories
    },
    state,
    getters:{},
    actions,
    mutations,
})
export default store

