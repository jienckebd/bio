<?php
/**
 * @file
 * Contains Drupal\contacts\Form\ContactForm.
 */

namespace Drupal\contacts\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Language\Language;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\ReplaceCommand;
use Drupal\Core\Ajax\InvokeCommand;

/**
 * Form controller for the contacts entity edit forms.
 *
 * @ingroup contacts
 */
class ContactForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\contacts\Entity\Contact */
    $form = parent::buildForm($form, $form_state);
    $entity = $this->entity;

    $form['langcode'] = array(
      '#title' => $this->t('Language'),
      '#type' => 'language_select',
      '#default_value' => $entity->getUntranslated()->language()->getId(),
      '#languages' => Language::STATE_ALL,
    );

    $form['#prefix'] = '<div id="contact-form-wrapper">';
    $form['#suffix'] = '</div>';

    $form['actions']['submit']['#value'] = t('Message Me');

    $form['actions']['submit']['#ajax'] = array(
      'callback' => array($this, 'ajaxCallback'),
      'wrapper' => 'contact-form-wrapper',
      'effect' => 'fade',
      'progress' => array(
        'type' => 'throbber',
        'message' => "",
      ),
    );

    return $form;
  }

  function ajaxCallback($form, FormStateInterface $form_state) {

    if ($form_state->hasAnyErrors() == TRUE) {
      return $form;
    }

    $form_values = $form_state->getValues();

     $build = array(
      '#theme' => 'contact_confirm',
    );

    $output = drupal_render($build);

    $response = new AjaxResponse();
    $response->addCommand(new ReplaceCommand('#contact-form-wrapper', $output));
    // $response->addCommand(new InvokeCommand('', 'scrollToElement', array('#contact', 500, -65)));

    return $response;

  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = $this->getEntity();
    $entity->save();
  }
}
