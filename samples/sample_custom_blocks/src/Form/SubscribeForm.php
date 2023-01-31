<?php

namespace Drupal\m3_sample_custom_blocks\Form;

use \Drupal;
use \Exception;
use \Drupal\Core\Form\FormBase;
use \Drupal\Core\Form\FormStateInterface;

class SubscribeForm extends FormBase {
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = [];
    $form['#prefix'] = '<div id="subscribe-form-wrapper">';
    $form['#suffix'] = '</div>';

    $form['fields'] = [
      '#type' => 'container',
      '#attributes' => [
        'class' => ['fields-container'],
      ]
    ];

    $form['actions'] = [
      '#type' => 'container',
      '#attributes' => [
        'class' => ['actions-container'],
      ]
    ];

    $fields = &$form['fields'];
    $actions = &$form['actions'];

    $fields['email'] = [
      '#type' => 'email',
      '#title' => $this->t('Email'),
      '#placeholder' => $this->t('Email...'),
      '#required' => TRUE
    ];

    $actions['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Subscribe'),
    ];

    return $form;
  }

  public function getFormId() {
    return 'm3_sample_custom_blocks_subscribe_form';
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    return $form;
  }
}

