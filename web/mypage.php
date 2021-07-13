<?php 

//세션
include "phpsrc/session.php";

//넘어온 값 받기
$idx = $_GET['idx'];

//DB 연결
include "phpsrc/dbcon.php";

//쿼리 작성

$sql = "select * from tmembers where idx='$idx';";
//DB에 쿼리 전송
$result = mysqli_query($dbcon, $sql);


//DB에서 값 가져오기
$array = mysqli_fetch_array($result); 


//값 변수에 담기
$name = $array["tu_name"];
$gender = $array["tu_gender"];
$birth = $array["tu_birth"];
$mobile = $array["tu_mobile"];
$mail = $array["tu_mail"];

 ?>


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
        <link rel="shortcut icon" href="../favicon.ico">
    <link rel="apple-touch-icon" href="../favicon.ico" sizes="144x144">
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/header.css">
    <link type="text/css" rel="stylesheet" href="css/mypage.css">
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
        <!-- tamna edit -->
        <div class="tamna_edit">
            <h2>정보수정</h2>
            <div class="tamna_edit_txt">
                아래의 회원가입 정보를 수정해주세요.<br>
                휴대폰번호와 비밀번호만 수정이 가능합니다.
            </div>
            <!-- tamna edit end -->
        </div>
            <!-- tamna input form -->
        <div class="tamna_input_form">
            <form name="edit" action="phpsrc/editOk.php" method="post" onsubmit="return editFormCheckSecond()">
                <fieldset>
                <legend class="blind"> 회원가입 </legend>
                    <!-- hidden-edit1 start -->
                    <input type="hidden" name="idx" value="<?php echo $idx; ?>">
                    <!-- hidden-edit1 end -->

                    <!-- username -->
                    <div class="tamna_edit_username_box">
                        <label for="tamna_edit_username" class="tamna_edit_username_label">이름</label>
                        <input type="text" name="username" id="tamna_edit_username" value="<?php echo $name; ?>" readonly="readonly">
                    </div>

                    <!-- gender -->
                    <div class="tamna_edit_gender_box">
                    <label for="tamna_edit_usergender" class="tamna_edit_gender_label">성별</label>
                        <input type="text" name="gender" id="tamna_edit_usergender" value="<?php 
                        if($gender === 'm'){
                        echo "남";}else
                        {
                          echo "여";
                        }
                        ?>" readonly="readonly">
                    </div>

                    <div class="tamna_edit_birth_box">
                    <label for="tamna_edit_birth" class="tamna_edit_birth_label">생년월일</label>
                        <input type="text" name="birth" id="tamna_edit_birth" value="<?php echo $birth; ?>" readonly="readonly">
                        </input>             
                    </div>
                    <!-- phoneNum -->
                    <div class="tamna_edit_phoneNum_box">
                        <label for="tamna_edit_phoneNum" class="tamna_edit_phoneNum_label">휴대폰번호</label>
                        <input type="text" name="mobile" id="tamna_edit_phoneNum" value="<?php echo $mobile; ?>">
                    </div>
                    <!-- email -->
                    <div class="tamna_edit_id_box">
                        <label for="tamna_edit_id" class="tamna_edit_id_label">아이디(이메일주소)</label>
                        <input type="text" name="email" id="tamna_edit_id" value="<?php echo $mail; ?>" readonly="readonly">
                    </div>

                    <!-- password -->
                    <div class="tamna_edit_password_box">
                        <label for="tamna_edit_password" class="tamna_edit_password_label">비밀번호</label>
                        <input type="text" name="password" id="tamna_edit_password" value="">
                    </div>
                    <!-- tamna input form end -->
                    <div class="tamna_edit_next_btn_wrap">
                    <button type="submit" value="next" class="tamna_edit_next_btn">정보&nbsp;수정</button>
                    </div>
                    <!-- tamna edit next btn end -->
                </fieldset>
            </form>
        </div>
    </main>
    <!-- main end -->
    
    <!-- footer start -->
    <?php include "footer.php" ?>
    <!-- footer end -->

    <!-- script add -->
    <script type="text/javascript" src="js/edit.js" charset="utf-8"></script>



</body>

</html>