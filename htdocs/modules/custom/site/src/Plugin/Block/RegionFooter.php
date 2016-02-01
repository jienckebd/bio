<?php

/**
 * @file
 * Contains \Drupal\block_example\Plugin\Block\ExampleEmptyBlock.
 */

namespace Drupal\site\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Example: empty block' block.
 *
 * @Block(
 *   id = "region_footer",
 *   admin_label = @Translation("Region Footer")
 * )
 */
class RegionFooter extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

   $build = array(
      '#theme' => 'region_footer',
    );

    return $build;
  }

}
