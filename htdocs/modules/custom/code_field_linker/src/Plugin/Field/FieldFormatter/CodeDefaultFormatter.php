<?php

/**
 * @file
 * Contains \Drupal\text\Plugin\field\formatter\TextDefaultFormatter.
 */

namespace Drupal\code_field_linker\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'text_default' formatter.
 *
 * @FieldFormatter(
 *   id = "code_default",
 *   label = @Translation("Default"),
 *   field_types = {
 *     "code",
 *   },
 * )
 */
class CodeDefaultFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = array();
    $settings = $this->getFieldSettings();

    foreach ($items as $delta => $item) {
      $output = '';

      $elements[$delta] = array('#markup' => $output);
    }

    return $elements;
  }

}
