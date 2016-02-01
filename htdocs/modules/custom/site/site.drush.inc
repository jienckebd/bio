<?php

use Drupal\taxonomy\Entity\Term;
use Drupal\node\Entity\Node;

/**
 * Implements hook_drush_command().
 */
function site_drush_command() {

  $items['migrate-old-nodes'] = array(
    'description' => 'Migrates old terms.',
  );

  $items['migrate-old-terms'] = array(
    'description' => 'Migrates old terms.',
  );

  return $items;
}

function drush_site_migrate_old_nodes() {

  $node_entity_type = \Drupal::entityTypeManager()->getDefinition('node');

  \Drupal\Core\Database\Database::setActiveConnection('old');
  $results = db_query("SELECT * FROM {node_field_data} WHERE type = :type", array(':type' => 'project'));
  foreach ($results as $result) {
    $node = Node::create(array(
      'type' => 'project',
      'title' => $result->title,
      'langcode' => 'en',
      'uid' => '1',
      'status' => 1,
    ));
    \Drupal\Core\Database\Database::setActiveConnection();
    $node->save();
    \Drupal\Core\Database\Database::setActiveConnection('old');
  }
  \Drupal\Core\Database\Database::setActiveConnection();


  \Drupal\Core\Database\Database::setActiveConnection('old');
  $results = db_query("SELECT * FROM {node_field_data} WHERE type = :type", array(':type' => 'snippet'));
  foreach ($results as $result) {
    $node = Node::create(array(
      'type' => 'snippet',
      'title' => $result->title,
      'langcode' => 'en',
      'uid' => '1',
      'status' => 1,
    ));
    \Drupal\Core\Database\Database::setActiveConnection();
    $node->save();
    \Drupal\Core\Database\Database::setActiveConnection('old');
  }
  \Drupal\Core\Database\Database::setActiveConnection();
}

function drush_site_migrate_old_terms() {

  $terms_string = 'Ajax
Amazon S3
Amazon SES
Batch Processes
Caching
Cycle2
Database Abstraction Layer
Drupal Commerce
Drupal Multisite
Drush
eBay API
Entity
Facebook API
Field API
Field Collection
Form API
Get Smart Content
Google Tag Manager
Grunt JS Task Runner
Instagram API
jQuery
Multilingual/Internationalization
Responsive Grids
Restful API
Sass: Syntactically Awesome Style Sheets
Simpleview API
Storify API
Theming
TripAdvisor API
Twitter API
Ubercart
Views Integrations
Webform';

  $terms_array = explode(PHP_EOL, $terms_string);

  foreach ($terms_array as $key => $term) {
    $term = Term::create(array(
      'parent' => array(),
      'name' => $term,
      'vid' => 'tools',
    ))->save();
  }

}
