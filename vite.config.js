import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
<<<<<<< HEAD
=======
import vue from '@vitejs/plugin-vue';
>>>>>>> f152e93017fff2322d7580ec853df19cb26b0d27

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
=======
            input: 'resources/js/app.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
>>>>>>> f152e93017fff2322d7580ec853df19cb26b0d27
    ],
});
