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
    <title>탐나는전 뉴스</title>
    <!-- css start -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/news.css">
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

    <!-- main start -->
    <main id="main" class="main">
        <!-- tamna news -->
        <div class="tamna_news">
            <h2>탐나는전 News</h2>
            <div class="tamna_news_txt">
                탐나는전의 소식을 가장 먼저 만나보세요.
            </div>
        </div>

        <!-- tamna news search -->
        <div class="tamna_news_search">
        <?php if($s_name === "관리자"){ ?>
            <div class="tamna_news_write_link_wrap"><a class="tamna_news_write_link" href="news_write.php">글쓰기</a>
            </div>
        <?php } ?>
            <div class="tamna_news_search_box">
                <select name="news_category" id="news_category" class="tamna_news_category">
                    <option value="news_all">전체</option>
                    <option value="news_title">제목</option>
                    <option value="news_text">본문</option>
                </select>
                <input type="text" name="news_search_text" id="news_search_text" class="tamna_news_search_text"
                    placeholder="검색어 입력">
                <button type="submit" id="news_search_submit_btn" class="tamna_news_search_submit_btn">검색</button>
            </div>
        </div>

        <!-- tamna news search table -->
        <div class="tamna_news_table_box">
            <table class="tamna_news_table">
            <caption class="blind">뉴스</caption>
                <thead>
                    <tr>
                        <th class="tamna_news_tableHead_tableNum">번호</th>
                        <th class="tamna_news_tableHead_tableTitle">제목</th>
                        <th class="tamna_news_tableHead_tableDate">작성일</th>
                    </tr>   
                    </thead>
                    <tbody>
                    <?php
                    $sql = "select * from tnews order by idx DESC;";
                    $result = mysqli_query($dbcon, $sql);
                    while ($news = mysqli_fetch_array($result)){
                        $idx = $news["idx"];
                    ?>                 
                    <tr class="tableRow" id="tableRow">
                        <td class="tamna_news_tableNum"><?php echo $news["idx"]; ?></td>
                        <td class="tamna_news_tableTitle"><a href="./news_view.php?idx='<?php echo $idx?>'"><?php echo $news["tn_title"]; ?></a></td>
                        <td class="tamna_news_tableDate"><?php echo $news["tn_writedate"]; ?></td>
                    </tr>
                    <?php }; ?>
                    </tbody>
            </table>
            <!-- tamna news table paging -->
            <div class="tamna_news_table_paging">
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