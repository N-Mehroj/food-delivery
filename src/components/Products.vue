<template>
    <!-- <div class="mr-0 relative px-2 py-1 bg-[#4E60FF] text-white rounded-xl">futured</div> -->
    <!-- <div class="rounded-xl overflow-hidden border-2">
        <img :src="product" alt="" class="w-full">
        <div class="p-3 mt-4 mb-3">
            <div class="flex justify-between">
                <h1 class="ml-2">Royal sushi house</h1>
                <div class="mr-3">
                    <v-icon name="ri-shopping-bag-3-line" class="transition-colors text-[#C7C8D2] mt-2 cursor-pointer"
                        scale="1.5" />
                    <p class="noti-mini">99</p>
                </div>
            </div>
            <div class="text mb-3 flex align-middle">
                <p class=""><v-icon name="md-accesstime" class="transition-colors text-[#C7C8D2] mt-2 cursor-pointer mr-1 "
                        scale="1.2"></v-icon> 40-60 min </p>
                <p class=""><v-icon name="md-deliverydining"
                        class="transition-colors text-[#C7C8D2] mt-2 cursor-pointer mr-1 ml-5" scale="1.2"></v-icon> $20 min
                    sum </p>
            </div>
            <div class="gap">
                <div class="inline ml-3  p-2 px-3  bg-[#EDEEF2] rounded-xl">
                    <img :src="pizza" alt="" class="w-5 inline mr-2">
                    <p class="inline">pizza</p>
                </div>
                <div class="inline ml-3 p-2 px-3  bg-[#EDEEF2] rounded-xl">
                    <img :src="burger" alt="" class="w-5 inline mr-2">
                    <p class="inline">pizza</p>
                </div>
            </div>
        </div>
    </div> -->
    <div class="rounded-xl overflow-hidden border-2">
        <img :src="product" alt="" class="w-full">
        <div class="p-3 mt-4 mb-3">
            <div class="flex justify-between">
                <h1 class="ml-2">Royal sushi house</h1>
                <div class="mr-3">
                    <v-icon name="ri-shopping-bag-3-line" class="transition-colors text-[#C7C8D2] mt-2 cursor-pointer"
                        scale="1.5" />
                    <!-- <p class="noti-mini">99</p> -->
                </div>
            </div>
            <div class="text mb-3 flex align-middle">
                <p class=""><v-icon name="md-accesstime" class="transition-colors text-[#C7C8D2] mt-2 cursor-pointer mr-1 "
                        scale="1.2"></v-icon> 40-60 min </p>
                <p class=""><v-icon name="md-deliverydining"
                        class="transition-colors text-[#C7C8D2] mt-2 cursor-pointer mr-1 ml-5" scale="1.2"></v-icon> $20 min
                    sum </p>
            </div>
            <div class="inline  p-2 px-3  bg-[#EDEEF2] rounded-xl">
                <img :src="pizza" alt="" class="w-5 inline mr-2">
                <p class="inline">pizza</p>
            </div>
        </div>
    </div>
</template>
<script>

import { pizza,burger,meet,sushi,vegan,cake } from '../constants/'
import { product } from '../constants/'

export default {
    data() {
        return {
            pizza,burger,meet,sushi,vegan,cake,
            product,
        }

    },
}
</script>
<style ></style>