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
  'lib/wrapper.php',               // Theme wrapper class
  'lib/setup.php',                 // Theme setup (previously config.php)
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/extras.php',                // Custom functions

  'lib/shortcodes.php',            // Just some quick lil shortcodes
  'lib/wrap.php',                  // The .container.wrap size function
  'lib/date.php',                  // A future project start date function
  'lib/pics.php',                  // Make all pics uploaded via WYSIWYG open via zoom.js
  'lib/gallery.php',               // Alter output of [gallery] so pics will open via zoom.js
  'lib/dashboard.php',             // Edits and cleanups to the WP dashboard
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);
