<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>탐나는전 로그인</title>
    <!-- css start -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="images/tamna_favicon.ico" />
    <link type="text/css" rel="stylesheet" href="css/signin.css">
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
                    <li><a href="find_id.php">아이디 찾기</a></li>
                    <li><a href="find_pw.php">비밀번호 찾기</a></li>
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
    <?php include "php/footer.php" ?>
    <!-- footer end -->

    <!-- script add -->
    <script type="text/javascript" src="js/signin.js"></script>

</body>

</html>