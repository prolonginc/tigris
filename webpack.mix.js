const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .vue({ version: 2 })
    .sass("resources/sass/app.scss", "public/css")
    .sourceMaps();

mix.scripts(
    [
        "node_modules/jquery/dist/jquery.min.js",
        "node_modules/jquery-migrate/dist/jquery-migrate.min.js",
        "public/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js",
    ],
    "public/js/global.bundle.min.js",
    "./"
).sourceMaps();
