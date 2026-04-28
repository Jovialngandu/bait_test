<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/login':
        require 'views/login.php';
        break;
    // case '/auth/google':
    //     require 'controllers/oidc_capture.php';
    //     break;
    default:
        http_response_code(404);
        echo "Page non trouvée";
}