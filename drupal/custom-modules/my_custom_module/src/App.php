<?php

namespace Drupal\my_custom_module;

use Drupal\my_custom_module\traits\Singleton;
use Drupal\my_custom_module\traits\Environment;

/**
 * Module-wide functionality.
 */
class App {

  use Singleton;
  use Environment;

  /**
   * Testable implementation of hook_cron().
   */
  public function hookCron() {
    // Just an example of where you'd implement testable hooks.
  }

  public function allFranchisesForMap() : array {
    return [];
  }

  public function hookTheme($existing, $type, $theme, $path) {
    return [
      'all_franchises' => [
        'render element' => 'children',
        // If no template name is defined here,
        // it defaults to the name of the theme hook,
        // ie. module-name-theme-hook.html.twig
        'template' => 'all-franchises',
        // Optionally define path to Twig template files.
        // Defaults to the module's ./templates/ directory.
        'path' => $path . '/templates',
        // Optionally define variables that will be passed to the Twig
        // template and set default values for them.
        'variables' => [
          'variable1' => 'Yet another default text.',
          'variable2' => 0,
          'variable3' => [0, 0, 0],
          'gmaps_api_key' => '',
          'all_franchises' => [],
        ],
      ],
    ];
  }

}
