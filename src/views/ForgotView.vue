<template>
  <div class="login grid gap-0 grid-cols-1 md:grid-cols-2 xl:grid-cols-12">
    <div
      class="container pt-4 2xl:pl-40 xl:pl-40 lg:pl-20 md:px-9 xl:col-span-5 h-screen"
    >
      <img :src="logo" alt="" class="w-24" />
      <div class="mt-7 md:mt-32 xl:mt-24 flex">
        <RouterLink
          :to="{ name: 'login' }"
          class="text-[#797A85] cursor-posinter inline"
          ><v-icon
            name="io-chevron-back-outline"
            class="text-[#797A85] mr-3"
          ></v-icon
          >Back in login</RouterLink
        >
      </div>
      <div class="login-cot mt-8 xl:mt-8 xl:pr-12 2xl:mt-8">
        <h2 class="text-[40px] md:text-[40px]">Forgot password</h2>
        <p class="mt-7 tex-[#545563] text-sm">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque iusto
          alias voluptatibus quos eveniet! Eius sapiente aut
        </p>
        <form @submit.prevent class="mt-5">
          <label>Email</label>
          <Input placeholder="name@example.com" type="email" />
          <button
            type="submit"
            class="hover:text-[#4E60FF] bg-[#4E60FF] w-full mt-4 text-white py-2 rounded-xl hover:bg-white border transition-colors border-[#4E60FF]"
          >
            Send instructions
          </button>
        </form>

        <div
          class="text-gray-400 w-full py-2 rounded-xl bg-white transition-colors text-center cursor-default mt-72 md:mt-96 xl:mt-72"
        >
          Do you have any questions ? <a href="#" class="text-[#4E60FF]">FAQ</a>
        </div>
      </div>
    </div>
    <BannerLogin />
  </div>
</template>
<script>
import { logo, banner } from '../constants/';
import { BannerLogin } from '@/components/';
export default {
  data() {
    return {
      logo,
      banner,
    };
  },
  components: {
    BannerLogin,
  },
};
</script>
<style></style>
