<?php
    use Phalcon\Di\FactoryDefault;
    use Phalcon\Mvc\Micro;
    use Phalcon\Autoload\Loader;

    // 處理 CORS 預檢請求
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
        exit;
    }
    header('Access-Control-Allow-Origin: *');

    // 定義路徑常量，方便後續使用
    define('BASE_PATH', dirname(__DIR__));
    define('APP_PATH', BASE_PATH . '/app');

    // 引入 Composer 的自動載入器
    require_once BASE_PATH . '/vendor/autoload.php';

    // 服務注入 (DI)
    $di = new FactoryDefault();

    $loader = new Loader();
    $loader->setDirectories([
        APP_PATH . '/controllers/'
    ])->register();

    require APP_PATH . '/config/services.php';

    // 啟動 Micro App
    $app = new Micro($di);

    // 路由設定 
    require APP_PATH . '/config/routes.php';

    $url = $_SERVER["REQUEST_URI"];
    $app->handle($url);