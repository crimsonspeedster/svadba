const mix = require('laravel-mix');

mix
    .alias({
        '@': 'src',
    })
    .options({
        processCssUrls: false
    })
    .sass('src/front/scss/style.scss', 'dist/front/css')
    .copy('src/front/carousel', 'dist/front/carousel')
    .copy('src/front/fonts', 'dist/front/fonts')
    .copy('src/front/images', 'dist/front/images')
    .copy('src/front/js', 'dist/front/js')
    .browserSync({
        proxy: "localhost/skoro_svadba/",
        files: ['dist/css', 'dist/js', './**/*.php'],
    }).sourceMaps();
