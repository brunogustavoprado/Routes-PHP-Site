<?php


// Define as rotas disponíveis
$routes = [
    '/login' => 'login',
    '/registro' => 'registro',
    '/authenticate' => 'authenticate',
    '/inicio' => 'inicio'
];

// Obtém o caminho da URL atual
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Função para processar uma rota
function dispatch($path, $routes)
{
    foreach ($routes as $pattern => $handler) {
        if (preg_match("#^$pattern$#", $path, $matches)) {
            call_user_func($handler, ...array_slice($matches, 1));
            return;
        }
    }
    http_response_code(404);
    echo 'Página não encontrada';
}

// Define as funções para cada rota
function home()
{
    echo 'Página inicial';
}

function inicio()
{
    require_once "sistema/dashboard.php";
}

function login()
{
    require_once "sistema/loginIncludes/loginView.php";
}

function registro()
{
    require_once "sistema/loginIncludes/registerView.php";
}

function authenticate()
{
    require_once "extensions/authenticateUser.php";
}

// Dispara a rota correspondente
dispatch($path, $routes);


