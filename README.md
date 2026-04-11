# novatra
## 現代化全端開發架構
Novatra 是一個以資深軟體工程思維打造的全端框架與系統整合實驗專案。本專案核心目標在於實踐 Vue 3 組合式 API (Composition API) 與 TypeScript 的嚴謹架構，並結合 Docker 容器化技術 與 PHP(phalcon)/MongoDB 的後端解決方案。

目前專案正處於核心功能對接與 API 串階階段，旨在建立一個高效、可擴充且易於維護的現代化 Web 應用程式。

## 技術架構 (Technical Stack)
- 前端 (Frontend): Vue 3 (Vite), Less (手寫樣式優化), Fetch API
- 後端 (Backend): PHP 8.2 (Nginx + PHP-FPM 高效能架構(phalcon))
- 資料庫 (Database): MongoDB Atlas (雲端非結構化資料庫)
- 基礎設施 (Infrastructure): Docker, Docker Compose (容器化部署)
- 雲端部署 (Deployment): Railway (自動化 CI/CD 部署)

## 核心功能亮點
- 高效能資料萃取引擎：利用 PHP 正規表示式（Regular Expression）處理複雜的非格式化字串，並即時轉換為結構化 JSON 資料回傳。
- 動態標籤篩選系統：基於 Vue 3 響應式原理，實現前端大量數據的即時過濾與標籤化管理。
- 雲端資料持久化：整合 MongoDB Atlas，確保解析後的資料能安全地儲存於雲端，並具備高度的擴展性。
- 標準化容器部署：透過 nginx + php-fpm 的生產環境架構打包，確保開發環境與生產環境的高度一致性。

## 快速啟動 (Quick Start)

只需一行指令，即可啟動完整的開發環境（包含前端 Vite、後端 PHP-FPM(phalcon)、Nginx 代理及 MongoDB）：

```bash
docker-compose up -d
```

## 開發進度說明
目前專案正持續迭代中，以下為當前進度：
- Frontend Core: 基礎路由、頁面組件與 Tailwind UI 已初步完成。
- Infrastructure: 已成功部署於 Railway，並完成 Docker 環境調校。
- Backend API Implementation: 已完成前端與後端 PHP API 的非同步串接，實現真實資料的獲取、處理與動態渲染。
- 下一階段重點： MongoDB CRUD（新增、修改、刪除）功能的完整銜接。


## 更新日誌 (Changelog)

### 2026-03-25 | 首頁元件語法優化 v2.0.2
#### 首頁 (Home Page) 邏輯重構
- 簡化動態樣式：重構 Mosaic 與 TechStack 區塊，將原本重複的 HTML 結構整合為單一模板，改用 Vue 3 動態 Class (:class) 語法自動切換樣式，程式碼更簡潔好維護。
- 修正渲染錯誤：修復首頁列表中 v-for 與 v-if 同時使用導致的判斷失效問題，確保 Infrastructure 等特定項目能正確過濾標籤顯示。
- 優化連結綁定：將首頁作品集 (Showcase) 的連結改用 ES6 樣板字面值 寫法，解決原本字串組合不正確的問題，確保跳轉功能正常。

#### 開發狀態說明
- 局部更新：本次更新僅針對 Home Page (首頁) 進行程式碼品質優化與 Bug 修復，其餘分頁將於後續版本陸續同步更新。


### 2026-03-19 | 網站前端重構 v2.0.1
#### 從前端模擬轉向後端 API 實作
- 架構優化：將原本純前端的資料解析邏輯，重構為透過 Axios 串接 PHP 後端 API，實現真實的資料交換流程。
- 非同步處理：引入 async/await 處理 API 請求，並實作讀取狀態與錯誤處理機制，提升使用者體驗。
- 環境擴展：支援「前端模擬 (Local)」與「後端實作 (Online)」雙模式切換，展示對不同執行環境的開發適應力。

#### 樣式與系統架構優化
- 樣式工程化 (Less)：將原本分散的 CSS 樣式遷移至 Less 預處理器，導入變數管理與巢狀結構（Nesting），大幅提升樣式的複用性與階層清晰度。
- 資料響應式重構：將前端靜態資料部分轉換為 Vue 3 ref 響應式變數。


### 2026-03-18 | 網站前端重構 v2.0.0-alpha
#### 核心更動：UI/UX 視覺與互動體驗升級
- 全站視覺重構：完成 4 大核心頁面 UI/UX 改版，採用現代化佈局與響應式設計，優化現代化佈局、間距與色彩體系。
- 動態特效加入：新增 Scroll Reveal 滾動顯示特效、自動打字機動畫及多套主題配色切換功能。
- 架構重組：優化組件邏輯。

#### 開發進度與 RoadMap
- 邏輯架構優化：配合新版 UI 重新梳理組件邏輯，優化程式碼結構以提升後續擴充性。
- 資料層整合：UI 靜態佈局已完成，目前正進行 API 模組化封裝，逐步將 Mock Data 替換為後端非同步數據。
- 效能與測試：規劃針對重構後的 Vue 組件進行渲染效能追蹤與壓力測試。
- 功能完善度：當前版本為視覺預覽版，側重於 UI/UX 呈現，完整後端串接功能將於後續版本補齊。
- Roadmap：全站 API 非同步資料流整合與效能調優。


### 2026-03-14 | 環境隔離優化與後端架構重構
#### Docker 環境優化
- 架構重構：區分測試與正式環境配置，提升佈署靈活性。
- 連線修正：優化容器間網路連線，確保 PHP 順利存取 MongoDB Atlas。

#### 核心開發與重構
- MongoDB 修正：校正資料庫與集合名稱，並統一處理字串邏輯。
- 整合 loader.php 自動載入機制。
- 優化 index.php 流程，移除冗餘實例並強化 CORS 處理。

### 2026-03-08 | 架構現代化與環境重構
#### 前端工程化與目錄重整
- 目錄解耦：將前端資源移至 frontend/ 獨立目錄，實現前後端物理隔離。
- 配置優化：精簡 package.json 與 tsconfig，移除 redundant 工具以降低依賴體積。
- 路徑修復：修正 Vite 與 index.html 進入點，解決目錄遷移後的編譯衝突。

#### 通訊層與開發環境
- 環境變數：實作 .env 體系，支援開發與生產環境 API 自動切換。
- 請求封裝：導入 Axios 並封裝 apiClient 取代原始 fetch，提升健壯性。
- 代理優化：修正 Vite Proxy 轉發邏輯，確保與 Nginx/Phalcon 路由規範一致。

#### 部署架構與容器化
- 服務分離：實作 Docker 多容器策略，獨立封裝 PHP-FPM 與 Nginx。
- 擴展封裝：建立專屬 Dockerfile，完成 Phalcon 核心擴展與 MongoDB 驅動配置。
- 流程自動化：修正容器內 Composer 自動載入問題，確保類別地圖（Class Map）正確。

#### 資料庫連線與驗證
- 雲端整合：完成 MongoDB Atlas 連線設定，並實作 testMongoAction API。
- 環境補丁：於 Docker 補齊 unzip 與 git 工具，解決相依套件下載失敗問題。

### 2026-03-04 | 系統架構升級
- 環境優化：正式導入 nginx + php-fpm 雙容器架構，提升 PHP 請求處理效率與伺服器穩定性。
- 資料庫整合：完成 MongoDB Atlas 雲端連結部署，實現全端資料儲存功能。
- 部署自動化：更新 docker-compose.yml，支援一鍵啟動全棧服務。

### 2026-03-02 | 核心功能發佈
- UI 更新：新增專案首頁，優化導覽邏輯。
- Demo 實作：完成 PHP Regex 解析 Demo 頁面，打通前後端資料流。

### 2025-12-14 | Vue前端專案作品正式上線