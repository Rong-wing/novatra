<script setup lang="ts">
	import WaveLayer from './IconWaveLayer.vue'
	defineProps({
		size: { type: Number, default: 260 }
	})
</script>
<template>
	<section class="wave-background" :style="{ height: size + 'px', position: 'relative', overflow: 'hidden' }">
		<WaveLayer
			class="wave1"
			:height="280"
			d="M0,200 C360,100 720,300 1440,200 L1440,320 L0,320 Z"
			:opacity="0.25"
			:reverse="false"
		/>

		<WaveLayer
			class="wave2"
			:height="260"
			d="M0,220 C360,320 720,120 1440,220 L1440,320 L0,320 Z"
			:opacity="0.5"
			:reverse="true"
		/>

		<WaveLayer
			class="wave3"
			:height="240"
			d="M0,210 C360,110 720,310 1440,210 L1440,320 L0,320 Z"
			:opacity="0.7"
			:reverse="false"
		/>
	</section>
</template>