<script setup lang="ts">

</script>

<template>
    <section class="info-section">
        <div class="info-inner">
            <div class="section-eyebrow reveal" v-reveal>
                <div class="section-eyebrow-line"></div>
                <span>Architecture</span>
            </div>
            <h2 class="section-title reveal" v-reveal>技術架構說明</h2>
            <div class="info-grid reveal" v-reveal>
                <div class="info-card">
                    <div class="info-icon thumbnail">
                        <img src="/images/icon/dark/architecture.png" width="32" height="32" />
                    </div>
                    <div class="info-title">前後端分離架構</div>
                    <div class="info-desc">
                        前端 Vue 3 負責 UI 與用戶互動，後端 PHP 處理資料解析與 Schema 生成邏輯，透過 RESTful API 溝通。
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-icon thumbnail">
                        <img src="/images/icon/dark/api.png" width="32" height="32" />
                    </div>
                    <div class="info-title">API 設計原則</div>
                    <div class="info-desc">
                        遵循 RESTful 設計規範，POST 端點接收 JSON 輸入，回傳標準化 Schema.org 結構化資料，支援 CORS。
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-icon thumbnail">
                        <img src="/images/icon/dark/docker.png" width="32" height="32" />
                    </div>
                    <div class="info-title">Docker 容器部署</div>
                    <div class="info-desc">
                        透過 Docker Compose 管理前後端容器與 MongoDB，確保開發與生產環境一致性，方便快速部署。
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>