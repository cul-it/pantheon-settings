<?php

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * Include the Pantheon-specific settings file.
 *
 * n.b. The settings.pantheon.php file makes some changes
 *      that affect all envrionments that this site
 *      exists in.  Always include this file, even in
 *      a local development environment, to insure that
 *      the site settings remain consistent.
 */
include __DIR__ . "/settings.pantheon.php";

/**
 * keep the cornell settings in a separate place
 * include this AFTER settings.pantheon.php for $conf
 * (settings.local.php is in .gitignore)
 */
$local_settings_cornell_library =  __DIR__ . "/settings.cornell.library.php";
if (file_exists($local_settings_cornell_library)) {
  include $local_settings_cornell_library;
}

/**
 * If there is a local settings file, then include it
 */
$local_settings = __DIR__ . "/settings.local.php";
if (file_exists($local_settings)) {
  include $local_settings;
}
$settings['install_profile'] = 'standard';
