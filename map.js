mapboxgl.accessToken =  "pk.eyJ1IjoiZWNvZ28yMDIzIiwiYSI6ImNreml1OG96ZzI5dDUydW82Mmp3bHgyazgifQ.9HTcc-QvwEakl_b9Wvl7SQ"
navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
  enableHighAccuracy: true
})

function successLocation(position) {
  setupMap([position.coords.longitude, position.coords.latitude])
  const newYork = new mapboxgl.LngLat(-74.0060, 40.7128);
  const losAngeles = new mapboxgl.LngLat(-118.2437, 34.0522);
  newYork.distanceTo(losAngeles);
}

function errorLocation() {
  setupMap([9.926115195487489, 78.11183384790866])
}

function setupMap(center) {
  const from= new mapboxgl.LngLat(center[0],center[1])
  const map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/mapbox/streets-v11",
    center: center,
    zoom: 15

  })


  const nav = new mapboxgl.NavigationControl()
  console.log(nav)
  map.addControl(nav)
 
  var directions = new MapboxDirections({
    accessToken: 'pk.eyJ1IjoiZWNvZ28yMDIzIiwiYSI6ImNreml1OG96ZzI5dDUydW82Mmp3bHgyazgifQ.9HTcc-QvwEakl_b9Wvl7SQ',
    unit: 'metric',
    profile: 'mapbox/driving'
  });


  map.addControl(directions, "top-left")

}