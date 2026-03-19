<?php
    class IndexController extends \Phalcon\Mvc\Controller {
        public function listAction() {
            //整理參數
            if ($this->request->isPost() && empty($data)) {
                $raw = $this->request->getJsonRawBody(true);
                $action = $raw['action'] ?? '';
                $data   = $raw['data'] ?? '';
            } else {
                // 如果是 GET 或傳統 Form Data POST
                // get() 會自動從 $_REQUEST (包含 GET 和 POST) 抓取
                $action = $this->request->get('action');
                $data   = $this->request->get('data');
            }

            $seoSchema = null;
            $this->response->setContentType('application/json', 'UTF-8');

            if (!empty($data)) {
                try {
                    // $data = "[2026-02-28] PHP正規化教學 - 作者：Nova";
                    //正規化：抓取日期、標題、作者
                    $pattern = '/\[(?P<date>.*?)\]\s*(?P<title>.*?)\s*[\-\–]\s*作者：(?P<author>.*)/u';

                    if (preg_match($pattern, $data, $matches)) {
                        //過濾日期格式確保安全
                        $date = new DateTime($matches['date']);
                        $datePublished = $date->format('Y/m/d');
                        
                        $info = [
                            "date" => $datePublished,
                            "title" => $matches['title'],
                            "author" => trim($matches['author']),
                        ];
                    }

                    if ($action === 'getProducts') {
                        // 設定 Header 為 JSON
                        return $this->response->setJsonContent([
                            "status"    => "success",
                            "info" => $info
                        ]);
                    } else {
                        // 如果 action 不是 getProducts，就會跑進這裡
                        return $this->response->setJsonContent([
                            "status"  => "error",
                            "message" => "請提供正確的 action，目前收到的是: " . ($action ?: '空的')
                        ]);
                    }
                }
                catch (\Exception $e) {
                    // 處理錯誤
                    return $this->response->setJsonContent([
                        "status" => "error",
                        "message" => "資料解析失敗: " . $e->getMessage()
                    ]);
                }
            }

            return $this->response->setJsonContent([
                "status" => "error",
                "message" => "請提供 data 參數"
            ]);
        }

        public function testMongoAction() {
            try {
                $postRepo = new PostRepository($this->mongo);
                $posts = $postRepo->findByTitle('我的第一個 Docker 作品');

                return $this->response->setJsonContent([
                    "status" => "success",
                    "databases" => $posts
                ]);
            } catch (\Exception $e) {
                return $this->response->setJsonContent([
                    "status" => "error",
                    "message" => $e->getMessage()
                ]);
            }
        }
    }