import { defineStore } from "pinia";
import Location from "../service/geo";
import AuthService from "../service/auth";

export const useStoreData = defineStore("dataStore", {
  state: () => {
    return {
      user: null,
      isLoading: false,
      phone: null,
      error: null,
      isLogedIn: false,
      address: [],
    };
  },
  actions: {
    register(user) {
      return new Promise((resolve, reject) => {
        this.isLogedIn = null;
        this.isLoading = true;
        AuthService.register(user)
          .then((response) => {
            this.user = response.data.user;
            this.isLogedIn = true;
            window.localStorage.setItem("token", response.data.user.token);
            resolve(response.data.user);
          })
          .catch((error) => {
            this.error = error.response.data;
            this.isLogedIn = false;
            console.error(error);
            reject(error.response.data);
          })
          .finally(() => {
            this.isLoading = false;
          });
      });
    },
    phone(phone) {
      return new Promise((resolve, reject) => {
        this.isLoading = true;
        AuthService.phone(phone)
          .then((response) => {
            this.phone = response.data.phone;
            resolve(response.data.phone);
          })
          .catch((error) => {
            this.error = error.response.data;
            console.error(error);
            reject(error.response.data);
          })
          .finally(() => {
            isLoading = false;
          });
      });
    },
    login(user) {
      return new Promise((resolve, reject) => {
        this.isLoading = true;
        AuthService.login(user)
          .then((response) => {
            this.user = response.data["0"];
            window.localStorage.setItem("token", response.data["0"].token);
            this.isLogedIn = true;
            resolve(response.data["0"]);
          })
          .catch((error) => {
            this.error = error;
            this.isLogedIn = false;
            reject(error.response.data);
          })
          .finally(() => {
            this.isLoading = false;
          });
      });
    },

    getUsers() {
      return new Promise((resolve) => {
        this.isLoading = true;
        AuthService.getUser()
          .then((response) => {
            this.user = response.data[0];
            // this.address = response.data[0].address;
            this.isLogedIn = true;
            this.error = null;
            resolve(response.data);
          })
          .catch(() => {
            this.user = null;
            this.isLogedIn = false;
            this.isLoading = false;
          })
          .finally(() => {
            this.isLoading = false;
          });
      });
    },

    logout() {
      this.user = null;
      this.isLogedIn = false;
      localStorage.removeItem("token");
    },



    increment(val) {
      this.address += val;
    },
    addAddress(address) {
      this.isLoading = true;         
      return new Promise((resolve, reject) => {
        Location.location(address)
          .then((response) => {
            // this.address = response.data;
            this.getUsers();
            resolve(response.data);

          })
          .catch((error) => {
            this.isLoading = false;
            this.error = error.response.data;
            reject(error.response.data);
          })
          .finally(() => {
            this.isLoading = false;
          });
      });
    },
    
  },
});

