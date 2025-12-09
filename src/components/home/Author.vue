<script setup lang="ts">
	import { ref } from 'vue'
	import WaveBackground from '../icons/IconWave.vue'
	const banner = ref("https://cdn.pixabay.com/photo/2025/04/30/13/05/cat-9569386_1280.jpg")
	const headline = ref("沈采蓉")
	const slogan = ref("網頁前端程式設計師（Front-End Engineer）");
	const authorList = ref([
		"年齡：33歲",
		"性別：女",
		"學歷：嶺東科技大學 畢業",
		"婚姻狀態：未婚",
		"興趣專長：聽音樂、看影片、玩魔術方塊"
	])
</script>
<template>
	<section class="author-wrapper">
		<WaveBackground class="wave-background-wrapper" :size="150" :style="{ color: '#1E2D45', overflow: 'hidden' }" />
		<div class="container">
			<div class="introduce">
				<h1>{{ headline }}</h1>
				<p>{{ slogan }}</p>
				<ul>
					<li v-for="authorItem in authorList">{{ authorItem }}</li>
				</ul>
			</div>
			<div class="thumbnail">
				<img :src="banner" class="banner">
			</div>
		</div>
		<WaveBackground class="wave-background-wrapper reverse-style" :size="150" :style="{ color: '#1E2D45', overflow: 'hidden' }" />
	</section>
</template>