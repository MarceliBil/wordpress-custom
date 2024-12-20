import { defineConfig } from 'vite';
import path from 'path';

export default defineConfig({
    root: './',
    base: '/',
    build: {
        outDir: 'dist',
        assetsDir: '',
        rollupOptions: {
            input: {
                main: path.resolve(__dirname, 'scss/main.scss'),
                script: path.resolve(__dirname, 'js/main.js'),
            },
            output: {
                entryFileNames: '[name].js',
                assetFileNames: '[name].[ext]',
            },
        },
    },
});
