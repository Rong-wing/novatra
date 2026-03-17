<script setup lang="ts">
	import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
	<header>
		<div class="container">
			<a href="/">
				<img alt="Rong logo" class="logo" src="/images/logo.png" width="40" height="40" />
			</a>
			<div class="wrapper menu">
				<nav>
					<RouterLink to="/">Home</RouterLink>
					<RouterLink to="/about">About</RouterLink>
					<RouterLink to="/showcase">Showcase</RouterLink>
					<RouterLink to="/php_api">PHP API</RouterLink>
				</nav>
			</div>
		</div>
	</header>
	<main class="main">
		<RouterView />
	</main>
	<footer>
		<span class="footer-copy">Copyright © 2026 Rong. All rights reserved.</span>
		<div class="footer-links">
			<a href="https://mail.google.com/mail/?view=cm&fs=1&to=s8812422@gmail.com" target="_blank">
				<img src="/images/icon/mail.png" width="17" height="12" />
				s8812422@gmail.com
			</a>
			<a href="https://github.com/Rong-wing/novatra/tree/main/src" target="_blank">
				<img src="/images/icon/github.png" width="14" height="13" />
				GitHub 作品集
			</a>
		</div>
	</footer>
</template>
