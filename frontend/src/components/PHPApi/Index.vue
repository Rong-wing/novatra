<script setup lang="ts">
	import { ref, inject, computed, onMounted, nextTick, watch } from 'vue';

	const api = inject('api');
	const exampleInput = ref(); //input model
	const buttonState = ref(''); //點擊不同button，有不同的動作
	const demoData = ref<any>(null); //show data
	const displayData = ref({
		php: '// 此處顯示 PHP 後端邏輯',
		json: '// 此處顯示 json'
	});

	/** 使用javascript做資料模擬渲染 start */
	const simulatePhpLogic = () => {
		//顯示當前狀態
		buttonState.value = "執行 JavaScript 正規化解析，模擬後端邏輯。";

		//這裡模擬後端 PHP preg_match 的行為
		const regex = /\[(?<date>.*?)\]\s*(?<headline>.*?)\s*-\s*作者：(?<author>.*)/u;
		const result = exampleInput.value.match(regex);
		
		if (result && result.groups) {
			//成功抓取到資料
			const { date, headline, author } = result.groups;
			// console.log('解析結果：', date, headline, author);

			//更新左側 Demo 顯示
			demoData.value = {
				seoSchema: {
					"@context": "https://schema.org",
					"@type": "Article",
					"headline": headline,
					"datePublished": date,
					"author": { "@type": "Person", "name": author }
				} 
			};
			
			//更新右側 JSON 顯示 (模擬 PHP 回傳的 JSON-LD)
			displayData.value.json = JSON.stringify({
				"@context": "https://schema.org",
				"@type": "Article",
				"headline": headline,
				"datePublished": date,
				"author": { "@type": "Person", "name": author }
			}, null, 2);

			//這裏面顯示php
			displayData.value.php = `<?php
	public function getProducts() {
		//正規化：抓取日期、標題、作者
		$pattern = '/\[(?P<date>.*?)\]\s*(?P<headline>.*?)\s*-\s*作者：(?P<author>.*)/u';

		if (preg_match($pattern, $input, $matches)) {
			//過濾日期格式確保安全
			$date = new DateTime($matches['date']);
			$datePublished = $date->format('Y/m/d');
			
			$seoSchema = [
				"@context" => "https://schema.org",
				"@type" => "Article",
				"headline" => $matches['headline'],
				"datePublished" => $datePublished,
				"author" => [
					"@type" => "Person",
					"name" => trim($matches['author'])
				]
			];
		}
		
		return json_encode([
			"status" => "success",
			"seoSchema" => $seoSchema
		]);
	}`;
			//更新完資料後重新渲染
			highlight();
		}
		else {
			// console.log("格式不匹配");
			//如果不匹配，就清空或顯示提示
        	demoData.value = null;
		}
	};
	/** 使用javascript做資料模擬渲染 end */

	/** 這是給php傳接資料使用的 star */
	const fetchData = async () => {
		try {
			//顯示當前狀態
			buttonState.value = "發送 Request 至遠端 PHP 環境，解析後回傳 JSON。";

			//這裡的路徑必須對應 Proxy 的設定
			const response = await api.get('/index', {
				params: {
					action: 'getProducts',
					data: exampleInput.value
				}
			});
			// const response = await api.post('/index', {
			// 	action: 'getProducts',
			// 	data: exampleInput.value
			// });
			const result = response.data;

			//這裏面顯示json
			displayData.value.json = JSON.stringify(result, null, 2);
			//這裏面顯示php
			displayData.value.php = `<?php
	public function getProducts() {
		//正規化：抓取日期、標題、作者
		$pattern = '/\[(?P<date>.*?)\]\s*(?P<headline>.*?)\s*-\s*作者：(?P<author>.*)/u';

		if (preg_match($pattern, $input, $matches)) {
			//過濾日期格式確保安全
			$date = new DateTime($matches['date']);
			$datePublished = $date->format('Y/m/d');
			
			$seoSchema = [
				"@context" => "https://schema.org",
				"@type" => "Article",
				"headline" => $matches['headline'],
				"datePublished" => $datePublished,
				"author" => [
					"@type" => "Person",
					"name" => trim($matches['author'])
				]
			];
		}
		
		return json_encode([
			"status" => "success",
			"seoSchema" => $seoSchema
		]);
	}`;

			demoData.value = result;

			//觸發Prism渲染
        	highlight();
			// console.log('PHP 資料：', demoData.value.data);
		}
		catch (error) {
			// console.error('連線失敗：', error);
		}
	};
	/** 這是給php傳接資料使用的 end */

	//預設為php分頁
	const currentTab = ref('php');

	//根據 currentTab 自動決定要顯示的內容
	const activeCode = computed(() => {
		return currentTab.value === 'php' ? displayData.value.php : displayData.value.json;
	});

	//定義一個渲染的函式
	const highlight = () => {
		//nextTick 確保 DOM 已經更新完成
		nextTick(() => {
			if (window.Prism) {
				window.Prism.highlightAll();
			}
		});
	};

	//頁面第一次載入時渲染
	onMounted(() => {
		highlight();
	});

	//切換 Tab 或代碼內容改變時重新渲染
	watch(currentTab, () => {
		highlight();
	});
</script>

<template>
	<section class="container php-api-wrapper">
		<div class="heading">
			<h1>PHP Full-Stack Showcase</h1>
			<p>前端由 Vue 驅動，後端邏輯透過 PHP API 處理</p>
		</div>

		<div class="main-content">
			<div class="wrapper demo-panel">
				<p class="title">SEO 結構化資料產生器</p>
				<!-- 範例 -->
				<p class="example-form">
					<label for="example-input">範例：<span>[2026-02-28] PHP正規化教學 - 作者：Nova</span></label>
					<input type="text" name="example-input" placeholder="請依上方範例輸入文字" v-model="exampleInput">
				</p>
				<div class="button-form">
					<p>
						<label for="javascript-button">
							<span>JavaScript 按鈕</span>
							<span class="note">（無需網路連線）</span>
						</label>
						<input type="submit" value="前端模擬" name="javascript-button" @click="simulatePhpLogic">
					</p>
					<p>
						<label for="php-button">
							<span>PHP 按鈕</span>
							<span class="note">（需網路連線至後端）</span>
						</label>
						<input type="submit" value="後端 API 實作" name="php-button" @click="fetchData">
					</p>
				</div>
				<div v-if="demoData?.seoSchema">
					<div class="status-bar" v-if="buttonState">
						<span class="label">處理邏輯：</span>
						<span class="badge" :class="buttonState.includes('PHP') ? 'php-tag' : 'js-tag'">
							{{ buttonState }}
						</span>
					</div>
					<div class="show-example">
						<ul v-for="(seoItem, seoIndex) in demoData.seoSchema" :key="seoIndex">
							<li>
								<span>{{ seoIndex }} : </span>{{ seoItem }}
							</li>
						</ul>
					</div>
				</div>
				<div class="show-example error-style" v-else>請輸入文字，或輸入格式錯誤</div>
			</div>
			<div class="wrapper code-panel">
				<div class="tabs">
					<button @click="currentTab = 'php'" :class="{ active: currentTab === 'php' }">PHP</button>
					<button @click="currentTab = 'json'" :class="{ active: currentTab === 'json' }">JSON</button>
				</div>
				<div :key="currentTab" class="code-container">
					<pre :key="currentTab" :class="['line-numbers', `language-${currentTab}`]"><code :class="`language-${currentTab}`">{{ activeCode }}</code></pre>
				</div>
			</div>
		</div>
	</section>
</template>