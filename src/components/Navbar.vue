<template >
    <div>
        <nav>
            <div class="nav-container w-full flex justify-between pt-6 border-b-2 pb-2 border-slate-100   ">
                <div class="left-side flex ml-40">
                    <img :src="logo" alt="" class="h-11 mt-1">
                    <div class="search bg-[#EDEEF2] rounded-xl flex justify-center h-12 px-1 ml-16" style="align-items: center;">
                        <input type="text" class="bg-transparent  px-4 py-1 placeholder:text-[#83859C] text-[#5f606b]" placeholder="Search">
                        <v-icon name="ri-search-line"  class="text-[#8b8d9c] mr-3 cursor-pointer"/>
                    </div>
                </div> 
                <div class="right-side mr-40">
                    <ul class="flex menu">
                        <li class="hover:text-[#4E60FF] h-12">Restaurants</li>
                        <li class="hover:text-[#4E60FF] h-12">Deals</li>
                        <div class="line hidden"></div>
                        <li class="hover:text-[#4E60FF] h-12 hidden">My orders</li>
                        <li class="mr-9 hidden">
                           <div class="bg-[#F3F4FF] p-3 rounded-xl -mt-3">  
                              <v-icon name="ri-shopping-bag-3-line" class="text-[#4E60FF] "  scale="1.3"/>
                              <p class="noti">99</p>
                          </div>
                          
                        </li>
                        <div class="line"></div>
                        <RouterLink :to="{name: 'login'}" class="hover:text-[#4E60FF] h-12 mr-4">Login</RouterLink>
                        <RouterLink :to="{name: 'login'}" class="hover:text-[#4E60FF] bg-[#4E60FF] h-12 text-white rounded-xl hover:bg-white border transition-colors border-[#4E60FF]">Sign up</RouterLink>
                    </ul>
                </div>
            </div>

        </nav>
    </div>
</template>

<script>
import {logo} from '../constants/index.js'

export default {
    data(){
        return{
            logo,

        }

     },

}
</script>

<style >
    
</style>