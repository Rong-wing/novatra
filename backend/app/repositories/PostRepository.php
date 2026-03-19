<?php
    class PostRepository {
        protected $collection;

        public function __construct($mongo) {
            //由 DI 注入 mongo 服務
            $this->collection = $mongo->selectCollection('posts');
        }

        /**
         * 封裝複雜的邏輯
         */
        public function findByTitle(string $title): array {
            $cursor = $this->collection->find(['title' => $title]);
            
            $result = [];
            foreach ($cursor as $document) {
                //把 _id 處理好，Controller 就不用再寫迴圈轉型了
                $item = (array) $document;
                $item['id'] = (string) $item['_id'];
                unset($item['_id']); //移除原始的 BSON 對象，讓資料乾淨
                $result[] = $item;
            }
            return $result;
        }
    }