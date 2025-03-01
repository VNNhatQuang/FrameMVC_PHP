<?php


/**
 * Handle routes, middleware and method in controller
 * @param mixed $uri
 * @param mixed $routes
 * @throws \Exception
 * @return void
 */
function handleRoute($uri, $routes = [])
{
    if (array_key_exists($uri, $routes)) {
        $controllerName = $routes[$uri][0];
        $middlewares = $routes[$uri][1];
        $method = $routes[$uri][count($routes[$uri]) - 1];

        // Handle middlewares
        if (is_array($middlewares)) {
            foreach ($middlewares as $middlewareName) {
                if (class_exists($middlewareName)) {
                    $middleware = new $middlewareName();
                    if (method_exists($middleware, 'handle')) {
                        $middleware->handle(); // call handle() method in middleware
                    } else {
                        throw new Exception("Method handle() in middleware $middlewareName not found");
                    }
                } else {
                    throw new Exception("Middleware $middlewareName not found");
                }
            }
        }

        // Handle method in controller
        if (class_exists($controllerName)) {
            $controller = new $controllerName();
            if (method_exists($controller, $method)) {
                call_user_func([$controller, $method]);
            } else
                throw new Exception("Method $method not found");
        } else {
            throw new Exception("Controller $controllerName not found");
        }
    } else {
        return view('404');
    }
}
