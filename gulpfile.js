const { src, dest, series } = require("gulp");
const babel = require("gulp-babel");
var concat = require("gulp-concat");
const jsBundling = function () {
  return src("assets/js/*.js").pipe(concat("root.js")).pipe(dest("assets/dist"));
};

const cssBundling = function () {
  return src("assets/css/*.css").pipe(concat("root.css")).pipe(dest("assets/dist"));
};

exports.default = series(jsBundling, cssBundling);
