import { createStore } from 'vuex'
import auth from '../modules/auth'
// Create a new store instance.
const store = createStore({
  state : {},
  mutations: {},
  actions: {},
  modules: {auth},
})

export default store
