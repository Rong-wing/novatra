<script setup lang="ts">
	import { ref } from 'vue'
	import WaveBackground from '../icons/IconWave.vue'
	const banner = ref("https://cdn.pixabay.com/photo/2025/04/30/13/05/cat-9569386_1280.jpg")
	const headline = ref("Rong")
	const role = ref("Web全端工程師（Full-Stack Developer）");
	const tags = ref([
		"Vue 3",
		"PHP",
		"Docker",
		"SEO",
		"MongoDB"
	])
</script>
<template>
	<!-- PAGE HERO -->
	<section class="page-hero">
		<svg class="hero-geo-sm" viewBox="0 0 500 700" fill="none">
			<rect x="200" y="80" width="260" height="260" stroke="rgba(247,245,240,0.04)" stroke-width="1"/>
			<rect x="170" y="110" width="260" height="260" stroke="rgba(247,245,240,0.03)" stroke-width="1"/>
			<circle cx="320" cy="500" r="140" stroke="rgba(176,125,79,0.07)" stroke-width="1"/>
			<rect x="350" y="380" width="60" height="60" fill="rgba(176,125,79,0.06)"/>
			<line x1="0" y1="350" x2="500" y2="350" stroke="rgba(247,245,240,0.03)" stroke-width="1"/>
		</svg>
		<div class="page-hero-inner">
			<div class="hero-wrapper">
				<div class="hero-eyebrow">
					<div class="hero-eyebrow-line"></div>
					<span>About Me</span>
				</div>
				<h1 class="page-title">工程師，<br><em>也是學習者。</em></h1>
				<p class="page-intro">
					具備多年前端開發經驗，熟悉 HTML5、CSS、JavaScript、jQuery 與 PHP，目前正深化 Vue.js 與全端開發能力。技術對我而言是一門需要持續打磨的手藝，這個作品集是工程思維沉澱的紀錄。
				</p>
			</div>
			<div class="profile-card">
				<div class="profile-avatar-wrap thumbnail">
					<img :src="banner">
				</div>
				<div class="profile-name">{{ headline }}</div>
				<div class="profile-role">{{ role }}</div>
				<div class="profile-tags">
					<span class="p-chip" v-for="tag in tags">{{ tag }}</span>
				</div>
				<div class="profile-contacts">
					<a href="https://mail.google.com/mail/?view=cm&fs=1&to=s8812422@gmail.com" target="_blank" class="contact-row">
						<img src="/images/icon/mail.png" width="17" height="12" />
						s8812422@gmail.com
					</a>
					<a href="https://github.com/Rong-wing/novatra" target="_blank" class="contact-row">
						<img src="/images/icon/github.png" width="14" height="13" />
						GitHub 作品集
					</a>
					<span class="contact-row">
						<img src="/images/icon/local.png" width="13" height="16" />
						Taiwan
					</span>
				</div>
			</div>
		</div>
	</section>
</template>