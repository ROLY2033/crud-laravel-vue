INSTALACION DE LARAVEL

INTALACION DE VUE JS
npm init vue@latest
√ Project name: ... vue-rest-api
√ Add TypeScript? ... No / Yes
√ Add JSX Support? ... No / Yes
√ Add Vue Router for Single Page Application development? ... No / Yes
√ Add Pinia for state management? ... No / Yes
√ Add Vitest for Unit Testing? ... No / Yes
√ Add an End-to-End Testing Solution? » No
√ Add ESLint for code quality? ... No / Yes

cd .\vue-rest-api
 npm install
npm run dev

ENTRER EN VITE.CONFIG EN EL PROYECTO DE VUE-REST-API
import { fileURLToPath, URL } from 'node:url'

import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [vue()],
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./src', import.meta.url))
    }
  },
  server: {
        port: 3000
  },

})


vetur puede tener problemas mejor desactivarla
