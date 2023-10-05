import AuthService from "../service/auth";
import { gettersTypes } from "./type";

const state = {
    user: null,
    isLoading: false,
    phone: null,
    error: null,
    isLogedIn: false,
    data:null,
}
const getters = {
    [gettersTypes.user]: state => {
        return state.user
    },
    [gettersTypes.isLogedIn]: state => {
        return Boolean(state.isLogedIn)
    },
    // [gettersTypes.isAnonymous]: state => {
    //     return state.isLogedIn === false
    // },
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

    loginStart(state){
        state.isLoading = true
        state.user = null
        state.error = null
        state.isLogedIn = null
    },
    loginSuccess(state, payload){
        state.isLoading = false
        state.user = payload
        state.isLogedIn = true
    },
    loginFail(state,payload){
        state.isLoading = false
        state.error = payload
        state.isLogedIn = false
    },

    userStart(state) {
        state.isLoading = true
    }, 
    userSuccess(state, payload) {
        state.user = payload
        state.isLogedIn = true
        state.isLoading = false   
    },
    userFail(state) {
        state.isLoading = false
        state.user = null
        state.isLogedIn = false
    },
    logout(state) {
        state.user = null
        state.isLogedIn = false
        localStorage.removeItem('token')
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
             context.commit('phoneStart')
             AuthService.phone(phone)
               .then(response => {
                 context.commit('phoneSuccess',response.data.phone);
                 resolve(response.data.phone)
               })
               .catch(error => {
                 context.commit('phoneFail', error.response.data)
                 reject(error.response.data)
            })
        })
    },
    login(context, user) {
        return new Promise((resolve, reject) => {
            context.commit('loginStart')
            AuthService.login(user)
            .then(response => {
                
                context.commit('loginSuccess',response.data['0'])
                // console.log(zeroValueData);
                window.localStorage.setItem("token", response.data['0'].token)
                resolve(response.data['0'])
                // const jsonData = JSON.parse(reponse.data)
            })
            .catch(error => {
                context.commit('loginFail', error.response.data)
                reject(error.response.data)
            })
        })
    },
    getUsers(context) {
        return new Promise(resolve => {
            context.commit('userStart')
            AuthService.getUser()
            .then(response => {
                context.commit('userSuccess',response.data)
                resolve(response.data)
                
            })
            .catch(() => {context.commit('userFail')})

        })
    },
    logout(context){
        context.commit('logout')
        localStorage.removeItem('token')
    },
}
export default {state, mutations, actions,getters,}     
