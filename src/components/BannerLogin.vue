<template>
  <div
    class="container w-full bg-[#6779FB] md:block 2xl:inline hidden text-center text-white xl:col-span-7"
  >
    <img :src="banner" alt="" srcset="" class="mx-auto mt-20" />
    <h1 class="text-white">Leave reiews for all meals</h1>
    <p class="mt-8 text-sm max-w-lg mx-auto">
      Lorem ipsum dolor sit amet, magna scaevola his ei. Cum te paulo probatus
      molestiae, eirmod assentior eum ne, et omnis antiopam mel.
    </p>
  </div>
</template>
<script>
import { banner } from '../constants/';
export default {
  data() {
    return {
      banner,
    };
  },
};
</script>
<style></style>
