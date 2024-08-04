import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',

                //fontend
                'resources/css/frontend.css',
                'resources/js/frontend.js',
            ],
            refresh: true,
        }),
    ],
});
