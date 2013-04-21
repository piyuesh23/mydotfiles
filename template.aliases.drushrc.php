<?php
$dev_root = '%WEBROOT_DEV%';
$aliases['%ALIAS_DEV%'] = array (
  'uri' => '%URI_DEV%',
  'root' => $dev_root,
  'remote-user' => '%USER_DEV%',
  'remote-host' => '%HOST_DEV%',
  'path-aliases' => array(
    '%dump-dir' => '%DUMP_DIR_DEV%',
    '%files' => $dev_root . '/sites/default/files'
  ),
  'source-command-specific' => array (
    'sql-sync' => array (
      'no-cache' => TRUE,
      'structure-tables-key' => 'common',
    ),
  ),
  // No need to modify the following settings
  'command-specific' => array (
    'sql-sync' => array (
      'sanitize' => TRUE,
      'no-ordered-dump' => TRUE,
      'structure-tables' => array(
       // You can add more tables which contain data to be ignored by the database dump
        'common' => array('cache', 'cache_filter', 'cache_menu', 'cache_page', 'history', 'sessions', 'watchdog'),
      ),
    ),
  ),
);

$local_root = '%WEBROOT_LOCAL%';
$aliases['%ALIAS_LOCAL%'] = array(
  'root' => $local_root,
  'uri'  => '%URI_LOCAL%',
  'path-aliases' => array(
    '%dump-dir' => '%DUMP_DIR_LOCAL%',
    '%files' => $local_root . '/sites/default/files'
  ),
);
?>

