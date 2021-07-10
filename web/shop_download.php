<?php

//세션 inc

include "phpsrc/session.php";

?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>탐나는전 가맹점 홍보물 다운로드</title>
    <!-- css start -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="images/tamna_favicon.ico" />
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/header.css">
    <link type="text/css" rel="stylesheet" href="css/shop_download.css">
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
        <div class="tamna_shop_download">
            <h2>가맹점 홍보물 다운로드</h2>
            <div class="tamna_shop_download_txt">
               소상공인과 언제나 함께하는 탐나는전이 되겠습니다.<br>
                <span>홍보물 우편 발송을 원하시면 가장 오른쪽 버튼을 눌러 신청해주세요.</span>
            </div>
        </div>


        <div class="tamna_shop_download_list_box">
            <div class="tamna_shop_download_list">
                <ul>
                    <li class="tamna_shop_download_list1"><a href="#" title="가맹점 신청 안내 다운로드">가맹점 신청안내 전단 다운로드</a></li>
                    <li class="tamna_shop_download_list2"><a href="#" title="가맹점 부착 스티커 다운로드">가맹점 부착 스티커 다운로드</a></li>
                    <li class="tamna_shop_download_list3"><a href="#" title="가맹점 홍보물 우편 신청">가맹점 홍보물 우편 신청</a></li>
                </ul>
            </div>
        </div>
    </main>

    <!-- main end -->

    <!-- footer start -->
    <?php include "footer.php" ?>
    <!-- footer end -->



</body>

</html>