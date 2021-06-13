<?php

//값 가져오기 - 선택 동의 여부만
$SelectCheck = $_POST["chkbox12"];

//DB 연결
include_once "php/inc/dbcon.php";

//쿼리 작성

$sql = "insert into tmembers (tu_check) values ('$SelectCheck');";

//echo $sql;

//데이터베이스에 값 전달
mysqli_query($dbcon, $sql);

//echo "

//    <script type=\"text/javascript\">
//location.href=\"6_join2_황주화.html\";

 //   </script> 
    
//";

?>