<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>탐나는전 가맹점 매출 확인</title>
    <!-- css start -->
    <link type="text/css" rel="stylesheet" href="css/shop_revenue.css">
    <link rel="shortcut icon" href="images/tamna_favicon.ico" />
    <!-- css end -->
    <!-- script start -->
    <script src="js/signin.js"></script>
    <!-- script end -->
</head>

<body>

 <!-- header start -->
 <?php include "php/header.php" ?>
<!-- header end -->

    <!-- main start -->
    <main id="main" class="main">
        <div class="tamna_shop_login">

            <h2>가맹점 매출 확인</h2>
            <div class="tamna_shop_login_txt">
                가맹점 포탈 이용을 위해 로그인 해주세요.
            </div>


            <div class="tamna_shop_login_input">
                <form name="signin" action="php/signinOk.php" method="POST" onsubmit="return signinFormCheck()">
                    <fieldset>
                        <legend class="blind">로그인</legend>
                        <input class="tamna_shop_login_id" type="text" name="email" id="email"
                            placeholder="아이디(이메일 주소)">
                        <label for="email" class="tamna_shop_login_id_txt">아이디를 입력해주세요. (아이디는 이메일 형식입니다.)</label>
                        <input class="tamna_shop_login_pw" type="password" name="password" id="password"
                            placeholder="비밀번호">
                        <label for="password" class="tamna_shop_login_pw_txt">비밀번호를 입력해주세요.</label>
                        <button class="tamna_shop_login_button" type="submit">로그인</button>
                    </fieldset>
                </form>
            </div>

            <div class="tamna_shop_login_find">
                <ul>
                    <li><a href="#">아이디 찾기</a></li>
                    <li><a href="#">비밀번호 찾기</a></li>
                    <li><a href="#">회원가입</a></li>
                </ul>
            </div>

            <div class="tamna_shop_login_fromapp">
                <a href="signin.php">개인회원인가요?</a>
            </div>

        </div>
    </main>

    <!-- main end -->

    <!-- footer start -->
    <?php include "php/footer.php" ?>
    <!-- footer end -->


</body>

</html>