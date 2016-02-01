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
 *   id = "region_header",
 *   admin_label = @Translation("Region Header")
 * )
 */
class RegionHeader extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

   $build = array(
      '#theme' => 'region_header',
    );

    return $build;
  }

}
