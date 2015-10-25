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
        // $('#nav').scotchPanel({
        //   containerSelector: 'body',
        //   direction: 'right',
        //   duration: 200,
        //   transition: 'ease',
        //   clickSelector: '#toggle-nav',
        //   distanceX: '20rem',
        //   enableEscapeKey: true,
        //   useCSS: false,
        //   easingPluginTransition: 'easeInCirc',
        //   useEasingPlugin: true
        // });

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

            if  ($(window).scrollTop() > 10)
              $('#banner').animate({'top':'0px'},500);
            else
            $('#banner').stop(true).animate({'top':'-300px'},500);
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
        var userFeed = new Instafeed({
          get: 'user',
          userId: 1334627384,
          accessToken: '1334627384.467ede5.298c00980a90416dbabfc9c85c2b357c',
          sortBy: 'most-recent',
          limit: 1,
          resolution: 'low_resolution',
          template: '<img class="img-responsive" src="{{image}}" />'
        });

        userFeed.run();
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
