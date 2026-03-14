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
        $mongoUrl = getenv('MONGO_SERVICE_URL') ?: ($_ENV['MONGO_SERVICE_URL'] ?? $_SERVER['MONGO_SERVICE_URL'] ?? '');
        $databaseName = getenv('DATABASE_NAME') ?: ($_ENV['DATABASE_NAME'] ?? $_SERVER['DATABASE_NAME'] ?? '');
        try {
            $client = new \MongoDB\Client($mongoUrl);
            return $client->selectDatabase($databaseName);
        } catch (\Exception $e) {
            error_log("MongoDB Connection Error: " . $e->getMessage());
            throw $e; 
        }
    });