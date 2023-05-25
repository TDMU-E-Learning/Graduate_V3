import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/app-base.css',
                'resources/css/graduate__result.css',
                'resources/css/responesive-tablet.css',
                'resources/css/responsive-mobile.css',
                'resources/css/seat.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
