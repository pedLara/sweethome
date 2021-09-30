/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/custom.js ***!
  \********************************/
var sh = $('#appear');

if ($('#isChecked').is(":checked")) {
  sh.find('input').prop({
    required: false
  });
}

$('#isChecked').on('change', function () {
  sh.toggle();

  if (sh.is(":visible") == true) {
    sh.find('input').prop({
      required: true
    });
  } else {
    sh.find('input').prop({
      required: false
    });
  }
});
/******/ })()
;