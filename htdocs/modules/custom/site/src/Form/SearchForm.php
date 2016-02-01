<?php

/**
 * @file
 * Contains \Drupal\email_example\Form\EmailExampleGetFormPage.
 */

namespace Drupal\site\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Mail\MailManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\ReplaceCommand;
use Drupal\Core\Ajax\InvokeCommand;

/**
 * File test form class.
 *
 * @ingroup email_example
 */
class SearchForm extends FormBase {

  /**
   * The mail manager.
   *
   * @var \Drupal\Core\Mail\MailManagerInterface
   */
  protected $mailManager;

  /**
   * Constructs a new EmailExampleGetFormPage.
   *
   * @param \Drupal\Core\Mail\MailManagerInterface $mail_manager
   *   The mail manager.
   */
  public function __construct(MailManagerInterface $mail_manager) {
    $this->mailManager = $mail_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static($container->get('plugin.manager.mail'));
  }

  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormID() {
    return 'search-ajax-form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['search'] = array(
      '#type' => 'textfield',
      '#title' => t('Search'),
      '#title_display' => 'invisible',
      '#required' => FALSE,
      '#attributes' => array('placeholder' => 'Search...'),
      '#prefix' => '<i class="fa fa-search"></i>',
    );

    $form['search']['#type'] = 'entity_autocomplete';
    $form['search']['#target_type'] = 'node';
    $form['search']['#selection_settings'] = ['include_anonymous' => FALSE];

    $form['#prefix'] = '<div id="search-form-wrapper">';
    $form['#suffix'] = '</div>';

    return $form;
  }

  function processMessage($form, FormStateInterface $form_state) {
    if (!valid_email_address($form_state->getValue('email'))) {
      return $form;
    }
    else {
      $form_values = $form_state->getValues();

      $node = array(
        'title' => 'Search Form Submission',
        'field_label' => array(array('value' => $form_values['name'])),
        'field_phone' => array(array('value' => $form_values['phone'])),
        'field_email' => array(array('value' => $form_values['email'])),
        'body' => array(array('value' => $form_values['message'])),
        'uid' => 1,
        'type' => 'Search_submission',
      );

      $node = entity_create('node', $node);
      $node->enforceIsNew();
      $node->save();

      $build = array(
        '#theme' => 'Search_confirm',
      );

      $output = drupal_render($build);

      site_wrap_content('content-wrapper', $output);

      $response = new AjaxResponse();
      $response->addCommand(new ReplaceCommand('#Search-form-wrapper', $output));

      return $response;
    }
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (!valid_email_address($form_state->getValue('email'))) {
      $form_state->setErrorByName('email', t('That e-mail address is not valid.'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {


  }
}
