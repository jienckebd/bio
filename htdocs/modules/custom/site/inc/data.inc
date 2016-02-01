<?php

function site_listing_data($key = NULL) {
  $listings = array(
    'snippet' => array(
      'subtitle' => 'View useful examples of back end tasks in Drupal and front end PHP.',
    ),
    'project' => array(
      'subtitle' => 'View examples of my Drupal work.',
    ),
  );

  return isset($key) ? $listings[$key] : $listings;
}

function site_site_menu_data() {
  $menu_items = array();

  $menu_item = array();
  $menu_item['title'] = 'Home';
  $menu_item['href'] = '/';
  $menu_item['icon_class'] = 'fa-home';
  $menu_items[] = $menu_item;

  $menu_item = array();
  $menu_item['title'] = 'My Projects';
  $menu_item['href'] = '/project';
  $menu_item['icon_class'] = 'fa-trophy';
  $menu_items[] = $menu_item;

  $menu_item = array();
  $menu_item['title'] = 'Snippets';
  $menu_item['href'] = '/snippet';
  $menu_item['icon_class'] = 'fa-code-fork';
  $menu_items[] = $menu_item;

  $menu_item = array();
  $menu_item['title'] = 'Contact';
  $menu_item['href'] = '/contact';
  $menu_item['icon_class'] = 'fa-envelope';
  $menu_items[] = $menu_item;

  return $menu_items;
}
