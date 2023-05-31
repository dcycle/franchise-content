<?php

namespace Drupal\my_custom_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\my_custom_module\traits\Environment;

/**
 * All Franchises.
 */
class AllFranchises extends ControllerBase {

  use Environment;

  /**
   * Returns a render-able array for a test page.
   */
  public function content() {
    // Do something with your variables here.
    $myText = 'This is not just a default text!';
    $myNumber = 1;
    $myArray = [1, 2, 3];

    return [
      // Your theme hook name.
      '#theme' => 'all_franchises',
      // Your variables.
      '#variable1' => $myText,
      '#variable2' => $myNumber,
      '#variable3' => $myArray,
      '#gmaps_api_key' => $this->configGet('geolocation_google_maps.settings', 'google_map_api_key', ''),
      '#all_franchises' => $this->app()->allFranchisesForMap(),
    ];
  }

  /**
   * The title for this page.
   */
  public function title() : string {
    return $this->t('Le Catering');
  }

}
