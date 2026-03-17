
<script setup lang="ts">
	import { ref } from 'vue';

    // --- 狀態定義 ---
    const curTab = ref<'php' | 'json'>('php');
    const inputText = ref('');
    const showError = ref(false);
    const codeLines = ref<{n: number, c: string}[]>([
        {n: 1, c: '<span class="c-c">// 此處顯示 PHP 後端邏輯</span>'},
        {n: 2, c: '<span class="c-c">// 輸入文字後點擊按鈕查看結果</span>'}
    ]);

    let lastPHP: any[] | null = null;
    let lastJSON: any[] | null = null;

    // --- 邏輯函數 ---
    function parse(text: string) {
        const m = text.match(/\[(\d{4}-\d{2}-\d{2})\]\s*(.+?)\s*[–\-—]\s*作者：(.+)/);
        return m ? { date: m[1], title: m[2].trim(), author: m[3].trim() } : null;
    }

    function makePHP(d: any) {
        return [
            {n:1, c:`<span class="c-c">// SEO 結構化資料 — PHP 後端邏輯</span>`},
            {n:2, c:``},
            {n:3, c:`<span class="c-v">$input</span> = <span class="c-f">json_decode</span>(<span class="c-f">file_get_contents</span>(<span class="c-s">'php://input'</span>), <span class="c-k">true</span>);`},
            {n:4, c:``},
            {n:5, c:`<span class="c-v">$schema</span> = [`},
            {n:6, c:`  <span class="c-s">'@context'</span>      => <span class="c-s">'https://schema.org'</span>,`},
            {n:7, c:`  <span class="c-s">'@type'</span>         => <span class="c-s">'Article'</span>,`},
            {n:8, c:`  <span class="c-s">'headline'</span>      => <span class="c-s">'${d.title}'</span>,`},
            {n:9, c:`  <span class="c-s">'datePublished'</span> => <span class="c-s">'${d.date}'</span>,`},
            {n:10,c:`  <span class="c-s">'author'</span>        => [`},
            {n:11,c:`    <span class="c-s">'@type'</span> => <span class="c-s">'Person'</span>,`},
            {n:12,c:`    <span class="c-s">'name'</span>  => <span class="c-s">'${d.author}'</span>,`},
            {n:13,c:`  ],`},
            {n:14,c:`];`},
            {n:15,c:``},
            {n:16,c:`<span class="c-f">header</span>(<span class="c-s">'Content-Type: application/json'</span>);`},
            {n:17,c:`<span class="c-k">echo</span> <span class="c-f">json_encode</span>(<span class="c-v">$schema</span>, <span class="c-n">JSON_PRETTY_PRINT</span>);`},
        ];
    }

    function makeJSON(d: any) {
        return [
            {n:1, c:`{`},
            {n:2, c:`  <span class="c-key">"@context"</span>:      <span class="c-s">"https://schema.org"</span>,`},
            {n:3, c:`  <span class="c-key">"@type"</span>:         <span class="c-s">"Article"</span>,`},
            {n:4, c:`  <span class="c-key">"headline"</span>:      <span class="c-s">"${d.title}"</span>,`},
            {n:5, c:`  <span class="c-key">"datePublished"</span>: <span class="c-s">"${d.date}"</span>,`},
            {n:6, c:`  <span class="c-key">"author"</span>: {`},
            {n:7, c:`    <span class="c-key">"@type"</span>: <span class="c-s">"Person"</span>,`},
            {n:8, c:`    <span class="c-key">"name"</span>:  <span class="c-s">"${d.author}"</span>`},
            {n:9, c:`  }`},
            {n:10,c:`}`},
        ];
    }

    function runProcess() {
        const text = inputText.value.trim();
        const d = parse(text);
        if (!d) {
            showError.value = true;
            return;
        }
        showError.value = false;
        lastPHP = makePHP(d);
        lastJSON = makeJSON(d);
        refreshCodeDisplay();
    }

    function refreshCodeDisplay() {
        if (curTab.value === 'php' && lastPHP) codeLines.value = lastPHP;
        if (curTab.value === 'json' && lastJSON) codeLines.value = lastJSON;
    }

    function switchTab(t: 'php' | 'json') {
        curTab.value = t;
        refreshCodeDisplay();
    }
</script>

<template>
    <div class="demo-wrap">
        <div class="demo-inner" style="opacity:0;animation:fadeIn .8s .4s forwards">
            <div class="panel-left">
                <div class="panel-header">
                    <span class="panel-header-title">SEO 結構化資料產生器</span>
                    <span class="panel-badge">Schema.org</span>
                </div>
                <div class="panel-body">
                    <label class="input-label">輸入文章資訊</label>
                    <div class="input-example">
                        格式：<code>[2026-02-28] 文章標題 – 作者：名字</code>
                    </div>
                    <textarea 
                        class="text-input" 
                        v-model="inputText" 
                        rows="3" 
                        placeholder="請依上方格式輸入文字"
                    ></textarea>
                    <div class="error-msg" :class="{ show: showError }">⚠ 請輸入文字，或格式有誤</div>
                    
                    <div class="btn-row">
                        <div>
                            <button class="btn btn-ghost-navy" @click="runProcess">前端模擬</button>
                            <div class="btn-sub">無需網路連線</div>
                        </div>
                        <div>
                            <button class="btn btn-warm" @click="runProcess">後端 API 實作</button>
                            <div class="btn-sub">需連線至後端</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel-right">
                <div class="code-tabs">
                    <button 
                        class="code-tab" 
                        :class="{ active: curTab === 'php' }" 
                        @click="switchTab('php')"
                    >PHP</button>
                    <button 
                        class="code-tab" 
                        :class="{ active: curTab === 'json' }" 
                        @click="switchTab('json')"
                    >JSON</button>
                </div>
                <div class="code-body">
                    <div v-for="line in codeLines" :key="line.n" class="code-line">
                        <span class="ln">{{ line.n }}</span>
                        <span class="lc" v-html="line.c"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
