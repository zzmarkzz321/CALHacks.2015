// @Author: Mark renzo Santiago
// Cal Hacks 2015

// gets the current location of person who found item 
function getCurrentLoc() {
    if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: 51.5033630,
        lng: -0.1453140
      };

      // Creates the marker on the map for current position
      var marker = new google.maps.Marker({
        position: pos,
        map: map,
        title: 'FOUND'
      });

      marker.addListener('click', function() {
        infowindow.open(map, marker);
      });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
}
