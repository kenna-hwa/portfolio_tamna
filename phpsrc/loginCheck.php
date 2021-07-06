<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>

<?php


//이미 로그인한 경우 접속 불가
if($s_id){

    echo "
    <script type=\"text/javascript\" charset=\"utf-8\">
    
    alert(\"이미 가입된 회원입니다.\");
    location.href=\"./index.php\";
    
    </script>
    
    
    ";
};

?>

</body>
</html>
