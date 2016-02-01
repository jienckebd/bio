<?php

use Drupal\image\Entity\ImageStyle;

/**
 * Implements hook_theme().
 */
function site_theme() {
  return array(
    'landing' => array(
    ),
    'header' => array(
    ),
    'footer' => array(
    ),
    'listing' => array(
      'variables' => array('type' => NULL)
    ),
    'contact' => array(
      'variables' => array()
    ),
    'contact_confirm' => array(
      'variables' => array()
    ),
    'xml_sitemap' => array(
      'variables' => array()
    ),
  );
}

function site_preprocess_contact(&$variables) {
  $contact_form = \Drupal::formBuilder()->getForm('Drupal\site\Form\ContactForm');
  $variables['form'] = drupal_render($contact_form);
}

function site_preprocess_region_header(&$variables) {
  $variables['site_menu'] = site_site_menu_data();
}

function site_preprocess_region_footer(&$variables) {
  $variables['site_menu'] = site_site_menu_data();
}

function site_preprocess_landing(&$variables) {

  $slides = array();
  $query = \Drupal::entityQuery('node')
    ->condition('status', 1)
    ->condition('type', 'project')
    ->condition('field_promote', 1)
    ->sort('created', 'desc');

  $nids = $query->execute();
  foreach ($nids as $nid) {
    $slide = array();
    $node = node_load($nid);

    // title
    $slide['title'] = $node->getTitle();

    // hero
    $hero = $node->get('field_hero')->getValue();
    $file = file_load($hero[0]['target_id']);
    $path = $file->getFileUri();
    $slide['hero'] = ImageStyle::load('widescreen_large')->buildUrl($path);

    // logo
    $hero = $node->get('field_logo')->getValue();
    $file = file_load($hero[0]['target_id']);
    $path = $file->getFileUri();
    $slide['logo'] = ImageStyle::load('medium')->buildUrl($path);

    // description
    $body = $node->get('body')->getValue();
    $slide['description'] = $body[0]['summary'];

    // legal
    $legal = $node->get('field_legal')->getValue();
    $slide['legal'] = $legal[0]['value'];

    // version
    $version = $node->get('field_version')->getValue();
    $slide['version'] = db_query("SELECT name FROM {taxonomy_term_field_data} WHERE tid = :tid", array(':tid' => $version[0]['target_id']))->fetchField();

    // url
    $url = $node->get('field_url')->getValue();
    $slide['url'] = $url[0]['uri'];

    $slide['path'] = 'node/' . $node->id();

    $slides[] = $slide;
  }

  $variables['slides'] = $slides;

  $variables['snippet_library'] = views_embed_view('snippet_library', 'block_1');
  $variables['project_landing_listing'] = views_embed_view('project_landing_listing', 'block_1');

  $variables['bio_summary'] = 'todo';

}

function site_preprocess_listing(&$variables) {

  $listing = site_listing_data($variables['type']);

  if ($variables['type'] == 'project') {
    $view_name = 'project_library';
    $block_id = 'exposedformproject_librarypage_1';
    $subtitle = $listing['subtitle'];
  }
  elseif ($variables['type'] == 'snippet') {
    $view_name = 'snippet_listing';
    $block_id = 'exposedformsnippet_listingpage_1';
    $subtitle = $listing['subtitle'];
  }

  $block = \Drupal\block\Entity\Block::load($block_id);
  $block_content = \Drupal::entityManager()
  ->getViewBuilder('block')
  ->view($block);

  $variables['subtitle'] = $subtitle;
  $variables['view_facets'] = drupal_render($block_content);
  $variables['view_body'] = views_embed_view($view_name, 'page_1');

}

function site_preprocess_node(&$variables) {
  $node = $variables['elements']['#node'];
  $variables['url'] = $node->url('canonical');

  $node = $variables['node'];

  if ($node->bundle() == 'project') {

    $images = $node->get('field_images')->getValue();
    $slides = array();

    foreach ($images as $key => $image) {
      $slide = array();
      if (is_numeric($image['target_id'])) {
        $file = file_load($image['target_id']);
        $path = $file->getFileUri();
        $slide['image_thumbnail'] = ImageStyle::load('widescreen_small')->buildUrl($path);
        $slide['image_full'] = ImageStyle::load('gallery_full')->buildUrl($path);
        $slide['title'] = $image['title'];
        $slide['url'] = $image['alt'];
        $slides[] = $slide;
      }
    }
    $variables['slides'] = $slides;

    $hero = $node->get('field_logo')->getValue();
    $file = file_load($hero[0]['target_id']);
    $path = $file->getFileUri();

    $variables['logo'] = ImageStyle::load('medium')->buildUrl($path);

    $version = $node->get('field_version')->getValue();
    $variables['version'] = db_query("SELECT name FROM {taxonomy_term_field_data} WHERE tid = :tid", array(':tid' => $version[0]['target_id']))->fetchField();

    $url = $node->get('field_url')->getValue();
    $variables['site_url'] = $url[0]['uri'];
    $variables['nid'] = $node->id();

  }
  elseif ($node->bundle() == 'snippet') {

    $field_refs = $node->get('field_urls')->getValue();
    $refs = array();

    foreach ($field_refs as $key => $data) {
      $refs[] = array('uri' => $data['uri'], 'title' => $data['title'], 'key' => $key);
    }

    $variables['refs'] = $refs;

    $code = $node->get('field_code')->getValue();
    $code_parts = array();

    foreach ($code as $key => $data) {
      if (!empty($data['value'])) {
        $summary = $data['summary'];
        if (fnmatch('*[ref:*]*', $data['description'])) {
          $key_from_summary = between('[ref:', ']', $data['description']);
          $search = '[ref:' . $key_from_summary . ']';
          $ref_num = $key_from_summary;
          $replace = 'Ref ' . $ref_num . ': ' . $refs[$key_from_summary - 1]['title'];
          $data['description'] = str_replace($search, $replace, $data['description']);
        }
        $data['key'] = $key;
        $code_parts[] = $data;
      }
    }

    $variables['code_parts'] = $code_parts;

    $variables['created'] = format_date($node->getCreatedTime(), 'custom', 'd M Y');

  }
}

function site_preprocess_page(&$variables) {
  $variables['breadcrumb'] = site_breadcrumb_generate();

  if (!$variables['is_front']) {
    $variables['classes'] = 'page-content';
  }

  $path = \Drupal::request()->getRequestUri();

  if (site_check_path($path, array('/user/*'))) {
    $variables['inner_classes'] .= 'container';
  }

  $variables['site_menu'] = site_site_menu_data();

  $search_form = \Drupal::formBuilder()->getForm('Drupal\site\Form\SearchForm');
  $variables['search_form'] = drupal_render($search_form);

}

function site_preprocess_xml_sitemap(&$variables) {
  $records = array();

  $paths = array('landing', 'contact', 'snippet', 'project');

  foreach ($paths as $path) {
    $record = array();
    $record['loc'] = $path;
    $record['lastmod'] = format_date(REQUEST_TIME, NULL, 'Y-m-d');
    $record['priority'] = '1.0';
    $record['changefreq'] = 'monthly';
    $records[] = $record;
  }

  $results = db_query("SELECT * FROM {node_field_data} WHERE type = :type1 OR type = :type2", array(':type1' => 'snippet', ':type2' => 'project'));
  foreach ($results as $result) {

    $alias = db_query("SELECT alias FROM {url_alias} WHERE source = :source", array(':source' => 'node/' . $result->nid))->fetchField();

    $record = array();
    $record['loc'] = !empty($alias) ? $alias : 'node/' . $result->nid;
    $record['lastmod'] = format_date($result->changed, NULL, 'Y-m-d');
    $record['priority'] = '1.0';
    $record['changefreq'] = 'monthly';
    $records[] = $record;
  }

  $variables['records'] = $records;
}
