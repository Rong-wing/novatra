<template>
	<div class="wave-wrapper" :style="{ height: height + 'px' }">
		<svg v-for="i in 2"
			:key="i"
			viewBox="0 0 1440 320"
			preserveAspectRatio="none"
			class="wave"
			:class="{ reverse: reverse }"
			:style="{
				left: (i - 1) * 100 + '%',
				height: height + 'px'
			}">
			<path :d="d" :fill="`rgba(${color}, ${opacity})`" />
		</svg>
	</div>
</template>

<script setup lang="ts">
	defineProps({
		d: String,
		height: Number,
		opacity: Number,
		reverse: {
			type: Boolean,
			default: false
		},
		color: {
			type: String,
			default: '48, 75, 103' // #304B67
			// default: '30, 45, 69' // #1e2d45
		}
	})
</script>

<style scoped lang="less">
	.wave-wrapper {
		position: absolute;
		bottom: 0;
		left: 0;
		width: 100%;
		overflow: hidden;
	}
	.wave {
		position: absolute;
		bottom: 0;
		width: 100%;
		animation: moveWave 10s linear infinite;
	}
	.wave.reverse {
		animation-name: moveWaveReverse;
	}
	.wave1 .wave { animation-duration: 16s; }
	.wave2 .wave { animation-duration: 10s; }
	.wave3 .wave { animation-duration: 8s; }
	@keyframes moveWave {
		0% { transform: translateX(0); }
		100% { transform: translateX(-100%); }
	}
	@keyframes moveWaveReverse {
		0% { transform: translateX(-100%); }
		100% { transform: translateX(0); }
	}
</style>