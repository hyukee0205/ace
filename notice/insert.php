<?php
//작성자가 입력한 session 가져오기
include "../inc/session.php";

//이전 페이지에서 값 가져오기
$n_title = $_POST["n_title"];
$n_content = $_POST["n_content"];

//작성일자
$w_date = date("Y-m-d");

//DB 연결
include "../inc/dbcon.php";

//쿼리 작성
$sql = "insert into notice(";
$sql .= "n_title, n_content, writer, w_date";
$sql .= ") values(";
$sql .= "'$n_title', '$n_content', '$s_name', '$w_date'";
$sql .= ");";

// echo $sql;
// exit;



//데이터베이스에 쿼리 전송
mysqli_query($dbcon, $sql);

//DB 접속 종료
mysqli_close($dbcon);

//리디렉션
echo "
  <script>
    location.href = 'notice.php';
  </script>
";
?>