<template>
	<section class="showcase">
        <div class="container">
            <div class="heading-header reveal" v-reveal>
                <div class="heading-label-group">
                    <div class="heading-eyebrow">
                        <div class="heading-eyebrow-line"></div>
                        <span>Showcase</span>
                    </div>
                    <h2 class="heading-title">技術能力展示</h2>
                </div>
                <p class="heading-desc">互動 Demo、技術筆記與本站架構，三個維度完整呈現我的工程實踐與學習歷程。</p>
            </div>

            <div class="showcase-preview reveal" v-reveal>
                <a href="showcase#live-demo" class="sp-card">
                    <div class="sp-card-top" style="background:linear-gradient(135deg,#e4eeec,#d2e5e0)">
                        <span class="sp-icon thumbnail">
                            <img src="/images/icon/dark/vue.png" width="32" height="32" />
                        </span>
                        <div class="sp-thumb-line"></div>
                    </div>
                    <div class="sp-body">
                        <div class="sp-label">Interactive</div>
                        <div class="sp-title">Live Demo</div>
                        <div class="sp-desc">CSS 動畫、JavaScript 互動、打字效果——直接在頁面上感受手感。</div>
                        <div class="sp-link">前往查看 →</div>
                    </div>
                </a>
                <a href="showcase#notes" class="sp-card">
                    <div class="sp-card-top" style="background:linear-gradient(135deg,#ede6db,#e2d8ca)">
                        <span class="sp-icon thumbnail">
                            <img src="/images/icon/dark/tech_notes.png" width="32" height="32" />
                        </span>
                        <div class="sp-thumb-line"></div>
                    </div>
                    <div class="sp-body">
                        <div class="sp-label">Tech Notes</div>
                        <div class="sp-title">技術筆記</div>
                        <div class="sp-desc">Vue、CSS、JavaScript、SEO 等實作心得，6 篇學習紀錄。</div>
                        <div class="sp-link">前往查看 →</div>
                    </div>
                </a>
                <a href="showcase#this-site" class="sp-card">
                    <div class="sp-card-top" style="background:linear-gradient(135deg,#e2e8f0,#d2dce8)">
                        <span class="sp-icon thumbnail">
                            <img src="/images/icon/dark/architecture.png" width="32" height="32" />
                        </span>
                        <div class="sp-thumb-line"></div>
                    </div>
                    <div class="sp-body">
                        <div class="sp-label">This Site</div>
                        <div class="sp-title">本站即作品</div>
                        <div class="sp-desc">Vue 3 + PHP + Docker——這個網站本身就是最完整的全端展示。</div>
                        <div class="sp-link">前往查看 →</div>
                    </div>
                </a>
            </div>
        </div>
    </section>
</template>