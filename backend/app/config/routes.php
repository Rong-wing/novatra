<?php
    $app->get('/api/index', [
        new \IndexController(),
        'listAction'
    ]);
    $app->post('/api/index', [
        new \IndexController(),
        'listAction'
    ]);

    // 註冊測試 MongoDB 的路徑
    $app->get('/api/test_mongo', [
        new \IndexController(),
        'testMongoAction'
    ]);

    $app->notFound(function () use ($app) {
        $app->response->setStatusCode(404, "Not Found")->sendHeaders();
        echo "對不起，找不到這個頁面！";
    });