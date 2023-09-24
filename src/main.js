import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import uiComponents from './ui-components'

import '@/assets/style.css'
import '@/assets/tailwind.css'


import { OhVueIcon, addIcons } from "oh-vue-icons";
import { RiSearchLine ,OiPerson, RiShoppingBag3Line,MdAccesstime,MdDeliverydining,BiTelegram,BiInstagram,IoChevronBackOutline,BiCheck} from "oh-vue-icons/icons";

addIcons(RiSearchLine ,OiPerson, RiShoppingBag3Line,MdAccesstime,MdDeliverydining,BiTelegram,BiInstagram,IoChevronBackOutline,BiCheck);

const app = createApp(App)
app.component("v-icon", OhVueIcon)

uiComponents.map(component => {
     app.component(component.name, component)
})
// console.log(uiComponents)

app.use(router)
app.use(store)

app.mount('#app')
