<?php

//DB연결

include "php/inc/dbcon.php";

$idx = $_GET["page_num"];
$text = $_GET["page_desc"];
$title = $_GET["page_title"];
$date = $_GET["page_writedate"];

?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>탐나는전 공지사항</title>
    <!-- css start -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/notice_board.css">
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
        <!-- tamna notice -->
        <div class="tamna_notice">
            <h2>탐나는전 공지사항</h2>
            <div class="tamna_notice_txt">
                탐나는전에서 알려드립니다.
            </div>
        </div>


        <!-- tamna notice search table -->
        <div class="tamna_notice_table_box">
            <table class="tamna_notice_table">
                    <tr class="tamna_notice_tableHead">
                        <th class="tamna_notice_tableHead_tableNum"><?php echo $idx; ?></th>
                        <th class="tamna_notice_tableHead_tableTitle"><?php echo $title; ?></th>
                        <th class="tamna_notice_tableHead_tableDate"><?php echo $date; ?></th>
                    </tr>
                    <tr class="tamna_notice_tableBody">
                        <td class="tamna_notice_decs" colspan="4">
                            
                           <?php echo $text; ?>
 
                    </tr>
                    <tr class="tamna_notice_tableNext">
                        <td class="tamna_notice_next" colspan="2">다음글</td>
                        <td class="tamna_notice_next_title" colspan="2"><a href="#">
                            
                             <?php echo $title; ?>
                        
                        </a></td>
                    </tr>                    
                    <tr class="tamna_notice_tablePrev">
                        <td class="tamna_notice_prev" colspan="2">이전글</td>
                        <td class="tamna_notice_prev_title" colspan="2"><a href="#"><?php echo $title; ?></a></td>
                    </tr>
            </table>

        </div>
    </main>
    <!-- main end -->

    <!-- footer start -->
    <?php include "php/footer.php" ?>
    <!-- footer end -->


</body>

</html>