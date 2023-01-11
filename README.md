LARAVEL & VUE JS EXTERNAL

INSTALACION DE LARAVEL
======================

Instalacion del proyecto
se necesita php y msql corriendo en cualquier paquete como xampp , wamp , laragon

git clone https://github.com/ROLY2033/crud-laravel-vue.git

para los errores habilitar del php.ini
```sh
extension=openssl
extension=fileinfo
extension=gd
```
instalar composer e cambiar el .env-example a .env
```sh
composer install
```

```sh
composer update --ignore-platform-req=ext-fileinfo~
```

para cuando compila el codigo codigo laravel

```sh 
php artisan migrate --seed
php artisan serve
```

INTALACION DE VUE JS
====================

```sh
npm init vue@latest
INSTALACION PARA EL PROYECTO
√ Project name: ... vue-rest-api
√ Add TypeScript? ... No / Yes
√ Add JSX Support? ... No / Yes
√ Add Vue Router for Single Page Application development? ... No / Yes
√ Add Pinia for state management? ... No / Yes
√ Add Vitest for Unit Testing? ... No / Yes
√ Add an End-to-End Testing Solution? » No
√ Add ESLint for code quality? ... No / Yes
```

instalar todo y corre el servidor de vue js

```sh
cd .\vue-rest-api
npm install

npm run dev
```


ENTRER EN VITE.CONFIG EN EL PROYECTO DE VUE-REST-API

```sh
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
```



vetur puede tener problemas mejor desactivarla


INSTALACION DE TAILWINDCSS
===========================

```sh
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p
```
en tailwind css config

```sh
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./index.html",
      "./src/**/*.{vue,js,ts,jsx,tsx}",
    ],
    theme: {
      extend: {},
    },
    plugins: [],
  }
```

EL POST CSS

```sh
const autoprefixer = require('autoprefixer');
const tailwindcss = require('tailwindcss');

module.exports = {
    plugins: [
        tailwindcss,
        autoprefixer,
    ],
};
```

ir a main css
```sh
@tailwind base;
@tailwind components;
@tailwind utilities;
```

IMPORTANTE QUITAR LOS IMPORTS QUE NO VAS A UTILIZAR
como por ejem
```hs
import TheWelcome from '../components/TheWelcome.vue'

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./index.html",
      "./src/**/*.{vue,js,ts,jsx,tsx}",
    ],
    theme: {
      extend: {},
    },
    plugins: [],
  }
```

CONFIGURACION FINAL
en main.js
```sh
import './assets/main.css'
```

instalacion de axios
```sh
npm install axios
```



