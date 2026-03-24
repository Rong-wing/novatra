<script setup lang="ts">
    import { ref } from 'vue';
	const headlineEN = ref("Expertise")
	const headline = ref([
        "全端開發",
        "與工程實踐",
    ])
    const desc = ref("從前端互動介面到後端 API 整合，以工程思維打造具備可維護性與效能的全端解決方案。")
	const skills = ref({
        "Frontend" : {
            name : "前端開發",
            name_en : "Frontend & Interactive",
            item : {
                "vue" : {
                    name : "Vue 3",
                    pct : "55%",
                },
                "javascript" : {
                    name : "JavaScript ES6+",
                    pct : "80%",
                },
                "jquery" : {
                    name : "JQuery",
                    pct : "80%",
                },
                "html" : {
                    name : "HTML5 / CSS3 / Less",
                    pct : "95%",
                },
                "rwd" : {
                    name : "RWD 響應式設計",
                    pct : "90%",
                },
                "reactjs" : {
                    name : "ReactJS",
                    pct : "40%",
                },
            }
        },
        "Backend" : {
            name : "後端整合",
            name_en : "Backend & Data",
            item : {
                "php" : {
                    name : "PHP",
                    pct : "80%",
                },
                "mongodb" : {
                    name : "MongoDB / RESTful",
                    pct : "80%",
                },
                "wordpress" : {
                    name : "WordPress 客製化",
                    pct : "72%",
                },
                "ajax" : {
                    name : "AJAX",
                    pct : "83%",
                }
            }
        },
        "DevOps" : {
            name : "工程實踐",
            name_en : "DevOps & Optimization",
            item : {
                "docker" : {
                    name : "Docker 容器化",
                    pct : "52%",
                },
                "seo" : {
                    name : "SEO 策略優化",
                    pct : "85%",
                },
                "git" : {
                    name : "Git 版本控制",
                    pct : "80%",
                },
                "performance" : {
                    name : "效能優化",
                    pct : "80%",
                }
            }
        }
    })
</script>

<template>
	<section class="featured-skills">
        <div class="container">
            <div class="heading-header reveal" v-reveal>
                <div class="heading-label-group">
                    <div class="heading-eyebrow">
                        <div class="heading-eyebrow-line"></div>
                        <span>{{ headlineEN }}</span>
                    </div>
                    <h2 class="heading-title">{{ headline[0] }}<br>{{ headline[1] }}</h2>
                </div>
                <p class="heading-desc">{{ desc }}</p>
            </div>

            <div class="skills-grid reveal" v-reveal>
                <div class="skill-group" v-for="skill in skills">
                    <div class="skill-group-name">{{ skill.name }}</div>
                    <div class="skill-group-en">{{ skill.name_en }}</div>
                    <div class="skill-item" v-for="skillItme in skill.item">
                        <div class="skill-row">
                            <span class="skill-name">{{ skillItme.name }}</span>
                            <span class="skill-pct">{{ skillItme.pct }}</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-fill" :style="{ width: skillItme.pct }"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>