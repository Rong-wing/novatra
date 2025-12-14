<!-- 以下為 Vue3 的寫法，script setup（Composition API） -->
<script setup>
	import { ref , computed } from 'vue'
	const heading = ref("我的作品集") //優勢

	//1.初始數據設定
	const articles = ref([
		{ id: 1, title: 'Vue.js 基礎概念介紹', tags: ['Vue' , 'PHP'] },
		{ id: 2, title: 'CSS Flexbox 實戰指南', tags: ['CSS' , 'PHP'] },
		{ id: 3, title: 'Composition API 使用技巧', tags: ['JavaScript' , 'SEO'] },
		{ id: 4, title: '網頁效能優化策略', tags: ['CSS' , 'SEO'] },
		{ id: 5, title: '現代 JavaScript 特性', tags: ['PHP'] },
		{ id: 6, title: '使用 TailwindCSS 快速開發', tags: ['JavaScript' , 'PHP'] },
	]);
	//2.響應式狀態：追蹤當前選中的標籤 (ref)
	//null 表示未選中任何標籤 (即顯示全部)
	const activeTag = ref(null); 

	//3.邏輯方法：設置當前活動標籤
	const setActiveTag = (tag) => {
		activeTag.value = tag;
	};

	//4.計算屬性：獲取不重複的標籤列表 (用於渲染按鈕)
	const filterTags = computed(() => {
		//Array.prototype.flatMap() 是 ES2019 的方法，用於扁平化標籤陣列
		const allTags = articles.value.flatMap(article => article.tags);
		//使用Set，並重新塞回新陣列，方便直接篩選出不重複的值，並轉換回陣列後排序
		return Array.from(new Set(allTags)).sort();
		//也可以寫成這樣 return [...new Set(allTags)].sort();
	});

	//5.計算屬性：核心篩選邏輯 (Computed)
	//只要 activeTag.value 改變，這裡就會自動重新計算
	const filteredArticles = computed(() => {
		const currentTag = activeTag.value;

		if (currentTag === null) {
			//當 activeTag 為 null 時，返回所有文章
			return articles.value;
		} else {
			//否則，篩選出標籤匹配的文章
			//篩選邏輯：檢查文章的 tags 陣列是否包含 (includes) 當前選中的標籤
			return articles.value.filter(article => article.tags.includes(currentTag));
		}
	});
</script>

<template>
  <div class="container about">
    <h2 class="heading">
		{{ heading }}
	</h2>
    <!-- 篩選器 -->
    <div class="filter">
		<div class="filter-tags" >
			<span 
				class="filter-tag"
				:class="{ 'active': activeTag === null }"
				@click="setActiveTag(null)">
				全部({{ articles.length }})
			</span>
			<span 
				class="filter-tag"
				v-for="filterTag in filterTags"
				v-bind:data-id="filterTag"
				:class="{ 'active': activeTag === filterTag }"
				@click="setActiveTag(filterTag)">
				{{ filterTag }}
			</span>
		</div>
    </div>
    <h3>篩選結果 ({{ filteredArticles.length }} 篇)</h3>
    <!-- 卡片 -->
    <section class="article-list">
		<article v-for="article in filteredArticles" :key="article.id">
			<figure class="thumbnail">
				<img src="https://images.pexels.com/photos/1324542/pexels-photo-1324542.png"></img>
			</figure>
			<div class="title">{{ article.title }}</div>
			<div class="description">簡述</div>
			<ul class="tags">
				<li v-for="tag in article.tags">{{ tag }}</li>
			</ul>
			<a class="mask" href="">
				<span>查看詳情</span>
			</a>
		</article>
    </section>
  </div>
</template>







