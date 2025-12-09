<script setup lang="ts">
	import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
	<header>
		<div class="container">
			<img alt="Vue logo" class="logo" src="@/assets/logo.svg" width="40" height="40" />
			<div class="wrapper">
				<nav>
					<RouterLink to="/">Home</RouterLink>
					<RouterLink to="/about">About</RouterLink>
				</nav>
			</div>
		</div>
	</header>
	<RouterView />
</template>
