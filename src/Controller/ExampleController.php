<?php

namespace Drupal\example\Controller;

class ExampleController {

  public function examplePage() {
    return array(
      '#markup' => t('Demo lang ang page na to.'),
    );
  }
}
