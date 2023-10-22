<template>
  <div class="w-full ml-16" v-if="currentName == 'address'">
    <h1>Address</h1>
    <button @click="mapActions(1)" class="hover:text-[#4E60FF] px-2 py-1 bg-[#4E60FF] h-12 text-white rounded-xl hover:bg-white border transition-colors border-[#4E60FF]">Add new map</button>

    <div id="popup1" class="overlay" :class="[{'active' : this.activated == 1}]">
      <div class="popup">
        <h2>Your Address</h2>
        <!-- <a class="close" href="#"></a> -->
        <button @click="mapActions(0)" class="closes">&times;</button>
        <div class="content">
          <Map></Map>

        </div>
      </div>
    </div>
  </div>
</template>

<script>
// import { yandexMap, ymapMarker } from 'vue-yandex-maps'
import { Map } from "@/components/";
export default {
  data() {
    return {
      activated: 0,
      dateValue: 0,
    };
  },
  computed: {
    currentName() {
      return this.$route.name;
    },
  },
  components: {
    Map,
  },
  methods: {
    mapActions(val){
        this.activated = val;
    },
  }
};
</script>

<style scoped>
.map-wrap {
  position: relative;
  width: 100%;
  height: calc(100vh - 77px);
  /* calculate height of the screen minus the heading */
}

.map {
  position: absolute;
  width: 100%;
  height: 100%;
}
</style>
-->
