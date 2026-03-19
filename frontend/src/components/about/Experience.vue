<script setup lang="ts">
	import { ref } from 'vue'
	const workList = ref({
		"個人作品集專案": {
			job: "Full-Stack Developer",
			years: "2025/11 — Present",
			description: "深化 Vue 3 Composition API、Vite 工具鏈、PHP RESTful API 開發，並以 Docker 進行環境管理與部署。",
		},
		"皮克網路有限公司": {
			job: "PHP網站前端工程師",
			years: "2017/2 - 至今",
			description: [
				"負責 HTML5/CSS/JavaScript 前端開發，維護 WordPress 網站，處理 SEO 結構化資料與 Google Search Console 數據分析。",
				"PHP 後端功能維護與開發，表單處理、資料傳遞。",
				"資料庫操作與串接，API 串接與整合（前後端資料交換、第三方 API、格式轉換、錯誤處理）。",
				"負責企業官網、活動頁面及內部系統的前端開發與維護。",
				"舊站維護與程式重構，優化效能與維護性，獨立開發、debug、簡易部署及團隊協作處理專案需求，並具備獨立判斷與調整能力。"
			],
		},
		"杰鼎數位科技": {
			job: "PHP助理工程師",
			years: "2015/10 - 2016/10",
			description: "從事網路程式設計、架站、網站維護，網路安全維護等工作。",
		},
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
				<div class="tl-card" v-for="value , index in workList" :key="index">
					<div class="tl-date">{{ value.years }}</div>
					<div class="tl-divider"></div>
					<div class="tl-title">{{ value.job }}</div>
					<div class="tl-org">{{ index }}</div>
					<div class="tl-desc"  v-if="Array.isArray(value.description)">
						<ul>
							<li v-for="(i, subIndex) in value.description" :key="subIndex">
								{{ i }}
							</li>
						</ul>
					</div>
					<div class="tl-desc" v-else>
						<ul>
							<li>{{ value.description }}</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</template>