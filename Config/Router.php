<?php namespace Config;

    class Router{
        public static function run(Request $request){
            $controller = $request->getController() . 'Controller';
            $route = ROOT . 'Controller' . DS . $controller .'.php';
            $method = $request->getMethod();
            if($method =='index.php'){
                $method = "index";
            }
            $args = $request->getArgs();
            if(is_readable($route)){
                require_once $route;
                $show = 'Controller\\' . $controller;
                $controller = new $show;
                if(!isset($args)){
                    $data = call_user_func(array($controller, $method));
                }else{
                    $data = call_user_func_array(array($controller, $method), $args);
                }
            }
            //Load Views
            $route = ROOT . "View" . DS . $request->getController() . DS . $request->getMethod() . ".php";
            if(is_readable($route)){
                require_once $route;
            }else{
                print "Route not found";
            }
        }
    }

?>