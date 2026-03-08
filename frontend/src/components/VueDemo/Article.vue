<script setup lang="ts">
	import { ref } from 'vue'
	interface Article {
		id: number;
		title: string;
		tags: string[];
		imageURL?: string; // 圖片 URL 是可選的或字串
		// 修正 3: content 在 Interface 中是 string，但您資料中給的是 string[]，請統一
		content?: string; 
	}

	const articles = ref<Article[]>([{
		id: 1,
		title: 'Vue.js 基礎概念介紹',
		tags: ['Vue' , 'PHP'],
		imageURL: 'https://images.pexels.com/photos/1324542/pexels-photo-1324542.png',
		content: ''
	}]);
</script>

<template>
	<div>
		<h1>{{ articles[0].title }}</h1>
		<ul><li v-for="tag in articles[0].tags">{{ tag }}</li></ul>
		<figure class="thumbnail banner">
			<img
				:src="articles[0].imageURL" 
				:alt="articles[0].title" 
				v-if="articles[0].imageURL" 
				style="max-width: 100%; height: auto;"
			/>
		</figure>
		<article v-if="articles[0].content">{{ articles[0].content }}</article>
	</div>
</template>