<template>
   <!-- <footer>
     <div class="w-full bg-[#2B2B43] text-white py-16 flex">
        <div class="ddd">
             <img :src="logoFooter" alt="">
             <div class="loo">
                 <div>
                    <v-icon name="bi-telegram"></v-icon>
                 </div>
                 <div>
                    <v-icon name="bi-instagram"></v-icon>
                 </div>
            </div>
            <p>copy right 2023 year</p>
        </div>
        <div>

        </div>
    </div>
  </footer>    -->


  <footer class="py-12 bg-gray-50 xl:pt-24 dark:bg-gray-800 ">
    <div class="w-full px-4 mx-auto max-w-8xl container">
        <div class="grid gap-12 xl:grid-cols-6 xl:gap-24">
            <div class="col-span-2">
                <a href="https://flowbite.com/" class="flex mb-5">
                    <img :src="logoFooter" class="h-8 mr-3" alt="Flowbite Logo">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
                <p class="max-w-lg mb-3 text-gray-600 dark:text-gray-400">Flowbite is a library of interactive UI components built with Tailwind CSS that can get you started building websites faster and more efficiently.</p>
                <p class="max-w-lg text-gray-600 dark:text-gray-400">Code licensed <a href="https://github.com/themesberg/flowbite/blob/main/LICENSE.md" class="text-blue-600 dark:text-blue-500 hover:underline" rel="nofollow">MIT</a>, docs <a href="https://creativecommons.org/licenses/by/3.0/" class="text-blue-600 hover:underline dark:text-blue-500" rel="nofollow">CC BY 3.0</a>.</p>
            </div>
            <div>
                <h3 class="mb-6 text-sm font-semibold text-gray-400 uppercase dark:text-white">Resources</h3>
                <ul>
                    <li class="mb-4">
                        <a href="https://flowbite.com/" class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline">Documentation</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://flowbite.com/blocks/" class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline">Flowbite Blocks</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://flowbite.com/figma/" class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline">Figma Design</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://flowbite.com/icons/" class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline">Flowbite Icons</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://flowbite.com/pro/" class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline">Pro version</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="mb-6 text-sm font-semibold text-gray-400 uppercase dark:text-white">Help and support</h3>
                <ul>
                    <li class="mb-4">
                        <a href="https://flowbite.com/contact/" rel="noreferrer nofollow" class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline">Contact us</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://github.com/themesberg/flowbite/discussions" rel="noreferrer nofollow" class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline">Github discussions</a>
                    </li>
                    <li class="mb-4 flex items-center">
                        <a href="https://flowbite.com/work-with-us/" class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline">Work with us </a>
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 ml-2">
                        New
                        </span>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="mb-6 text-sm font-semibold text-gray-400 uppercase dark:text-white">Follow us</h3>
                <ul>
                    <li class="mb-4">
                        <a href="https://discord.gg/4eeurUVvTy" rel="noreferrer nofollow" class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline">Discord</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://github.com/themesberg/flowbite" class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline">Github</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://twitter.com/zoltanszogyenyi" rel="noreferrer nofollow" class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline">Twitter</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="mb-6 text-sm font-semibold text-gray-400 uppercase dark:text-white">Legal</h3>
                <ul>
                    <li class="mb-4">
                        <a href="https://flowbite.com/license/" class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline">License (EULA)</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://flowbite.com/privacy-policy/" class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline">Privacy Policy</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://flowbite.com/terms-and-conditions/" class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline">Terms &amp; Conditions</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://flowbite.com/brand/" class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline">Brand guideline</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="my-8 border-gray-200 dark:border-gray-700 lg:my-12">
        <span class="block text-center text-gray-600 dark:text-gray-400 font-">© 2019-<span id="currentYear">2023</span> <a href="https://flowbite.com/">Flowbite™</a> is a registered trademark. All Rights Reserved.
        </span>
    </div>
</footer>
</template>
<script>
import {logoFooter} from '../constants/index.js'


export default {
    data(){
        return{
            logoFooter,

        }

     },

}
</script>
<style>
    
</style>