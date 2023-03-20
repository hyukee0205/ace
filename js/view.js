$(document).ready(function () {
    $(".notice_box1 li a").hover(function () {
        $(this).addClass("notice_side_hover");
    }, function () {
        $(this).removeClass("notice_side_hover");
    });
  });


  function remove_notice(){
    var ck = confirm("정말 삭제하시겠습니까?");
    if(ck){
      location.href="delete.php?n_idx=<?php echo $n_idx; ?>";
    };
  };