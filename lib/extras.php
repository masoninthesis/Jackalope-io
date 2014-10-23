<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);


  add_filter('roots_wrap_base', 'roots_wrap_base_cpts'); // Add our function to the roots_wrap_base filter

  function roots_wrap_base_cpts($templates) {
    $cpt = get_post_type(); // Get the current post type
    if ($cpt) {
       array_unshift($templates, 'base-' . $cpt . '.php'); // Shift the template to the front of the array
    }
    return $templates; // Return our modified array with base-$cpt.php at the front of the queue
  }
