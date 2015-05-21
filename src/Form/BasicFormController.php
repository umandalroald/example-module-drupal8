<?php

namespace Drupal\example\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class BasicFormController extends FormBase {

  public function getFormId() {
    return 'example_basic_form_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['firsname'] = array(
      '#type' => 'textfield',
      '#title' => t('First Name'),
    );

    $form['lastname'] = array(
      '#type' => 'textfield',
      '#title' => t('Last Name'),
    );

    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Submit'),
    );

    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {
    /**
     *
     */
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    /**
     *
     */
  }
}
