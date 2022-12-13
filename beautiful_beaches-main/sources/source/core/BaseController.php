<!-- Nhung Model va tao class model tu dong cho tung controller -->
<!-- Giong nhu Base Controller -->
<?php
class BaseController
{
    public function model($model)
    {
        // Load model
        if (file_exists(_DIR_ROOT . '/app/models/' . $model . '.php')) {
            require_once _DIR_ROOT . '/app/models/' . $model . '.php';
            if (class_exists($model)) {
                $model = new $model(); //Tao Oject cho Class
                return $model; //Tra ve Ojeact
            }
        }
        if (file_exists(_DIR_ROOT . '/app/models/admin/' . $model . '.php')) {
            require_once _DIR_ROOT . '/app/models/admin/' . $model . '.php';
            if (class_exists($model)) {
                $model = new $model(); //Tao Oject cho Class
                return $model; //Tra ve Ojeact
            }
        }
        return false; //Neu ko ton tai file or class model
    }
    public function view($view_name, $data = [])
    {
        extract($data);
        $view_name = str_replace('.', '/', $view_name);
        if (file_exists(_DIR_ROOT . '/app/views/' . $view_name . '.php')) {
            require_once _DIR_ROOT . '/app/views/' . $view_name . '.php';
        }
    }
    public function render($view_name, $data = [])
    {
        extract($data);
        $view_name = str_replace('.', '/', $view_name);
        if (file_exists($view_name . '.php')) {
            header("Location: _DIR_ROOT . '/app/views/' . $view_name . '.php'");
        }
    }
}