<?php

/**
 * @file
 * Contains \Drupal\page_example\Controller\PageExampleController.
 */

namespace Drupal\site\Controller;

use Drupal\Core\Url;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

/**
 * Controller routines for page example routes.
 */
class SiteController {

  /**
   * Constructs a page with descriptive content.
   *
   * Our router maps this method to the path 'examples/page_example'.
   */
  public function landing() {

    $build = array(
      '#theme' => 'landing',
    );

    return $build;

  }

  public function project() {

    $build = array(
      '#theme' => 'listing',
      '#type' => 'project',
    );

    return $build;

  }

  public function snippet() {

    $build = array(
      '#theme' => 'listing',
      '#type' => 'snippet',
    );

    return $build;

  }

  public function contact() {

    $build = array(
      '#theme' => 'contact',
    );

    return $build;

  }

  public function about() {

    $build = array(
      '#theme' => 'about',
    );

    return $build;

  }

  public function xml_sitemap() {

    header('Content-type: application/xml');

    $build = array(
      '#theme' => 'xml_sitemap',
    );

    print drupal_render($build);
    exit;

  }


}
