// webpack.mix.js

let mix = require('laravel-mix');

mix.js('assets/js/main.js', 'dist/js')
    .postCss('assets/css/main.css', 'dist/css');