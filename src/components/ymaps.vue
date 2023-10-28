<template>
  <!-- <input type="text" v-model="" /> -->
  <div id="my-custom-balloon" style="
      border-radius: 30px;
      overflow: hidden;
      width: 100%;
      height: 400px;
      position: relative;
    ">
    <v-icon name="hi-solid-location-marker" class="tx-bl" style="
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 100;
      " scale="2.1" />
    <div id="map" style="width: 100%; height: 400px"></div>
  </div>
</template>
<script setup>
import { ref } from "vue";
// import { useStore } from "vuex";
import { useStoreData } from "../store/store";

ymaps.ready(init);
var refData = ref([""]);
var refAddress = ref([""]);

function init() {
  var myPlacemark,
    myMap = new ymaps.Map(
      "map",
      {
        center: [40.1231, 67.8239],
        zoom: 15,
        controls: ["zoomControl", "geolocationControl", "typeSelector"],
        // , "typeSelector"
      },
      {
        searchControlProvider: "yandex#search",
      }
    );

  var zoomControl = myMap.controls.get("zoomControl");
  var layer = myMap.controls.get("typeSelector");

  // Stilni o'zgartirish
  zoomControl.options.set("size", "small");
  layer.options.set("size", "small");
  // Listening for a click on the map
  myMap.events.add("actionend", function (e) {
    // var coords = e.get("coords");
    var markerCoordinates = myMap.getCenter();
    // Moving the placemark if it was already created
    if (myPlacemark) {
      myPlacemark.geometry.setCoordinates(markerCoordinates);
    }
    // Otherwise, creating it.
    else {
      // myPlacemark = createPlacemark(markerCoordinates);
      // myMap.geoObjects.add(myPlacemark);
      // // Listening for the dragging end event on the placemark.
      // myPlacemark.events.add("dragend", function () {
      //   getAddress(myPlacemark.geometry.getCoordinates());
      // });
    }

    // getAddress(markerCoordinates);
    getData(markerCoordinates);
    // updateDateValue();
  });
  // Creating a placemark
  function createPlacemark(coords) {
    return new ymaps.Placemark(
      coords,
      {
        iconCaption: "searching...",
      },
      {
        preset: "islands#violetDotIconWithCaption",
        draggable: true,
      }
    );
  }

  // Determining the address by coordinates (reverse geocoding).
  // function getAddress(coords) {
  //   myPlacemark.properties.set("iconCaption", "searching...");
  //   ymaps.geocode(coords).then(function (res) {
  //     var firstGeoObject = res.geoObjects.get(0);
  //     myPlacemark.properties.set({
  //       // Forming a string with the object's data.
  //       iconCaption: [
  //         // The name of the municipality or the higher territorial-administrative formation.
  //         firstGeoObject.getLocalities().length
  //           ? firstGeoObject.getLocalities()
  //           : firstGeoObject.getAdministrativeAreas(),
  //         // Getting the path to the toponym; if the method returns null, then requesting the name of the building.
  //         firstGeoObject.getThoroughfare() || firstGeoObject.getPremise(),
  //       ]
  //         .filter(Boolean)
  //         .join(", "),
  //       // Specifying a string with the address of the object as the balloon content.
  //       balloonContent: firstGeoObject.getAddressLine(),
  //     });
  //   });
  // }

  // Determining the address by coordinates (reverse geocoding).
  function getData(coords) {
    ymaps.geocode(coords).then(function (res) {
      var firstGeoObject = res.geoObjects.get(0);
      refData.value = firstGeoObject.getAddressLine();
      // console.log(firstGeoObject.properties._data.description);
      // console.log(firstGeoObject.properties._data.text);
      // console.log(firstGeoObject.properties._data.boundedBy[0][0]);
      // console.log(firstGeoObject.properties._data.boundedBy[0][1]);
      var area = firstGeoObject.properties._data.description;
      var address = firstGeoObject.properties._data.text;
      var lat = firstGeoObject.properties._data.boundedBy[0][0];
      var lng = firstGeoObject.properties._data.boundedBy[0][1];

      refAddress.value = [area, address, lat, lng];

      const store = useStoreData();

      store.address = refAddress.value;
    });
  }
  createPlacemark(myMap.getCenter());
}
// console.log(refData.value);
</script>
<script>
export default {
  methods: {},
};
</script>

<style></style>
