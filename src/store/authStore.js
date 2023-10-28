import AuthService from "../service/auth";
// import { gettersTypes } from "./type";

const state = {
  user: null,
  isLoading: false,
  phone: null,
  error: null,
  isLogedIn: false,
//   data: null,
};
// const getters = {
//   [gettersTypes.user]: (state) => {
//     return state.user;
//   },
//   [gettersTypes.isLogedIn]: (state) => {
//     return Boolean(state.isLogedIn);
//   },
//   // [gettersTypes.isAnonymous]: state => {
//   //     return state.isLogedIn === false
//   // },
//   data: (state) => {
//     return state.data;
//   },
// };

// const mutations = {
// //   registerStart(state) {
// //     state.isLoading = true;
// //     state.user = null;
// //     state.error = null;
// //     state.isLogedIn = null;
// //   },
// //   registerSuccess(state, payload) {
// //     state.isLoading = false;
// //     state.user = payload;
// //     state.isLogedIn = true;
// //   },
// //   registerFail(state, payload) {
// //     state.isLoading = false;
// //     state.error = payload;
// //     state.isLogedIn = false;
// //   },
// //   phoneStart(state) {
// //     state.isLoading = true;
// //     state.phone = null;
// //     state.error = null;
// //   },
// //   phoneSuccess(state, payload) {
// //     state.isLoading = false;
// //     state.phone = payload;
// //     state.isLogedIn = true;
// //   },
// //   phoneFail(state, payload) {
// //     state.isLoading = false;
// //     state.error = payload;
// //   },

// //   loginStart(state) {
// //     state.isLoading = true;
// //     state.user = null;
// //     state.error = null;
// //     state.isLogedIn = null;
// //   },
// //   loginSuccess(state, payload) {
// //     state.isLoading = false;
// //     state.user = payload;
// //     state.isLogedIn = true;
// //   },
// //   loginFail(state, payload) {
// //     state.isLoading = false;
// //     state.error = payload;
// //     state.isLogedIn = false;
// //   },

// //   userStart(state) {
// //     state.isLoading = true;
// //   },
// //   userSuccess(state, payload) {
// //     state.user = payload;
// //     state.isLogedIn = true;
// //     state.isLoading = false;
// //   },
// //   userFail(state) {
// //     state.isLoading = false;
// //     state.user = null;
// //     state.isLogedIn = false;
// //   },
//   //   logout(state) {
//   //     state.user = null;
//   //     state.isLogedIn = false;
//   //     localStorage.removeItem("token");
//   //   },
// };

const actions = {

};
export default { state, mutations, actions, getters };
