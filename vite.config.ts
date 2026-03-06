import { fileURLToPath, URL } from 'node:url'
import { dirname, resolve } from 'node:path' // 1. 引入必要的 path 工具
import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import vueDevTools from 'vite-plugin-vue-devtools'

const __filename = fileURLToPath(import.meta.url)
const __dirname = dirname(__filename)

// https://vite.dev/config/
export default defineConfig({
  root: resolve(__dirname, 'frontend'),
  publicDir: resolve(__dirname, 'public'), // 強制指定 public 的位置在外面
  plugins: [
    vue(),
    vueDevTools(),
  ],
  // base: '/novatra/',   //測試網站需要
  base: '/',   //正式網站
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./frontend/src', import.meta.url))
    },
  },
  build: {
    //因為 root 在 frontend，預設 dist 會跑去 frontend/dist
    //建議改回根目錄的 dist，比較乾淨
    outDir: resolve(__dirname, 'public/dist'),
    emptyOutDir: true, // 確保每次打包都會清空舊檔
    rollupOptions: {
      //指定進入點（相對於 root）
      input: resolve(__dirname, 'frontend/index.html'),
    },
  },

  server: {
    proxy: {
      //當我在 Vue 呼叫 /api 時，轉發到 PHP Server
      '/novatra/api': {
        target: 'http://localhost:8080',
        changeOrigin: true,
        rewrite: (path) => path.replace(/^\/novatra\/api/, ''), // 如果 PHP 那邊路徑沒有 /api，這行可以拔掉
      }
    }
  }
})
