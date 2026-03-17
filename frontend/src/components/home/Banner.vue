<template>
	<section class="banner">
        <div class="container">
            <div class="banner-wrapper banner-left">
                <div class="banner-eyebrow">
                    <div class="banner-eyebrow-line"></div>
                    <span>Full-Stack Developer</span>
                </div>

                <h1 class="banner-title">工程師，<br><em>設計師，</em><br>學習者。</h1>

                <p class="banner-desc">
                    具備多年 HTML5、CSS、JavaScript、jQuery 與 PHP 經驗的前端開發者，正深化 Vue.js 全端能力，專注於工程實踐與效能優化。
                </p>

                <div class="banner-actions">
                    <a href="/showcase" class="button button-warm">技術能力展示</a>
                    <a href="/php_api" class="button button-outline-cream">後端 API 串接</a>
                </div>

                <div class="banner-stats">
                    <div class="stat">
                        <div class="stat-number">10<span>+</span></div>
                        <div class="stat-label">Years Exp.</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">20<span>+</span></div>
                        <div class="stat-label">Projects</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">3</div>
                        <div class="stat-label">Tech Stacks</div>
                    </div>
                </div>
            </div>
            <div class="banner-wrapper banner-right">
                <div class="tech-mosaic">
                    <div class="mosaic-cell">
                        <div class="mosaic-icon thumbnail">
                            <img src="/images/icon/vue.png" width="32" height="32"/>
                        </div>
                        <div class="mosaic-label">Frontend</div>
                        <div class="mosaic-title">Vue 3 + Vite</div>
                        <div class="mosaic-tag">Composition API</div>
                    </div>
                    <div class="mosaic-cell">
                        <div class="mosaic-icon thumbnail php-style">
                            <img src="/images/icon/php.png" width="32" height="32"/>
                        </div>
                        <div class="mosaic-label">Backend</div>
                        <div class="mosaic-title">PHP API</div>
                        <div class="mosaic-tag">RESTful</div>
                    </div>
                    <div class="mosaic-cell">
                        <div class="mosaic-icon thumbnail">
                            <img src="/images/icon/css.png" width="32" height="32"/>
                        </div>
                        <div class="mosaic-label">Styling</div>
                        <div class="mosaic-title">CSS3 / Less</div>
                        <div class="mosaic-tag">RWD</div>
                    </div>
                    <div class="mosaic-cell">
                        <div class="mosaic-icon thumbnail">
                            <img src="/images/icon/seo.png" width="32" height="32"/>
                        </div>
                        <div class="mosaic-label">Optimize</div>
                        <div class="mosaic-title">SEO Schema</div>
                        <div class="mosaic-tag">Core Web Vitals</div>
                    </div>
                    <div class="mosaic-cell wide">
                        <div class="mosaic-icon thumbnail">
                            <img src="/images/icon/docker.png" width="32" height="32"/>
                        </div>
                        <div>
                            <div class="mosaic-label">Infrastructure</div>
                            <div class="mosaic-title">Docker + MongoDB + Git 版本控制</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>