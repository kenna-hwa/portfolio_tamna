<?php

//세션 inc

include "inc/session.php";

// 값 다 받아오기

//1p
$tu_check = $_POST["chkbox"];
//2p
$tu_name = $_POST["username"];
$tu_gender = $_POST["gender"];
$tu_birth = $_POST["userbirth"];
$tu_mobile = $_POST["phoneNum"];
//3p
$tu_mail = $_POST["id"]."@".$_POST["dns"];
$tu_pwd = $_POST["tamna_input_pw"];

echo "체크:".$tu_check;
echo "이름:".$tu_name;
echo "성별:".$tu_gender;
echo "생년월일:".$tu_birth;
echo "연락처:".$tu_mobile;
echo "아이디:".$tu_mail;
echo "비밀번호:".$tu_pwd;


// DB 연결
include "inc/dbcon.php";

//전달할 쿼리 작성

$sql = "insert into tmembers (tu_check, tu_name, tu_gender, tu_birth, tu_mobile, tu_mail, tu_pwd) values ('$tu_check', '$tu_name', '$tu_gender', '$tu_birth', '$tu_mobile', '$tu_mail', '$tu_pwd');";

echo $sql;

//쿼리 전달

mysqli_query($dbcon, $sql);

//DB 종료
mysqli_close($dbcon);





?>