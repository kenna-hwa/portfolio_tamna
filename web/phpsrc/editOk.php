<?php

//세션 inc
include "session.php";

//mypage에서 수정 값 받아오기

$idx = $_POST["idx"];
$tu_name = $_POST["username"];
$tu_gender = $_POST["gender"];
$tu_birth = $_POST["birth"];
$tu_mobile = $_POST["mobile"];
$tu_mail = $_POST["email"];
$tu_pwd = $_POST["password"];



// DB 연결

include "inc/dbcon.php";



// **조건 처리

if(!$_POST["password"]){
    // **쿼리 작성
    //비밀번호를 입력하지 않은 경우 - 패스워드 분기 찾기
    $sql = "update tmembers set tu_name = '$tu_name', tu_mobile = '$tu_mobile', tu_mail = '$tu_mail', tu_birth = '$tu_birth' where idx = $idx;";
    } else{
    //비밀번호를 입력한 경우
    $sql = "update tmembers set tu_name = '$tu_name', tu_pwd = '$tu_pwd', tu_mobile = '$tu_mobile', tu_mail = '$tu_mail', tu_birth = '$tu_birth' where idx = $idx;";
};

    
    //** 쿼리 전송

    mysqli_query($dbcon, $sql);
    /* 쿼리가 select 문일때는 결과를 가지고 와야 해서 (fetch 써야 해서)  변수에 담는게 좋고 아니면 그냥 써도 된다. 헷갈리면 일단 변수에 담자.*/ 


    //** 페이지 이동

    echo "

        <script type=\"text/javascript\" charset=\"utf-8\">
        alert(\"정보가 수정되었습니다.\");
        location.href=\"../mypage.php?idx=$idx\";

        </script> 
        
    ";



?>

