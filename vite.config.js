import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/bootstrap.css',
                'resources/css/tailwind.css',
                'resources/css/template.css',
                'resources/css/perfect-scrollbar.css',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "@": "/resources/css/",
            "~bootstrap":path.resolve(__dirname,"node_modules/bootstrap/dist"),
            "~bootstrapjs":path.resolve(__dirname,"node_modules/bootstrap/dist/js"),
        },
    },
});
