<script setup lang="ts">
	import { onMounted, onUnmounted } from 'vue';

    let typingTimer: any = null;

    onMounted(() => {
        // --- Palette Generator ---
        const palettes = [
            ['#1B2A4A','#2E4270','#B07D4F','#D9CFC0','#F7F5F0'],
            ['#2C3E50','#34495E','#C0392B','#E8D5B7','#F5EDD6'],
            ['#1A3A2A','#2D5A3D','#8B7355','#D4C5A9','#F4EFE6'],
            ['#2C1810','#4A2C1A','#C4843A','#E8C99A','#F7F0E6'],
            ['#1A1A2E','#16213E','#0F3460','#E94560','#F5F5F5'],
        ];
        let palIdx = 0;
        
        const paletteBtn = document.getElementById('paletteBtn');
        if (paletteBtn) {
            paletteBtn.addEventListener('click', () => {
                palIdx = (palIdx + 1) % palettes.length;
                const swatches = document.querySelectorAll('.pal-swatch');
                palettes[palIdx].forEach((c, i) => {
                    if (swatches[i]) {
                        (swatches[i] as HTMLElement).style.background = c;
                        (swatches[i] as HTMLElement).dataset.hex = c;
                    }
                });
            });
        }

        // --- Typing Effect ---
        const phrases = [
            'const dev = new Developer();',
            'dev.skills = ["Vue3", "PHP", "Docker"];',
            'dev.passion = "Clean Code";',
            'dev.status = "Looking for opportunities";',
        ];
        let pi = 0, ci = 0, deleting = false;
        const el = document.getElementById('typingText');

        function type() {
            if (!el) return;
            const phrase = phrases[pi];
            
            // 取得當前要顯示的純文字
            const currentText = phrase.slice(0, ci);
            // 保留你原本 HTML 結構中的游標
            el.innerHTML = `${currentText}<span class="cursor"></span>`;

            if (!deleting) {
                ci++;
                if (ci > phrase.length) {
                    deleting = true;
                    typingTimer = setTimeout(type, 1800);
                    return;
                }
                typingTimer = setTimeout(type, 60);
            } else {
                ci--;
                if (ci < 0) {
                    deleting = false;
                    pi = (pi + 1) % phrases.length;
                    ci = 0; // 重置 index
                    typingTimer = setTimeout(type, 400);
                    return;
                }
                typingTimer = setTimeout(type, 30);
            }
        }

        type();
    });

    onUnmounted(() => {
        if (typingTimer) clearTimeout(typingTimer);
    });
</script>

<template>
	<!-- ── LIVE DEMO ── -->
	<section class="sec sec-cream" id="live-demo">
		<div class="inner">
			<div class="sec-head reveal" v-reveal>
				<div>
					<div class="sec-eyebrow eyebrow-brown">
						<div class="sec-eyebrow-line"></div>
						<span>Interactive</span>
					</div>
					<h2 class="sec-title sec-title-dark">Live Demo</h2>
				</div>
				<p class="sec-head-p">
					直接在頁面上互動，感受 CSS 動畫、JavaScript 邏輯與視覺回饋的細節處理。
				</p>
			</div>
			<div class="demos-grid reveal" v-reveal>
				<!-- Demo 1: CSS Flip Card -->
				<div class="demo-card">
					<div class="demo-card-label">CSS Animation</div>
					<div class="demo-card-title">3D 翻轉卡片</div>
					<div class="flip-wrap">
						<div class="flip-inner">
							<div class="flip-front">
								<span>Hover me</span>
								<small>CSS 3D Transform</small>
							</div>
							<div class="flip-back">
								純 CSS 實現，無 JavaScript，backface-visibility + rotateY
							</div>
						</div>
					</div>
					<div class="typing-tags">
						<span class="t-badge">CSS Only</span>
						<span class="t-badge">Transform</span>
						<span class="t-badge">Perspective</span>
					</div>
				</div>

				<!-- Demo 2: Palette -->
				<div class="demo-card">
					<div class="demo-card-label">JavaScript</div>
					<div class="demo-card-title">色票展開互動</div>
					<div class="palette-row" id="palette">
						<div class="pal-swatch" style="background:#1B2A4A" data-hex="#1B2A4A"></div>
						<div class="pal-swatch" style="background:#2E4270" data-hex="#2E4270"></div>
						<div class="pal-swatch" style="background:#B07D4F" data-hex="#B07D4F"></div>
						<div class="pal-swatch" style="background:#D9CFC0" data-hex="#D9CFC0"></div>
						<div class="pal-swatch" style="background:#F7F5F0" data-hex="#F7F5F0"></div>
					</div>
					<button class="palette-btn" id="paletteBtn">⟳ 隨機生成配色</button>
					<div class="typing-tags">
						<span class="t-badge">JavaScript</span>
						<span class="t-badge">CSS Variables</span>
					</div>
				</div>

				<!-- Demo 3: Typing effect -->
				<div class="demo-card">
					<div class="demo-card-label">JS Typing Effect</div>
					<div class="demo-card-title">動態打字效果</div>
					<div class="typing-demo">
						<div class="typing-text" id="typingText">
							<span class="cursor"></span>
						</div>
					</div>
					<div class="typing-tags">
						<span class="t-badge">JavaScript</span>
						<span class="t-badge">setTimeout</span>
						<span class="t-badge">DOM</span>
					</div>
				</div>
			</div>
		</div>
	</section>
</template>