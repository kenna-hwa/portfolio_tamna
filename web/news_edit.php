<?php

//세션 inc

include "phpsrc/session.php";

//관리자 권한인 경우만 접속 가능

if($s_name != "관리자"){

    echo "
    <script type=\"text/javascript\" charset=\"utf-8\">
    
    alert(\"관리자 권한이 필요합니다.\");
    location.href=\"./news.php\";
    
    </script>
        
    ";
};

//DB연결

include "phpsrc/dbcon.php";

$idx = $_GET['idx'];

$sql = "select * from tnews where idx=$idx;";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);

$pwd = $array["tn_pw"];


?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>탐나는전 뉴스</title>
    <!-- css start -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="images/tamna_favicon.ico" /> 
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/header.css">
    <link type="text/css" rel="stylesheet" href="css/news_write.css">
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
        <!-- tamna news -->
        <div class="tamna_news">
            <h2>NEWS 수정</h2>
            <div class="tamna_news_txt">
                NEWS를 수정해주세요.
            </div>
        </div>

        <!-- tamna news table -->
        <div class="tamna_news_table_box">
            <form action="phpsrc/newsEditOk.php?idx=<?php echo $idx; ?>" method="POST" name="writeform" id="writeform" onsubmit="return editFormCheck()">
                <fieldset class="blind">공지사항 수정</fieldset>
            <table class="tamna_news_table" summary="탐나는전 뉴스 내용수정">
            <caption class="blind">뉴스 수정</caption>
                <thead>
                    <tr class="tamna_news_tableHead">
                        <th class="tamna_news_tableHead_tableNum"><label for="title">글제목</label></th>
                        <th class="tamna_news_write_tableTitle">
                        <input type="text" name="title" id="title" autofocus maxlength="100" value="<?php echo $array['tn_title'] ?>">
                        </th>
                        <th class="tamna_news_tableHead_tableCategory"><label for="category">카테고리</label></th>
                        <th class="tamna_news_write_tableCategory">
                        <select name="category" id="category">
                            <option value="[공지]">[공지]</option>
                            <option value="[이벤트]">[이벤트]</option>
                            <option value="[당첨자발표]">[당첨자발표]</option>
                        </select>
                        </th>
                        <th class="tamna_news_tableHead_tableDate"><label for="date">작성일</label></th>
                        <th class="tamna_news_write_tableDate">
                        <input type="date" name="date" class="readonly" id="date" readonly>
                        </th>
                        <th class="tamna_news_tableHead_tablePwd"><label for="pwd">비밀번호</label></th>
                        <th class="tamna_news_write_tablePwd">
                        <input type="password" name="pwd" id="pwd" maxlength="4" value="">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tamna_news_tableBody">
                        <td class="tamna_news_desc" colspan="8">
                            <label for="desc" class="desc_label">글 입력</label>
                           <textarea name="desc" id="desc" form="writeform">
                           <?php echo $array['tn_desc'] ?>
                           </textarea>
                    </tr>
                </tbody>
            </table>
            <!-- input hidden -->
            <input type="hidden" name="author" id="author" value="관리자">
            <!-- button -->
            <button type="submit" class="button" > 글 수정하기 </button>
            </form>
        </div>
    </main>
    <!-- main end -->

    <!-- footer start -->
    <?php include "footer.php" ?>
    <!-- footer end -->
    <!-- script add -->
    <script type="text/javascript">
    //변수 선언

    function editFormCheck(){

    var pwd = document.getElementById("pwd");

    if(!pwd.value){
        alert("비밀번호를 확인해주세요.");
        pwd.focus();
        return false;
    };
    if(pwd.value != <?php echo $pwd ?>){
        alert("비밀번호가 다릅니다.");
        pwd.focus();
        return false;
    }
    return true;
    };
    </script>

</body>

</html>