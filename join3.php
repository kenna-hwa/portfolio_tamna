<?php

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
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/join3.css">
    <link type="text/css" rel="stylesheet" href="css/header.css">
    <link type="text/css" rel="stylesheet" href="css/footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="images/tamna_favicon.ico" />
    <!-- css end -->
    <!-- script start -->
    <script src="js/join3.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/gnb.js"></script>
    <!-- script end -->
</head>

<body>
    <!-- header start -->
<header id="header" class="header">
    <div class="header_box">
        <h1><a href="index.html" class="topmenu">탐나는전</a></h1>
        <!-- gnb start -->
        <nav class="gnb" id="topwrap">
            <h2 class="blind">상단 메뉴</h2>
            <ul>
                <li class="gnb_info"><a href="intro.html" class="topmenu">탐나는전</a>
                     <ul class="gnb_info_sub sub">
                        <li><a href="intro.html#main">탐나는전 소개</a></li>
                        <li><a href="intro.html#benefit">탐나는전 혜택</a></li>
                        <li><a href="intro.html#howto">탐나는전 발급방법</a></li>
                    </ul>
                </li>
                <li class="gnb_personal"><a href="signin.php" class="topmenu">개인사용자</a>
                    <ul class="gnb_personal_sub sub">
                        <li><a href="signin.php">카드 신청</a></li>
                        <li><a href="signin.php">카드 등록</a></li>
                        <li><a href="payment_view.html">이용 내역</a></li>
                        <li><a href="shop_search1.php">가맹점 찾기</a></li>
                    </ul>
                </li>
                <li class="gnb_shop"><a href="#" class="topmenu">가맹점</a>
                    <ul class="gnb_shop_sub sub">
                        <li><a href="shop_benefit.html">가맹점 혜택</a></li>
                        <li><a href="shop_apply.html">가맹점 등록</a></li>
                        <li><a href="shop_revenue.html">가맹점 매출확인</a></li>
                        <li><a href="shop_download.html">홍보물 다운</a></li>
                    </ul> 
                </li>
                <li class="gnb_customer"><a href="#" class="topmenu">고객센터</a>
                    <ul class="gnb_customer_sub sub">
                        <li><a href="notice.html">공지사항</a></li>
                        <li><a href="news.html">NEWS</a></li>
                        <li><a href="qna_toggleclose.html">자주묻는질문</a></li>
                        <li><a href="contact.html">문의하기</a></li>
                    </ul> 
                </li>
            </ul>
            <a href="#" class="gnb_more topmenu">더보기</a>
        </nav>
    </div>
    <div class="gnb_sub_box">
        <div class="gnb_sub">
            <h3>서브메뉴</h3>
        </div>
    </div> 
    <!-- gnb end -->
</header>
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
                    <li class="tamna_join_order1"><a href="#">약관동의</a></li>
                    <li class="tamna_join_order2"><a href="#">회원정보 입력</a></li>
                    <li class="tamna_join_order3"><a href="#">가입완료</a></li>
                </ol>
            </div>
            <!-- tamna join order end -->
            <!-- tamna join end -->
        </div>

        <!-- tamna input form -->
        <div class="tamna_input_form">
            <form name="join3" action="php/joinOk.php" method="POST" onsubmit="return joinFormCheckFinal()">
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
    <footer id="footer" class="footer">
        <div class="footer_box">
            <h2><a href="#">탐나는전 업체 정보</a></h2>
            <div class="footer_txt">
                <address>주소 : (63122) 제주특별자치도 제주시 문연로 6(연동)</address>
                <p>대표전화 : 1600-3971 (09:00 ~ 18:00)</p>
                <p>Copyright 2020 제주특별자치도. All rights reserved</p>
            </div>
            <div class="footer_jejugoverment"><a href="#">제주특별자치도 바로가기</a></div>
        </div>
    </footer>

    <!-- script start -->
    <script type="text/javascript" src="js/join3.js"></script>
    <!-- script end -->

</body>

</html>