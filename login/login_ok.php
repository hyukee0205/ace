<?php
//세션 시작
session_start();

//데이터 가져오기
$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];

//DB 연결
include "../inc/dbcon.php";

//쿼리 작성
$sql = "select idx, u_name, u_id, pwd from members where u_id='$u_id';";
// echo $sql;

//쿼리 전송
$result = mysqli_query($dbcon, $sql);

//DB에서 데이터 가져오기
//컬럼순서로 데이터 가져오기
//$row = mysqli_fetch_row($result);
//echo $row[2];

//전체 데이터 수 
$num = mysqli_num_rows($result);
// echo $num;
// exit;


//조건 처리
if(!$num){//일치하는 아이디가 없다면
  //메세지 출력 후 이전 페이지로 이동
  echo "
    <script>
      alert('일치하는 아이디가 없습니다.');
      location.href = 'login.php';
    </script>
  ";
} else{//일치하는 아이디가 존재하면
  //DB에서 사용자가 
  $array = mysqli_fetch_array($result);
  $g_pwd = $array["pwd"];

  if($pwd != $g_pwd){//사용자가 입력한 비밀번호와 DB에서 가져온 비밀번호가 일치하지 않는다면
    //메세지 출력 후 이전 페이지로 이동
    echo "
      <script>
        alert('비밀번호가 일치하지 않습니다.');
        location.href = 'login.php';
        </script>
    ";
  } else{//비밀번호가 일치한다면
    echo "
    <script>
      alert('로그인 되었습니다.');
    </script>
    ";
  
    //세션 변수 생성
    $_SESSION["s_idx"] = $array["idx"];
    $_SESSION["s_name"] = $array["u_name"];
    $_SESSION["s_id"] = $array["u_id"];
    // echo $_SESSION["s_idx"]." / ";
    // echo $_SESSION["s_name"]." / ";
    // echo $_SESSION["s_id"];
    // exit;
  };
};

// DB 종료
mysqli_close($dbcon);

// 페이지 이동
echo "
    <script>
        location.href='../index.php';
    </script>
";
?>