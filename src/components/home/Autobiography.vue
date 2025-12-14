<script setup lang="ts">
	import { ref } from 'vue'
</script>

<template>
	<section class="autobiography">
		<h2>自傳</h2> <!-- My projects or 聯絡方式 -->
		<div>
			<p>具備9年前端開發經驗，長期參與企業官網、活動頁面與內部系統的開發與維護，習慣從實務需求出發，穩定完成專案。</p>
			<p>在工作中重視程式的可維護性、效能與使用者體驗，能獨立處理開發、debug與簡易部署，也樂於與UI設計師及跨部門合作，確保需求順利製作完成。</p>
			<p>面對舊有系統或既有程式碼，能快速理解並進行整理與優化，並善用工具與 AI 輔助提升工作效率。</p>
			<p>期望持續精進技術能力，在穩定開發的基礎上，參與更完整的系統與產品型專案，為團隊與使用者創造實際價值。</p>
		</div>
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
	</section>
</template>