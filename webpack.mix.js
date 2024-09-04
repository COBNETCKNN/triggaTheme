let mix = require('laravel-mix');
// const tailwindcss = require('tailwindcss');

mix
    .js("src/app.js", "assets/js/main.js")
    .babel("src/app.js", "assets/js/main.js")
    .sass('src/app.scss', 'assets/css/main.css');

mix
    .browserSync({
        proxy: "http://triggatheme.local/",
        files: ["./**/*"],
});


mix.options({
    processCssUrls: false,
    //postCss: [tailwindcss('./tailwind.config.js')],
    });