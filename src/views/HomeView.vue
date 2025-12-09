<script setup lang="ts">
  import Author from '../components/home/Author.vue'
  import WorkExperience from '../components/home/Experience.vue'
  import Autobiography from '../components/home/Autobiography.vue'
</script>

<template>
	<main class="main">
		<!-- 作者 -->
		<Author />
		<div class="container">
			<!-- 工作經驗 -->
			<WorkExperience />
			<!-- 自傳 -->
			<Autobiography />
		</div>
	</main>
</template>