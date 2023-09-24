<template>
       <div class="container  w-full h-screen bg-[#6779FB] md:hidden 2xl:inline hidden text-center text-white">
           <img :src="banner" alt="" srcset="" class="mx-auto">
           <h1 class="text-white">Leave reiews for all meals</h1>
           <p class="px-20 mt-8">Lorem ipsum dolor sit amet, magna scaevola his ei. Cum te paulo probatus molestiae, eirmod assentior eum ne, et omnis antiopam mel.</p>
        </div>
</template>
<script>
import { banner} from '../constants/'
export default {
    data() {
        return {
            banner,
        }

    },
}
</script>
<style>
    
</style>