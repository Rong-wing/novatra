<script setup lang="ts">
	import { ref } from 'vue'
	const banner = ref("https://cdn.pixabay.com/photo/2025/04/30/13/05/cat-9569386_1280.jpg")
	const workList = ref({
		"杰鼎數位科技": {
			job: "PHP助理工程師 - 全職",
			years: "2015年10月 - 2016年10月",
			description: "從事網路程式設計、架站、網站維護，網路安全維護等工作。",
			skills: {
				PHP: 30,
				HTML: 40,
				JQuery: 30,
				JavaScript: 20,
				"JQuery AJAX": 20,
			},
		},
		"皮克網路有限公司": {
			job: "PHP網站前端工程師 - 全職",
			years: "2017年2月 - 至今",
			description: [
				"負責企業官網、活動頁面及內部系統的前端開發與維護",
				"切版與前端互動功能開發，精通 HTML5、CSS、JavaScript",
				"RWD 與跨瀏覽器相容性處理",
				"PHP 後端功能維護與開發，表單處理、資料傳遞",
				"API 串接與整合（前後端資料交換、第三方 API、格式轉換、錯誤處理）",
				"資料庫操作與串接",
				"SEO 設定與追蹤（meta、schema、Google Search Console）",
				"與設計師協作落實 Figma 設計稿",
				"舊站維護與程式重構，優化效能與維護性",
				"獨立開發、debug、簡易部署及團隊協作處理專案需求"
			],
			skills: {
				PHP: 80,
				"HTML/HTML5": 95,
				JQuery: 80,
				JavaScript: 75,
				"CSS/Less": 95,
				"JQuery AJAX": 70,
				API: 70,
				ReactJS: 50,
				WordPress: 60,
				SEO: 80,
				MongoDB: 80,
				Docker: 30,
				"Vue.js": 30,
			},
		}
	})
</script>

<template>
	<section class="work-experience">
		<h2>工作經歷</h2> <!-- work-experience -->
		<div class="work-wrapper" v-for="(workItem,workKey) in workList" :key="workKey">
			<!-- work -->
			<div class="work-card">
				<div class="work-item">
					<div class="icon thumbnail">
						<img :src="banner">
					</div>
					<div class="work-info">
						<span class="name">{{ workKey }}</span>
						<p class="job">{{workItem.job}}</p> <!-- front end -->
					</div>
				</div>
				<span class="years">{{workItem.years}}</span>
				<div class="description" v-if="Array.isArray(workItem.description)">
					<ul>
						<li v-for="(i, index) in workItem.description" :key="index">
							{{ i }}
						</li>
					</ul>
				</div>
				<div class="description" v-else>
					<ul>
						<li>{{ workItem.description }}</li>
					</ul>
				</div>
				<!-- 負責內容 -->
			</div>
			<nav class="skills-list">
				<ul> <!-- 相關技能 -->
					<li v-for="(skillItem,skillKey) in workItem.skills" :key="skillKey">
						<span>{{ skillKey }}</span>
						<div class="level-bar">
							<div class="fill-bar" :style="{ width: skillItem + '%' }"></div>
						</div>
					</li>
				</ul>
			</nav>
		</div>
	</section>
</template>