<?php

class Routing {
    public static function run(string $path) {
        $path = trim($path, '/');
        $path = parse_url($path, PHP_URL_PATH);

        switch ($path) {
        case 'login':
            include 'public/views/login.html';
            break;
        case 'dashboard':
            include 'public/views/dashboard.html';
            break;
        default:
            http_response_code(404);
            include 'public/views/404.html';
            break;
        }
    }
}