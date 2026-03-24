<script setup lang="ts">
    import { ref } from 'vue';
	const headlineEN = ref("About")
	const headline = ref("關於本站")
    const aboutBody = ref([
		"這個作品集是我用來持續精進與磨練技術的一個實踐專案。",
		"前端使用 Vue 3 + Vite，後端以 PHP 為基礎，最後透過 Docker 進行部署與環境管理。",
		"對我來說，它更像是一個把工程思維慢慢沉澱下來的過程。"
	])
	const techStack = ref({
        "Frontend" : {
            thumbnail : "/images/icon/vue.png",
            name : "Vue 3 + Vite"
        },
        "Backend" : {
            thumbnail : "/images/icon/php.png",
            name : "PHP REST API"
        },
        "Infrastructure" : {
            thumbnail : "/images/icon/docker.png",
            name : "Docker Compose"
        },
        "Database" : {
            thumbnail : "/images/icon/mongodb.png",
            name : "Mongodb",
            style : "mongodb"
        }
    })
</script>

<template>
	<section class="about-site">
        <div class="about-site-text reveal" v-reveal>
            <div class="heading-eyebrow">
                <div class="heading-eyebrow-line"></div>
                <span>{{ headlineEN }}</span>
            </div>
            <h2 class="heading-title">{{ headline }}</h2>
            <p class="about-body" v-for="(aboutbodyItem , aboutbodyIndex) in aboutBody" :key="aboutbodyIndex">{{aboutbodyItem }}</p>
            <a href="about" class="about-link">了解更多關於我 →</a>
        </div>
        <div class="about-site-visual reveal" v-reveal>
            <div class="heading-eyebrow">
                <div class="heading-eyebrow-line"></div>
                <span>Tech Stack</span>
            </div>
            <div class="stack-list">
                <div class="stack-item" v-for="(techStackItem , techStackIndex) in techStack" :key="techStackIndex">
                    <div :class="['stack-item-icon thumbnail', techStackItem.style]">
                        <img :src="techStackItem.thumbnail" width="32" height="32" />
                    </div>
                    <div class="stack-item-name">{{ techStackItem.name }}</div>
                    <div class="stack-item-sub">{{ techStackIndex }}</div>
                </div>
            </div>
        </div>
    </section>
</template>