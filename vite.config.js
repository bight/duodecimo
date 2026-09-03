import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import sugarcube from "@sugarcube-sh/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            fonts: [
                bunny('Atkinson Hyperlegible Next', {
                    weights: [400, 500, 600],
                }),
                bunny('Source Serif 4', {
                    weights: [400, 500, 600],
                }),
            ],
        }),
        sugarcube(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
