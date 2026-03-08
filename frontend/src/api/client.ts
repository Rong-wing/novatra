import axios from 'axios';

const apiClient = axios.create({
    // 這會自動根據 .env 變成 /api (開發) 或 /novatra/api (正式)
    baseURL: import.meta.env.VITE_API_BASE_URL,
    timeout: 5000,
});

export default apiClient;