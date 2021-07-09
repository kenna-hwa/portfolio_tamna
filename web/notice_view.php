<?php

//세션 inc

include "phpsrc/session.php";

//DB연결

include "phpsrc/dbcon.php";
$idx = $_GET['idx'];

$sql = "select * from tnotice where idx=$idx;";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);

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
    <link type="text/css" rel="stylesheet" href="css/notice_view.css">
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
                        <th class="tamna_notice_tableHead_tableNum"><?php echo $array["idx"];  ?></th>
                        <th class="tamna_notice_tableHead_tableTitle"><?php echo $array["tnt_title"]; ?></th>
                        <th class="tamna_notice_tableHead_tableDate"><?php echo $array["tnt_writedate"]; ?></th>
                    </tr>
                    <tr class="tamna_notice_tableBody">
                        <td class="tamna_notice_decs" colspan="4">
                           <?php echo $array["tnt_desc"]; ?>
                    </tr>
            </table>
            
            <div class="tamna_notice_edit_del">
                <div class="tamna_notice_list"><a href="notice.php">글목록</a></div>
                
            <?php
            if($s_name === "관리자"){
            ?> 
                <div class="tamna_notice_del"><a href="#" onclick='del(<?php echo $array["idx"]; ?>)'>삭제</a></div>
                <div class="tamna_notice_edit"><a href="notice_edit.php?idx=<?php echo $idx; ?>">수정</a></div>
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
                location.href="phpsrc/noticedelOk.php?idx="+idx;
            };
        };
    </script>
</body>

</html>