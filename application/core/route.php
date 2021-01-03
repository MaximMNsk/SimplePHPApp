<?PHP

class Route
{
    static function start()
    {
        $controllerName = 'Main';
        $actionName = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if ( !empty($routes[1]) )
        {
            $controllerName = $routes[1];
        }

        if ( !empty($routes[2]) )
        {
            $actionName = $routes[2];
        }

        $controllerName = 'Controller' . ucfirst($controllerName);
        $actionName = 'action' . ucfirst($actionName);

        
        if( class_exists("\\Application\\Controllers\\".$controllerName) )
        {
            $controller = new \Application\Controllers\ControllerMain;
        }
        else
        {
            self::ErrorPage404();
        }

        if( method_exists($controller,$actionName) )
        {
            $controller->$actionName();
        }
        else
        {
            self::ErrorPage404();
        }
       
    }

    static function ErrorPage404()
    {
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }

}



