<?php

/**
 * example settings.php file for use on Pantheon Drupal sites
 *
 * Warning
 * You should never put the database connection information for a Pantheon database within your settings.php
 * file. These credentials will change. If you are having connection errors, make sure you are running
 * Pressflow core. This is a requirement.
 *
 * https://pantheon.io/docs/settings-php
 * https://github.com/pantheon-systems/pantheon-settings-examples
 *
 * Drupal 7 version
 *
 */

/**
 * keep the cornell settings in a separate place
 * (settings.local.php is in .gitignore)
 */
$local_settings_cornell_library =  __DIR__ . "/settings.cornell.library.php";
if (file_exists($local_settings_cornell_library)) {
  include $local_settings_cornell_library;
}
