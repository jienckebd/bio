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
class ContactForm extends FormBase {

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
    return 'contact-ajax-form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['left'] = array(
      '#type' => 'container',
      '#attributes' => array('class' => array('contact-form-left')),
    );

    $form['right'] = array(
      '#type' => 'container',
      '#attributes' => array('class' => array('contact-form-right')),
    );

    $form['left']['name'] = array(
      '#type' => 'textfield',
      '#title' => t('Name'),
      '#title_display' => 'invisible',
      '#required' => TRUE,
      '#attributes' => array('placeholder' => 'Your Name...'),
      '#required' => TRUE,
    );

    $form['left']['phone'] = array(
      '#type' => 'textfield',
      '#title' => t('Phone'),
      '#title_display' => 'invisible',
      '#required' => TRUE,
      '#attributes' => array('placeholder' => 'Phone Number...'),
      '#required' => TRUE,
    );

    $form['left']['email'] = array(
      '#type' => 'textfield',
      '#title' => t('Email'),
      '#title_display' => 'invisible',
      '#required' => TRUE,
      '#attributes' => array('placeholder' => 'Email...'),
      '#required' => TRUE,
    );

    $options_type = array(
      'none' => t('None'),
      'feature' => t('Feature Request'),
      'bug' => t('Bug'),
      'other' => t('Other'),
    );

    $form['left']['type'] = array(
      '#type' => 'radios',
      '#title' => t('Type of Inquiry'),
      '#options' => $options_type,
      '#required' => FALSE,
      '#default_value' => 'none',
    );

    $form['right']['message'] = array(
      '#type' => 'textarea',
      '#title' => t('Message'),
      '#required' => TRUE,
    );

    $form['actions'] = array(
      '#type' => 'actions'
    );

    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Send Message'),
      '#ajax' => array(
        'callback' => array($this, 'processMessage'),
        'wrapper' => 'contact-form-wrapper',
        'effect' => 'fade',
        'progress' => array(
          'type' => 'throbber',
          'message' => "",
        ),
      ),
    );

    $form['#prefix'] = '<div id="contact-form-wrapper">';
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
        'title' => 'Contact Form Submission',
        'field_label' => array(array('value' => $form_values['name'])),
        'field_phone' => array(array('value' => $form_values['phone'])),
        'field_email' => array(array('value' => $form_values['email'])),
        'body' => array(array('value' => $form_values['message'])),
        'uid' => 1,
        'type' => 'contact_submission',
      );

      $node = entity_create('node', $node);
      $node->enforceIsNew();
      $node->save();

      $build = array(
        '#theme' => 'contact_confirm',
      );

      $output = drupal_render($build);

      site_wrap_content('content-wrapper', $output);

      $response = new AjaxResponse();
      $response->addCommand(new ReplaceCommand('#contact-form-wrapper', $output));
      $response->addCommand(new InvokeCommand('', 'scrollToElement', array('#contact', 500, -65)));

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
