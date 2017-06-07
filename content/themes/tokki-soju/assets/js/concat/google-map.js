(function($) {

  /*
   *  new_map
   *
   *  This function will render a Google Map onto the selected jQuery element
   *
   *  @type  function
   *  @date  8/11/2013
   *  @since 4.3.0
   *
   *  @param $el (jQuery element)
   *  @return  n/a
   */
  function new_map($el) {
    // set marker variable
    var $markers = $el.find('.marker');

    // map options
    var args = {
      zoom: 15,
      center: new google.maps.LatLng(0, 0),
      mapTypeId: 'terrain',
      scrollwheel: false,
      draggable: true,
      styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]
    };

    // create map
    var map = new google.maps.Map($el[0], args);

    // add a markers reference
    map.markers = [];

    // add markers
    $markers.each(function() {
      add_marker($(this), map);
    });

    // add class when map is loaded
    google.maps.event.addListenerOnce(map, 'idle', function() {
      $('.acf-map').addClass('loaded');
    });

    // center map
    center_map(map);

    // return the map
    return map;
  }

  /*
   *  add_marker
   *
   *  This function will add a marker to the selected Google Map
   *
   *  @type  function
   *  @date  8/11/2013
   *  @since 4.3.0
   *
   *  @param $marker (jQuery element)
   *  @param map (Google Map object)
   *  @return  n/a
   */
  function add_marker($marker, map) {
    // var
    var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));

    // create marker
    var marker = new google.maps.Marker({
      position: latlng,
      map: map
    });

    // add to array
    map.markers.push(marker);

    // if marker contains HTML, add it to an infoWindow
    if ($marker.html()) {

      // create info window
      var infowindow = new google.maps.InfoWindow({
        content: $marker.html()
      });

      // show info window when marker is clicked
      google.maps.event.addListener(marker, 'click', function() {
        if (infowindow) {
          infowindow.close();
        }
        infowindow.open(map, marker);
      });
    }
  }

  /*
   *  center_map
   *
   *  This function will center the map, showing all markers attached to this map
   *
   *  @type  function
   *  @date  8/11/2013
   *  @since 4.3.0
   *
   *  @param map (Google Map object)
   *  @return  n/a
   */
  function center_map(map) {
    // vars
    var bounds = new google.maps.LatLngBounds();

    // loop through all markers and create bounds
    $.each(map.markers, function(i, marker) {
      var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
      bounds.extend(latlng);
    });

    // only 1 marker?
    if (map.markers.length == 1) {
      // set center of map
      map.setCenter(bounds.getCenter());
      map.setZoom(15);
    } else {
      // fit to bounds
      map.fitBounds(bounds);
    }
  }

  /*
   *  document ready
   *
   *  This function will render each map when the document is ready (page has loaded)
   *
   *  @type  function
   *  @date  8/11/2013
   *  @since 5.0.0
   *
   *  @param n/a
   *  @return  n/a
   */
  // global var
  var map = null;

  $(document).ready(function() {
    $('.acf-map').each(function() {
      // create map
      map = new_map($(this));
    });
  });

})(jQuery);