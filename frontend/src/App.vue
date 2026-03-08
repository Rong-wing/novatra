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
					<RouterLink to="/vue_demo">Vue Frontend Demo</RouterLink>
					<RouterLink to="/php_api">PHP API</RouterLink>
				</nav>
			</div>
		</div>
	</header>
	<main class="main">
		<RouterView />
	</main>
	<footer class="footer">
		<ul class="contact-info">
			<li>
				<img src="/images/icon/envelope.png" />
				<span>信箱：<a href="https://mail.google.com/mail/?view=cm&fs=1&to=s8812422@gmail.com" target="_blank">s8812422@gmail.com</a></span>
			</li>
			<li>
				<img src="/images/icon/github.png" />
				<span>GitHub：<a href="https://github.com/Rong-wing/novatra/tree/main/src" target="_blank">我的 Vue.js 專案作品</a></span>
			</li>
		</ul>
		<div class="copyright">Copyright © 2026 Rong All rights reserved.</div>
	</footer>
</template>
