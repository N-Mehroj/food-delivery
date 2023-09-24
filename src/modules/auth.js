import AuthService from "../service/auth";
import { gettersTypes } from "./type";

const state = {
    isLoading: false,
    user: null,
    phone: null,
    error: null,
    isLogedIn: null,
    data:null,
}
const getters = {
    [gettersTypes.user]: state => {
        return state.user
    },
    [gettersTypes.isLogedIn]: state => {
        return Boolean(state.isLogedIn)
    },
    [gettersTypes.isAnonymous]: state => {
        return state.isLogedIn === false
    },
    data:state => {
        return state.data
    }
}


const mutations = {
    registerStart(state){
        state.isLoading = true
        state.user = null
        state.error = null
        state.isLogedIn = null
    },
    registerSuccess(state, payload){
        state.isLoading = false
        state.user = payload
        state.isLogedIn = true
    },
    registerFail(state,payload){
        state.isLoading = false
        state.error = payload
        state.isLogedIn = false
    },
    phoneStart(state){
        state.isLoading = true
        state.phone = null
        state.error = null
    },
    phoneSuccess(state, payload){
        state.isLoading = false
        state.phone = payload
        state.isLogedIn = true
    },
    phoneFail(state,payload){
        state.isLoading = false
        state.error = payload
    },
   
}

const actions = {
    register(context, user){
        return new Promise((resolve, reject) => {
             context.commit('registerStart')
             AuthService.register(user)
               .then(response => {
                 context.commit('registerSuccess',response.data.user);
                 window.localStorage.setItem("token", response.data.user.token)
                 resolve(response.data.user)
               })
               .catch(error => {
                 context.commit('registerFail', error.response.data)
                 reject(error.response.data)
            })
        })
    },
    phone(context, phone){
        return new Promise((resolve, reject) => {
             context.commit('registerStart')
             AuthService.phone(phone)
               .then(response => {
                 context.commit('registerSuccess',response.data.phone);
                 resolve(response.data.phone)
               })
               .catch(error => {
                 context.commit('registerFail', error.response.data)
                 reject(error.response.data)
            })
        })
    }
}
export default {state, mutations, actions,getters,}     
