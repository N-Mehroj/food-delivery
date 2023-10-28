<template>
  <div class="container flex mt-28">
    <div class="settings inline-block" style="width: 400px">
      <h1>Settings</h1>
      <RouterLink :to="{ name: 'user' }">
        <div @click="type(1)" :class="[{ 'border-[#4E60FF] bg-[#F3F4FF]': step == 1 }]"
          class="transition-all mt-5 border-2 flex py-3 px-5 rounded-2xl cursor-pointer">
          <div class="inline-block mt-1 transition-all">
            <div class="bg-[#EDEEF2] inline-block p-3 rounded-xl" :class="[{ 'bg-bl ': step == 1 }]">
              <v-icon name="oi-person" :class="[{ 'text-[#fff]': step == 1 }]" class="text-[#A1A2B4]" scale="1.3" />
            </div>
          </div>
          <div class="flex flex-col my-auto ml-5">
            <h5 class="p-0 block">Personal</h5>
            <p class="p-0 block">Keep your order in one place</p>
          </div>
        </div>
      </RouterLink>
      <RouterLink :to="{ name: 'address' }">
        <div @click="type(2)" :class="[{ 'border-[#4E60FF] bg-[#F3F4FF]': step == 2 }]"
          class="transition-all mt-5 border-2 flex py-3 px-5 rounded-2xl cursor-pointer">
          <div class="inline-block mt-1 transition-all">
            <div class="bg-[#EDEEF2] inline-block p-3 rounded-xl" :class="[{ 'bg-bl ': step == 2 }]">
              <v-icon name="co-location-pin" :class="[{ 'text-[#fff]': step == 2 }]" class="text-[#A1A2B4]" scale="1.3" />
            </div>
          </div>
          <div class="flex flex-col my-auto ml-5">
            <h5 class="p-0 block">Personal</h5>
            <p class="p-0 block">Keep your order in one place</p>
          </div>
        </div>
      </RouterLink>
      <RouterLink :to="{ name: 'payment' }">
        <div @click="type(3)" :class="[{ 'border-[#4E60FF] bg-[#F3F4FF]': step == 3 }]"
          class="transition-all mt-5 border-2 flex py-3 px-5 rounded-2xl cursor-pointer">
          <div class="inline-block mt-1 transition-all">
            <div class="bg-[#EDEEF2] inline-block p-3 rounded-xl" :class="[{ 'bg-bl ': step == 3 }]">
              <v-icon name="md-payment" :class="[{ 'text-[#fff]': step == 3 }]" class="text-[#A1A2B4]" scale="1.3" />
            </div>
          </div>
          <div class="flex flex-col my-auto ml-5">
            <h5 class="p-0 block">Personal</h5>
            <p class="p-0 block">Keep your order in one place</p>
          </div>
        </div>
      </RouterLink>
      <RouterLink :to="{ name: 'security' }">
        <div @click="type(4)" :class="[{ 'border-[#4E60FF] bg-[#F3F4FF]': step == 4 }]"
          class="transition-all mt-5 border-2 flex py-3 px-5 rounded-2xl cursor-pointer">
          <div class="inline-block mt-1 transition-all">
            <div class="bg-[#EDEEF2] inline-block p-3 rounded-xl" :class="[{ 'bg-bl': step == 4 }]">
              <v-icon name="bi-shield" :class="[{ 'text-[#fff]': step == 4 }]" class="text-[#A1A2B4]" scale="1.3" />
            </div>
          </div>
          <div class="flex flex-col my-auto ml-5">
            <h5 class="p-0 block">Personal</h5>
            <p class="p-0 block">Keep your order in one place</p>
          </div>
        </div>
      </RouterLink>
    </div>
    <div class="w-full ml-16" v-if="this.user != null && currentName == 'user'">
      <h1>Account</h1>
      <div class="boxx border border-spacing-2 rounded-xl p-6 pt-5">
        <h3>Personal information</h3>
        <p class="mt-2">Avatar</p>
        <div class="per flex items-center">
          <div class="bg-[#EDEEF2] inline-block p-3 rounded-xl mt-2">
            <v-icon name="oi-person" class="text-[#A1A2B4]" scale="2" />
          </div>
          <div
            class="hover:text-[#4E60FF] bg-[#4E60FF] ml-3 cursor-pointer w-24 h-10 flex justify-center items-center text-white rounded-xl hover:bg-white border transition-colors border-[#4E60FF]">
            Add
          </div>
        </div>
        <form @event.prevent>
          <div class="grid gap-5 grid-cols-2">
            <div class="in1">
              <label>Full name</label>
              <Input class="rounded-md" type="text" placeholder="Full name" :value="user.full_name" />
            </div>
            <div class="in2">
              <label>email</label>
              <Input class="rounded-md" type="email" placeholder="Your Email" :value="user.email" />
            </div>
            <div class="in3">
              <label>Phone Number</label>
              <Input class="rounded-md" type="text" placeholder="Phone number" :value="user.phone" />
            </div>
            <div class="in">
              <label>Id :dasddddddddddddddd</label>
            </div>
          </div>
          <h3 class="mt-4">Email notification</h3>
          <div class="grid gap-1 grid-cols-2 mt-4">
            <div class="tapss">
              <div class="check">
                <Input class="rounded-md mr-3" type="checkbox" placeholder="Full name" :value="user.full_name" />
                <label>New deals</label>
              </div>
              <div class="check">
                <Input class="rounded-md mr-3" type="checkbox" placeholder="Full name" :value="user.full_name" />
                <label>New restaurant</label>
              </div>
              <div class="check">
                <Input class="rounded-md mr-3" type="checkbox" placeholder="Full name" :value="user.full_name" />
                <label>Order statuses</label>
              </div>
            </div>
            <div class="tapss">
              <div class="check">
                <Input class="rounded-md mr-3" type="checkbox" placeholder="Your Email" :value="user.email" />
                <label>Password changes</label>
              </div>
              <div class="check">
                <Input class="rounded-md mr-3" type="checkbox" placeholder="Phone number" :value="user.phone" />
                <label>Special offers</label>
              </div>
              <div class="check">
                <Input class="rounded-md mr-3" type="checkbox" placeholder="Phone number" :value="user.phone" />
                <label>Newslatter</label>
              </div>
            </div>
          </div>
          <div class="py-4 mt-3 flex justify-between w-full">
            <button @click="logoutHandler"
              class="hover:text-[#fff] px-2 py-3 h-12 text-[#ff4949] rounded-xl hover:bg-[#fd4b4b] border transition-colors border-[#ff4747]">
              Logout</button>
            <div class="btn">
              <RouterLink :to="{ name: 'login' }"
                class="hover:text-[#4E60FF] px-2 py-3 bg-[#4E60FF] h-12 text-white rounded-xl hover:bg-white border transition-colors border-[#4E60FF]">
                Sign up</RouterLink>
              <RouterLink :to="{ name: 'login' }"
                class="hover:text-[#4E60FF] px-2 py-3 bg-[#4E60FF] h-12 text-white rounded-xl hover:bg-white border transition-colors border-[#4E60FF]">
                Sign up</RouterLink>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- {{ currentName }} -->

    <router-view></router-view>
  </div>
</template>
<script setup>
import { onMounted } from 'vue'
import { useRouter, useRoute } from 'vue-router'
const store = useStoreData();
const router = useRouter();

function routerPush(){
  if (!store.user) {
  router.push({ name: 'home' });
}
};
onMounted(() => {
   routerPush()
})


</script>
<script>
import { mapGetters } from "vuex";
import { gettersTypes } from "@/modules/type";

import { mapState, mapActions } from "pinia";
import { useStoreData } from "@/store/store";

export default {
  data() {
    var steps = 0;
    switch (this.$route.name) {
      case "user":
        steps = 1;
        break;
      case "address":
        steps = 2;
        break;
      case "payment":
        steps = 3;
        break;
      case "security":
        steps = 4;
        break;
      default:
        steps = 1;
        break;
    }
    return { step: steps };
  },
  computed: {
    ...mapState(useStoreData, ["user"]),
    // ...mapGetters({
    //   user: gettersTypes.user,
    //   isLogedIn: gettersTypes.isLogedIn,
    // }),
    currentName() {
      return this.$route.name;
    },
  },
  methods: {
    ...mapActions(useStoreData, { logout: 'logout' }),
    logoutHandler() {
         this.logout();
         this.$router.push("/");  
    },
    type(number) {
      this.step = number;
    },
  },
  mounted() {
    this.data;
  },
};
</script>
<style></style>
