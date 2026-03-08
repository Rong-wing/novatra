import { fileURLToPath, URL } from 'node:url'
import { defineConfig, loadEnv } from 'vite' // 引入 loadEnv 處理環境變數
import vue from '@vitejs/plugin-vue'

export default defineConfig(({ mode }) => {
    // 根據 mode (development/production) 讀取 .env 檔案
    const env = loadEnv(mode, process.cwd())
    return {
        root: '.',
        base: env.VITE_BASE_URL || '/', //使用環境變數控制，避免手動改 base
        publicDir: 'public',
        plugins: [vue()],
        resolve: {
            alias: {
                '@': fileURLToPath(new URL('./src', import.meta.url))
            },
        },
        build: {
            outDir: 'dist', 
            emptyOutDir: true,
        },
        server: {
            proxy: {
                '/api': {
                    target: 'http://localhost:8080', // 指向你的 Phalcon Server
                    changeOrigin: true
                }
            }
        }
    }
})