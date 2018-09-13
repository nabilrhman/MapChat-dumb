var map;
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  map = new google.maps.Map(
      document.getElementById('map'), {
      	zoom: 4, 
      	center: uluru,
      	disableDefaultUI: true
      });
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}