<template>
  <div>
    <div class="top-0 border-b-2 border-slate-100 fixed w-full bg-white mb-96 z-40 h-[90px]">
      <nav class="container-wrapper">
        <div class="nav-container justify-between flex pt-6 pb-2 w-full">
          <div class="left-side flex">
            <RouterLink to="/">
              <img :src="logo" alt="" class="h-11 mt-1" />
            </RouterLink>
            <div
              class="search bg-[#EDEEF2] rounded-xl justify-center items-center h-12 px-1 lg:ml-16 ml-8 hidden md:flex">
              <input type="text" class="bg-transparent pl-4 py-1 placeholder:text-[#83859C] text-[#5f606b]"
                placeholder="Search" />
              <v-icon name="ri-search-line" class="text-[#8b8d9c] mr-3 cursor-pointer" />
            </div>
          </div>
          <div class="right-side">
            <ul class="menu flex" v-if="this.isLogedIn">
              <RouterLink :to="{ name: 'login' }" class="hover:text-[#4E60FF] h-12  md:block">Restaurants
              </RouterLink>
              <RouterLink :to="{ name: 'login' }" class="hover:text-[#4E60FF] h-12  md:block">Deals</RouterLink>
              <div class="line hidden"></div>
              <RouterLink :to="{ name: 'orders' }" class="hover:text-[#4E60FF] h-12">My orders</RouterLink>
              <div class="line"></div>
              <RouterLink :to="{ name: 'my_card' }" class="mr-3">
                <div class="bg-[#F3F4FF] p-3 rounded-xl -mt-3">
                  <v-icon name="ri-shopping-bag-3-line" class="text-[#4E60FF]" scale="1.3" />
                  <p class="noti">99</p>
                </div>
              </RouterLink>
              <RouterLink :to="{ name: 'login' }" @mouseover="hover = true" @mouseleave="hover = false">
                <div class="bg-[#F3F4FF] p-3 rounded-xl -mt-3">
                  <v-icon name="oi-person" class="text-[#A1A2B4]" scale="1.3" />
                </div>
              </RouterLink>
            </ul>

            <ul class="flex menu" v-if="!this.isLogedIn">
              <RouterLink :to="{ name: 'login' }" class="hover:text-[#4E60FF] h-12 mr-4">Login</RouterLink>
              <RouterLink :to="{ name: 'register' }"
                class="hover:text-[#4E60FF] bg-[#4E60FF] h-12 text-white rounded-xl hover:bg-white border transition-colors border-[#4E60FF]">
                Sign up</RouterLink>
            </ul>
          </div>
        </div>
        <div @mouseover="hover = true" @mouseleave="hover = false" v-if="isLogedIn"
          class="border py-3 px-8 rounded-xl bg-white inline-block fixed right-28 top-20 transition-all z-40"
          :class="[{ 'top-20': hover }, { '-top-36': !hover }]">
          <RouterLink :to="{ path: '/user/' + user.id }">
            <h4 class="px-2 py-1 cursor-pointer">Profile</h4>
          </RouterLink>
          <h4 class="px-2 py-1 cursor-pointer" @click="logoutHandler">Logout</h4>
        </div>
      </nav>
    </div>
  </div>
</template>

<script>
// import { mapGetters } from 'vuex';
// import { gettersTypes } from '@/modules/type';
// import { logo } from '../constants/index.js'
const logo = 'http://localhost:5173/src/assets/img/logo/main.png ';

import { mapState, mapActions } from "pinia";
import { useStoreData } from "@/store/store";

export default {
  data() {
    return {
      logo,
      hover: false,
    };
  },
  computed: {
    ...mapState(useStoreData, ["user", "isLogedIn"]),
    // ...mapGetters({
    //   user: gettersTypes.user,
    //   isLogedIn: gettersTypes.isLogedIn,
    // }),
  },
  methods: {
    ...mapActions(useStoreData, { logout: 'logout' }),
    logoutHandler() {
      this.logout();
      let str = this.$route.path;
      let position = str.match('user');
      if (position) {
        this.$router.push("/");
      }
    },
    mouseOver: function () {
      this.hover = !this.hover;
    },
    // logout() {
    //   return this.$store.dispatch('logout');
    // },
  },
};
</script>

<style></style>
