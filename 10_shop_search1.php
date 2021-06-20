<?php

//DB연결

include "php/inc/dbcon.php";


//쿼리 작성

$sql = "select * from tshops;";


//쿼리 전송

$result = mysqli_query($dbcon, $sql);

//paging : 전체 데이터 개수 구하기
$num = mysqli_num_rows($result);

//paging : 한 페이지 당 글 개수
$list_num = 10;

//paging : 한 블럭 당 페이지 개수
$page_num = 3;

//paging : 현재 페이지
$page = isset($_GET["page"])? $_GET["page"] : 1;

//paging : 전체 페이지 수 = 전체 데이터 / 페이지당 데이터 개수
//ceil : 올림값. 소수점이 나오면 무조건 올림! 
//floor : 내림값. 소수점이 나오면 무조건 내림!
//round : 반올림. 0.4까지 내리고 0.5부터 올린다.
$total_page = ceil($num / $list_num);
//echo $total_page;

//paging : 총 블럭 수 = 전체 페이지 수 / 블럭 당 페이지 수
$total_block = ceil($total_page / $page_num);
//echo $total_block;

//paging : 현재 블럭 번호 = 현재 페이지 번호 / 블록 당 페이지 수
$now_block = ceil($page / $page_num);

//paging : 블럭 당 시작 페이지 번호 = (해당 글의 블럭 번호 - 1) * 블럭 당 페이지 수 + 1;
$s_pageNum = ($now_block - 1) * $page_num + 1;
if ($s_pageNum <= 0){
    $s_pageNum = 1;
};

//paging : 블럭 당 마지막 페이지 번호 = 현재 블럭 번호 * 블럭 당 페이지 수
$e_pageNum = $now_block * $page_num;
//마지막 번호가 전체 페이지 수를 넘지 않도록
if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
};



















?>



<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>탐나는전 가맹점 찾기</title>
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/shop_search1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="images/tamna_favicon.ico" />
</head>

<body>
    <!-- header start -->
    <header id="header" class="header">
        <div class="header_box">
            <h1><a href="#">탐나는전</a></h1>
            <!-- gnb start -->
            <nav class="gnb">
                <h2 class="blind">상단 메뉴</h2>
                <ul>
                    <li class="gnb_info"><a href="#">탐나는전</a>
                        <!-- <ul class="gnb_info_sub">
                            <li><a href="#">탐나는전 소개</a></li>
                            <li><a href="#">탐나는전 혜택</a></li>
                            <li><a href="#">탐나는전 발급방법</a></li>
                        </ul> -->
                    </li>
                    <li class="gnb_personal"><a href="#">개인사용자</a>
                        <!-- <ul class="gnb_personal_sub">
                            <li><a href="#">카드 신청</a></li>
                            <li><a href="#">카드 등록</a></li>
                            <li><a href="#">이용 내역</a></li>
                            <li><a href="#">가맹점 찾기</a></li>
                        </ul> -->
                    </li>
                    <li class="gnb_shop"><a href="#">가맹점</a>
                        <!-- <ul class="gnb_shop_sub">
                            <li><a href="#">가맹점 혜택</a></li>
                            <li><a href="#">가맹점 등록</a></li>
                            <li><a href="#">가맹점 매출확인</a></li>
                            <li><a href="#">홍보물 다운</a></li>
                        </ul> -->
                    </li>
                    <li class="gnb_customer"><a href="#">고객센터</a>
                        <!-- <ul class="gnb_customer_sub">
                            <li><a href="#">공지사항</a></li>
                            <li><a href="#">NEWS</a></li>
                            <li><a href="#">자주묻는질문</a></li>
                            <li><a href="#">문의하기</a></li>
                        </ul> -->
                    </li>
                </ul>
                <a href="#" class="gnb_more">더보기</a>
            </nav>
        </div>
        <!-- <div class="gnb_sub">
            <div class="gnb_sub_box">
                <h3>서브메뉴</h3>
            </div>
        </div> -->
        <!-- gnb end -->
    </header>
    <!-- header end -->

    <!-- main start -->
    <main id="main" class="main">
        <div class="tamna_shop_search">
            <h2>탐나는전 가맹점 찾기</h2>
            <div class="tamna_shop_search_txt">
                제주지역화폐는 소상공인 경쟁력 강화를 위해<br>
                백화점, 대형마트, 일부제외업종 및 일정 기준 매출액 이상의 매장에서 사용이 제한됩니다.<br>
                <span>* 가맹점 폐업 또는 업종변경, 가맹점 정보변경 등으로 현재 정보와 다를 수 있으니 매장에 사용 가능 여부를 확인하기 바랍니다.</span>
            </div>
        </div>

        <div class="tamna_shop_search_box">
            <table class="tamna_shop_search_table">
                <tr>
                    <td class="tamna_table_td"><a href="#">의류/직물/잡화</a></td>
                    <td class="tamna_table_td"><a href="#">일반,휴게음식/식품</a></td>
                    <td class="tamna_table_td"><a href="#">주거생활/내구재</a></td>
                    <td class="tamna_table_td"><a href="#">자동차/주유</a></td>
                    <td class="tamna_table_td"><a href="#">유통</a></td>
                    <td rowspan="2" class="tamna_shop_search_table_rowspan"><a href="#">기타</a></td>
                </tr>
                <tr>
                    <td class="tamna_table_td"><a href="#">여행</a></td>
                    <td class="tamna_table_td"><a href="#">레포츠/문화/취미</a></td>
                    <td class="tamna_table_td"><a href="#">의료/미용</a></td>
                    <td class="tamna_table_td"><a href="#">교육</a></td>
                    <td class="tamna_table_td"><a href="#">서비스</a></td>
                </tr>
            </table>

            <div class="tamna_shop_search_city_box">
                <select class="tamna_shop_search_city">
                    <option value="jejusi">제주시</option>
                    <option value="seogwiposi">서귀포시</option>
                </select>

                <input type="text" name="shopname" id="tamna_shop_search_text_box" placeholder="매장명을 입력해주세요.">
                <p class="tamna_shop_search_city_txt">* 카테고리, 지역, 매장명 중 최소 한 가지를 입력 후 검색 버튼을 눌러주세요.</p>
                <button type="submit" id="tamna_shop_search_btn">검색</button>
            </div>
        </div>
    </main>
    <!-- main end -->

    <!-- footer start -->
    <footer id="footer" class="footer">
        <div class="footer_box">
            <h2><a href="#">탐나는전 업체 정보</a></h2>
            <div class="footer_txt">
                <address>주소 : (63122) 제주특별자치도 제주시 문연로 6(연동)</address>
                <p>대표전화 : 1600-3971 (09:00 ~ 18:00)</p>
                <p>Copyright 2020 제주특별자치도. All rights reserved</p>
            </div>
            <div class="footer_jejugoverment"><a href="#">제주특별자치도 바로가기</a></div>
        </div>
    </footer>
    <!-- footer end -->

</body>

</html>