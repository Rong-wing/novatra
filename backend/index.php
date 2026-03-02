<?php
    //允許跨域請求
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    //整理參數
    $action = $_GET['action'] ?? '';
    $data = $_GET['data'] ?? '';

    // $data = "[2026-02-28] PHP正規化教學 - 作者：Nova";
    //正規化：抓取日期、標題、作者
    $pattern = '/\[(?P<date>.*?)\]\s*(?P<headline>.*?)\s*-\s*作者：(?P<author>.*)/u';

    if (preg_match($pattern, $data, $matches)) {
        //過濾日期格式確保安全
        $date = new DateTime($matches['date']);
        $datePublished = $date->format('Y/m/d');
        
        $seoSchema = [
            "@context" => "https://schema.org",
            "@type" => "Article",
            "headline" => $matches['headline'],
            "datePublished" => $datePublished,
            "author" => [
                "@type" => "Person",
                "name" => trim($matches['author'])
            ]
        ];
    }

    if ($action === 'getProducts') {
        echo json_encode([
            "status" => "success",
            "seoSchema" => $seoSchema
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "請提供正確的 action"
        ]);
    }