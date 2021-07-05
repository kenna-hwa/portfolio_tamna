<?php

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
    <link type="text/css" rel="stylesheet" href="css/notice_write.css">
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
            <h2>공지사항 작성</h2>
            <div class="tamna_notice_txt">
                공지사항을 작성해주세요.
            </div>
        </div>


        <!-- tamna notice table -->
        <div class="tamna_notice_table_box">
            <form action="php/writeOk.php" method="POST" name="writeform" id="writeform">
                <fieldset class="blind">공지사항 작성</fieldset>
            <table class="tamna_notice_table">
                <thead>
                    <tr class="tamna_notice_tableHead">
                        <th class="tamna_notice_tableHead_tableNum"><label for="title">글제목</label></th>
                        <th class="tamna_notice_write_tableTitle">
                        <input type="text" name="title" id="title" autofocus maxlength="100">
                        </th>
                        <th class="tamna_notice_tableHead_tableCategory"><label for="category">카테고리</label></th>
                        <th class="tamna_notice_write_tableCategory">
                        <select name="category" id="category">
                            <option value="[공지]">[공지]</option>
                            <option value="[이벤트]">[이벤트]</option>
                            <option value="[당첨자발표]">[당첨자발표]</option>
                        </select>
                        </th>
                        <th class="tamna_notice_tableHead_tableDate"><label for="date">작성일</label></th>
                        <th class="tamna_notice_write_tableDate">
                        <input type="date" name="date" id="date">
                        </th>
                        <th class="tamna_notice_tableHead_tablePwd"><label for="pwd">비밀번호</label></th>
                        <th class="tamna_notice_write_tablePwd">
                        <input type="password" name="pwd" id="pwd" maxlength="4">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tamna_notice_tableBody">
                        <td class="tamna_notice_desc" colspan="8">
                            <label for="desc" class="desc_label">글 입력</label>
                           <textarea name="desc" id="desc" form="writeform"></textarea>
                    </tr>
                </tbody>
            </table>
            <!-- input hidden -->
            <input type="hidden" name="author" id="author" value="관리자">
            <!-- button -->
            <button type="submit" class="button"> 글 작성하기 </button>
            </form>
        </div>
    </main>
    <!-- main end -->

    <!-- footer start -->
    <?php include "php/footer.php" ?>
    <!-- footer end -->


</body>

</html>