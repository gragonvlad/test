import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
// import VueJsx from '@vitejs/plugin-vue-jsx'

export default defineConfig({
    define: {
        // enable hydration mismatch details in production build
        __VUE_PROD_HYDRATION_MISMATCH_DETAILS__: 'true'
    },    
    plugins: [
        laravel([
             'resources/css/app.css',
             'resources/js/app.js',
         ]),
        vue({
            template: {
            compilerOptions: {
              isCustomElement: (tag) => {
                return tag.startsWith('ffa') 
              }
            }
          }}),
        // VueJsx(),
    ],
    // build: {
    //     manifest: 'manifest.json',
    //   },
    resolve: {
        alias: {
            '@': '/resources/js',
            // '@global': '/resources/js/components/_global',
            '@components': '/resources/js/components'
            // '@store': '/resources/js/store',
            // "devextreme/ui": 'devextreme/esm/ui'
        }
    },
    // css: {
    //     preprocessorOptions: {
    //         scss: {
    //             additionalData: '@import "resources/sass/variables.scss";'
    //         }
    //     }
    // },
});
