var gulp = require("gulp");
var sass = require("gulp-sass");
var autoprefixer = require("gulp-autoprefixer");
var uglify = require("gulp-uglify");
var browser = require("browser-sync");
var plumber = require("gulp-plumber");

// 定数
var js_globs = ["js/**/*.js", "!js/min/**/*.js"];
var sass_globs = ["sass/**/*.scss"];
var php_globs = ["**/*.php"];
var testsite = "irabako.loc";

// CSS生成
gulp.task("sass", function() {
    gulp.src(sass_globs)
        .pipe(plumber())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(gulp.dest("./"))
        .pipe(browser.reload({stream:true}));
});

// JS生成
gulp.task("js", function() {
  gulp.src(js_globs)
      .pipe(plumber())
      .pipe(uglify())
      .pipe(gulp.dest("./js/min"))
      .pipe(browser.reload({stream:true}));
});

// browser-sync起動
gulp.task("server", function() {
  browser({
      proxy: testsite
  });
});

// ブラウザ更新
gulp.task("refresh", function() {
  browser.reload();
});

// 監視
gulp.task("default", ['server'], function() {
  gulp.watch(js_globs,["js"]);
  gulp.watch(sass_globs,["sass"]);
  gulp.watch(php_globs, ["refresh"]);
});
