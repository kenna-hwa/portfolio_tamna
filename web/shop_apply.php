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
    <title>탐나는전 가맹점 등록 기준 및 혜택</title>
    <!-- css start -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
        <link rel="shortcut icon" href="../favicon.ico">
    <link rel="apple-touch-icon" href="../favicon.ico" sizes="144x144">
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/header.css">
    <link type="text/css" rel="stylesheet" href="css/shop_apply.css">
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
        <div class="tamna_shop_apply">
            <h2>탐나는전 가맹점 등록</h2>
            <div class="tamna_shop_apply_txt">
                <span class="tamna_shop_apply_txt1">지역화폐 이용 가맹점 등록 - 제주특별자치도청<br></span>
                골목상권에 힘을 심어드릴게요. 탐나는전의 가맹점으로 함께하세요!<br>

                <span class="tamna_shop_apply_txt2">지역사랑상품권 이용 활성화에 관한 법률 개정에 따라,<br></span>
                <span class="tamna_shop_apply_txt3"> 10월부터 가맹점주(사업자)가 직접 지역화폐 가맹점으로 등록한 매장에서만 지역화폐 이용이 가능합니다.<br></span>

                현재 별도의 가맹 신청 없이 운영 중인 매장도 기한 내 미신청 시 결제가 제한될 수 있습니다. <br>

                <span class="tamna_shop_apply_txt4">* 가맹 신청이 완료되더라도 지자체별 정책에 의해<br>
                    일부 매장은 매출액 제한, 업종 제한 등을 이유로 결제가 제한될 수 있습니다.</span>
            </div>
        </div>
        <div class="tamna_shop_apply_input_box">
            <form name="busiNum" action="phpsrc/busiNumOk.php" method="POST" onsubmit="return busiNumCheck()">
                <fieldset>
                    <legend class="blind">사업자등록번호</legend>
                    <label for="tamna_shop_apply_input_busiNum" class="blind">사업자등록번호</label>
                    <input type="text" name="businessRegistrationNumber" id="tamna_shop_apply_input_busiNum" class="shopNum"
                        placeholder="사업자등록번호를 입력해 주세요.">
                    <p class="tamna_shop_apply_input_busiNum_txt">- 없이 사업자등록번호를 입력해 주세요.</p>
                    <button type="submit" class="tamna_shop_apply_input_busiNum_btn">인증요청</button>
                </fieldset>
            </form>
        </div>
    </main>

    <!-- main end -->

    <!-- footer start -->
    <?php include "footer.php" ?>
    <!-- footer end -->

    <!-- script add -->
    <script src="js/shop_apply.js" charset="utf-8"></script>

</body>

</html>