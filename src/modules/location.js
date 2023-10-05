import Location from "../service/geo";
// import { gettersTypes } from "./type";

const state = {
    lat: null,
    lng: null,
}


const mutations = {
    geoStart(state){
        state.lat = null
        state.lng = null
    },
     geoSuccess(state, payload, callback){
        state.lat = payload
        state.lng = payload
    },
     geoFail(state){
        state.lat = null
        state.lng = null
    },
}
const actions = {
    register(context, user){
        return new Promise((resolve, reject) => {
            //  context.commit('registerStart')
             AuthService.register(user)
               .then(response => {
                 context.commit('registerSuccess',response.data.user);
                 window.localStorage.setItem("token", response.data.user.token)
                //  resolve(response.data.user)
               })
               .catch(error => {
                 context.commit('registerFail', error.response.data)
                 reject(error.response.data)
            })
        })
    },
}