$(function() {
  var l = $("#page-top");
  l.hide(), $(window).scroll(function() {
    $(this).scrollTop() > 100 ? l.fadeIn() : l.fadeOut()
  }), l.click(function() {
    return $("body,html").animate({
      scrollTop: 0
    }, 500), !1
  })
}), $(function() {
  $("a[href^=#]").click(function() {
    var l = 30,
      s = 500,
      c = $(this).attr("href"),
      i = $("#" == c || "" == c ? "html" : c),
      o = i.offset().top - l;
    return $("body,html").animate({
      scrollTop: o
    }, s, "swing"), !1
  })
}), $("#slide").click(function() {
  $("#target").slideToggle(), "block" == $("#target").css("display") ? ($("#slide").css("display", "none"), $("#close").css("display", "block")) : ($("#slide").css("display", "block"), $("#close").css("display", "none"))
}), $("#close").click(function() {
  $("#slide").css("display", "block"), $("#close").css("display", "none"), $("#target").slideToggle()
});

$(function(){
  $('#menu-globalnavi2').slicknav();
});
