<?php

/**
 * @file
 * Contains \Drupal\code_field_linker\Plugin\Field\FieldWidget\TextareaWidget.
 */

namespace Drupal\code_field_linker\Plugin\Field\FieldWidget;

use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\Validator\ConstraintViolationInterface;

/**
 * Plugin implementation of the 'code' widget.
 *
 * @FieldWidget(
 *   id = "code",
 *   label = @Translation("Code Field Widget"),
 *   field_types = {
 *     "code"
 *   }
 * )
 */
class CodeWidget extends WidgetBase {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {

    $element['section_name'] = array(
      '#type' => 'textfield',
      '#default_value' => $items[$delta]->section_name,
      '#title' => t('Section Name'),
      '#attached' => array(
        'library' => array('text/drupal.text'),
      ),
    );

    $element['file_name'] = array(
      '#type' => 'textfield',
      '#default_value' => $items[$delta]->file_name,
      '#title' => t('File Name'),
      '#attached' => array(
        'library' => array('text/drupal.text'),
      ),
    );

    $element['file_path'] = array(
      '#type' => 'textfield',
      '#default_value' => $items[$delta]->file_path,
      '#title' => t('File Path'),
      '#attached' => array(
        'library' => array('text/drupal.text'),
      ),
    );

    $element['language'] = array(
      '#type' => 'radios',
      '#default_value' => !empty($items[$delta]->language) ? $items[$delta]->language : 'php',
      '#title' => t('Language'),
      '#options' => code_field_linker_language_options(),
    );

    $element['include'] = array(
      '#type' => 'radios',
      '#default_value' => !empty($items[$delta]->include) ? $items[$delta]->include : CODE_FIELD_LINKER_INCLUDE,
      '#title' => t('Linker Include Method'),
      '#options' => code_field_linker_include_options(),
    );

    $element['description'] = array(
      '#type' => 'textarea',
      '#default_value' => $items[$delta]->description,
      '#title' => t('Description'),
      '#rows' => 4,
      '#attached' => array(
        'library' => array('text/drupal.text'),
      ),
    );

    $element['value'] = array(
      '#type' => 'textarea',
      '#default_value' => $items[$delta]->value,
      '#title' => t('Code'),
      '#rows' => 20,
      '#attached' => array(
        'library' => array('text/drupal.text'),
      ),
      '#resizeable' => TRUE,
    );

    return $element;
  }

}
