<?php

namespace Drupal\cci_banner\Plugin\Block;

use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'cciBannerBlock' block.
 *
 * @Block(
 *  id = "cci_banner_block",
 *  admin_label = @Translation("Banner block"),
 * )
 */
class cciBannerBlock extends BlockBase {

  public function build() {

    $img_path = '/' . drupal_get_path('module', 'cci_banner') . '/assets/banniere-cci-long.jpg';

    return array(
      '#theme' => 'cci_banner',
      '#content' => ['banniere' => $img_path],
      '#attached' => [
        'library' => [
          'cci_banner/cci_banner'
        ]
      ]
    );

  }
}
