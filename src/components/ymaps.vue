<template>
  <!-- <input type="text" v-model="" /> -->
  <div class="grid md:grid-cols-2 sm:grid-cols-1 mb-3">
    <Input class="rounded-md w-full mb-0" type="text" placeholder="Address" :value="refData" />
    <button  class="md:ml-4 md:w-36 sm:w-full sm:mt-2 md:mt-0 sm:ml-0 hover:text-[#4E60FF] px-2 py-3 bg-[#4E60FF] h-12 text-white rounded-xl hover:bg-white border transition-colors border-[#4E60FF]">add map</button>
  </div>
  <div id="my-custom-balloon" style="border-radius: 30px; overflow: hidden; width: 100%; height: 400px; position: relative;">
    <v-icon name="hi-solid-location-marker" class="tx-bl" style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%); z-index: 100;" scale="2.1" />
    <div id="map" style="width: 100%; height: 400px"></div>
  </div>
</template>
<script setup>
import { ref } from "vue";
ymaps.ready(init);
var refData = ref([""]);

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
      //  console.log(firstGeoObject.getAddressLine());
      refData.value = firstGeoObject.getAddressLine();
    });
  }
  createPlacemark(myMap.getCenter());
}
// console.log(refData.value);
</script>
<script>
export default {
  methods: {
    updateDateValues() {
      console.log("updateDateValue");
    },
  },
};
</script>

<style></style>
