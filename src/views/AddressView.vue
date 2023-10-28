<template>
  <div class="w-full ml-16" v-if="currentName == 'address'">
    <h1>Address</h1>
    <p>Existing shopping addresses</p>
    <button @click="mapActions(true)"
      class="hover:text-[#4E60FF] px-3 py-1 bg-[#4E60FF] h-12 text-white rounded-xl hover:bg-white border transition-colors border-[#4E60FF]">New
      map</button>

    <div id="popup1" class="overlay" :class="[{ 'active': this.activated == true }]">
      <div class="popup">
        <h2>Your Address</h2>
        <!-- <a class="close" href="#"></a> -->
        <button @click="mapActions(false)" class="closes">&times;</button>

        <div class="content">
          <form method="post" @submit.prevent>
            <div class="grid md:grid-cols-2 sm:grid-cols-1 mb-3">
              <Input class="rounded-md w-full mb-0" type="text" placeholder="Address" :value="address[1]"/>
              <button @click="addAddressHandler()"  type="submit" class="md:ml-4 md:w-36 sm:w-full sm:mt-2 md:mt-0 sm:ml-0 hover:text-[#4E60FF] px-2 py-3 bg-[#4E60FF] h-12 text-white rounded-xl hover:bg-white border transition-colors border-[#4E60FF]">
                add map
              </button>
            </div>
          </form> 
          <Map></Map>

        </div>

      </div>
    </div>
  </div>
</template>

<script>
// import { yandexMap, ymapMarker } from 'vue-yandex-maps'
import { Map } from "@/components/";
import { mapState,mapActions } from 'pinia'
import { useStoreData } from '@/store/store'

export default {
  
  data() {
    return {
      activated: false,
      dateValue: 0,
    };
  },
  computed: {
    currentName() {
      return this.$route.name;
    },
    ...mapState(useStoreData , ['address']),
    
  },
  components: {
    Map,
  },
  methods: {
  // ...mapActions(useAddressStore, ['addAddress']),
  ...mapActions(useStoreData, { addAddress: 'addAddress' }),

    mapActions(val) {
      this.activated = val;
    },
    addAddressHandler() {
      if(this.address[1] != null ){
        const addr = [this.address[0], this.address[1], this.address[2], this.address[3]];
        this.addAddress(addr)
        this.mapActions(false);
      }
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
