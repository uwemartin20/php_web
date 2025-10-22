<?php

require __DIR__ . '/vendor/autoload.php';

// Get URI parts
$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$segments = explode('/', $uri);

// Default values
$controllerName = !empty($segments[0]) ? ucfirst($segments[0]) . 'Controller' : 'HomeController';
$methodName = $segments[1] ?? 'index';

// Fully qualified class name
$controllerClass = "App\\Controllers\\$controllerName";

// Check if controller class exists
if (class_exists($controllerClass)) {
    $controller = new $controllerClass();

    // Check if method exists
    if (method_exists($controller, $methodName)) {
        $controller->$methodName();
    } else {
        http_response_code(404);
        echo "Method '$methodName' not found in controller '$controllerClass'";
    }
} else {
    http_response_code(404);
    echo "Controller '$controllerClass' not found.";
}

function view(string $view, array $data = [])
{
    // Convert array keys to variables
    extract($data);

    // Build full path to the view file
    $viewPath = __DIR__ . '/src/Views/' . $view . '.php';

    // Check if view exists
    if (file_exists($viewPath)) {
        include $viewPath;
    } else {
        echo "View not found: " . htmlspecialchars($viewPath);
    }
}