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

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired

        $('#nav').scotchPanel({
          containerSelector: 'body',
          direction: 'right',
          duration: 200,
          transition: 'ease',
          clickSelector: '#toggle-nav',
          distanceX: '20rem',
          enableEscapeKey: true,
          useCSS: false,
          easingPluginTransition: 'easeInCirc',
          useEasingPlugin: true
        });


        $(function() {
          $(window).scroll(function(){
            if ($(window).scrollTop() > 200) {
              $('#banner').animate({'top': '0px'}, 500);
            } else {
              $('#banner').stop(true).animate({'top':'-300px'}, 500);
            }
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
    // Hire Justin page, note the change from hire-justin to hire_justin.
    'hire_justin': {
      init: function() {
        // JavaScript to be fired on the hire justin page
        // @link https://css-tricks.com/snippets/jquery/smooth-scrolling/
        $(function() {
          $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
        });
        });
      }
    },
    // Follow Along page
    'follow_along': {
      init: function() {
        function render_map( $el ) {

          // var
          var $markers = $el.find('.marker');

          // vars
          var args = {
            zoom                : 17,
            center              : new google.maps.LatLng(0, 0),
            mapTypeId           : google.maps.MapTypeId.ROADMAP,
            scrollwheel         : false,
            panControl          : true,
            streetViewControl   : false,
            mapTypeControl      : false,
            zoomControl         : true,
            scaleControl        : false,
            navigationControl   : false,
            draggable           : true,

            styles              : [
    {
        "featureType": "administrative",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative.country",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative.country",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "administrative.country",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative.province",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative.locality",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative.neighborhood",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative.land_parcel",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "landscape.natural.landcover",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "landscape.natural.terrain",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "poi.attraction",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.business",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.government",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.medical",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi.place_of_worship",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.school",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.sports_complex",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.highway.controlled_access",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#3f518c"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "color": "#ffffff"
            },
            {
                "lightness": 52
            }
        ]
    }
],
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

          // create marker
          var marker = new google.maps.Marker({
            position    : latlng,
            map         : map,
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
             // setTimeout(function () { infowindow.close(); }, 5000);
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
              map.setZoom( 16 );
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
        //
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
