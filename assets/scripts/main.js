/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages

        // Scotch Panels
        $('#nav').scotchPanel({
          containerSelector: 'body',
          direction: 'right',
          duration: 200,
          transition: 'ease',
          clickSelector: '#toggle-nav',
          distanceX: '20rem',
          enableEscapeKey: true
        });

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired

        // Render Map
        function render_map( $el ) {

          // var
          var $markers = $el.find('.marker');

          // vars
          var args = {
            zoom                : 17,
            center              : new google.maps.LatLng(0, 0),
            mapTypeId           : google.maps.MapTypeId.ROADMAP,
            scrollwheel         : false,
            panControl          : false,
            streetViewControl   : false,
            mapTypeControl      : false,
            zoomControl         : true,
            scaleControl        : false,
            navigationControl   : false,
            draggable           : false,

            styles              : [{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]}],
          };

          // create map           
          var map = new google.maps.Map( $el[0], args);

          // add a markers reference
          map.markers = [];

          // add markers
          $markers.each(function(){

            add_marker( $(this), map );

          });

          // center map
          center_map( map );

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

        function add_marker( $marker, map ) {

          // var
          var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

          // custom marker
          var iconGrove = new google.maps.MarkerImage("/content/themes/grove/dist/images/pin.png", null, null, null, new google.maps.Size(45,45));

          // create marker
          var marker = new google.maps.Marker({
            position    : latlng,
            map         : map,
            icon        : iconGrove
          });

          // add to array
          map.markers.push( marker );

          // if marker contains HTML, add it to an infoWindow
          if( $marker.html() )
          {
            // create info window
            var infowindow = new google.maps.InfoWindow({
              content   : $marker.html()
            });

            // show info window when marker is clicked
            google.maps.event.addListener(marker, 'click', function() {

              infowindow.open( map, marker );
              setTimeout(function () { infowindow.close(); }, 5000);
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

        function center_map( map ) {

          // vars
          var bounds = new google.maps.LatLngBounds();

          // loop through all markers and create bounds
          $.each( map.markers, function( i, marker ){

            var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

            bounds.extend( latlng );

          });

          // only 1 marker?
          if( map.markers.length === 1 )
          {
            // set center of map
              map.setCenter( bounds.getCenter() );
              map.setZoom( 13 );
          }
          else
          {
            // fit to bounds
            map.fitBounds( bounds );
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

        $(document).ready(function(){

          $('.acf-map').each(function(){

            render_map( $(this) );

          });

        });
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
