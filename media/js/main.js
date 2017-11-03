$(function() {
  var mainID = 'topSection'

  function heightSetting() {
    windowH = $(window).height();
    $('#' + mainID).height(windowH + 'px');
  }

  heightSetting();

  $(window).resize(function() {
    heightSetting();
  });
});