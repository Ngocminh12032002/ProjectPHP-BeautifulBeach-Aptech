<?php
class App
{
    private $controller, $__action, $__params, $__routes;

    static public $app;

    function __construct()
    {
        // Kiem tra va Goi controller mac dinh
        global $routes, $config;

        self::$app = $this;

        $this->__routes = new Route;
        if (!empty($routes['default_controller'])) {
            $this->__controller = $routes['default_controller'];
        }

        // echo "<hr/>" . $this->__controller;

        $this->__action = 'index';
        $this->__params = [];
        $this->handleUrl();
    }
    // Lay url
    function getUrl()
    {
        if (!empty($_SERVER['PATH_INFO'])) {
            $url = $_SERVER['PATH_INFO'];
        } else {
            $url = '/';
        }
        return $url;
    }

    // Xu ly url thanh module action params
    function handleUrl()
    {
        $url = $this->getUrl();

        $url = $this->__routes->handleRoute($url);


        $urlArr = array_filter(explode('/', $url));
        $urlArr = array_values($urlArr);

        // check co ton tai folder admin trong controller ko

        $urlCheck = "";
        if (!empty($urlArr)) {
            foreach ($urlArr as $key => $item) {
                $urlCheck .= $item . '/';
                $fileCheck = rtrim($urlCheck, '/');
                $fileArr = explode('/', $fileCheck);
                $fileArr[count($fileArr) - 1] = ucfirst($fileArr[count($fileArr) - 1]);
                $fileCheck = implode('/', $fileArr);

                if (!empty($urlArr[$key - 1])) {
                    unset($urlArr[$key - 1]);
                }
                if (file_exists('app/controllers/' . ($fileCheck) . '.php')) {
                    $urlCheck = $fileCheck;
                    break;
                };
            }
            $urlArr = array_values($urlArr);
        }

        // xu ly Controller
        if (!empty($urlArr[0])) {
            $this->__controller = ucfirst($urlArr[0]); //Viet hao chu cao dau tien
        } else {
            $this->__controller = $this->__controller;
        }

        // Xly khi urlCheck roong: cho truong hop rong se mac dinh ve trang chu
        if (empty($urlCheck)) {
            $urlCheck = $this->__controller;
        }

        if (file_exists('app/controllers/' . $urlCheck . '.php')) {
            require_once 'controllers/' . $urlCheck . '.php';
            // Ktra class $this->__controller ton tai
            if (class_exists($this->__controller)) {
                $this->__controller = new $this->__controller();
                unset($urlArr[0]); //Xoa phan tu la controller sau khi xu ly xong
            } else {
                $this->LoadError();
            }
            // $this->__controller->index();
        } else {
            $this->LoadError();
        }

        // Xu ly action
        if (!empty($urlArr[1])) {
            $this->__action = ucfirst($urlArr[1]); //Viet hao chu cao dau tien
            unset($urlArr[1]); //Xoa phan tu la action sau khi xu ly xong
        }
        // Khi action ko ton tai



        // Xu ly params
        $this->__params = array_values($urlArr);
        // Kiem tra vaf xly Khi action ko ton tai
        if (method_exists($this->__controller, $this->__action)) {
            call_user_func_array([$this->__controller, $this->__action], $this->__params);
        } else {
            $this->LoadError();
        }
    }

    function LoadError($name = '404', $data = [])
    {
        extract($data);
        require_once('errors/' . $name . '.php');
    }
}