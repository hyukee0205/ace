$(document).ready(function () {
    $(".gnb_box2 li a, .category_2box ul a").hover(function () {
        $(this).addClass("hover");
    }, function () {
        $(this).removeClass("hover");
    });
});

$(document).ready(function () {
    $(".category_2box > li").hover(function () {
        $(this).addClass("hover2");
    }, function () {
        $(this).removeClass("hover2");
    });
});


$(document).ready(function () {
    $(".category_box").hover(function () {
        $(".category_icon").addClass("hover3");
        $(".category_text > a").addClass("hover");
    }, function () {
        $(".category_icon").removeClass("hover3");
        $(".category_text > a").removeClass("hover");
    });
});




$(document).ready(function () {
  $(".category_box").mouseenter(function () {
      $(".category_box .category_2box").stop().slideDown("fast");
  });

  $(".category_2box > li:eq(0)").mouseenter(function () {
      // $(this).children().stop().slideDown("fast");
      $(this).children().stop().show();
  });
  $(".category_2box > li:eq(0), .category_sub_1").mouseleave(function () {
      // $(".category_sub_1").stop().slideUp("fast");
      $(".category_sub_1").stop().hide();
  });


  $(".category_2box > li:eq(1)").mouseenter(function () {
      // $(this).children().stop().slideDown("fast");
      $(this).children().stop().show();
  });
  $(".category_2box > li:eq(1), .category_sub_2").mouseleave(function () {
      // $(".category_sub_2").stop().slideUp("fast");
      $(".category_sub_2").stop().hide();
  });
  

  $(".category_2box > li:eq(2)").mouseenter(function () {
      $(this).children().stop().show();
  });
  $(".category_2box > li:eq(2), .category_sub_3").mouseleave(function () {
      $(".category_sub_3").stop().hide();
  });
  

  $(".category_2box > li:eq(3)").mouseenter(function () {
      $(this).children().stop().show();
  });
  $(".category_2box > li:eq(3), .category_sub_4").mouseleave(function () {
      $(".category_sub_4").stop().hide();
  });


  $(".category_2box > li:eq(4)").mouseenter(function () {
      $(this).children().stop().show();
  });
  $(".category_2box > li:eq(4), .category_sub_5").mouseleave(function () {
      $(".category_sub_5").stop().hide();
  });


  $(".category_2box > li:eq(5)").mouseenter(function () {
      $(this).children().stop().show();
  });
  $(".category_2box > li:eq(5), .category_sub_6").mouseleave(function () {
      $(".category_sub_6").stop().hide();
  });


  $(".category_2box > li:eq(6)").mouseenter(function () {
      $(this).children().stop().show();
  });
  $(".category_2box > li:eq(6), .category_sub_7").mouseleave(function () {
      $(".category_sub_7").stop().hide();
  });


  $(".category_2box > li:eq(7)").mouseenter(function () {
      $(this).children().stop().show();
  });
  $(".category_2box > li:eq(7), .category_sub_8").mouseleave(function () {
      $(".category_sub_8").stop().hide();
  });


  $(".category_2box > li:eq(8)").mouseenter(function () {
      $(this).children().stop().show();
  });
  $(".category_2box > li:eq(8), .category_sub_9").mouseleave(function () {
      $(".category_sub_9").stop().hide();
  });


  $(".category_2box > li:eq(9)").mouseenter(function () {
      $(this).children().stop().show();
  });
  $(".category_2box > li:eq(9), .category_sub_10").mouseleave(function () {
      $(".category_sub_10").stop().hide();
  });


  $(".category_2box > li:eq(10)").mouseenter(function () {
      $(this).children().stop().show();
  });
  $(".category_2box > li:eq(10), .category_sub_11").mouseleave(function () {
      $(".category_sub_11").stop().hide();
  });

  

  $(".category_2box > li:eq(11)").mouseenter(function () {
      $(this).children().stop().show();
  });
  $(".category_2box > li:eq(11), .category_sub_12").mouseleave(function () {
      $(".category_sub_12").stop().hide();
  });



  $(".category_box").mouseleave(function () {
      $(".category_box .category_2box").stop().slideUp("fast");
  });
});