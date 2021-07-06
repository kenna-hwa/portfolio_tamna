<?php


//세션 inc
include "phpsrc/session.php";

//로그인 체크

include "phpsrc/adminCheck.php";

?>


<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호 찾기</title>
    <!-- css start -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/find_pw.css">
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
        <!-- tamna find -->
        <div class="tamna_find">

            <h2>비밀번호 찾기</h2>
            <div class="tamna_find_txt">
                회원가입 시 등록한 아이디와 이름, 휴대폰번호를 입력해주세요.
            </div>
        <!-- tamna find end -->
        </div>
            <!-- tamna input form -->
        <div class="tamna_input_form">
            <form name="find_id" action="return_pw.php" method="post" onsubmit="return findIdCheck()">
                <fieldset>
                <legend class="blind"> 비밀번호찾기 </legend>
                    <!-- userid -->
                    <div class="tamna_find_userid_box">
                        <label for="tamna_find_userid" class="tamna_find_userid_label">아이디(이메일)</label>
                        <input type="text" name="userid" id="tamna_find_userid" placeholder="아이디(이메일)를 입력하세요.">
                    </div>

                    <!-- username -->
                    <div class="tamna_find_username_box">
                        <label for="tamna_find_username" class="tamna_find_username_label">이름</label>
                        <input type="text" name="username" id="tamna_find_username" placeholder="이름을 입력하세요.">
                    </div>
                    
                    <!-- phoneNum -->
                    <div class="tamna_find_phoneNum_box">
                        <label for="tamna_find_phoneNum" class="tamna_find_phoneNum_label">휴대폰번호</label>
                        <input type="text" name="phoneNum" id="tamna_find_phoneNum" placeholder="- 없이 입력해주세요.">
                        <button type="button" class="tamna_find_phoneNum_btn" onclick="verify_Num()">인증번호 받기</button>
                    </div>

                    <!-- verifyNum -->
                    <div class="tamna_find_verifyNum_box">
                        <label for="tamna_find_verifyNum" class="tamna_find_verifyNum_label">인증번호</label>
                        <input type="text" name="verifyNum" id="tamna_find_verifyNum" placeholder="인증번호를 입력하세요".>
                        <button type="button" class="tamna_find_verifyNum_btn" onclick="verify_check_Num()">인증번호 확인</button>
                    </div>

                    <!-- tamna input form end -->
                    <div class="tamna_find_next_btn_wrap">
                    <button type="submit" value="next" class="tamna_find_next_btn">비밀번호 찾기</button>
                    </div>
                    <!-- tamna find next btn end -->
                </fieldset>
            </form>
        </div>
    </main>
    <!-- main end -->
    
    <!-- footer start -->
    <?php include "footer.php" ?>
    <!-- footer end -->

    <!-- script add -->
    <script type="text/javascript" src="js/find_idpw.js" charset="utf-8"></script>



</body>

</html>