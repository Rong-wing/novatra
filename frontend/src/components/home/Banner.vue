<script setup lang="ts">
    import { ref } from 'vue';
	const headlineEN = ref("Full-Stack Developer")
	const headline = ref([
        "工程師，",
        "設計師，",
        "學習者。"
    ])
    const desc = ref("具備多年 HTML5、CSS、JavaScript、jQuery 與 PHP 經驗的前端開發者，正深化 Vue.js 全端能力，專注於工程實踐與效能優化。")
	const stats = ref({
        "years" : {
            number : "10",
            name : "Years Exp."
        },
        "projects" : {
            number : "20",
            name : "Projects"
        },
        "tech_stacks" : {
            number : "3",
            name : "Tech Stacks"
        }
    })
	const mosaic = ref({
        "Frontend" : {
            thumbnail : '/images/icon/vue.png',
            title : "Vue 3 + Vite",
            tag : "Composition API"
        },
        "Backend" : {
            thumbnail : '/images/icon/php.png',
            title : "PHP API",
            tag : "RESTful"
        },
        "Styling" : {
            thumbnail : '/images/icon/css.png',
            title : "CSS3 / Less",
            tag : "RWD"
        },
        "Optimize" : {
            thumbnail : '/images/icon/seo.png',
            title : "SEO Schema",
            tag : "Core Web Vitals"
        },
        "Infrastructure" : {
            thumbnail : '/images/icon/docker.png',
            title : "Docker + MongoDB + Git 版本控制"
        }
    })
</script>
<template>
	<section class="banner">
        <div class="container">
            <div class="banner-wrapper banner-left">
                <div class="banner-eyebrow">
                    <div class="banner-eyebrow-line"></div>
                    <span>{{ headlineEN }}</span>
                </div>

                <h1 class="banner-title">{{ headline[0] }}<br><em>{{ headline[1] }}</em><br>{{ headline[2] }}</h1>

                <p class="banner-desc">
                    {{ desc }}
                </p>

                <div class="banner-actions">
                    <a href="/showcase" class="button button-warm">技術能力展示</a>
                    <a href="/php_api" class="button button-outline-cream">後端 API 串接</a>
                </div>

                <div class="banner-stats">
                    <div class="stat" v-for="stat , starIndex in stats" :key="starIndex">
                        <div class="stat-number">{{ stat.number }}<span v-if="starIndex !== 'tech_stacks'">+</span></div>
                        <div class="stat-label">{{ stat.name }}</div>
                    </div>
                </div>
            </div>
            <div class="banner-wrapper banner-right">
                <div class="tech-mosaic">
                    <template v-for="(mosaicItem, mosaicIndex) in mosaic" :key="mosaicIndex">
                        <div class="mosaic-cell" v-if="mosaicIndex !== 'Infrastructure'">
                                <div class="mosaic-icon thumbnail">
                                    <img :src="mosaicItem.thumbnail" width="32" height="32"/>
                                </div>
                                <div class="mosaic-label">{{ mosaicIndex }}</div>
                                <div class="mosaic-title">{{ mosaicItem.title }}</div>
                                <div class="mosaic-tag">{{ mosaicItem.tag }}</div>
                        </div>
                        <div class="mosaic-cell wide" v-else>
                            <div class="mosaic-icon thumbnail">
                                <img :src="mosaicItem.thumbnail" width="32" height="32"/>
                            </div>
                            <div>
                                <div class="mosaic-label">{{ mosaicIndex }}</div>
                                <div class="mosaic-title">{{ mosaicItem.title }}</div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </section>
</template>