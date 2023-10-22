import { createApp } from "vue";
// import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
import uiComponents from "./ui-components";

import YmapPlugin from "vue-yandex-maps";

import "@/assets/style.css";
import "@/assets/tailwind.css";

import { OhVueIcon, addIcons } from "oh-vue-icons";
import {
  BiShield,
  MdPayment,
  CoLocationPin,
  RiSearchLine,
  OiPerson,
  RiShoppingBag3Line,
  MdAccesstime,
  MdDeliverydining,
  BiTelegram,
  BiInstagram,
  IoChevronBackOutline,
  BiCheck,
  HiSolidLocationMarker
} from "oh-vue-icons/icons";

addIcons(
  BiShield,
  MdPayment,
  CoLocationPin,
  RiSearchLine,
  OiPerson,
  RiShoppingBag3Line,
  MdAccesstime,
  MdDeliverydining,
  BiTelegram,
  BiInstagram,
  IoChevronBackOutline,
  BiCheck,
  HiSolidLocationMarker
);

const app = createApp(App);
app.component("v-icon", OhVueIcon);

uiComponents.map((component) => {
  app.component(component.name, component);
});
// console.log(uiComponents)
const settings = {
     apiKey: '0c141633-b9db-4970-ad6f-9f53a2d7e24a',
     lang: 'en_RU',
     coordorder: 'longlat',
     enterprise: false,
     version: '2.1'
   }

app.use(YmapPlugin, settings)



app.use(router);
app.use(store);
app.mount("#app");
