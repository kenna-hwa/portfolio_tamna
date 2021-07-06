<?php

//세션 inc

include "session.php";

//DB연결

include "dbcon.php";

// get 방식으로 값 받아오기
$idx = $_GET['idx'];

// 쿼리 작성
$sql = "delete from tnews where idx=$idx;";
// echo $sql;

// 쿼리 전송
mysqli_query($dbcon, $sql);

// DB 연결 종료
mysqli_close($dbcon);

// 페이지 이동
echo "
    <script type=\"text/javascript\">
        // alert(\"처리되었습니다.\");
        location.href=\"../news.php\";
    </script>
";
?>