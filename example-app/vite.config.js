import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',  // ⚠️ Проверьте пути!
                'resources/js/app.js',    // ⚠️ Убедитесь, что файлы существуют
                'resources/css/styles.css' // Ваш файл стилей
            ],
            refresh: true,
        }),
    ],
});