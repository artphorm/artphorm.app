<?php

declare(strict_types=1);

define('PAGE_DIR', __DIR__ . '/../pages/');

function route(): void
{
    $request = $_SERVER['REQUEST_URI'];
    $filename = route_to_page($request);
    if (!$filename) die('Invalid route: ' . $request);
    include $filename;
}

function route_to_page(string $route): string | null
{
    if (!str_starts_with($route, '/')) {
        return null;
    }
    if ($route === '/') {
        return route_get_page_filename('home');
    }
    $tokens = explode('/', $route);
    $filename = route_get_page_filename($tokens[1]);
    if (!file_exists($filename)) {
        return route_get_page_filename('404');
    }
    return $filename;
}

function route_get_page_filename($page): string
{
    return PAGE_DIR . $page . '.html.php';
}
