<?php 
//이전 페이지에서 데이터 값 가져오기
$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
$u_name = $_POST["u_name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$ps_code = $_POST["ps_code"];
$addr_b = $_POST["addr_b"];
$addr_d = $_POST["addr_d"];
$addr = $ps_code." ".$addr_b." ".$addr_d;
$gender = $_POST["gender"];
$birth = $_POST["birth"];
$reg_date = date("Y-m-d");

// echo "<p> 이름 : ".$u_name."</p>";
// echo "<p> 아이디 : ".$u_id."</p>";
// echo "<p> 비밀번호 : ".$pwd."</p>";
// echo "<p> 전화번호 : ".$mobile."</p>";
// echo "<p> 이메일 : ".$email."</p>";
// echo "<p> 생년월일 : ".$birth."</p>";
// echo "<p> 우편번호 : ".$ps_code."</p>";
// echo "<p> 기본주소 : ".$addr_b."</p>";
// echo "<p> 상세주소 : ".$addr_d."</p>";
// echo "<p> 성별 : ".$gender."</p>";
// echo "<p> 가입일 : ".$reg_date."</p>";
include "../inc/dbcon.php";



//쿼리 작성
$sql = "insert into members(";
$sql .= "u_id, pwd, u_name, ";
$sql .= "email, mobile, ps_code, ";
$sql .= "addr_b, addr_d, gender,";
$sql .= "birth, reg_date";
$sql .= ") values(";
$sql .= "'$u_id', '$pwd', '$u_name',";
$sql .= "'$email', '$mobile', '$ps_code',";
$sql .= "'$addr_b', '$addr_d', '$gender',";
$sql .= "'$birth', '$reg_date');";


// echo $sql;

//데이터베이스에 쿼리 전송
mysqli_query($dbcon, $sql);

//DB 접속 종료
mysqli_close($dbcon);

echo " 
  <script>
    location.href='welcome.php';
  </script>
";

?>

