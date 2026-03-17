<script setup lang="ts">
	import { ref } from 'vue'
</script>

<template>
	<!-- VALUES -->
	<section class="section-alt">
		<div class="content-wrap">
			<div class="reveal" v-reveal>
				<div class="section-eyebrow">
					<div class="section-eyebrow-line"></div>
					<span>Values</span>
				</div>
				<h2 class="section-title">我的工程理念</h2>
			</div>
			<div class="values-grid reveal" v-reveal>
				<div class="value-card">
					<div class="value-num">01</div>
					<div class="value-title">紮實基礎</div>
					<div class="value-desc">
						相信只有理解底層原理，才能靈活應用各種框架與工具。不追求快速套用，而是真正弄懂每個技術決策背後的原因。
					</div>
				</div>
				<div class="value-card">
					<div class="value-num">02</div>
					<div class="value-title">持續迭代</div>
					<div class="value-desc">
						技術在進步，工程師也必須持續成長。每個專案都是一次精進的機會，不斷反思、優化、改善。
					</div>
				</div>
				<div class="value-card">
					<div class="value-num">03</div>
					<div class="value-title">清楚溝通</div>
					<div class="value-desc">
						好的程式碼是給人讀的，清楚的溝通讓協作更順暢。重視文件、命名與可讀性，讓團隊都能快速上手。
					</div>
				</div>
				<div class="value-card">
					<div class="value-num">04</div>
					<div class="value-title">以結果為導向</div>
					<div class="value-desc">
						關注實際產出與效能指標，而非只追求技術的炫目程度。每個功能都應該服務於使用者與業務目標。
					</div>
				</div>
			</div>
		</div>
	</section>
</template>