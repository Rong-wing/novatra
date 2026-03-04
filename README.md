# novatra
## 全端資料解析與自動化部署平台
Novatra 是一個結合 Vue 3 前端互動與 PHP / MongoDB 後端邏輯的高效能工具平台。本專案核心在於展示如何透過 Docker 容器化技術，建構一個從資料輸入、正規劃（Regex）解析到雲端資料持久化的完整閉環系統。

## 技術架構 (Technical Stack)
- 前端 (Frontend): Vue 3 (Vite), Less (手寫樣式優化), Fetch API
- 後端 (Backend): PHP 8.2 (Nginx + PHP-FPM 高效能架構)
- 資料庫 (Database): MongoDB Atlas (雲端非結構化資料庫)
- 基礎設施 (Infrastructure): Docker, Docker Compose (容器化部署)

## 核心功能亮點
- 高效能資料萃取引擎：利用 PHP 正規表示式（Regular Expression）處理複雜的非格式化字串，並即時轉換為結構化 JSON 資料回傳。
- 動態標籤篩選系統：基於 Vue 3 響應式原理，實現前端大量數據的即時過濾與標籤化管理。
- 雲端資料持久化：整合 MongoDB Atlas，確保解析後的資料能安全地儲存於雲端，並具備高度的擴展性。
- 標準化容器部署：透過 nginx + php-fpm 的生產環境架構打包，確保開發環境與生產環境的高度一致性。

## 快速啟動 (Quick Start)

只需一行指令，即可啟動完整的開發環境（包含前端 Vite、後端 PHP-FPM、Nginx 代理及 MongoDB）：

```bash
docker-compose up -d
```

## 更新日誌 (Changelog)
### 2026-03-04 | 系統架構升級
- 環境優化：正式導入 nginx + php-fpm 雙容器架構，提升 PHP 請求處理效率與伺服器穩定性。
- 資料庫整合：完成 MongoDB Atlas 雲端連結部署，實現全端資料儲存功能。
- 部署自動化：更新 docker-compose.yml，支援一鍵啟動全棧服務。

### 2026-03-02 | 核心功能發佈
- UI 更新：新增專案首頁，優化導覽邏輯。
- Demo 實作：完成 PHP Regex 解析 Demo 頁面，打通前後端資料流。

### 2025-12-14 | 專案作品正式上線