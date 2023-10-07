<template>
  <div class="login grid gap-0 md:grid-cols-2 xl:grid-cols-12 2xl:grid-cols-12">
    <div
      class="container pt-6 2xl:pl-40 xl:pl-40 lg:pl-20 md:px-10 xl:col-span-5"
    >
      <img :src="logo" alt="" class="w-24" />
      <div class="login-cot mt-16 md:mt-40 xl:mt-32 xl:pr-12 2xl:mt-20">
        <h1 class="">Login</h1>
        <p class="mt-8 tex-[#545563] text-sm">
          Sign in with your data that entered during your registration
        </p>
        <form @submit.prevent class="mt-6">
          <label>Email</label>
          <Input
            placeholder="name@example.com"
            type="email"
            :value="email"
            @input="email = $event.target.value"
          />
          <label>Password</label>
          <Input
            placeholder="min. 8 characters"
            type="password"
            :value="password"
            @input="password = $event.target.value"
          />
          <div class="flex items-center">
            <input
              type="checkbox"
              class="w-4 h-4 text-blue-600 bg-gray-100 rounded-xl focus:ring-blue-500"
              :value="checkbox"
              @input="checkbox = $event.target.value"
            />
            <label class="ml-4 mt-1 text-sm font-medium text-[#2B2B43]"
              >Keep me logged in</label
            >
          </div>
          <button
            @click="handleSubmit"
            type="submit"
            class="hover:text-[#4E60FF] bg-[#4E60FF] w-full mt-8 text-white py-2 rounded-xl hover:bg-white border transition-colors border-[#4E60FF]"
          >
            Login
          </button>
        </form>
        <div
          class="mt-5 py-2 rounded-xl bg-white transition-colors text-center"
        >
          <RouterLink
            :to="{ name: 'forgot' }"
            class="text-[#4E60FF] cursor-pointer inline"
            >Forgot password
          </RouterLink>
        </div>
        <div
          class="text-gray-400 w-full py-2 rounded-xl bg-white transition-colors text-center cursor-default mt-28 2xl:mt-3"
        >
          Forgot password ?
          <RouterLink :to="{ name: 'register' }" href="#" class="text-[#4E60FF]"
            >Sign Up
          </RouterLink>
        </div>
      </div>
    </div>
    <BannerLogin />
  </div>
</template>
<script>
import { mapState } from 'vuex';
import { logo, banner } from '../constants/';
import { BannerLogin } from '@/components/';
export default {
  data() {
    return {
      logo,
      banner,

      email: '',
      password: '',
      checkbox: 'asds',
    };
  },
  computed: {
    ...mapState({
      isLoading: (state) => state.auth.isLoading,
      error: (state) => state.auth.error,
    }),
  },
  components: {
    BannerLogin,
  },
  methods: {
    handleSubmit() {
      const data = {
        email: this.email,
        password: this.password,
        chackbox: this.chackbox,
      };
      this.$store
        .dispatch('login', data)
        .then((user) => {
          console.log('user', user);
          this.$router.push({ name: 'home' });
        })
        .catch((err) => console.log('error', err));
    },
  },
};
</script>
<style></style>
