$(document).ready(function () {
    $(".notice_box1 li a").hover(function () {
        $(this).addClass("notice_side_hover");
    }, function () {
        $(this).removeClass("notice_side_hover");
    });
  });

$(document).ready(function(){
    var n_content = document.getElementById("n_content");

    $(".notice_form_txt3").click(function(){
    $(".notice_ph").hide();
    n_content.focus();
   }); 
});

$(document).ready(function(){
    $(".n_content").focus(function(){
    $(".notice_ph").hide();
    // n_content.focus();
   }); 
});


function form_check() {
    var n_title = document.getElementById("n_title");
    var n_content = document.getElementById("n_content");

    if (!n_title.value) {
        var txt = document.getElementById("err_title");
        txt.innerHTML = "제목을 입력해 주세요.";
    
        n_title.focus();
        return false;
      };

      if (!n_content.value) {
        var txt = document.getElementById("err_content");
        txt.innerHTML = "문의 내용을 입력해 주세요.";
    
        n_content.focus();
        return false;
      };
};