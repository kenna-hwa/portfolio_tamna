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
    <title>탐나는전 문의하기</title>
    <!-- css start -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/contact.css">
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
        <div class="tamna_contact">
            <h2>문의하기</h2>
            <div class="tamna_contact_txt">
               이용에 불편함이 없도록 최선을 다하겠습니다.<br>
               아래 ARS 번호로 전화하시면 빠르게 상담받으실 수 있습니다.
            </div>
        </div>


        <div class="tamna_contact_list_box">
                <ul>
                    <li class="tamna_contact_list1">가맹점 신청안내 전단 다운로드</li>
                    <li class="tamna_contact_list2">가맹점 부착 스티커 다운로드</li>
                </ul>
        </div>
    </main>

    <!-- main end -->

     <!-- footer start -->
<?php include "footer.php" ?>
    <!-- footer end -->




</body>

</html>