<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<?php


session_start();

//값 받아오기

$signinId = $_POST["email"];
$signinPw = $_POST["password"];

//DB 연결
include "dbcon.php";

//sql select문으로 가져와서 비교한다.

$sql = "select idx, tu_name, tu_mail, tu_pwd from tmembers where tu_mail='$signinId';";

//값 전달
$result = mysqli_query($dbcon, $sql);


//값 가져오기
$num = mysqli_num_rows($result);
$array = mysqli_fetch_array($result);

//조건처리
//조건에 맞는 아이디가 없을 때

    if(!$num) {
        //아이디 조건 처리
        echo "
        <script type=\"text/javascript\" charset=\"utf-8\">
            alert(\"일치하는 아이디가 없습니다.\");
            history.back();
        </script>
        ";

    } else {

        $sql = "select idx, tu_name, tu_mail, tu_pwd from tmembers where tu_mail='$signinId';";
        $result = mysqli_query($dbcon, $sql);
        $array = mysqli_fetch_array($result);

        if($signinPw != $array["tu_pwd"]){
            echo "
                <script type=\"text/javascript\" charset=\"utf-8\">
                alert(\"비밀번호가 일치하지 않습니다.\");
                history.back();
                </script>
                ";
        };

   
        echo "
        <script type=\"text/javascript\" charset=\"utf-8\">
        location.href=\"../index.php\";
        </script> ";
};

$_SESSION["session_idx"] = $array["idx"];
$_SESSION["session_name"] = $array["tu_name"];
$_SESSION["session_id"] = $array["tu_mail"];


mysqli_close($dbcon);

?>
</body>
</html>

