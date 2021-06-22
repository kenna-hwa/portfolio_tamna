
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>탐나는전 회원가입</title>
    <!-- css start -->
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/join.css">
        <link type="text/css" rel="stylesheet" href="css/header.css">
    <link type="text/css" rel="stylesheet" href="css/footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="images/tamna_favicon.ico" />
    <!-- css end -->
    <!-- script start -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/join1.js"></script>
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
                        <li><a href="intro.html/#main">탐나는전 소개</a></li>
                        <li><a href="intro.html/#benefit">탐나는전 혜택</a></li>
                        <li><a href="intro.html/#howto">탐나는전 발급방법</a></li>
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
                서비스 이용약관 및 정보이용 안내에 동의해주세요.
            </div>
        
            <!-- tamna join order -->
            <div class="tamna_join_order">
                <ol>
                    <li class="tamna_join_order1"><a href="#">약관동의</a></li>
                    <li  class="tamna_join_order2"><a href="#">회원정보 입력</a></li>
                    <li  class="tamna_join_order3"><a href="#">가입완료</a></li>
                </ol>
            </div>
            <!-- tamna join order end -->
        <!-- tamna join end -->
        </div>
        <!-- tamna join checklist -->
        <div class="tamna_join_chklist">
        <form name="join1" action="6_join2_황주화.php" method="POST" onsubmit="return joinFormCheckFirst()">
        <fieldset>
        <legend class="blind">회원가입</legend>
            <span class="chk_span1">
                <input type="checkbox" name="chkbox_all" id="chkbox_all" class="chkbox_all">
                <label for="chkbox_all" class="chk_label1">
                    <span class="chk_label1_txt">
                        이용약관 전체 동의
                    </span>
                </label>
            </span>
            <span class="chk_span2">
                <input type="checkbox" name="chkbox_2" id="chkbox_2" class="checkinput">
                <label for="chkbox_2" class="chk_label2">
                    <span class="chk_label2_txt">
                    본인은 만 14세 이상입니다. <span class="chk_label2_txt2">(만 14세 미만일 경우 회원가입이 불가합니다.)</span>
                    </span>
                </label>
            </span>
            <span class="chk_span3">
                <input type="checkbox" name="chkbox3" id="chkbox_3" class="checkinput">
                <label for="chkbox_3" class="chk_label3">
                    <span class="chk_label3_txt">
                    [필수] 탐나는전 전자금융거래 이용약관
                    </span>
                </label>
            </span>
            <span class="chk_span4">
                <input type="checkbox" name="chkbox4" id="chkbox_4" class="checkinput">
                <label for="chkbox_4" class="chk_label4">
                    <span class="chk_label4_txt">
                    [필수] 탐나는전 서비스 이용약관
                    </span>
                </label>
            </span>
            <span class="chk_span5">
                <input type="checkbox" name="chkbox5" id="chkbox_5" class="checkinput">
                <label for="chkbox_5" class="chk_label5">
                    <span class="chk_label5_txt">
                    [필수] 탐나는전 개인정보 수집 이용 동의서 양식
                    </span>
                </label>
            </span>
            <span class="chk_span6">
                <input type="checkbox" name="chkbox6" id="chkbox_6" class="checkinput">
                <label for="chkbox_6" class="chk_label6">
                    <span class="chk_label6_txt">
                    [필수] 탐나는전 개인정보 처리 방침
                    </span>
                </label>
            </span>
            <span class="chk_span7">
                <input type="checkbox" name="chkbox7" id="chkbox_7" class="checkinput">
                <label for="chkbox_7" class="chk_label7">
                    <span class="chk_label7_txt">
                    [필수] 오픈뱅킹 개인(신용)정보 수집이용동의서
                    </span>
                </label>
            </span>
            <span class="chk_span8">
                <input type="checkbox" name="chkbox8" id="chkbox_8" class="checkinput">
                <label for="chkbox_8" class="chk_label8">
                    <span class="chk_label8_txt">
                    [필수] 오픈뱅킹 서비스 이용약관
                    </span>
                </label>
            </span>
            <span class="chk_span9">
                <input type="checkbox" name="chkbox9" id="chkbox_9" class="checkinput">
                <label for="chkbox_9" class="chk_label9">
                    <span class="chk_label9_txt">
                    [필수] 위치정보서비스 이용약관
                    </span>
                </label>
            </span>
            <span class="chk_span10">
                <input type="checkbox" name="chkbox10" id="chkbox_10" class="checkinput">
                <label for="chkbox_10" class="chk_label10">
                    <span class="chk_label10_txt">
                    [필수] 오픈뱅킹 출금/조회 이용약관
                    </span>
                </label>
            </span>
            <span class="chk_span11">
                <input type="checkbox" name="chkbox11" id="chkbox_11" class="checkinput">
                <label for="chkbox_11" class="chk_label11">
                    <span class="chk_label11_txt">
                    [필수] 오픈뱅킹 금융거래정보제공동의서
                    </span>
                </label>
            </span>
            <span class="chk_span12">
                <input type="checkbox" name="chkbox12" id="chkbox_12" class="checkinput" value="y">
                <label for="chkbox_12" class="chk_label12">
                    <span class="chk_label12_txt">
                    [선택] 탐나는전 마케팅 정보 수신 동의
                    </span>
                </label>
            </span>
        </div>
        <!-- tamna join checklist end -->
        <!-- tamna join next btn -->
        <button type="submit" value="next" class="tamna_join_next_btn">다&nbsp;&nbsp;&nbsp;음</button>
        <!-- tamna join next btn end -->
        
        </form>
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
    <!-- footer end -->
<!-- script start -->
<script type="text/javascript" src="js/join1.js"></script>
<!-- script end -->

</body>

</html>