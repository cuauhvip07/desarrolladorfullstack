const {src,dest,watch,series} = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('autoprefixer');
const imagemin = require('gulp-imagemin');
const webp = require('gulp-webp')
const avif = require('gulp-avif')
const sourcemaps = require('gulp-sourcemaps');
const cssnano = require('cssnano');
const potscss = require('gulp-postcss')
const plumber = require('gulp-plumber');

// JS
const terser = require('gulp-terser-js')

function css(){
    return src('src/scss/app.scss')
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(sass())
        .pipe(potscss([autoprefixer()]))
        .pipe(sourcemaps.write(''))
        .pipe(dest('build/css'));
}

function dev(){
    watch('src/scss/**/*.scss',css);
    watch('src/js/**/*.js');
}

function imagenes(){
    return src('src/img/**/*')
        .pipe(imagemin({optimizationLevel: 3}))
        .pipe(dest('build/img'))
}

function versionWebp(){
    const opciones = {
        quality: 50
    }
    return src('src/img/**/*.{png,jpg}')
        .pipe(webp(opciones))
        .pipe(dest('build/img'));
}

function versionAvif(){
    const opciones = {
        quality: 50
    }
    return src('src/img/**/*.{jpg,png}')
        .pipe(avif(opciones))
        .pipe(dest('build/img'));
}

function javaScript(){
    return src('src/js/**/*.js')
        .pipe(sourcemaps.init())
        .pipe(terser())
        .pipe(sourcemaps.write())
        .pipe(dest('build/js'))
}

exports.css = css;
exports.dev = dev;
exports.imagenes = imagenes;
exports.versionWebp = versionWebp
exports.versionAvif = versionAvif
exports.javaScript = javaScript
exports.default = series(dev)
