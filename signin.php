<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>탐나는전 로그인</title>
    <!-- css start -->
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/signin.css">
        <link type="text/css" rel="stylesheet" href="css/header.css">
    <link type="text/css" rel="stylesheet" href="css/footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="images/tamna_favicon.ico" />
    <!-- css end -->
    <!-- script start -->
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
        <div class="tamna_card_login">

            <h2>카드 등록</h2>
            <div class="tamna_card_login_txt">
                발급 받으신 탐나는전 카드 등록을 위해 회원가입 또는 로그인을 해주세요.
            </div>

        <!-- tamna_card_login_input start -->
            <div class="tamna_card_login_input">
                <form name="signin" action="php/signinOk.php" method="POST" onsubmit="return signinFormCheck()">
                <fieldset>
                <legend class="blind">로그인</legend>
                <input class="tamna_card_login_id" type="text" name="email" id="email" placeholder="아이디(이메일 주소)">
                <label for="email" class="tamna_card_login_id_txt">아이디를 입력해주세요. (아이디는 이메일 형식입니다.)</label>
                <input class="tamna_card_login_pw" type="password" name="password" id="password" placeholder="비밀번호">
                <label for="password" class="tamna_card_login_pw_txt">비밀번호를 입력해주세요.</label>
                <button class="tamna_card_login_button" type="submit">로그인</button>
                </fieldset>
                </form>
            </div>
            

            <!-- tamna_card_login_input end -->
            <!-- tamna_card_login_find start -->
            <div class="tamna_card_login_find">
                <ul>
                    <li><a href="#">아이디 찾기</a></li>
                    <li><a href="#">비밀번호 찾기</a></li>
                    <li><a href="join.php">회원가입</a></li>
                </ul>
            </div>

            <div class="tamna_card_login_fromapp">
                <a href="join.php">앱에서 가입한 회원인가요?</a>
            </div>
            <!-- tamna_card_login_find end -->

        </div>
    </main>

    <!-- main end -->

    <!-- footer start -->
    <footer id="footer" class="footer">
        <div class="footer_box">
            <h2><a href="http://tamna.jeju.go.kr">탐나는전 업체 정보</a></h2>
            <div class="footer_txt">
                <address>주소 : (63122) 제주특별자치도 제주시 문연로 6(연동)</address>
                <p>대표전화 : 1600-3971 (09:00 ~ 18:00)</p>
                <p>Copyright 2020 제주특별자치도. All rights reserved</p>
            </div>
            <div class="footer_jejugoverment"><a href="http://www.jeju.go.kr">제주특별자치도 바로가기</a></div>
        </div>
    </footer>
    <!-- footer end -->
    <!-- script start -->
    <script type="text/javascript" src="js/signin.js"></script>
    <!-- script end -->



</body>

</html>