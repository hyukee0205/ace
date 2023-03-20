<?php 

//데이터 가져오기
include "../inc/session.php";

//DB 연결
include "../inc/dbcon.php";

//쿼리 작성
$sql = "delete from members where idx=$s_idx;";

// echo $sql;
// exit;


//쿼리 전송
mysqli_query($dbcon, $sql);

//세션 삭제
unset($_SESSION["s_idx"]);
unset($_SESSION["s_name"]);
unset($_SESSION["s_id"]);

//페이지 이동
echo "
    <script>
        alert('정상 처리되었습니다.');
        location.href = '../index.php';
    </script>
    ";
?>