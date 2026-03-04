<?php
// 確保只連線一次（Singleton 概念）
if (!isset($mongoManager)) {
    $mongoUrl = getenv('MONGO_URL');
    try {
        $mongoManager = new MongoDB\Driver\Manager($mongoUrl);
    } catch (Exception $e) {
        die("資料庫連線失敗: " . $e->getMessage());
    }
}