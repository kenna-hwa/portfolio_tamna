<?php

//세션 inc
include "phpsrc/session.php";

//join2에서 두 페이지의 값 히든으로 다시 받아오기

$chk = $_POST["chkbox"];
$username = $_POST["username"];
$usergender = $_POST["gender"];
$userbirth = $_POST["birthyear"].$_POST["birthmonth"].$_POST["birthday"];
$usermobile = $_POST["phoneNum"];

?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>탐나는전 회원가입</title>
    <!-- css start -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="images/tamna_favicon.ico" /> 
    <link type="text/css" rel="stylesheet" href="css/join3.css">
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/header.css">
    <link type="text/css" rel="stylesheet" href="css/footer.css">
    <!-- css end -->
    <!-- script start -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/gnb.js"></script>
    <!-- script end -->

</head>

<body>

 <!-- header start -->
 <?php include "header.php" ?>
<!-- header end -->

    <!-- main start -->
    <main id="main" class="main">
        <!-- tamna join -->
        <div class="tamna_join">

            <h2>회원가입</h2>
            <div class="tamna_join_txt">
                웹에서 사용하실 아이디와 비밀번호를 입력해주세요.
            </div>

            <!-- tamna join order -->
            <div class="tamna_join_order">
                <ol>
                    <li class="tamna_join_order1">약관동의</li>
                    <li class="tamna_join_order2">회원정보 입력</li>
                    <li class="tamna_join_order3">가입완료</li>
                </ol>
            </div>
            <!-- tamna join order end -->
            <!-- tamna join end -->
        </div>

        <!-- tamna input form -->
        <div class="tamna_input_form">
            <form name="join3" action="join4.php" method="POST" onsubmit="return joinFormCheckFinal()">
                <fieldset>
                    <legend class="blind">회원가입</legend>
                    <!-- hidden-join1 start -->
                    <input type="hidden" name="chkbox" value="<?php echo $chk ?>">
                    <!-- hidden-join1 end -->
                    <!-- hidden-join2 start -->
                    <input type="hidden" name="username" value="<?php echo $username ?>">
                    <input type="hidden" name="gender"  value="<?php echo $usergender ?>">
                    <input type="hidden" name="userbirth" value="<?php echo $userbirth ?>">
                    <input type="hidden" name="phoneNum" value="<?php echo $usermobile ?>">
                    <!-- hidden-join2 end -->


                    <div class="tamna_join_id_box">
                        <label for="tamna_join_id" class="tamna_join_id_label">아이디(이메일주소)</label>
                        <input type="text" name="id" id="tamna_join_id" value="">
                        <input type="text" name="dns" class="tamna_join_id_select_input">
                        <span id="at">＠</span>
                        <select name="id_domain" id="tamna_join_id_domain" onchange="emailChange()">
                            <option value="">직접입력</option>
                            <option value="naver.com">naver.com</option>
                            <option value="gmail.com">gmail.com</option>
                            <option value="hanmail.net">hanmail.net</option>
                            <option value="nate.com">nate.com</option>
                        </select>
                    </div>

                    <div class="tamna_input_pw_box">
                        <label for="tamna_input_pw" class="tamna_input_pw_label">비밀번호</label>
                        <input type="password" name="tamna_input_pw" id="tamna_input_pw" 
                            placeholder="영문(대소문자), 숫자, 특수문자 포함 8자리 이상 12자리 이하">
                    </div>

                    <div class="tamna_input_pw_check_box">
                        <label for="tamna_input_pw_check" class="tamna_input_pw_check_label">비밀번호 확인</label>
                        <input type="password" name="tamna_input_pw_check" id="tamna_input_pw_check" placeholder="영문(대소문자), 숫자, 특수문자 포함 8자리 이상 12자리 이하">
                    </div>
                    <!-- tamna input form end -->
                    <button type="submit" class="tamna_join_finish_btn">회원가입 완료</button>
                    <!-- tamna join finish btn end -->
                </fieldset>
            </form>
        </div>
    </main>
    <!-- main end -->

    <!-- footer start -->
    <?php include "footer.php" ?>
    <!-- footer end -->

    <!-- script add -->
    <script type="text/javascript" src="js/join3.js" charset="utf-8"></script>


</body>

</html>