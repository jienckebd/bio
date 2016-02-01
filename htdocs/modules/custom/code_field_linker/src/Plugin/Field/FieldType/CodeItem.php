<?php

/**
 * @file
 * Contains \Drupal\code_field_linker\Plugin\Field\FieldType\Code.
 */

namespace Drupal\code_field_linker\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Plugin implementation of the 'code_field_linker' field type.
 *
 * @FieldType(
 *   id = "code",
 *   label = @Translation("Code"),
 *   description = @Translation("This field is used to store sections of code."),
 *   category = @Translation("Text"),
 *   default_widget = "code",
 *   default_formatter = "code_default"
 * )
 */
class CodeItem extends FieldItemBase {

  /**
   * {@inheritdoc}
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {

    $properties['value'] = DataDefinition::create('string')
      ->setLabel(t('Code'))
      ->setRequired(TRUE);

      $properties['section_name'] = DataDefinition::create('string')
      ->setLabel(t('Section Name'))
      ->setRequired(TRUE);

    $properties['file_name'] = DataDefinition::create('string')
      ->setLabel(t('File Name'));

    $properties['file_path'] = DataDefinition::create('string')
      ->setLabel(t('File Path'));

    $properties['language'] = DataDefinition::create('string')
      ->setLabel(t('Language'));

    $properties['description'] = DataDefinition::create('string')
      ->setLabel(t('Description'));

    $properties['include'] = DataDefinition::create('string')
      ->setLabel(t('Include'));

    return $properties;
  }

  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition) {
    return array(
      'columns' => array(
        'value' => array(
          'type' => 'text',
          'size' => 'big',
        ),
        'section_name' => array(
          'type' => 'text',
          'size' => 'big',
        ),
        'file_name' => array(
          'type' => 'text',
          'size' => 'big',
        ),
        'file_path' => array(
          'type' => 'text',
          'size' => 'big',
        ),
        'language' => array(
          'type' => 'text',
          'size' => 'big',
        ),
        'description' => array(
          'type' => 'text',
          'size' => 'big',
        ),
        'include' => array(
          'type' => 'int',
        ),
      ),
    );
  }

  /**
  * {@inheritdoc}
  */
  public function isEmpty() {
    $value = $this->get('value')->getValue();
    return $value === NULL || $value === '';
  }

}
