import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        react(),
    ],
    resolve:{
        alias:{
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '~fontawesome': path.resolve(__dirname, 'node_modules/@fortawesome')
        }
    },
    build: {
        manifest: true,
        rollupOptions: {
            input: {    
                'resources/js/app.js': 'resources/js/app.js',
            },
        },
    },
});
