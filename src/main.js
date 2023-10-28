import { createApp } from "vue";
// import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
import { createPinia } from 'pinia'
// import { pinia } from './store/store';
import uiComponents from "./ui-components";



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
const pinia = createPinia()

app.use(pinia);
app.use(router);
app.use(store);
app.mount("#app");
