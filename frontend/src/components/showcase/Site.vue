<script setup lang="ts">

</script>

<template>
    <!-- ── THIS SITE ── -->
    <section class="sec sec-cream" id="this-site">
        <div class="inner">
            <div class="sec-head reveal" v-reveal>
                <div>
                    <div class="sec-eyebrow eyebrow-brown">
                        <div class="sec-eyebrow-line"></div>
                        <span>This Site</span>
                    </div>
                    <h2 class="sec-title sec-title-dark">本站即作品</h2>
                </div>
            </div>
            <div class="site-card reveal" v-reveal>
                <div class="site-card-left">
                    <div class="site-title">PHP Full-Stack Showcase</div>
                    <div class="site-desc">
                        這個作品集網站本身就是一個完整的全端工程實踐。從前端設計、Vue 3 元件架構、PHP RESTful API 開發，到 Docker 容器化部署，每一層都由我獨立規劃與實作。
                    </div>
                    <div class="site-desc">
                        對我來說，它不只是展示成果的門面，更是把工程思維慢慢沉澱下來的過程。
                    </div>
                    <a href="php_api" class="site-link" style="margin-top:.5rem">查看 PHP API Demo →</a>
                </div>
                <div class="site-card-right">
                    <div class="stack-chips">
                        <div class="stack-chip">
                            <span class="chip-icon thumbnail">
                                <img src="/images/icon/dark/vue.png" width="32" height="32" />
                            </span>
                            <div class="chip-info">
                                <div class="chip-name">Vue 3 + Vite</div>
                                <div class="chip-sub">Composition API · 響應式設計</div>
                            </div>
                            <span class="chip-tag">Frontend</span>
                        </div>
                        <div class="stack-chip">
                            <span class="chip-icon thumbnail">
                                <img src="/images/icon/dark/php.png" width="32" height="32" />
                            </span>
                            <div class="chip-info">
                                <div class="chip-name">PHP REST API</div>
                                <div class="chip-sub">SEO Schema · JSON 資料交換</div>
                            </div>
                            <span class="chip-tag">Backend</span>
                        </div>
                        <div class="stack-chip">
                            <span class="chip-icon thumbnail">
                                <img src="/images/icon/dark/docker.png" width="32" height="32" />
                            </span>
                            <div class="chip-info">
                                <div class="chip-name">Docker Compose</div>
                                <div class="chip-sub">環境隔離 · 一鍵部署</div>
                            </div>
                            <span class="chip-tag">DevOps</span>
                        </div>
                        <div class="stack-chip">
                            <span class="chip-icon thumbnail">
                                <img src="/images/icon/dark/mongodb.png" width="32" height="32" />
                            </span>
                            <div class="chip-info">
                                <div class="chip-name">MongoDB</div>
                                <div class="chip-sub">NoSQL · RESTful 串接</div>
                            </div>
                            <span class="chip-tag">Database</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>