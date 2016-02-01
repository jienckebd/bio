<?php

function arg($id = NULL) {
  $current_path = current_path();
  $args = explode('/', $current_path);
  unset($args[0]);
  $args = array_values($args);
  if (empty($id)) {
    return $args;
  }
  return $args[$id];
}

function current_path() {
  return \Drupal::service('path.current')->getPath();
}

/*
 * This was taken from the context module. It checks the path based on patterns
 */
function site_check_path($subject, $patterns, $path = FALSE) {
  if (empty($patterns)) {
    return TRUE;
  }
  static $regexps;
    $match = FALSE;
    $positives = $negatives = 0;
    $subject = !is_array($subject) ? array($subject) : $subject;
    foreach ($patterns as $pattern) {
      if (strpos($pattern, '~') === 0) {
        $negate = TRUE;
        $negatives++;
      }
      else {
        $negate = FALSE;
        $positives++;
      }
      $pattern = ltrim($pattern, '~');
      if (!isset($regexps[$pattern])) {
        if ($path) {
          $regexps[$pattern] = '/^(' . preg_replace(array('/(\r\n?|\n)/', '/\\\\\*/', '/(^|\|)\\\\<front\\\\>($|\|)/'), array('|', '.*', '\1' . preg_quote(variable_get('site_frontpage', 'node'), '/') . '\2'), preg_quote($pattern, '/')) . ')$/';
        }
        else {
          $regexps[$pattern] = '/^(' . preg_replace(array('/(\r\n?|\n)/', '/\\\\\*/'), array('|', '.*'), preg_quote($pattern, '/')) . ')$/';
        }
      }
      foreach ($subject as $value) {
        if (preg_match($regexps[$pattern], $value)) {
          if ($negate) {
            return FALSE;
          }
          $match = TRUE;
        }
      }
    }
    // If there are **only** negative conditions and we've gotten this far none
    // we actually have a match.
    if ($positives === 0 && $negatives) {
      return TRUE;
    }
  return $match;
}

function site_wrap_content($id, &$content) {
  $content = '<div id="' . $id . '">' . $content . '</div>';
}
