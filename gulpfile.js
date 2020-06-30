const { src, dest } = require("gulp");
const babel = require("gulp-babel");
var concat = require("gulp-concat");
exports.default = function () {
  return src("assets/js/*.js").pipe(concat("root.js")).pipe(dest("dist"));
};
