<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>탐나는전 자주묻는질문</title>
    <!-- css start -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="images/tamna_favicon.ico" /> 
    <link type="text/css" rel="stylesheet" href="css/qna_toggleclose.css">
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
        <div class="tamna_qna">
            <h2>탐나는전 자주묻는질문</h2>
            <div class="tamna_qna_txt">
                탐나는전에 대한 궁금증! 여기에 다 모였다!
            </div>
        </div>

        <!-- tamna notice search -->
        <div class="tamna_qna_search">
            <div class="tamna_qna_search_box">
                <select name="qna_category" id="qna_category" class="tamna_qna_category">
                    <option value="qna_all">전체</option>
                    <option value="qna_shop">가맹점</option>
                    <option value="qna_personal">개인사용자</option>
                </select>
                <input type="text" name="qna_search_text" id="qna_search_text" class="tamna_qna_search_text"
                    placeholder="검색어 입력">
                <button type="submit" id="qna_search_submit_btn" class="tamna_qna_search_submit_btn">검색</button>
            </div>
        </div>

        <!-- tamna qna search table -->
        <div class="tamna_qna_table_box">
            <table class="tamna_qna_table">
                    <tr class="tamna_qna_q">
                        <td class="tamna_qna_tableMarkerQ">Q</td>
                        <td class="tamna_qna_tableCategory">가맹점</td>
                        <td class="tamna_qna_tableTitle"><a href="#">'탐나는전'을 결제받으면 어떻게 입금처리되나요?</a></td>
                        <td class="tamna_qna_tableOpen"><a href="#">답변 보기</a></td>
                    </tr>
                    <tr class="tamna_qna_q"> 
                        <td class="tamna_qna_tableMarkerQ">Q</td>
                        <td class="tamna_qna_tableCategory">가맹점</td>
                        <td class="tamna_qna_tableTitle"><a href="#">사업주가 환전을 하려면 어디로(어떻게) 가나요?</a></td>
                        <td class="tamna_qna_tableOpen"><a href="#">답변 보기</a></td>
                    </tr>
                    <tr class="tamna_qna_q">
                        <td class="tamna_qna_tableMarkerQ">Q</td>
                        <td class="tamna_qna_tableCategory">가맹점</td>
                        <td class="tamna_qna_tableTitle"><a href="#">가맹점이 내야하는 별도의 수수료가 있나요?</a></td>
                        <td class="tamna_qna_tableOpen"><a href="#">답변 보기</a></td>
                    </tr>
                    <tr class="tamna_qna_q">
                        <td class="tamna_qna_tableMarkerQ">Q</td>
                        <td class="tamna_qna_tableCategory">가맹점</td>
                        <td class="tamna_qna_tableTitle"><a href="#">프랜차이즈 사업장을 운영하는데 가맹점으로 신청 가능한가요?</a></td>
                        <td class="tamna_qna_tableOpen"><a href="#">답변 보기</a></td>
                    </tr>
                    <tr class="tamna_qna_q">
                        <td class="tamna_qna_tableMarkerQ">Q</td>
                        <td class="tamna_qna_tableCategory">가맹점</td>
                        <td class="tamna_qna_tableTitle"><a href="#">가맹점 등록 신청을 하고 나면 어떤 방식으로 통보받나요?</a></td>
                        <td class="tamna_qna_tableOpen"><a href="#">답변 보기</a></td>
                    </tr>
            </table>
            <!-- tamna qna table paging -->
            <div class="tamna_qna_table_paging">
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
            </div>
        </div>
    </main>
    <!-- main end -->

    <!-- footer start -->
    <?php include "php/footer.php" ?>
    <!-- footer end -->


</body>

</html>