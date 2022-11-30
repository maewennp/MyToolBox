<?php

if (!session_id()) session_start();
try {
    $request_uri = get_server('request_uri');
    $query_string = get_server('query_string');

    $routes = register_route(array(
        '/home',
        '/cesar',
        '/euros-dollars',
        '/pourcentage',
        '/decimal-hexadecimal',
        '/regle-de-trois',
        '/admin',
        /* ROUTES API */
        '/api/post',
    ));

    if($request_uri == "/") {
        $request_uri = '/home';
    }

    $requested_route = formate_route($request_uri);

    if (in_array($requested_route, $routes)) {
        template($requested_route);
    }
} catch (Exception $error) {
    echo $error->getMessage();
}
