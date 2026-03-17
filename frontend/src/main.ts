import './assets/main.less'

import { createApp } from 'vue'
import apiClient from '@/ts/client'
import reveal from '@/ts/reveal';
import App from './App.vue'
import router from './router'

const app = createApp(App)

// 使用 provide 將 apiClient 傳遞給整個應用程式
app.provide('api', apiClient)
app.directive('reveal', reveal);

app.use(router)

app.mount('#app')