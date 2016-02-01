<?php

/**
 * @file
 * Contains Drupal\event_dispatcher_demo\EventSubscriber\ConfigSubscriber.
 */

namespace Drupal\site\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;

class ConfigSubscriber implements EventSubscriberInterface {

  static function getSubscribedEvents() {
    $events[KernelEvents::RESPONSE][] = array('onConfigSave');
    return $events;
  }

  public function onConfigSave($event) {

  }

}

