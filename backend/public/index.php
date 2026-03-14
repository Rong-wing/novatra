<?php
    use Phalcon\Di\FactoryDefault;
    use Phalcon\Mvc\Micro;

    //定義路徑常量，方便後續使用
    define('BASE_PATH', dirname(__DIR__));
    define('APP_PATH', BASE_PATH . '/app');

    require_once BASE_PATH . '/vendor/autoload.php';
    // $config = require APP_PATH . '/config/config.php';

    try {
        //初始化 DI
        $di = new FactoryDefault();

        require APP_PATH . '/config/loader.php';
        require APP_PATH . '/config/services.php';

        //啟動 Micro App (做 API需要)
        $app = new Micro($di);

        //處理 CORS
        $app->before(function () use ($app) {
            $origin = $_SERVER['HTTP_ORIGIN'] ?? '*';
            header("Access-Control-Allow-Origin: $origin");
            header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
            header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
            header('Access-Control-Allow-Credentials: true');

            if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
                $app->response->setStatusCode(200, 'OK')->send();
                return false; //停止後續路由執行
            }
        });

        //路由設定 
        require APP_PATH . '/config/routes.php';

        //執行請求
        $app->handle($_SERVER["REQUEST_URI"]);

    } catch (\Exception $e) {
        //簡單的錯誤處理
        header('Content-Type: application/json');
        echo json_encode([
            'status'  => 'error',
            'message' => $e->getMessage()
        ]);
    }