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
    <link type="text/css" rel="stylesheet" href="css/join4.css">
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
 <?php include "php/header.php" ?>
<!-- header end -->

    <!-- main start -->
    <main id="main" class="main">
        <!-- tamna join -->
        <div class="tamna_join">

            <h2>회원가입</h2>
            <div class="tamna_join_txt">
                탐나는전 가입이 완료되었습니다.
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

        <!-- tamna qr ad form -->
        <div class="tamna_qr_ad">
            <h3>웹 회원가입이 완료되었습니다.</h3>
            <p>더 많은 기능을 제공하는 탐나는전 앱도 함께 이용해보세요.</p>
            <div class="tamna_qr_appicon">탐나는전 어플 아이콘</div>
            <div class="tamna_qr_google">탐나는전 어플 구글 플레이스토어 다운로드</div>
            <div class="tamna_qr_apple">탐나는전 어플 애플 앱스토어 다운로드</div>
        </div>

        <!-- tamna join finish end -->
        <div class="tamna_join_finish_login"><a href="#">로그인</a></div>
        <!-- tamna join finish end -->
    </main>
    <!-- main end -->
    <!-- footer start -->
    <?php include "php/footer.php" ?>
    <!-- footer end -->

</body>

</html>