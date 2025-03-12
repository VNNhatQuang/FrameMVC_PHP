<?php


/**
 * Handle routes, middleware, and method in controller with dynamic parameters support.
 * @param mixed $uri
 * @param mixed $routes
 * @throws \Exception
 * @return void
 */
function handleRoute($uri, $routes = [])
{
    $routeFound = false;

    foreach ($routes as $route => $routeConfig) {
        // Tạo regex từ route, chuyển chuỗi ":param" thành chuỗi "([^/]+)" nhằm khớp với bất kỳ chuỗi nào không chứ dấu "/"
        $routePattern = preg_replace('#:([^/]+)#', '([^/]+)', $route);
        $routePattern = "#^" . $routePattern . "$#";

        // Kiểm tra xem có khớp route không (nếu khớp thì lưu các tham số vào $matches)
        if (preg_match($routePattern, $uri, $parameters)) {
            array_shift($parameters); // Bỏ phần tử đầu tiên (là toàn bộ chuỗi khớp) để chỉ lấy các tham số

            $controllerName = $routeConfig[0];
            $middlewares = $routeConfig[1];
            $method = $routeConfig[count($routeConfig) - 1];

            // Handle middlewares
            if (is_array($middlewares)) {
                foreach ($middlewares as $middlewareName) {
                    if (class_exists($middlewareName)) {
                        $middleware = new $middlewareName();
                        if (method_exists($middleware, 'handle')) {
                            $middleware->handle();
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
                    $decodedParameters = array_map('urldecode', $parameters); // Giải mã URL các tham số để chuyển %20 thành khoảng trắng
                    call_user_func_array([$controller, $method], $decodedParameters); // Truyền các $parameters vào controller
                } else {
                    throw new Exception("Method $method not found");
                }
            } else {
                throw new Exception("Controller $controllerName not found");
            }

            $routeFound = true;
            break;
        }
    }

    if (!$routeFound) {
        return view('404');
    }
}
