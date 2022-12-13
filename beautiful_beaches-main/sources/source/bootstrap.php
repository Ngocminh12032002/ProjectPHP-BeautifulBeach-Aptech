<?php
define('_DIR_ROOT', __DIR__); //La url de nhung model vao controler

// Xly http root
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $web_root = 'https://' . $_SERVER['HTTP_HOST'];
} else {
    $web_root = 'http://' . $_SERVER['HTTP_HOST'];
}

$folder = str_replace(str_replace('/', '\\', strtolower($_SERVER['DOCUMENT_ROOT'])), '', strtolower(_DIR_ROOT));
$folder = str_replace('\\', '/', $folder);

$web_root = $web_root . $folder;
define('_WEB_ROOT', $web_root);

/**
 * Tu dong load cas file trong folder config
 */
$configs_dir = scandir('configs');
if (!empty($configs_dir)) {
    foreach ($configs_dir as $item) {
        if ($item != '.' & $item != '..' && file_exists('configs/' . $item)) {
            require_once 'configs/' . $item;
        }
    }
}

require_once 'core/Route.php'; //Load Route class
require_once 'core/Session.php'; //Session Request 
require_once 'app/App.php'; //load App

if (!empty($config['database'])) {
    $db_config = array_filter($config['database']);
    if (!empty($db_config)) {
        require_once 'core/Connection.php';
        require_once 'core/Database.php';
    }
}

require_once 'core/Model.php'; //load Base Model
require_once 'core/BaseController.php'; //Load base controller
require_once 'core/Request.php'; //Load Request 
require_once 'core/Response.php'; //Response Request 