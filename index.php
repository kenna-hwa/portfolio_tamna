<?php

//세션 inc
include "phpsrc/session.php";

//DB연결

include "phpsrc/dbcon.php";

?>



<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>탐나는전</title>
    <!-- css start -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="images/tamna_favicon.ico" /> 
    <link type="text/css" rel="stylesheet" href="css/main.css">
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/header.css">
    <link type="text/css" rel="stylesheet" href="css/footer.css">
    <!-- css end -->
    <!-- script start -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/gnb.js"></script>
    <script src="js/bxSlider.js"></script>
    <script src="js/index.js" charset="utf-8"></script>
    <!-- script end -->
</head>

<body>
   <!-- header start -->
 <?php include "header.php" ?>
<!-- header end -->

    <!-- main start -->
    <main id="main" class="main">
        <!-- main img start -->
        <div class="main_img_wrap">
            <h2 class="blind">메인이미지</h2>
                <div class="bxslider">
                    <div class="main_img_1 item">
                        <img src="images/index/main_img_1.jpg" alt="탐나는전 혜택 소개">
                        <p class="blind"> 탐나는전 혜택 소개
                        1번 카드 충전시 10% 추가 적립
                        2번 지류 상품권 구매 시 10% 즉시 할인
                        3번 탐나는전 앱에서 카드 충전관리 기능 제공
                        4번 지류상품권 현금영수증 발급 가능
                        5번 카드사용액 30% 소득공제 (전통시장은 40%)
                        탐나는전 앱 에서 소득공제를 신청하셔야 합니다.</p>
                    </div>
                    <div class="main_img_2 item">
                        <img src="images/index/main_img_2.jpg" alt="탐나는전 어플 설치하기">
                        <p class="blind"> 탐나는전 어플 설치하기
                            앱에서 간편하게 탐나는전 이용 </p>
                    </div>
                    <div class="main_img_3 item">
                        <img src="images/index/main_img_3.jpg" alt="가맹점 신청 안내">
                        <a href="shop_benefit.php" class="main_img_link" title="가맹점 신청하기">                        
                            가맹점 신청 안내
                            삼춘! 아직 가맹점 신청 안하맨?
                        </a>
                    </div> 
                </div>
        </div>
        <!-- main img end -->

        <!-- quick menu start -->
        <section class="quick_menu">
            <h2 class="blind">빠른 메뉴</h2>
            <ul>
                <li class="quick_subs"><a href="signin.php" title="카드발급신청">카드발급신청</a></li>
                <li class="quick_usage"><a href="payment_view.php" title="이용내역보기">이용내역보기</a></li>
                <li class="quick_search"><a href="shop_search1.php" title="가맹점찾기">가맹점찾기</a></li>
                <li class="quick_register"><a href="shop_apply.php" title="가맹점등록">가맹점등록</a></li>
            </ul>
        </section>
        <!-- quick menu end -->

        <!-- board start -->
        <div class="board">
            <div class="board_top">
                <div class="board_notice">
                    <h3><a href="notice.php">공지사항</a></h3>
                    <ul>
                    <?php
                    $sql = "select * from tnotice order by idx DESC limit 4;";
                    $result = mysqli_query($dbcon, $sql);
                    while ($notice = mysqli_fetch_array($result)){
                        $noticeidx = $notice["idx"];
                    ?>
                        <li><a title="<?php echo $notice["tnt_title"] ?>" href="../news_view.php?idx="<?php $noticeidx ?>><?php echo $notice["tnt_category"]." ".$notice["tnt_title"]; ?><span><?php echo $notice["tnt_writedate"]; ?></span></a></li>
                    <?php }; ?>
                    </ul>
                </div>
                <div class="board_news">
                    <h3><a href="news.php">NEWS</a></h3>
                    <ul>
                    <?php
                    $sql = "select * from tnews order by idx DESC limit 4;";
                    $result = mysqli_query($dbcon, $sql);
                    while ($news = mysqli_fetch_array($result)){
                        $newsidx = $news["idx"];
                    ?>    
                        <li><a title="<?php $news["tn_title"] ?>" href="../notice_view.php?idx="<?php $newsidx ?>><?php echo $news["tn_title"]; ?><span><?php echo $news["tn_writedate"]; ?></span></a></li>
                    <?php }; ?>
                    </ul>
                </div>
            </div>
        
            <div class="board_bottom">
                <div class="board_qna">
                    <h3><a href="qna_toggleopen.php" title="자주 묻는 질문">자주묻는질문</a></h3>
                    <ul>
                        <li><a href="qna_toggleopen.php#qna1" title="'탐나는전'을 결제받으면 어떻게 입금처리 되나요?">'탐나는전'을 결제받으면 어떻게 입금처리 되나요?<span>2021-03-06</span></a></li>
                        <li><a href="qna_toggleopen.php#qna2" title="사업주가 환전을 하려면 어디로 가나요?">사업주가 환전을 하려면 어디로 가나요?<span>2021-03-04</span></a></li>
                        <li><a href="qna_toggleopen.php#qna3" title="가맹점이 내야하는 별도 수수료가 있나요?">가맹점이 내야하는 별도 수수료가 있나요?<span>2021-02-15</span></a></li>
                        <li><a href="qna_toggleopen.php#qna4" title="가맹점 등록 신청은 어떻게 하나요?">가맹점 등록 신청은 어떻게 하나요?<span>2021-01-30</span></a></li>
                    </ul>
                </div>

                <div class="board_qr">
                    <h3>탐나는전 어플 다운로드</h3>
                    <p>탐나는전 어플 아이콘</p>
                    <p>구글 플레이 QR코드</p>
                    <p>애플 앱스토어 QR코드</p>
                </div>
            </div>
        </div>
        <!-- board end -->

        <!-- youtube start -->
        <article class="youtube">
            <h2 class="blind">홍보영상</h2>

            <div class="youtube_official">
                <h3>유튜브 비디오</h3>
                <iframe class="youtube_official_iframe" src="https://www.youtube.com/embed/_bEZYRQUcqc" title="youtube_official_iframe" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="youtube_official_txt">
                    <div class="youtube_official_txt1">
                        제주형<br>
                        지역화폐<br>
                        <span>'탐나는전'</span>
                    </div>

                    <div class="youtube_official_txt2">
                        11.30일<br>
                        제주형 지역화폐<br>
                        <span>'탐나는전'</span>
                        이 첫 선을 보입니다.<br>
                        탐나는전 구매 시<br>
                        <span>10% 할인혜택</span>
                        까지!
                    </div>
                </div>
            </div>

            <div class="youtube_kb">
                <h3>유튜브 비디오</h3>
                <iframe class="youtube_kb_iframe" src="https://www.youtube.com/embed/zXVD5agK39k" class="youtube_kb_link" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="youtube_kb_txt">
                    <div class="youtube_kb_txt1">
                        탐나는전<br>
                        X<br>
                        이날치
                    </div>
                    <div class="youtube_kb_txt2">
                        '탐나는전' 체크카드의<br>
                        혜택을 담은 노래,<br>
                        <span>'조선의 힘' 이날치</span>가<br>
                        직접 제작한 [탐나는전]의<br>
                        뮤직비디오가 드디어 공개!
                    </div>
                </div>
            </div>
        </article>
        <!-- youtube end -->

        <!-- link start -->
        <section class="link">
            <div class="link_header">
                <h2 class="blind">유관기관 링크</h2>
                <p>제주로<br>
                    혼저옵서예</p>
            </div>
            <ul class="link_box">
                <li class="link_jejutourism"><a href="https://www.ijto.or.kr" title="제주관광공사" target="_blank">
                        제주관광공사
                    </a></li>
                <li class="link_jejugoverment"><a href="http://www.jeju.go.kr" title="제주특별자치도" target="_blank">
                        제주특별자치도
                    </a></li>
                <li class="link_jejusafecode"><a href="https://jshop.jeju.go.kr/index.html#/" title="제주안심코드" target="_blank">
                        제주안심코드
                    </a></li>
            </ul>
        </section>
        <!-- link end -->
    </main>
    <!-- main end -->

    <!-- footer start -->
    <?php include "footer.php" ?>
    <!-- footer end -->


</body>

</html>