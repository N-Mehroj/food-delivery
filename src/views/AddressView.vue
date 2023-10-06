
<template >
    <div class="w-full ml-16" v-if="currentName == 'address'">
        <!-- <h1>Adress data</h1>
        <div class="boxx border border-spacing-2 rounded-xl p-6 pt-5">
            <h2>Existing shoping address</h2>
            <div class="mm flex border border-spacing-2 rounded-xl w-80">
                <img :src="maps" alt="adsas" width="130">
                <div class="tt inline-block ml-4 mt-1">
                    <h5>Jizzax . SH</h5>
                    <p>Sayiljoy ko'chasi 18</p>
                    <p>index kode 10001</p>
                </div>
                <div class="text-2xl font-black cursor-pointer">...</div>
            </div>
            <div class="map-wrap ">
                <div class="map" ref="mapContainer"></div>
            </div>
        </div> -->
        <!-- <input type="text" v-model="geoState.lng" @input="onInputChange = $event.target"> -->
        <!-- <input :value="inputValue" @input="inputValue = $event" placeholder="Geo State Lng"> -->
        <!-- <input type="text" :value="geoState.lat" @input="geoState = $event.target.value" ref="input"> -->
        <!-- <h1>{{ this.setup }}</h1> -->
        <!-- <yandex-map :settings="settings" :zoom="zoom" :coords="activeCoords" :controls="controls" :behaviors="behaviors"
            :detailed-controls="detailedControls" @map-was-initialized="mapWasInitializedHandler">
            <ymap-marker marker-id="123" :coords="activeCoords" :icon="markerIcon" :balloon-template="balloonTemplate" />
        </yandex-map> -->
        <yandex-map :settings="settings" :zoom="zoom" :coords="activeCoords" :controls="controls" :behaviors="behaviors"
            :detailed-controls="detailedControls" @map-was-initialized="mapWasInitializedHandler">
            <ymap-marker marker-id="123" :coords="activeCoords" :icon="markerIcon" :balloon-template="balloonTemplate" />
        </yandex-map>

    </div>
</template>
<script setup>
// import { yandexMap } from 'vue-yandex-maps'
// const coordinates = [55, 33];
// const controls = ['fullscreenControl'];
// const detailedControls = { zoomControl: { position: { right: 10, top: 50 } } };
</script>

<!-- <script setup>
     const settings = {
    apiKey: '0c141633-b9db-4970-ad6f-9f53a2d7e24a',
    lang: 'ru_RU', // Используемый язык
    coordorder: 'latlong', // Порядок задания географических координат
    debug: false, // Режим отладки
    version: '2.1' // Версия Я.Карт
}
</script> -->
<script>
import { VueYandexMap, YandexMap, ymapSettings } from "vue-yandex-maps";

export default {

    data: () => ({
        coords: [[55.753215, 37.622504], [59.939095, 30.315868]],
        zoom: 10,
        controls: ["zoomControl", "geolocationControl", "searchControl"],
        behaviors: ["drag"],
        detailedControls: {
            zoomControl: {
                position: {
                    right: 10,
                    top: 100
                }
            },
            geolocationControl: {
                float: "right"
            },
            searchControl: {
                float: "right"
            }
        },

        settings: {
            apiKey: "0c141633-b9db-4970-ad6f-9f53a2d7e24a",
            lang: "en",
            coordorder: "latlong",
            version: "2.1"
        },

        picked: 0,
        options: [
            { label: "Moscow", value: 0 },
            { label: "Saint Petersburg", value: 1 }
        ],
        markerIcon: {
            layout: "default#imageWithContent",
            imageHref: "//image.flaticon.com/icons/svg/2150/2150467.svg",
            imageSize: [100, 100],
            imageOffset: [-50, 0],
            content: "Vue",
            contentOffset: [-10, 15],
            contentLayout:
                '<div style="background: skyblue; width: 50px; color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        }
    }),

    methods: {
        mapWasInitializedHandler(map) {
            console.log(map);
        }
    },

    computed: {
        currentName() {
            return this.$route.name;
        },
        activeCoords() {
            return this.coords[this.picked];
        },
        balloonTemplate() {
            return `
        <h1 class="red">Hi, everyone!</h1>
        <p>I am here: ${this.activeCoords}</p>
        <img src="http://via.placeholder.com/350x150">
      `;
        }

    },

}
</script>

<!-- <script setup>
import { Map, MapStyle, Marker, config } from '@maptiler/sdk';
import { shallowRef, ref, onMounted, onUnmounted, markRaw } from 'vue';

import '@maptiler/sdk/dist/maptiler-sdk.css';

import { useStore } from 'vuex';

const store = useStore();

const mapContainer = shallowRef(null);
const map = shallowRef(null);



const geoState = ref({ lng: 67.8239, lat: 40.1231 });

const geoData = ref(null);
onMounted(() => {

    config.apiKey = 'TcEH1VBt7fK285z6QFzB';

    const initialState = { lng: 67.8239, lat: 40.1231, zoom: 11.15 };

    map.value = markRaw(new Map({
        container: mapContainer.value,
        style: MapStyle.STREETS,
        center: [initialState.lng, initialState.lat],
        zoom: initialState.zoom
    }));

    const marker = new Marker({
        color: "#4E60FF",
        anchor: 'bottom',
        draggable: true,
        offset: [0, -15],
    })
        .setLngLat([initialState.lng, initialState.lat])
        .addTo(map.value);



    async function onDragEnd() {
        var lngLat = marker.getLngLat();
        geoState.value = { lng: lngLat.lng, lat: lngLat.lat };

        const data = geoState.lat;

        // store.dispatch('location', data);

        // const fetchDataFromApi =  () => {
        try {
            // API manzili
            const apiUrl = 'http://api.positionstack.com/v1/reverse?access_key=95f090306b50505b759cc03cd0d38b5c&query=' + lngLat.lat + ',' + lngLat.lng;
            // const apiUrl = 'http://127.0.0.1:8000/api/userdata';

            // Ma'lumotlarni yuklash
            const response = await fetch(apiUrl);
            const data = await response.json();
            console.log(data);
            // Ma'lumotni jo'natish uchun API manzili
            const apiUrlSecond = 'http://127.0.0.1:8000/api/geo';

            // Ma'lumotlarni POST so'rov bilan jo'natish
            fetch(apiUrlSecond, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
                .then(response => response.json())
                .then(data => {
                    console.log('Yuborilgan ma\'lumot:', data);
                    geoData = data;
                    // Yuborilgan ma'lumotni qaytarish va boshqa operatsiyalarni bajarish mumkin
                })
                .catch(error => {
                    console.error('Xato yuz berdi:', error);
                    // Xatoni qaytarish va xatoni qanday tuzatish kerakligini aniqlash mumkin
                });





            // postData.value = data;
        } catch (error) {
            console.error('Xato yuz berdi:', error);
        }
        // };

    }


    marker.on('dragend', onDragEnd);
}),
    onUnmounted(() => {
        map.value?.remove();
    });


</script>

<script>
import { maps } from '../constants/'
import { ref } from 'vue';

export default {
    data() {
        return {
            maps,
        }

    },
    computed: {
        currentName() {
            return this.$route.name;
        },

    },

}
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
</style> -->