<?php

//세션 inc
include "session.php";

//세션 삭제
//unset(삭제할 세션 변수);

unset($_SESSION["session_idx"]);
unset($_SESSION["session_name"]);
unset($_SESSION["session_id"]);

//페이지 이동
echo "

    <script type=\"text/javascript\" charset=\"utf-8\">
    alert(\"로그아웃 되었습니다\");
    location.href=\"../index.php\";

    </script> 
    
";

?>