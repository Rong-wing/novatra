<template>
	<section class="about-site">
        <div class="about-site-text reveal" v-reveal>
            <div class="heading-eyebrow" style="margin-bottom:.75rem">
                <div class="heading-eyebrow-line"></div>
                <span>About</span>
            </div>
            <h2 class="heading-title" style="margin-bottom:1.5rem">關於本站</h2>
            <p class="about-body">這個作品集是我用來持續精進與磨練技術的一個實踐專案。</p>
            <p class="about-body">前端使用 Vue 3 + Vite，後端以 PHP 為基礎，最後透過 Docker 進行部署與環境管理。</p>
            <p class="about-body" style="margin-bottom:2rem">對我來說，它更像是一個把工程思維慢慢沉澱下來的過程。</p>
            <a href="about" class="about-link">了解更多關於我 →</a>
        </div>
        <div class="about-site-visual reveal" v-reveal>
            <div class="heading-eyebrow" style="margin-bottom:1rem">
                <div class="heading-eyebrow-line" style="background:var(--brown-lt)"></div>
                <span style="color:var(--brown-lt)">Tech Stack</span>
            </div>
            <div class="stack-list">
                <div class="stack-item">
                    <div class="stack-item-icon thumbnail">
                        <img src="/images/icon/vue.png" width="32" height="32" />
                    </div>
                    <div class="stack-item-name">Vue 3 + Vite</div>
                    <div class="stack-item-sub">Frontend</div>
                </div>
                <div class="stack-item">
                    <div class="stack-item-icon thumbnail">
                        <img src="/images/icon/php.png" width="32" height="32" />
                    </div>
                    <div class="stack-item-name">PHP REST API</div>
                    <div class="stack-item-sub">Backend</div>
                </div>
                <div class="stack-item">
                    <div class="stack-item-icon thumbnail">
                        <img src="/images/icon/docker.png" width="32" height="32" />
                    </div>
                    <div class="stack-item-name">Docker Compose</div>
                    <div class="stack-item-sub">Infrastructure</div>
                </div>
                <div class="stack-item">
                    <div class="stack-item-icon thumbnail mongodb">
                        <img src="/images/icon/mongodb.png" width="32" height="32" />
                    </div>
                    <div class="stack-item-name">MongoDB</div>
                    <div class="stack-item-sub">Database</div>
                </div>
            </div>
        </div>
    </section>
</template>