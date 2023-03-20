<?php
if(!$s_idx || $s_id!="$n_idx"){
    echo "
        <script type=\"text/javascript\">
            alert(\"로그인하셔야 본 서비스를 이용하실 수 있습니다.\");
            location.href = '../index.php';
        </script>
    ";
    exit;
};
?>