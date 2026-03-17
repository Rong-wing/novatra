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
                <p style="max-width:320px;font-size:.88rem;color:var(--muted);line-height:1.75">
                    學習過程中整理的技術紀錄，涵蓋 Vue、CSS、JavaScript、SEO 等實作心得。
                </p>
            </div>
            <div class="notes-grid reveal" v-reveal>
                <div class="note-card">
                    <div class="note-date">2026-02</div>
                    <div class="note-title">Vue.js 基礎概念介紹</div>
                    <div class="note-desc">
                        深入探討 Vue 3 Composition API 與響應式原理，包含 ref、reactive 與 computed 實作範例。
                    </div>
                    <div class="note-tags">
                        <span class="n-tag t-vue">Vue</span>
                        <span class="n-tag t-php">PHP</span>
                    </div>
                </div>
                <div class="note-card">
                    <div class="note-date">2026-02</div>
                    <div class="note-title">CSS Flexbox 實戰指南</div>
                    <div class="note-desc">
                        現代佈局技術與響應式版面實際應用，從基礎排列到複雜的自適應版型設計。
                    </div>
                    <div class="note-tags">
                        <span class="n-tag t-css">CSS</span>
                        <span class="n-tag t-php">PHP</span>
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
                    <div class="note-title">使用 TailwindCSS 快速開發</div>
                    <div class="note-desc">
                        Utility-First 工作流與客製化設計系統建置，含 JIT 模式最佳化配置。
                    </div>
                    <div class="note-tags">
                        <span class="n-tag t-js">JavaScript</span>
                        <span class="n-tag t-php">PHP</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>