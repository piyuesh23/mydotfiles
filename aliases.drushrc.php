<?php
$dev_root = '/var/www';
$aliases['ma.dev'] = array (
  'uri' => 'medicalassistant.qed42.net',
  'root' => $dev_root . '/microsites',
  'remote-user' => 'root',
  'remote-host' => '198.101.228.93',
  'path-aliases' => array(
    '%dump-dir' => '/root/dumps',
    '%files' => $dev_root . '/microsites/sites/default/files'
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

$local_root = '/Applications/MAMP/htdocs';
$aliases['ma.local'] = array(
  'root' => $local_root . '/qed42-projs/microsites',
  'uri'  => 'microsites.local',
  'path-aliases' => array(
    '%dump-dir' => '/Users/piyuesh23/work/dumps/microsites',
    '%files' => $local_root . '/qed42-projs/microsites/sites/default/files'
  ),
);
?>
