<?php

$db = include ROOT_PATH . 'config.php';
// Pourquoi pas utiliser un .ENV ?
define('DB_HOST', $db['host']);
define('DB_USER', $db['user']);
define('DB_PASSWORD', $db['password']);
define('DB_NAME', $db['name']);
define('DB_PORT', $db['port']);
