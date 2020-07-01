const { src, dest, series } = require("gulp");
const babel = require("gulp-babel");
var concat = require("gulp-concat");
var minify = require("gulp-minify");
var cleanCss = require("gulp-clean-css");

const jsBundling = function () {
  return src("assets/js/*.js").pipe(concat("root.js")).pipe(minify({
    ext:{
        min:'.js'
    },
    noSource: true
})).pipe(dest("assets/dist"));
};

const cssBundling = function () {
  return src("assets/css/*.css").pipe(concat("root.css")).pipe(cleanCss()).pipe(dest("assets/dist"));
};

exports.default = series(jsBundling, cssBundling);
