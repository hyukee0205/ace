<?php
if(!$s_idx){
    echo "
        <script>
            alert(\"로그인하셔야 본 서비스를 이용하실 수 있습니다.\");
            location.href = '../login/login.php';
        </script>
    ";
    exit;
};
?>