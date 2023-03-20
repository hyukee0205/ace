$(document).ready(function () {
    $(".notice_box1 li a").hover(function () {
        $(this).addClass("notice_side_hover");
    }, function () {
        $(this).removeClass("notice_side_hover");
    });
  });