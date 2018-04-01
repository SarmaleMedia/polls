let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

const fs = require('fs');

var scssFiles = fs.readdirSync('resources/assets/sass/');

arrayFiles = new Array();

for (var i in scssFiles) {
    mix.sass('resources/assets/sass/' + scssFiles[i], 'public/css');
}

mix.js('resources/assets/js/app.js', 'public/js');

