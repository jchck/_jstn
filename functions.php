<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/conditional-tag-check.php', // ConditionalTagCheck class
  'lib/setup.php',                 // Theme setup (previously config.php)
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/extras.php',                // Custom functions

  'lib/work.php',                  // Functions for the Work section
  'lib/shortcodes.php',            // Just some quick lil shortcodes
  'lib/category.php',              // Control the display of category names
  'lib/date.php',                  // A future project start date function
  'lib/pics.php',                  // Make all pics uploaded via WYSIWYG open via zoom.js
  'lib/gallery.php',               // Alter output of [gallery] so pics will open via zoom.js
  'lib/ads.php',                   // Let's run some ads on this baybe!
  'lib/12-launches.php',           // Functions for this section
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);
