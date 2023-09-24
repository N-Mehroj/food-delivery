<template>
        <div>
          <Navbar :class="{hidden: this.$route.name == 'login'|| this.$route.name == 'register' || this.$route.name == 'forgot' }"/>
        </div>
        <div>
          <RouterView/>
        </div>
        <div>
           <Footer :class="{hidden: this.$route.name == 'login'|| this.$route.name == 'register' || this.$route.name == 'forgot' }" />
        </div>
</template>

<script >
      

     import {Navbar,Product,Footer} from '@/components/' 
     import {RouterView} from "vue-router"

     export default {
         components: {
            Navbar,
            Product,
            Footer
         },
    
     }
</script>

<style >

</style>