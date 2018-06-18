let mix = require('laravel-mix');

mix.js('src/js/app.js', 'javascript')
   .setPublicPath("./");