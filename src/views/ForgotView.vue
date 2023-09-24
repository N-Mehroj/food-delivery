<template>
    <div class="login grid gap-0  lg:grid-cols-1 xl:grid-cols-1 2xl:grid-cols-2">
        <div class="container pt-10 2xl:px-40 xl:px-40 lg:px-20 md:px-10" >
            <img :src="logo" alt="" class="w-24">
             <div class="mt-20 flex">
               <RouterLink :to="{name: 'login'}" class="text-[#797A85]   cursor-posinter inline"><v-icon name="io-chevron-back-outline" class="text-[#797A85] mr-3"></v-icon>Back in login</RouterLink>
             </div>
            <div class="login-cot mt-16 sm:mt-16 xl:mt-32 xl:pr-24 2xl:mt-8">
                <h1 class="text-center sm:text-center 2xl:text-left">Forgot password</h1>
                <p class="mt-8 tex-[#545563] text-sm text-center 2xl:text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque iusto
                    alias voluptatibus quos eveniet! Eius sapiente aut</p>
                <form @submit.prevent class="mt-8">
                    <label >Email</label>
                    <Input placeholder="name@example.com" type="email" />
                    <button type="submit" class="hover:text-[#4E60FF] bg-[#4E60FF] w-full mt-5 text-white py-2 rounded-xl hover:bg-white border transition-colors border-[#4E60FF]">Send instructions</button>
                </form>

                <div class="text-gray-400 w-full py-2 rounded-xl bg-white transition-colors text-center cursor-default mt-3 sm:mt-5 2xl:mt-9">Do you have any questions ? <a href="#" class="text-[#4E60FF]">FAQ</a></div>
            </div>
        </div>
         <BannerLogin/>
    </div>
</template>
<script>
import { logo,banner} from '../constants/'
import {BannerLogin} from '@/components/' 
export default {
    data() {
        return {
            logo,
            banner,
        }

    },
    components: {
        BannerLogin
    },
}
</script>
<style></style>