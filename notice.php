<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>탐나는전 공지사항</title>
    <!-- css start -->
    <link type="text/css" rel="stylesheet" href="css/notice.css">
    <link rel="shortcut icon" href="images/tamna_favicon.ico" />
    <!-- css end -->
    <!-- script start -->
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
                    <tr>
                        <td class="tamna_notice_tableNum">4</td>
                        <td class="tamna_notice_tableCategory">이벤트</td>
                        <td class="tamna_notice_tableTitle"><a href="#">[당첨자발표] 탐나는전 인증 이벤트</a></td>
                        <td class="tamna_notice_tableDate">2021-02-24</td>
                    </tr>
                    <tr>
                        <td class="tamna_notice_tableNum">3</td>
                        <td class="tamna_notice_tableCategory">이벤트</td>
                        <td class="tamna_notice_tableTitle"><a href="#">[이벤트] 탐나는전 인증 이벤트</a></td>
                        <td class="tamna_notice_tableDate">2021-02-17</td>
                    </tr>
                    <tr>
                        <td class="tamna_notice_tableNum">2</td>
                        <td class="tamna_notice_tableCategory">공지사항</td>
                        <td class="tamna_notice_tableTitle"><a href="#">[공지] 탐나는전 부정유통 일제단속기간 운영 안내</a></td>
                        <td class="tamna_notice_tableDate">2021-02-08</td>
                    </tr>
                    <tr>
                        <td class="tamna_notice_tableNum">1</td>
                        <td class="tamna_notice_tableCategory">공지사항</td>
                        <td class="tamna_notice_tableTitle"><a href="#">[공지] '탐나는전' 이란?</a></td>
                        <td class="tamna_notice_tableDate">2021-02-08</td>
                    </tr>
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