
<script setup lang="ts">
	
</script>

<template>
    <!-- HERO -->
	<section class="page-hero">
        <svg class="hero-geo" viewBox="0 0 400 600" fill="none">
            <rect x="100" y="60" width="250" height="250" stroke="rgba(247,245,240,0.04)" stroke-width="1"/>
            <rect x="70" y="90" width="250" height="250" stroke="rgba(247,245,240,0.03)" stroke-width="1"/>
            <circle cx="220" cy="430" r="120" stroke="rgba(176,125,79,0.07)" stroke-width="1"/>
            <rect x="260" y="320" width="50" height="50" fill="rgba(176,125,79,0.06)"/>
        </svg>
        <div class="page-hero-inner-test" style="opacity:0;animation:slideUp .7s .1s cubic-bezier(.25,.46,.45,.94) forwards">
            <div class="hero-eyebrow">
                <div class="hero-eyebrow-line"></div>
                <span>PHP Full-Stack</span>
            </div>
            <h1 class="page-title">Full-Stack <em>Showcase</em></h1>
            <p class="page-desc">
                前端由 Vue 驅動，後端邏輯透過 PHP API 處理。輸入文字格式，即時生成 SEO 結構化資料。
            </p>
        </div>
    </section>
</template>
