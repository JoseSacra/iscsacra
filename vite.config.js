import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        outDir: 'public/build',
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js', 
             /*    'resources/css/slick.css',
                'resources/css/custom.css',
                'resources/css/tailwind.css',
                'resources/js/jquary.min.js',
                'resources/js/slick.js',
                'resources/js/isotope.pkgd.min.js',
                'resources/js/jquery.modal.min.js',
                'resources/js/main.js', */
            ],
            refresh: true,
        }),
    ],
});
