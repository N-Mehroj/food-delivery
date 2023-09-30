<template >
  <div class="w-full bg-gray-200  h-1.5 mb-4 fixed z-50 top-0" v-if="isLoading">
    <div class="bg-bl h-1.5 rounded-l-none rounded-xl" style="animation: progress 5s linear infinite;"></div>
  </div>

  <div>
    <div>
      <Navbar
        :class="{ hidden: this.$route.name == 'login' || this.$route.name == 'register' || this.$route.name == 'forgot' }" />
    </div>
    <div :class="[{ 'mt-0': this.$route.name == 'register' || this.$route.name == 'login' }]">
      <RouterView v-if="isLoading != true || isLogedIn == false"/>
    </div>

    <div>
      <Footer
        :class="{ hidden: this.$route.name == 'login' || this.$route.name == 'register' || this.$route.name == 'forgot' || this.$route.name == 'user' }" />
       <!-- <h1>{{ user }}</h1> -->
    </div>
  </div>
  
</template>

<script >


import { Navbar, Product, Footer } from '@/components/'
import { RouterView } from "vue-router"

import { mapState } from 'vuex'
import {mapGetters} from "vuex"
import {gettersTypes} from '@/modules/type'

export default {
  computed: {
    ...mapState({
      isLoading: state => state.auth.isLoading,
    }),
    ...mapGetters({
      user: gettersTypes.user,            
      isLogedIn: gettersTypes.isLogedIn,            
    }),
  },
  components: {
    Navbar,
    Product,
    Footer
  },
  async mounted() {
    await this.$store.dispatch("getUsers")
    //  this.$store.dispatch("getArticles")    

  },
}

</script>

<style>
@keyframes progress {
  0% {
    width: 0%;
  }

  25% {
    width: 25%;
  }

  50% {
    width: 50%;
  }
  75% {
    width: 75%;
  }

  100% {
    width: 100%;
  }
}</style>