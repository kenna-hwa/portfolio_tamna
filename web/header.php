<?php 

$s_idx = isset($_SESSION["session_idx"])? $_SESSION["session_idx"] : ""; 
$s_id = isset($_SESSION["session_id"])? $_SESSION["session_id"] : ""; 
$s_name = isset($_SESSION["session_name"])? $_SESSION["session_name"] : ""; 

if($s_id){ ?>

<script type="text/javascript" charset="utf-8">
function log_out(){
    var ck = confirm("로그아웃 하시겠습니까?")
    if(ck == true) {
        location.href="phpsrc/logoutOk.php";
    };
}
</script>
<?php }; ?>

    <header id="header" class="header">
        <div class="header_box">
            <h1><a href="index.php" class="topmenu" title="메인">탐나는전</a></h1>
            <!-- gnb start -->
            <nav class="gnb" id="topwrap">
                <h2 class="blind">상단 메뉴</h2>
                <ul>
                    <li class="gnb_info"><a href="intro.php" class="topmenu" title="탐나는전 안내">탐나는전</a>
                        <ul class="gnb_info_sub sub">
                            <li><a href="intro.php#main" title="탐나는전 소개">탐나는전 소개</a></li>
                            <li><a href="intro.php#benefit" title="탐나는전 혜택">탐나는전 혜택</a></li>
                            <li><a href="intro.php#howto" title="탐나는전 발급방법">탐나는전 발급방법</a></li>
                        </ul>
                    </li>
                    <li class="gnb_personal"><a href="signin.php" class="topmenu" title="개인사용자 메뉴">개인사용자</a>
                        <ul class="gnb_personal_sub sub">
                            <li><a href="apply.php" title="카드 신청">카드 신청</a></li>
                            <li><a href="mycardapply.php" title="카드 등록">카드 등록</a></li>
                            <li><a href="payment_view.php" title="이용 내역">이용 내역</a></li>
                            <li><a href="shop_search1.php" title="가맹점 찾기">가맹점 찾기</a></li>
                        </ul>
                    </li>
                    <li class="gnb_shop"><a href="shop_benefit.php" class="topmenu" title="가맹점 메뉴">가맹점</a>
                        <ul class="gnb_shop_sub sub">
                            <li><a href="shop_benefit.php" title="가맹점 혜택">가맹점 혜택</a></li>
                            <li><a href="shop_apply.php" title="가맹점 등록">가맹점 등록</a></li>
                            <li><a href="shop_revenue.php" title="가맹점 매출확인">가맹점 매출확인</a></li>
                            <li><a href="shop_download.php" title="홍보물 다운">홍보물 다운</a></li>
                        </ul>
                    </li>
                    <li class="gnb_customer"><a href="notice.php" class="topmenu" title="고객센터">고객센터</a>
                        <ul class="gnb_customer_sub sub">
                            <li><a href="notice.php" title="공지사항">공지사항</a></li>
                            <li><a href="news.php" title="NEWS">NEWS</a></li>
                            <li><a href="qna_toggleopen.php" title="자주묻는질문">자주묻는질문</a></li>
                            <li><a href="contact.php" title="문의하기">문의하기</a></li>
                        </ul>
                    </li>
                </ul>
                <a href="#" class="gnb_more topmenu">더보기</a>
                <ul class="gnb_signin_join_wrap">
                <?php 
                if(!$s_id){ ?>
                    <li class="gnb_signin"><a href="signin.php" title="로그인" class="gnb_signin_link">로그인</a></li>
                    <li class="gnb_join"><a href="join.php" title="회원가입" class="gnb_join_link">회원가입</a></li>
                <?php } else { ?>
                    <li class="gnb_signout"><a href="#" title="로그아웃" class="gnb_signin_link" onclick="log_out()">로그아웃</a></li>
                    <li class="gnb_join"><a href="mypage.php?idx=<?php echo $s_idx; ?>" title="마이페이지" class="gnb_join_link">마이페이지</a></li>
                <?php }; ?>
                </ul>
            </nav>
        </div>
        <div class="gnb_sub_box">
            <div class="gnb_sub">
                <h3>서브메뉴</h3>
            </div>
        </div>
        <!-- gnb end -->
    </header>
