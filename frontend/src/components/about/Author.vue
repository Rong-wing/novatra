<script setup lang="ts">
	import { ref } from 'vue'
	import WaveBackground from '../icons/IconWave.vue'
	const banner = ref("https://cdn.pixabay.com/photo/2025/04/30/13/05/cat-9569386_1280.jpg")
	const headline = ref("沈采蓉")
	const slogan = ref("網頁前端程式設計師（Front-End Engineer）");
	const authorList = ref([
		"年齡：34歲",
		"性別：女",
		"學歷：嶺東科技大學 畢業",
		"婚姻狀態：未婚",
		"興趣專長：聽音樂、看影片、玩魔術方塊"
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
			<div style="position:relative;z-index:2;opacity:0;animation:slideUp .7s .1s cubic-bezier(.25,.46,.45,.94) forwards">
				<div class="hero-eyebrow">
					<div class="hero-eyebrow-line"></div>
					<span>About Me</span>
				</div>
				<h1 class="page-title">工程師，<br><em>也是學習者。</em></h1>
				<p class="page-intro">
					具備多年前端開發經驗，熟悉 HTML5、CSS、JavaScript、jQuery 與 PHP，目前正深化 Vue.js 與全端開發能力。技術對我而言是一門需要持續打磨的手藝，這個作品集是工程思維沉澱的紀錄。
				</p>
			</div>
			<div class="profile-card" style="opacity:0;animation:fadeIn .8s .3s forwards;position:relative;z-index:2;">
				<div class="profile-avatar-wrap">👨‍💻</div>
				<div class="profile-name">Rong</div>
				<div class="profile-role">Full-Stack Developer</div>
				<div class="profile-tags">
					<span class="p-chip">Vue 3</span>
					<span class="p-chip">PHP</span>
					<span class="p-chip">Docker</span>
					<span class="p-chip">SEO</span>
					<span class="p-chip">MongoDB</span>
				</div>
				<div class="profile-contacts">
					<a href="https://mail.google.com/mail/?view=cm&fs=1&to=s8812422@gmail.com" target="_blank" class="contact-row">✉ s8812422@gmail.com</a>
					<a href="https://github.com/Rong-wing/novatra/tree/main/src" target="_blank" class="contact-row">⌨ GitHub 作品集</a>
					<span class="contact-row">📍 Taiwan</span>
				</div>
			</div>
		</div>
	</section>
</template>