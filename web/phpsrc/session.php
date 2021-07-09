<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>

<?php

//세션 시작하기
session_start();

//세션값 받기

$s_idx = isset($_SESSION["session_idx"])? $_SESSION["session_idx"] : ""; 
$s_id = isset($_SESSION["session_id"])? $_SESSION["session_id"] : ""; 
$s_name = isset($_SESSION["session_name"])? $_SESSION["session_name"] : ""; 

?>

</body>
</html>