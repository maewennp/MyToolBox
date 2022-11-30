<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!defined('FUNC')) {
    define('FUNC', 'functions');
}

// Load includer function
require_once FUNC . '/includer.php';

// Charge la connexion à la base de données
get_file('connection', FUNC);

// Charge la base de données
get_file('database', FUNC);

// Charge dumper
get_file('dumper', FUNC);

// Charge fonction utilitaires
get_file('utils', FUNC);

// Charge le router
get_file('router', FUNC);

// Charge les fonction de templating
get_file('template', FUNC);

// Charge les alertes
get_file('alert', FUNC);

// Charge la validation
get_file('validation', FUNC);

// Charge la validation
get_file('calculations', FUNC);
