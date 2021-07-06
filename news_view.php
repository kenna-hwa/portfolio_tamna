<?php


//세션 inc
include "phpsrc/session.php";

//DB연결

include "phpsrc/dbcon.php";
$idx = $_GET['idx'];

$sql = "select * from tnews where idx=$idx;";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);

// $no = $idx;

// echo "현재".$no;

// $nextsql = "select * from tnews where idx < $no order by $no desc limit 1;";

// $nextresult = mysqli_query($dbcon, $nextsql);
// $arraynext = mysqli_fetch_array($nextresult);
 
// $nextidx = $arraynext["idx"];

// $nextlen = isset($arraynext["idx"]) ? $arraynext["idx"] : 0;

// echo "다음글".$nextidx;


// $prevsql = "select * from tnews where idx > $no order by $no asc limit 1;";

// $prevresult = mysqli_query($dbcon, $prevsql);
// $arrayprev = mysqli_fetch_array($prevresult);
 
// $previdx = $arrayprev["idx"];

// $prevlen = isset($arrayprev["idx"]) ? $arrayprev["idx"] : 0;

// echo "이전글".$previdx;


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
    <link type="text/css" rel="stylesheet" href="css/news_view.css">
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
        <!-- tamna news -->
        <div class="tamna_news">
            <h2>탐나는전 뉴스</h2>
            <div class="tamna_news_txt">
                탐나는전에서 알려드립니다.
            </div>
        </div>


        <!-- tamna news search table -->
        <div class="tamna_news_table_box">
            <table class="tamna_news_table">
                    <tr class="tamna_news_tableHead">
                        <th class="tamna_news_tableHead_tableNum"><?php echo $idx; ?></th>
                        <th class="tamna_news_tableHead_tableTitle"><?php echo $array["tn_title"]; ?></th>
                        <th class="tamna_news_tableHead_tableDate"><?php echo $array["tn_writedate"]; ?></th>
                    </tr>
                    <tr class="tamna_news_tableBody">
                        <td class="tamna_news_decs" colspan="4">
                            
                           <?php echo $array["tn_desc"]; ?>
 
                    </tr>
                    <!-- <tr class="tamna_news_tableNext">
                        <td class="tamna_news_next">다음글</td>
                        <td class="tamna_news_next_title" colspan="2">
                        <?php 
                            //if($nextlen != '0'){
                             ?>
                                <a href="./news_view.php?idx="<?php //echo $arraynext["idx"] ?>>
                                <?php//echo $arraynext["tnt_category"]." ".$arraynext["tnt_title"]; ?>
                                </a>
                            <?php
                            //}else if($nextlen === '0'){
                            //    echo "다음글이 없습니다.";
                            //}
                            ?>
                        </a></td>
                    </tr>                     -->
                    <!-- <tr class="tamna_news_tablePrev">
                        <td class="tamna_news_prev">이전글</td>
                        <td class="tamna_news_prev_title" colspan="2"><?php 
                            //if($prevlen != 0){
                            //    echo $previdx;
                             ?>
                                <a href="./news_view.php?idx="<?php //echo $arrayprev["idx"]; ?>>
                                <?php //echo $arrayprev["tnt_category"]." ".$arrayprev["tnt_title"]; ?>
                                </a>
                            <?php
                            //}else if($prevlen === 0){
                            //    echo "이전글이 없습니다.";
                            //}
                            ?></td>
                    </tr> -->
            </table>
            <?php
            if($s_name === "관리자"){
            ?> 
            <div class="tamna_news_edit_del">
                <div class="tamna_news_del"><a href="phpsrc/newsdelOk.php?idx=<?php echo $idx ?>" onclick="del_write()">삭제</a></div>
                <div class="tamna_news_edit"><a href="news_edit.php?idx=<?php echo $idx; ?>">수정</a></div>
            </div>
            <?php
            }
            ?>   
        </div>
    </main>
    <!-- main end -->

    <!-- footer start -->
    <?php include "footer.php" ?>
    <!-- footer end -->
    <!-- script add -->
    <script type="text/javascript">
    function del_write(){
        var chk = confirm("글을 삭제하시겠습니까?");
        if(chk == ture){
            location.href="phpsrc/newsdelOk.php?idx=<?php echo $idx ?>";
        };
    }
    </script>

</body>

</html>