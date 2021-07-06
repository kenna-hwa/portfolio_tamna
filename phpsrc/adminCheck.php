<?php

//관리자 권한인 경우만 접속 가능
if($s_id != "admin"){

    echo "
    <script type=\"text/javascript\" charset=\"utf-8\">
    
    alert(\"관리자 권한이 필요합니다.\");
    location.href=\"../index.php\";
    
    </script>
    
    
    ";
};

?>