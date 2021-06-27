<?php

//DB연결

include "php/inc/dbcon.php";



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
    <link type="text/css" rel="stylesheet" href="css/notice.css">
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/header.css">
    <link type="text/css" rel="stylesheet" href="css/footer.css">
    <!-- css end -->
    <!-- script start -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/gnb.js"></script>
    <script>
        $(function(){
            $('.tamna_notice_tableTitle').click(function () {
                var idx = $('.tamna_notice_tableTitle').index(this);
                //console.log(idx);
            });
        });
    </script>
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

        <!-- tamna notice search -->
        <div class="tamna_notice_search">
            <div class="tamna_notice_search_box">
                <select name="notice_category" id="notice_category" class="tamna_notice_category">
                    <option value="notice_all">전체</option>
                    <option value="notice_title">제목</option>
                    <option value="notice_text">본문</option>
                </select>
                <input type="text" name="notice_search_text" id="notice_search_text" class="tamna_notice_search_text"
                    placeholder="검색어 입력">
                <button type="submit" id="notice_search_submit_btn" class="tamna_notice_search_submit_btn">검색</button>
            </div>
        </div>

        <!-- tamna notice search table -->
        <div class="tamna_notice_table_box">
            <table class="tamna_notice_table">
                    <tr>
                        <th class="tamna_notice_tableHead_tableNum">번호</th>
                        <th class="tamna_notice_tableHead_tableCategory">카테고리</th>
                        <th class="tamna_notice_tableHead_tableTitle">제목</th>
                        <th class="tamna_notice_tableHead_tableDate">작성일</th>
                    </tr>
                    <?php
                    $sql = "select * from tnotice order by idx DESC;";
                    $result = mysqli_query($dbcon, $sql);
                    while ($notice = mysqli_fetch_array($result)){
                    ?>                 
                    <tr class="tableRow" id="tableRow">
                        <td class="tamna_notice_tableNum"><?php echo $notice["idx"]; ?></td>
                        <td class="tamna_notice_tableTitle"><a href="notice_board<?php echo $notice["idx"].".php" ?>"><?php echo $notice["tnt_category"]." ".$notice["tnt_title"]; ?></a></td>
                        <td class="tamna_notice_tableDate"><?php echo $notice["tnt_writedate"]; ?></td>
                    </tr>
                    <?php }; ?>
            </table>
            <!-- tamna notice table paging -->
            <div class="tamna_notice_table_paging">
                <a href="#">1</a>
            </div>
        </div>
    </main>
    <!-- main end -->

    <!-- footer start -->
    <?php include "php/footer.php" ?>
    <!-- footer end -->


</body>

</html>