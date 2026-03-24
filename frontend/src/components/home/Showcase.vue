<script setup lang="ts">
    import { ref } from 'vue';
	const headlineEN = ref("Showcase")
	const headline = ref("技術能力展示")
    const desc = ref("互動 Demo、技術筆記與本站架構，三個維度完整呈現我的工程實踐與學習歷程。")
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
	const cards = ref({
        "live-demo" : {
            thumbnail : '/images/icon/dark/vue.png',
            label : "Interactive",
            title : "Live Demo",
            desc : "CSS 動畫、JavaScript 互動、打字效果——直接在頁面上感受手感。",
            style : "background:linear-gradient(135deg,#e4eeec,#d2e5e0)"
        },
        "notes" : {
            thumbnail : '/images/icon/dark/tech_notes.png',
            label : "Tech Notes",
            title : "技術筆記",
            desc : "Vue、CSS、JavaScript、SEO 等實作心得，6 篇學習紀錄。",
            style : "background:linear-gradient(135deg,#ede6db,#e2d8ca)"
        },
        "this-site" : {
            thumbnail : '/images/icon/dark/architecture.png',
            label : "This Site",
            title : "本站即作品",
            desc : "Vue 3 + PHP + Docker——這個網站本身就是最完整的全端展示。",
            style : "background:linear-gradient(135deg,#e2e8f0,#d2dce8)"
        }
    })
</script>
<template>
	<section class="showcase">
        <div class="container">
            <div class="heading-header reveal" v-reveal>
                <div class="heading-label-group">
                    <div class="heading-eyebrow">
                        <div class="heading-eyebrow-line"></div>
                        <span>{{ headlineEN }}</span>
                    </div>
                    <h2 class="heading-title">{{ headline }}</h2>
                </div>
                <p class="heading-desc">{{ desc }}</p>
            </div>

            <div class="showcase-preview reveal" v-reveal>
                <template v-for="cardItem , cardIndex in cards" :key="cardIndex">
                    <a :href="'showcase#' + cardIndex" class="sp-card">
                        <div class="sp-card-top" :style=" cardItem.style ">
                            <span class="sp-icon thumbnail">
                                <img :src="cardItem.thumbnail" width="32" height="32" />
                            </span>
                            <div class="sp-thumb-line"></div>
                        </div>
                        <div class="sp-body">
                            <div class="sp-label">{{ cardItem.label }}</div>
                            <div class="sp-title">{{ cardItem.title }}</div>
                            <div class="sp-desc">{{ cardItem.desc }}</div>
                            <div class="sp-link">前往查看 →</div>
                        </div>
                    </a>
                </template>
            </div>
        </div>
    </section>
</template>