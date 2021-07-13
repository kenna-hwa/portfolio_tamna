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
    <title>탐나는전 카드신청</title>
    <!-- css start -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
        <link rel="shortcut icon" href="../favicon.ico">
    <link rel="apple-touch-icon" href="../favicon.ico" sizes="144x144"> 
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/header.css">
    <link type="text/css" rel="stylesheet" href="css/apply.css">
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
        <div class="tamna_card_apply">
            <h2>카드 안내 및 신청</h2>
            <div class="tamna_card_apply_txt">
                <ul>
                <li>탐나는전 체크카드는 제주지역화폐 '탐나는전'을 충전해서 이용할 수 있는 전용 체크카드입니다.</li>
                <li>탐나는전 체크카드 발급, 충전, 이용은 제주도민이 아니더라도 가능합니다.</li>
                <li>탐나는전 카드 발급은 KB 국민카드 웹사이트, 지점 방문 신청 또는 코나아이 웹사이트를 통해서 신청 가능합니다.</li>
                <li>종이형 상품권은 농협중앙회, 지역 농·축협 본점, 제주은행에서 가능하며 버튼을 클릭하면 지도로 연결됩니다.</li>
                <li>탐나는전 이용 및 App 관련 문의는 탐나는전 고객센터 (1600-3971)로 문의 주시기 바랍니다.</li>
                </ul>
            </div>
            <div class="tamna_card_apply_bank">
                <ul>
                <li class="tamna_card_apply_bank_KB"><a href="https://card.kbcard.com/CXPRICAC0076.cms?mainCC=a&cooperationcode=01588&_ga=2.75773334.249574056.1607904666-1341349251.1607904666" title="국민카드 카드신청" target="_blank">KB 국민카드</a></li>
                <li class="tamna_card_apply_bank_Kona"><a href="https://jeju.usersite.co.kr/home#pg=apply_card_home" title="코나아이 카드신청" target="_blank">코나아이</a></li>
                <li class="tamna_card_apply_bank_NH"><a href="https://www.google.com/maps/place/%EB%86%8D%ED%98%91%EC%A4%91%EC%95%99%ED%9A%8C+%EC%A0%9C%EC%A3%BC%EC%A7%80%EC%97%AD%EB%B3%B8%EB%B6%80/@33.5115042,126.5228515,17z/data=!3m1!4b1!4m5!3m4!1s0x350ce35507e8ce9b:0xa6544539761ff87d!8m2!3d33.5114997!4d126.5250402" title="농협 지점 찾기" target="_blank">농협중앙회</a></li>
                <li class="tamna_card_apply_bank_Jeju"><a href="https://www.google.com/maps/search/%EC%A0%9C%EC%A3%BC+%EC%A0%9C%EC%A3%BC%EC%9D%80%ED%96%89/@33.5115131,126.5228515,17z/data=!3m1!4b1" title="제주은행 지점 찾기" target="_blank">제주은행</a></li>
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