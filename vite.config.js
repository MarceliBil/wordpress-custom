import { defineConfig } from 'vite';
import path from 'path';

export default defineConfig({
    css: {
        devSourcemap: true,
    },
    build: {
        outDir: 'dist',
        rollupOptions: {
            input: {
                main: path.resolve(__dirname, 'src/scss/main.scss'),
                script: path.resolve(__dirname, 'src/js/main.js'),
            },
            output: {
                entryFileNames: '[name].js',
                assetFileNames: '[name].[ext]',
            },
        },
    },
});
