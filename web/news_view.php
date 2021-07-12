<?php


//세션 inc
include "phpsrc/session.php";

//DB연결

include "phpsrc/dbcon.php";
$idx = $_GET['idx'];

$sql = "select * from tnews where idx=$idx;";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);

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
    <link type="text/css" rel="stylesheet" href="css/news_view.css">
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
            <h2>탐나는전 뉴스</h2>
            <div class="tamna_news_txt">
                탐나는전에서 알려드립니다.
            </div>
        </div>


        <!-- tamna news search table -->
        <div class="tamna_news_table_box">
            <table class="tamna_news_table" summary="탐나는전 뉴스 내용보기">
            <caption class="blind">뉴스 내용</caption>
                    <tr class="tamna_news_tableHead">
                        <th class="tamna_news_tableHead_tableNum"><?php echo $array["idx"]; ?></th>
                        <th class="tamna_news_tableHead_tableTitle"><?php echo $array["tn_title"]; ?></th>
                        <th class="tamna_news_tableHead_tableDate"><?php echo $array["tn_writedate"]; ?></th>
                    </tr>
                    <tr class="tamna_news_tableBody">
                        <td class="tamna_news_decs" colspan="4">
                            
                           <?php echo $array["tn_desc"]; ?>
 
                    </tr>
            </table>
            <div class="tamna_news_edit_del">
                <div class="tamna_news_list"><a href="news.php">글목록</a></div>
                
            <?php
            if($s_name === "관리자"){
            ?> 
                <div class="tamna_news_del"><a href="#" onclick='del(<?php echo $array["idx"]; ?>)'>삭제</a></div>
                <div class="tamna_news_edit"><a href="news_edit.php?idx=<?php echo $idx; ?>">수정</a></div>
                </div>
            <?php
            }
            ?>       
            </div>     
        </div>
    </main>
    <!-- main end -->

    <!-- footer start -->
    <?php include "footer.php" ?>
    <!-- footer end -->
    <!-- script add -->
    <script type="text/javascript">
    function del(idx){
        var ck = confirm("글을 삭제하시겠습니까?");
            if(ck == true){
                location.href="phpsrc/newsdelOk.php?idx="+idx;
            };
    }
    </script>

</body>

</html>