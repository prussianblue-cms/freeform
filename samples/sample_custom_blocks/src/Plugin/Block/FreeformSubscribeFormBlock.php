<?php

namespace Drupal\m3_sample_custom_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Subscribe Form' Block code to implement a freeform based block for Subscribe form.
 *
 * @Block(
 *   id = "freeform_subscribe_form_block",
 *   admin_label = @Translation("Suscribe Form"),
 *   category = @Translation("M3 Sample Custom Blocks"),
 * )
 */
class FreeformSuscribeFormBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $code = 'subscribeform';
    return array(
      '#theme' => 'freeform',
      '#code' => $code,
    );
  }

}
