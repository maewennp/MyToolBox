<?php

/**
 * Used to generate database configuration
 * Save your database configuration here
 */

// Pourquoi pas utiliser un .ENV ?
$env_variables = parse_ini_file(__DIR__ . '/.env');

return array(
    'host' => $env_variables['BDD_HOST'],
    'user' => $env_variables['BDD_USER'],
    'password' => $env_variables['BDD_PASSWORD'],
    'port'=> $env_variables['BDD_PORT'],
    'name' => $env_variables['BDD_NAME']
);
