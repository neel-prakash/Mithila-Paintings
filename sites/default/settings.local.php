<?php

$databases['default']['default'] = array (
  'database' => 'mithila_paintings_23_oct',
  'username' => 'root',
  'password' => '',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$config_directories['sync'] = 'sites/default/files/config_seM_b63zQqwnCP38KBDHoVq4NED9naV-d6KR13EJ-Bg4jghw0HYxmTtOabmRP8T_ghHfu1KkqA/sync';

/**
 * Enable local development services.
 */
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/default/local.services.yml';