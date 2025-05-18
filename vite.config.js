import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        https: true, // Enable HTTPS
    },
    build: {
        //assetsInlineLimit: 8192, // Optional: adjust the inline limit for assets
        outDir: 'public/build',
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js', 
                'resources/css/slick.css',
                'resources/css/slick-theme.css',
                'resources/css/custom.css',
                'resources/css/tailwind.css',
            /*     'resources/js/slick.js',
                'resources/js/isotope.pkgd.min.js',  */
                'resources/js/main.js',
            ],
            refresh: true,
        }),
    ],
});
