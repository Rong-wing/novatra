<script setup lang="ts">
	import { ref } from 'vue'
	
</script>

<template>
    <!-- ── NOTES ── -->
    <section class="sec sec-alt" id="notes">
        <div class="inner">
            <div class="sec-head reveal" v-reveal>
                <div>
                    <div class="sec-eyebrow eyebrow-brown">
                        <div class="sec-eyebrow-line"></div>
                        <span>Tech Notes</span>
                    </div>
                    <h2 class="sec-title sec-title-dark">技術筆記</h2>
                </div>
                <p class="sec-head-p">
                    學習過程中整理的技術紀錄，涵蓋 Vue、CSS、JavaScript、SEO 等實作心得。
                </p>
            </div>
            <div class="notes-grid reveal" v-reveal>
                <div class="note-card">
                    <div class="note-date">2026-03</div>
                    <div class="note-title">Docker 容器化環境部署實戰</div>
                    <div class="note-desc">
                        基於 Docker Compose 建立多容器開發環境，實現 PHP、Node.js 與資料庫的環境隔離，並達成開發與生產環境的一致性配置。
                    </div>
                    <div class="note-tags">
                        <span class="n-tag t-docker">Docker</span>
                        <span class="n-tag t-container">Container</span>
                    </div>
                </div>
                <div class="note-card">
                    <div class="note-date">2026-02</div>
                    <div class="note-title">現代化 PHP 容器化工作流</div>
                    <div class="note-desc">
                        深度解析 Dockerfile 多階段構建 (Multi-stage builds) 優化鏡像體積，並整合 PHP-FPM 與 Nginx 實現高效能開發環境配置。
                    </div>
                    <div class="note-tags">
                        <span class="n-tag t-php">PHP</span>
                        <span class="n-tag t-container">Container</span>
                        <span class="n-tag t-dockerfile">Dockerfile</span>
                    </div>
                </div>
                
                <div class="note-card">
                    <div class="note-date">2026-01</div>
                    <div class="note-title">Composition API 使用技巧</div>
                    <div class="note-desc">
                        Vue 3 進階組件設計模式，自訂 Composables 與響應式狀態管理實踐。
                    </div>
                    <div class="note-tags">
                        <span class="n-tag t-js">JavaScript</span>
                        <span class="n-tag t-seo">SEO</span>
                    </div>
                </div>
                <div class="note-card">
                    <div class="note-date">2026-01</div>
                    <div class="note-title">網頁效能優化策略</div>
                    <div class="note-desc">
                        Core Web Vitals 分析、Lazy Loading 與 Critical CSS 改善，LCP 提升 40%。
                    </div>
                    <div class="note-tags">
                        <span class="n-tag t-css">CSS</span>
                        <span class="n-tag t-seo">SEO</span>
                    </div>
                </div>
                <div class="note-card">
                    <div class="note-date">2025-12</div>
                    <div class="note-title">現代 JavaScript 特性</div>
                    <div class="note-desc">
                        ES6+ 實用語法精要：解構、展開、Async/Await 與 Promise 鏈深度解析。
                    </div>
                    <div class="note-tags">
                        <span class="n-tag t-js">JavaScript</span>
                    </div>
                </div>
                <div class="note-card">
                    <div class="note-date">2025-12</div>
                    <div class="note-title">Vue.js 基礎概念介紹</div>
                    <div class="note-desc">
                        深入探討 Vue 3 Composition API 與響應式原理，包含 ref、reactive 與 computed 實作範例。
                    </div>
                    <div class="note-tags">
                        <span class="n-tag t-vue">Vue</span>
                        <span class="n-tag t-php">PHP</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>