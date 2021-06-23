<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>탐나는전 카드 이용내역 조회</title>
    <!-- css start -->
    <link type="text/css" rel="stylesheet" href="css/payment_view.css">
    <link rel="shortcut icon" href="images/tamna_favicon.ico" />
    <!-- css end -->
    <!-- script start -->
    <!-- script end -->
</head>

<body>
 <!-- header start -->
 <?php include "php/header.php" ?>
<!-- header end -->

    <!-- main start -->
    <main id="main" class="main">
        <div class="tamna_payment_view">
            <h2>카드 이용내역 조회</h2>
            <div class="tamna_payment_view_txt">
                등록된 카드 정보가 없습니다.<br>
                <span>신청하신 카드가 없는 경우 카드를 신규로 발급해주세요. <br>
                이미 카드를 발급받으셨다면 카드를 등록해주세요.</span>
            </div>
        </div>
        
            <div class="tamna_payment_view_link">
                <div class="card_apply"><a href="#">카드 안내·신청</a></div>
                <div class="tamna_signin"><a href="#">카드 등록</a></div>
            </div>
        
    </main>
    
    <!-- main end -->

    <!-- footer start -->
    <?php include "php/footer.php" ?>
    <!-- footer end -->


</body>

</html>