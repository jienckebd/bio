<?php

/**
 * @file
 * Contains \Drupal\page_example\Controller\PageExampleController.
 */

namespace Drupal\contacts\Controller;

use Drupal\Core\Url;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

/**
 * Controller routines for page example routes.
 */
class ContactsController {

  public function contact() {

    $build = array(
      '#theme' => 'contact',
    );

    return $build;

  }


}
