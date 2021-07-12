<?php

//세션 inc

include "phpsrc/session.php";

//DB연결

include "phpsrc/dbcon.php";

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
    <link rel="shortcut icon" href="images/tamna_favicon.ico" /> 
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/header.css">
    <link type="text/css" rel="stylesheet" href="css/notice.css">
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

        <!-- tamna notice search -->
        <div class="tamna_notice_search">
        <?php
        if($s_name === "관리자"){
        ?>
            <div class="tamna_notice_write_link_wrap"><a class="tamna_notice_write_link" href="notice_write.php">글쓰기</a></div>
        <?php } ?>
            <div class="tamna_notice_search_box">
                <label for="notice_category" class="blind">검색 범위 선택</label>
                <select name="notice_category" id="notice_category" class="tamna_notice_category">
                    <option value="notice_all">전체</option>
                    <option value="notice_title">제목</option>
                    <option value="notice_text">본문</option>
                </select>
                <label for="notice_search_text" class="blind">검색어 입력</label>
                <input type="text" name="notice_search_text" id="notice_search_text" class="tamna_notice_search_text"
                    placeholder="검색어 입력">
                <button type="submit" id="notice_search_submit_btn" class="tamna_notice_search_submit_btn">검색</button>
            </div>
        </div>

        <!-- tamna notice search table -->
        <div class="tamna_notice_table_box">
            <table class="tamna_notice_table" summary="탐나는전 공지사항 글번호 제목 작성일">
			    <caption class="blind">공지사항</caption>
                <thead>
                    <tr>
                        <th class="tamna_notice_tableHead_tableNum">번호</th>
                        <th class="tamna_notice_tableHead_tableTitle">제목</th>
                        <th class="tamna_notice_tableHead_tableDate">작성일</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from tnotice order by idx DESC;";
                    $result = mysqli_query($dbcon, $sql);
                    while ($notice = mysqli_fetch_array($result)){
                        $idx = $notice["idx"];
                    ?>                 
                    <tr class="tableRow" id="tableRow">
                        <td class="tamna_notice_tableNum"><?php echo $notice["idx"]; ?></td>
                        <td class="tamna_notice_tableTitle"><a href="./notice_view.php?idx='<?php echo $idx?>'"><?php echo $notice["tnt_category"]." ".$notice["tnt_title"]; ?></a></td>
                        <td class="tamna_notice_tableDate"><?php echo $notice["tnt_writedate"]; ?></td>
                    </tr>
                    <?php }; ?>
                    </tbody>
            </table>
            <!-- tamna notice table paging -->
            <div class="tamna_notice_table_paging">
                <a href="#">1</a>
            </div>
        </div>
    </main>
    <!-- main end -->

    <!-- footer start -->
    <?php include "footer.php" ?>
    <!-- footer end -->


</body>

</html>