<template >
    <div class="container mt-10">
         <div class="top-nav flex justify-between mb-7">
             <h2 class="">Hottest deals</h2>
            <div>
                <h5 class="text-[#4E60FF] px-5 py-2 rounded-3xl bg-white border transition-colors border-[#4E60FF] cursor-pointer" style="align-items: center;">All DEALS</h5>
            </div>
         </div>
        <div class="grid gap-12 grid-cols-2">
            <div class="bg-[#F3F4FF] rounded-xl h-80 overflow-hidden">
                <img :src="iceCream" alt="" srcset="" class="float-left mt-7 ml-5" width="350">
                <div class="text float-right mr-20 mt-10">
                    <h4 class="mb-6">All deserts</h4>
                    <h1 class="mb-24 text-[#4E60FF] font-black">20% OFF</h1>
                    <p>Deserts</p>
                </div>
            </div>
            <div class="bg-[#FFF3ED] rounded-xl h-80 overflow-hidden">
                <img :src="gamburger" alt="" srcset="" class="float-left mt-24 ml-5" width="350">
                <div class="text float-right mr-20 mt-10">
                    <h4 class="mb-6">Big Burgers</h4>
                    <h1 class="mb-24 text-[#FD6D22] font-black">50% OFF</h1>
                    <p>Fooddies</p>
                </div>
            </div>
        </div>

        <div class="grid lg:gap-10 lg:grid-cols-6 md:grid-cols-3 md:gap-3  sm:grid-cols-2 sm:gap-5  grid-cols-3 gap-5 mt-12">
            <Tag class="border-2">
                <img :src="pizza" alt="" srcset="" class="w-10">
                <p class="mt-3">Pizza</p>
            </Tag>
            <Tag class="border-4 border-[#697BFF]">
                <img :src="burger" alt="" srcset="" class="w-10">
                <p class="mt-3">Burger</p>
            </Tag>
            <Tag class="border-2">
                <img :src="meet" alt="" srcset="" class="w-10">
                <p class="mt-3">BBQ</p>
            </Tag>
            <Tag class="border-2">
                <img :src="sushi" alt="" srcset="" class="w-10">
                <p class="mt-3">Suchi</p>
            </Tag>
            <Tag  class="border-2">
                <img :src="vegan" alt="" srcset="" class="w-10">
                <p class="mt-3">Vegan</p>
            </Tag>
            <Tag class="border-2">
                <img :src="cake" alt="" srcset="" class="w-10">
                <p class="mt-3">Desserts</p>
            </Tag>
        </div>

<!-- PART ---------=====LINE -->

        <div class="top-nav flex justify-between mt-10 mb-7">
             <h2 class="">Nearby restaurants</h2>
            <div>
                <h5 class="text-[#4E60FF] px-5 py-2 rounded-3xl bg-white border transition-colors border-[#4E60FF] cursor-pointer" style="align-items: center;">All RESTAURANTS</h5>
            </div>
         </div>

<!-- PRODUCT -------------=== DINAMIC -->
         <div class="mb-8 grid lg:gap-9 lg:grid-cols-3 md:grid-cols-3 md:gap-3  sm:grid-cols-2 sm:gap-5  grid-cols-1 gap-5 mt-12">
              <Product/>
         </div>

<!-- LOAD  MORE -------   ==== MORE -->

           <div class="top-nav flex justify-center mt-10 mb-16">
              <div>
                <h5 class="text-[#4E60FF] px-5 py-4 rounded-md bg-white border transition-colors border-[#4E60FF] cursor-pointer" style="align-items: center;">Load More</h5>
              </div>
           </div>

    </div>
</template>
<script>

import {Product} from '@/components/' 

import { iceCream, gamburger } from '../constants/'
import { pizza,burger,meet,sushi,vegan,cake } from '../constants/'

export default {
    data() {
        return {
            iceCream,gamburger,
            pizza,burger,meet,sushi,vegan,cake,
        }

    },
    components: {
            Product,
    },

}
</script>
<style ></style>