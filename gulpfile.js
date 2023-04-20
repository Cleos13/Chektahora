var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var $ = require('gulp-load-plugins')();
var autoprefixer = require('autoprefixer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require("gulp-rename");

var sassPaths = [
    'node_modules/foundation-sites/scss',
    'node_modules/motion-ui/src'
];

function sass() {
    return gulp.src('scss/app.scss')
        .pipe($.sass({
            includePaths: sassPaths,
            outputStyle: 'compressed' // if css compressed **file size**
        })
            .on('error', $.sass.logError))
        .pipe($.postcss([
            autoprefixer({Browserslist: ['last 2 versions', 'ie >= 9']})
        ]))
        .pipe(gulp.dest('css'))
        .pipe(browserSync.stream());
};

gulp.task('paste', function () {
    return gulp.src([
        'node_modules/jquery/dist/jquery.js',
        'node_modules/what-input/dist/what-input.js',
        'node_modules/foundation-sites/dist/js/plugins/foundation.core.min.js',
        'node_modules/foundation-sites/dist/js/foundation.js',
        'node_modules/foundation-sites/dist/js/plugins/foundation.reveal.js',
        'node_modules/foundation-sites/dist/js/plugins/foundation.util.keyboard.js',
        'node_modules/foundation-sites/dist/js/plugins/foundation.util.triggers.js',
        'node_modules/foundation-sites/dist/js/plugins/foundation.util.mediaQuery.js',
        'node_modules/foundation-sites/dist/js/plugins/foundation.util.motion.js'
    ])
        .pipe(gulp.dest('js'));
});

gulp.task('scripts', function () {
    return gulp.src([
        'js/jquery.min.js',
        'js/foundation-datepicker.min.js',
        'js/foundation.core.min.js',
        'js/foundation.js',
        'js/foundation.reveal.js',
        'js/foundation.util.keyboard.js',
        'js/foundation.util.mediaQuery.js',
        'js/foundation.util.motion.js',
        'js/foundation.util.triggers.js',
        'js/what-input.js',
        'js/app.js',
        'js/dashboard.js',
        'js/menu.js',
        'js/newsletter.js',
        'js/stickyFooter.js',
        'js/TweenMax.min.js',
        'js/ModifiersPlugin.min.js',
        'js/slideshow.js',
        'js/dist/menu.js',
    ])
        .pipe(concat('main.js'))
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('js'));
});

function detalleCompra(){
    return gulp.src([
        'js/dist/mask.js',
        'js/cart.js',
        'js/dist/detalle-compra.js'
    ])
        .pipe(concat('detalle-compra.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js/main/'))
}

function scriptsCheckouts(){
    return gulp.src([
        'js/dist/checkouts.js'
    ])
        .pipe(concat('checkouts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js/main/'))
}

/* -------------------------------- BACKOFFICE -------------------------------- */
function backofficeData() {
    return gulp.src([
        'js/dist/backoffice/data.js',
        'js/dist/backoffice/menu.js',
    ])
        .pipe(concat('data.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js/main/backoffice/'))
}

function backofficeMessages() {
    return gulp.src([
        'js/dist/backoffice/messages.js',
        'js/dist/backoffice/menu.js',
    ])
        .pipe(concat('messages.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js/main/backoffice/'))
}

function backofficeCoupon() {
    return gulp.src([
        'js/dist/backoffice/coupon.js',
        'js/dist/backoffice/menu.js',
    ])
        .pipe(concat('coupon.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js/main/backoffice/'))
}

function backofficeLogin() {
    return gulp.src([
        'js/dist/backoffice/login.js'
    ])
        .pipe(concat('login.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js/main/backoffice/'))
}

function backofficeBannersw() {
    return gulp.src([
        'js/dist/backoffice/banner-sw.js',
        'js/dist/backoffice/menu.js',
    ])
        .pipe(concat('banner.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js/main/backoffice/'))
}

function backofficeProducts() {
    return gulp.src([
        'js/dist/backoffice/menu.js',
        'js/dist/backoffice/products.js',
    ])
        .pipe(concat('products.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js/main/backoffice/'))
}

function backofficePromotions() {
    return gulp.src([
        'js/dist/backoffice/menu.js',
        'js/dist/backoffice/promotions.js',
    ])
        .pipe(concat('promotions.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js/main/backoffice/'))
}

function backofficeUs() {
    return gulp.src([
        'js/dist/backoffice/menu.js',
        'js/dist/backoffice/us.js',
    ])
        .pipe(concat('us.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js/main/backoffice/'))
}

gulp.task('detalle-compra-js', function () {
    gulp.watch([
        'js/dist/mask.js',
        'js/cart.js',
        'js/dist/detalle-compra.js'
    ]).on('change', gulp.series(detalleCompra));
    gulp.watch([
        'js/dist/checkouts.js'
    ]).on('change', gulp.series(scriptsCheckouts));
})

gulp.task('backoffice-js', function () {
    gulp.watch([
        'js/dist/backoffice/login.js',
    ]).on('change', gulp.series(backofficeLogin));
    gulp.watch([
        'js/dist/backoffice/coupon.js',
        'js/dist/backoffice/menu.js',
    ]).on('change', gulp.series(backofficeCoupon));
    gulp.watch([
        'js/dist/backoffice/messages.js',
        'js/dist/backoffice/menu.js',
    ]).on('change', gulp.series(backofficeMessages));
    gulp.watch([
        'js/dist/backoffice/data.js',
        'js/dist/backoffice/menu.js',
    ]).on('change', gulp.series(backofficeData));
    gulp.watch([
        'js/dist/backoffice/menu.js',
        'js/dist/backoffice/banner-sw.js',
    ]).on('change', gulp.series(backofficeBannersw));
    gulp.watch([
        'js/dist/backoffice/products.js',
        'js/dist/backoffice/menu.js',
    ]).on('change', gulp.series(backofficeProducts));
    gulp.watch([
        'js/dist/backoffice/us.js',
        'js/dist/backoffice/menu.js',
    ]).on('change', gulp.series(backofficeUs));
    gulp.watch([
        'js/dist/backoffice/promotions.js',
        'js/dist/backoffice/menu.js',
    ]).on('change', gulp.series(backofficePromotions));
});

gulp.task('js', function () {
    gulp.watch("scss/*.scss", sass);
    gulp.watch("js/dist/*.js").on('change', gulp.series('scripts'));
    gulp.watch("js/*.js").on('change', gulp.series('scripts'));
});
    function serve() {
        browserSync.init({
            server: "./"
        });

        gulp.watch("scss/*.scss", sass);
        gulp.watch("*").on('change', browserSync.reload);
    }

gulp.task('sass', sass);
gulp.task('serve', gulp.series('sass', serve));
gulp.task('default', gulp.series('sass', 'paste', 'scripts', serve));