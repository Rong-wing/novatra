<?php
    $di->setShared('config', function () {
        return new \Phalcon\Config\Config([
            'api' => [
                'prefix' => getenv('API_PREFIX') ?: '/api',
            ]
        ]);
    });

    // 註冊 MongoDB 服務
    $di->setShared('mongo', function () {
        // 這裡建議改用環境變數或是 config 檔讀取
        $mongoUrl = getenv('MONGO_URL');
        try {
            $client = new \MongoDB\Client($mongoUrl);
            return $client;
            
        } catch (\Exception $e) {
            die("無法連線至 MongoDB: " . $e->getMessage());
        }
    });