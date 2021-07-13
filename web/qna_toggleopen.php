<?php

//세션 inc

include "phpsrc/session.php";

?>

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
        <link rel="shortcut icon" href="../favicon.ico">
    <link rel="apple-touch-icon" href="../favicon.ico" sizes="144x144">
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/header.css">
    <link type="text/css" rel="stylesheet" href="css/qna_toggleopen.css">
    <link type="text/css" rel="stylesheet" href="css/footer.css">
    <!-- css end -->
    <!-- script start -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/gnb.js"></script>
    <script type="text/javascript" charset="utf-8">
    $(function(){

        $('.tamna_qna_a').hide();

        $('.tamna_qna_q').click(function() {
            var idx = $('.tamna_qna_q').index(this);
            $('.tamna_qna_a:eq('+ idx +')').toggle();
            $('.tamna_qna_tableClose:eq('+ idx +')').toggle();
            $('.tamna_qna_tableOpen:eq('+ idx +')').toggle();

        });

    });
    
    </script>
    <!-- script end -->
</head>

<body>
 <!-- header start -->
 <?php include "header.php" ?>
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
                <label for="qna_category" class="blind">검색 범위 선택</label>
                <select name="qna_category" id="qna_category" class="tamna_qna_category">
                    <option value="qna_all">전체</option>
                    <option value="qna_shop">가맹점</option>
                    <option value="qna_personal">개인사용자</option>
                </select>
                <label for="qna_search_text" class="blind">검색어 입력</label>
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
                        <td class="tamna_qna_tableTitle" id="qna1">'탐나는전'을 결제받으면 어떻게 입금처리되나요?</td>
                        <td class="tamna_qna_tableClose">답변 보기</td>
                        <td class="tamna_qna_tableOpen">답변 닫기</td>

                    </tr>
                    <tr class="tamna_qna_a">
                        <td class="tamna_qna_tableMarkerA">A</td>
                        <td class="tamna_qna_tableAnswer" colspan="2">&#8594; 모바일&#8231;카드 결제의 경우 3영업일 이내에 POS단말기에 연결된 계좌로 입금 처리되며, <br>종이상품권형은 은행에서 환전신청 후 5영업일 이내 입금처리 됩니다.</td>
                    </tr>
                    <tr class="tamna_qna_q"> 
                        <td class="tamna_qna_tableMarkerQ">Q</td>
                        <td class="tamna_qna_tableCategory">가맹점</td>
                        <td class="tamna_qna_tableTitle" id="qna2">사업주가 환전을 하려면 어디로(어떻게) 가나요?</td>
                        <td class="tamna_qna_tableClose">답변 보기</td>
                        <td class="tamna_qna_tableOpen">답변 닫기</td>
                    </tr>
                    <tr class="tamna_qna_a">
                        <td class="tamna_qna_tableMarkerA">A</td>
                        <td class="tamna_qna_tableAnswer" colspan="2">&#8594; 제주은행 및 농협중앙회, 지역농축협 본점에서 가능합니다.<br>
                            준비서류 &#8208; &#8301;&#8301;&#8301;개인사업자 &#8282; (대표본인) 신분증 
                            &#8260; (대리인) 대리인 신분증, 위임장, 인감증명 <br> &#8208; &#8301;&#8301;&#8301;&#8301;&#8301;법인사업자 &#8282; (대표본인) 사업자등록증, 법인인감증명 &#8260; (대리인) 대리인신분증, 위임장</td>
                    </tr>
                    <tr class="tamna_qna_q">
                        <td class="tamna_qna_tableMarkerQ">Q</td>
                        <td class="tamna_qna_tableCategory">가맹점</td>
                        <td class="tamna_qna_tableTitle" id="qna3">가맹점이 내야하는 별도의 수수료가 있나요?</td>
                        <td class="tamna_qna_tableClose">답변 보기</td>
                        <td class="tamna_qna_tableOpen">답변 닫기</td>
                    </tr>
                    <tr class="tamna_qna_a">
                        <td class="tamna_qna_tableMarkerA">A</td>
                        <td class="tamna_qna_tableAnswer" colspan="2"><span>&#8594; 소비자에게 제공되는 10% 할인혜택은 도 예산으로 보전하며,<br>가맹점주는 아래 표와 같이 일반적인 체크카드결제에서 발생하는 수수료만 부담합니다. 
                            &#8251; IC칩 카드 결제에 한함</span><br>
                            <table>
                                <tr>
                                    <td>연간매출액</td>
                                    <td>3억 이하</td>
                                    <td>3억 초과 5억 이하</td>
                                    <td>5억 초과 10억 이하</td>
                                    <td>10억 초과 30억 이하</td>
                                    <td>기준</td>
                                </tr>
                                <tr>
                                    <td>수수료율</td>
                                    <td>0.5%</td>
                                    <td>1.0%</td>
                                    <td>1.1%</td>
                                    <td>1.3%</td>
                                    <td>체크카드 <br> (전자 선불카드)</td>
                                </tr>
                            </table>
                        
                        </td>
                    </tr>
                    <tr class="tamna_qna_q">
                        <td class="tamna_qna_tableMarkerQ">Q</td>
                        <td class="tamna_qna_tableCategory">가맹점</td>
                        <td class="tamna_qna_tableTitle">프랜차이즈 사업장을 운영하는데 가맹점으로 신청 가능한가요?</td>
                        <td class="tamna_qna_tableClose">답변 보기</td>
                        <td class="tamna_qna_tableOpen">답변 닫기</td>
                    </tr>
                    <tr class="tamna_qna_a">
                        <td class="tamna_qna_tableMarkerA">A</td>
                        <td class="tamna_qna_tableAnswer" colspan="2">&#8594; 가맹점(자영) 사업자등록 소재지가 제주도인 경우 가능하지만, 직영점은 등록 불가합니다.<br>
                        ex) 프랜차이즈 사업자등록증 상 소재지가 도외로 되어 있는 경우 등록이 거절됩니다.</td>
                    </tr>
                    <tr class="tamna_qna_q">
                        <td class="tamna_qna_tableMarkerQ">Q</td>
                        <td class="tamna_qna_tableCategory">가맹점</td>
                        <td class="tamna_qna_tableTitle">가맹점 등록 신청을 하고 나면 어떤 방식으로 통보받나요?</td>
                        <td class="tamna_qna_tableClose">답변 보기</td>
                        <td class="tamna_qna_tableOpen">답변 닫기</td>
                    </tr>
                    <tr class="tamna_qna_a">
                        <td class="tamna_qna_tableMarkerA">A</td>
                        <td class="tamna_qna_tableAnswer" colspan="2">&#8594; 가맹점 신청분에 한해서 등록 승인 시 SMS안내문자가 발송되며, 스티커 배송은 2주가 소요됩니다.<br>
                        (배부된 스티커는 이용자 눈에 띄기 쉽도록 출입구 밖에 부착)</td>
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
    <?php include "footer.php" ?>
    <!-- footer end -->


</body>

</html>