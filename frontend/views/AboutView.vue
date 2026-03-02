<script setup lang="ts">
	import Author from '../components/about/Author.vue'
	import WorkExperience from '../components/about/Experience.vue'
	import Autobiography from '../components/about/Autobiography.vue'
</script>

<template>
	<!-- 作者 -->
	<Author />
	<div class="container">
		<!-- 工作經驗 -->
		<WorkExperience />
		<!-- 自傳 -->
		<Autobiography />
	</div>
</template>