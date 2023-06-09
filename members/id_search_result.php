<?php
// 데이터 가져오기
$u_id = $_POST["user_id"];
/* echo $u_id;
exit; */

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
// select u_id from members where u_id='$u_id';
$sql = "select u_id from members where u_id='$u_id';";
/* echo $sql;
exit; */

// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

// DB에서 데이터 가져오기
$num = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"<?php echo $u_id; ?>" 검색 결과</title>
    <link rel="stylesheet" href="../css/id_search_result.css">


    <script type="text/javascript">
        function return_id(){
            opener.document.getElementById("u_id").value = "<?php echo $u_id; ?>";
            window.close();
        };
    </script>
</head>
<body>
    <div class="inner">
    <?php if(!$num){ ?> 
    <p class="txt_box">
        입력하신 <span class="id_txt">"<?php echo $u_id; ?>"</span>은 사용할 수 <span class="able">있는</span> 아이디입니다.
    </p>
    <p class="sub_box">
        <a href="#" onclick="javascript:history.back();">다시 검색</a>
        <a href="#" class="sel" onclick="return_id()">사용하기</a>
    </p>
    <?php } else{ ?>
    <p class="txt_box">
        입력하신 <span class="id_txt">"<?php echo $u_id; ?>"</span>은 사용할 수 <span class="unable">없는</span> 아이디입니다.
    </p>
    <p class="sub_box">
        <a href="#" class="sel" onclick="javascript:history.back();">다시 검색</a>
        <a href="#" onclick="window.close();">닫기</a>
    </p>
    <?php
    };

    mysqli_close($dbcon);
    ?>
    </div>
</body>
</html>