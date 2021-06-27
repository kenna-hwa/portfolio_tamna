<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>탐나는전 소개</title>
    <!-- css start -->
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/intro.css">    
    <link type="text/css" rel="stylesheet" href="css/header.css">
    <link type="text/css" rel="stylesheet" href="css/footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="images/tamna_favicon.ico" />
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
        <div class="tamna_what_is">
            <h2>탐나는전이란?</h2>
                <div class="tamna_what_is_txt">
                    탐나는전은 지역 내 자본의 역외 유출을 막고, 지역 내 소비촉진을 통한 지역상권보호와 경제 활성화를 위해 제주특별자치도에서 발행하고<br>
                    제주특별자치도 가맹점에서 사용할 수 있는 제주 전용 지역화폐입니다.<br>
                        카드형 충전 시 10% 추가적립 또는 종이형 상품권 구매 시 10% 할인 혜택을 받을 수 있어 더욱 좋아요.
                </div>
                <ul>
                    <li>KB 국민카드</li>
                    <li>코나카드</li>
                    <li>종이형 상품권<br>
                        (5천원, 1만원, 5만원)</li>
                </ul>
        </div>

        <div class="tamna_user_benefit" id="benefit">
            <h2>사용자 혜택</h2>

            <div class="tamna_user_benefit_txt">

                <p>카드형, 모바일형, 종이형 상품권 모두 파격적인 10% 혜택! 연말정산 시 30% 소득공제까지!<br>
                    탐나는 것은 &lt;탐나는전&gt;으로!<br>
                    탐나는전을 통한 지역 소비로 소상공인과 우리 함께 윈윈하는 경제를 만들어가요.</p>

                <p>전통시장 · 읍면 농협 하나로마트 · 농자재판매소 · 주유소 등 제주지역화폐 가맹점으로 등록된 업소 어디서든 사용이 가능합니다.</p>

            </div>
            <ol>
                <li>카드형, 모바일형 충전시 10% 추가 적립
                    최대 월 70만원, 연 500만원 까지</li>

                <li>종이형 상품권 구매시 10% 즉시 할인
                    사용시 현금영수증 발급 가능</li>

                <li>카드형, 모바일형 연말정산 시 소득공제 혜택
                    30% 소득공제, 전통시장은 40%</li>
            </ol>
        </div>

        <div class="tamna_howto" id="howto">
            <h2>탐나는전 발급방법</h2>
            
            <ul class="tamna_howto_tap_menu tab">
                <li class="tamna_howto_KB_title tablinks active" onclick="openTab(event, 'tab1')">KB국민카드 체크카드</li>
                <li class="tamna_howto_Kona_title tablinks" onclick="openTab(event, 'tab2')">선불카드 코나아이</li>
                <li class="tamna_howto_Paper_title tablinks" onclick="openTab(event, 'tab3')">지류(종이상품권)형</li>
            </ul>

           <section id="tab1" class="tamna_howto_KB tabcontent">
            <h3 class="blind">KB</h3>
                <ul>
                    <li>
                        온라인 신청 : KB국민카드
                        <ol>
                            <li class="tamna_howto_KB_on_1"><span>STEP1</span>국민카드 웹,앱에서 '탐나는전'검색<br> (탐나는전 앱에서도 신청 가능)</li>
                            <li class="tamna_howto_KB_on_2"><span>STEP2</span>체크카드와 연동할 계좌 선택 후 카드 신청</li>
                            <li class="tamna_howto_KB_on_3"><span>STEP3</span>배송된 실물카드 '탐나는전 앱'등록</li>
                        </ol>
                    </li>

                    <li>
                        오프라인 신청 : 도내 KB국민은행 영업점 방문
                        <ol>
                            <li class="tamna_howto_KB_off_1"><span>STEP1</span>KB국민은행 영업점 방문</li>
                            <li class="tamna_howto_KB_off_2"><span>STEP2</span>탐나는전 체크카드 발급</li>
                            <li class="tamna_howto_KB_off_3"><span>STEP3</span>'탐나는전 앱'에 등록 및 충전</li>
                        </ol>
                    </li>
                </ul>
            </section>

            <section id="tab2" class="tamna_howto_Kona tabcontent">
                <h3 class="blind">Kona</h3>
            <ul>
                <li>
                    온라인 신청 : 탐나는전 APP
                    <ol>
                        <li class="tamna_howto_Kona_on_1"><span>STEP1</span>앱스토어에서<br> '탐나는전' 검색 후 앱 다운로드</li>
                        <li class="tamna_howto_Kona_on_2"><span>STEP2</span>회원가입 및 원하는 카드 선택 후 배송 신청</li>
                        <li class="tamna_howto_Kona_on_3"><span>STEP3</span>앱에서 배송된 실물카드 등록</li>
                    </ol>
                </li>

                <li>오프라인 신청 : 농협중앙회, 지역 농·축협 본점 및 제주은행
                    <ol>
                        <li class="tamna_howto_Kona_off_1"><span>STEP1</span>영업점 방문</li>
                        <li class="tamna_howto_Kona_off_2"><span>STEP2</span>카드 발급 및 충전</li>
                        <li class="tamna_howto_Kona_off_3"><span>STEP3</span>'탐나는전 앱'에 등록 및 충전</li>
                    </ol>
                </li>
            </ul>
            </section>

            <section id="tab3" class="tamna_howto_paper tabcontent">
                <h3 class="blind">Paper</h3>
                <ul>
                    <li> 오프라인 신청 : 농협중앙회, 지역 농·축협 본점 및 제주은행
                        <ol>
                            <li class="tamna_howto_paper_off_1"><span>STEP1</span>영업점 방문</li>
                            <li class="tamna_howto_paper_off_2"><span>STEP2</span>10% 할인 혜택 받고 지류상품권 구매<br>(5천원, 1만원, 5만원권)</li>
                            <li class="tamna_howto_paper_off_3"><span>STEP3</span>할인혜택 받은 상품권 사용하여<br> 알뜰 소비</li>
                        </ol>
                    </li>
                </ul>
                    <div class="tamna_howto_paper_img">상품권 이미지</div>
                    <div class="tamna_howto_paper_txt">KB 국민은행 외 타행인 신한은행, 농협은행 계좌 등록하여 발급 가능<br>
                        KB페이 및 삼성페이 연동한 간편 사용 가능<br>
                        후불 교통카드 이용 가능</div>
            </section> 

        </div>
        <div class="tamna_howto_button"><a href="apply.html">탐나는전 발급</a></div>
    </main>

    <!-- main end -->

    <!-- footer start -->
    <?php include "php/footer.php" ?>
    <!-- footer end -->
    <!-- script add -->
    <script src="js/intro.js"></script>


</body>

</html>