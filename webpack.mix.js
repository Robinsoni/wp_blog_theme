let mix = require('laravel-mix');

mix.js('src/app.js', 'dist').setPublicPath('dist');
mix.sass('src/app.scss', 'dist');

mix.autoload({
    jquery: ['$', 'window.jQuery']
});