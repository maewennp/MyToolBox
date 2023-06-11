<?php

/**
 * Used to running database query
 *
 * @param string mysql query
 *
 * return mixed
 */
function run_query(string $query) {
   // les infos de connexion fournies nous permettent d'établir une connexion à la base de données
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

    
    if ($connection->connect_errno) { // vérif si erreur lors de la co à la bdd et appelle une exception si échec
        throw new Exception("Database connection failed: " . $connection->connect_error);
    }

    
    if (!$result = $connection->query($query)) { // on exécute la requête SQL ($query), et vérif de si erreur lors de la co
        throw new Exception("Query execution failed: " . $connection->error);
    }

   
    return $result; // cela retourne le résultat de la requête
}


/**
 * Used to create an INSERT query
 *
 * @param $table table name
 * @param $datas array the data to be inserted
 *
 * return bolean
 */
function insert(string $table, array $datas) {
    // établir une connexion à la base de données
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

    // vérif si échec de connexion
    if ($connection->connect_errno) {
        throw new Exception("Database connection failed: " . $connection->connect_error);
    }

   // initialiser des tableaux pour stocker les noms de colonnes et les valeurs
    $dataColumn = [];
    $dataValues = [];

   
    foreach ($datas as $column => $value) {
        // Échapper les colonnes et les valeurs pour se prémunir contre les injections SQL potentielles et les ajouter aux tableaux
        $dataColumn[] = $connection->real_escape_string($column);
        $dataValues[] = "'" . $connection->real_escape_string($value) . "'";
    }

    // Convertir les tableaux en chaînes de caractères séparées par des virgules
    $columns = implode(",", $dataColumn);
    $values = implode(",", $dataValues);

    // Construire la requête d'insertion avec les colonnes et les valeurs
    $query = "INSERT INTO $table ($columns) VALUES ($values)";

    
    if (!$result = run_query($query)) { // Exécuter la requête SQL en appelant la fonction run_query() et vérifier si une erreur s'est produite, puis lever une exception en cas d'échec
        throw new Exception("Query execution failed: " . $connection->error);
    }

    
    return $result; // retourne le résultat de la requête
}

/**
 * @param string table name
 * @param string column
 * @param array conditions
 *
 * return array if has some data, false otherwise
 */
function select(string $table, string $column = null, $conditions = array()) {
    if(empty($column)) {
        $column = "*";
    }

    $query = "SELECT {$column} FROM {$table}";
    if(!empty($conditions)) {
        $query .= " WHERE {$conditions[0]} {$conditions[1]} '{$conditions[2]}'";
    }

    if (!$result = run_query($query)) {
        throw new Exception('Error when looking to the data');
    } else {
        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }
}

/**
 *
 */
function find(string $table, array $conditions) {
    $result = select($table, null, $conditions);
    return $result[0];
}
