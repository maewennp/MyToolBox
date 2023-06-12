<?php

/**
 * Used to generate database configuration
 * Save your database configuration here
 */


$env_variables = parse_ini_file(__DIR__ . '/.env');

return array(
    'host' => $env_variables['DB_HOST'],
    'user' => $env_variables['DB_USER'],
    'password' => $env_variables['DB_PASSWORD'],
    'port'=> $env_variables['DB_PORT'],
    'name' => $env_variables['DB_NAME']
);
