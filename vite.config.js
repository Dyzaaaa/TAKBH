import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
        'resources/js/app.js'
      ],
      refresh: true,
    }),
  ],
  css: {
    preprocessorOptions: {
      scss: {
        additionalData: `@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');`
      }
    }
  }
});
