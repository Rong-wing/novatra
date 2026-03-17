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
				"善用 AI 工具輔助進行程式設計、debug與重構，並具備獨立判斷與調整能力，提升舊專案維護效率。",
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
	<!-- TIMELINE -->
	<section class="section-cream">
		<div class="content-wrap">
			<div class="reveal" v-reveal>
				<div class="section-eyebrow">
					<div class="section-eyebrow-line"></div>
					<span>Experience</span>
				</div>
				<h2 class="section-title">工作與學習歷程</h2>
			</div>
			<div class="timeline-grid reveal" v-reveal>
				<div class="tl-card">
					<div class="tl-date">2024 — Present</div>
					<div class="tl-divider"></div>
					<div class="tl-title">Full-Stack Developer</div>
					<div class="tl-org">個人作品集專案</div>
					<div class="tl-desc">
						深化 Vue 3 Composition API、Vite 工具鏈、PHP RESTful API 開發，並以 Docker 進行環境管理與部署。
					</div>
				</div>
				<div class="tl-card">
					<div class="tl-date">2020 — 2024</div>
					<div class="tl-divider"></div>
					<div class="tl-title">前端開發工程師</div>
					<div class="tl-org">（請替換為實際工作單位）</div>
					<div class="tl-desc">
						負責 HTML5/CSS/JavaScript 前端開發，維護 WordPress 網站，處理 SEO 結構化資料與 Google Search Console 數據分析。
					</div>
				</div>
				<div class="tl-card">
					<div class="tl-date">2018 — 2020</div>
					<div class="tl-divider"></div>
					<div class="tl-title">網頁設計師</div>
					<div class="tl-org">（請替換為實際工作單位）</div>
					<div class="tl-desc">
						從零開始學習 HTML/CSS，建立 RWD 響應式網頁，並逐步涉足 jQuery 與 AJAX 互動邏輯開發。
					</div>
				</div>
			</div>
		</div>
	</section>
</template>