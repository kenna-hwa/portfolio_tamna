
<?php 

$chk = $_POST["chkbox12"];

 ?>


<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>탐나는전 회원가입</title>
    <!-- css start -->
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/join2.css">
        <link type="text/css" rel="stylesheet" href="css/header.css">
    <link type="text/css" rel="stylesheet" href="css/footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="images/tamna_favicon.ico" />
    <!-- css end -->
    <!-- script start -->
    <script src="js/join2.js"></script>
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
    <!-- tamna join -->
    <div class="tamna_join">

        <h2>회원가입</h2>
        <div class="tamna_join_txt">
            아래의 회원가입 정보를 입력해주세요.
        </div>

        <!-- tamna join order -->
        <div class="tamna_join_order">
            <ol>
                <li class="tamna_join_order1"><a href="#">약관동의</a></li>
                <li  class="tamna_join_order2"><a href="#">회원정보 입력</a></li>
                <li  class="tamna_join_order3"><a href="#">가입완료</a></li>
            </ol>
        </div>
        <!-- tamna join order end -->
        <!-- tamna join end -->
    </div>
        <!-- tamna input form -->
        <div class="tamna_input_form">
        <form name="join2" action="join3.php" method="post" onsubmit="return joinFormCheckSecond()">
        <fieldset>
        <legend class="blind"> 회원가입 </legend>
        <!-- hidden-join1 start -->
        <input type="hidden" name="chkbox" value="<?php echo $chk ?>">
        <!-- hidden-join1 end -->

            <!-- username -->
            <div class="tamna_join_username_box">
                <label for="tamna_join_username" class="tamna_join_username_label">이름</label>
                <input type="text" name="username" id="tamna_join_username" placeholder="이름을 입력하세요">
            </div>

            <!-- gender -->
            <div class="tamna_join_gender_box">
                <label for="tamna_join_gender_male" class="tamna_join_gender_label">성별</label>



                <div class="tamna_join_gender_male_box">
                    <input type="radio" name="gender" id="tamna_join_gender_male" value="m">
                    <label for="tamna_join_gender_male" class="tamna_join_gender_male_label"><span class="tamna_join_gender_male_label_txt">남</span></label>
                </div>

                <div class="tamna_join_gender_female_box">
                    <input type="radio" name="gender" id="tamna_join_gender_female" value="f">
                    <label for="tamna_join_gender_female" class="tamna_join_gender_female_label"><span class="tamna_join_gender_female_label_txt">여</span></label>
                </div>
            </div>


            <div class="tamna_join_birth_box">
            <label for="tamna_join_birthyear" class="tamna_join_birth_label">생년월일</label>
                <select name="birthyear" id="tamna_join_birthyear">
                    <option value="none">년도</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>
                    <option value="2003">2003</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                    <option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
                    <option value="1994">1994</option>
                    <option value="1993">1993</option>
                    <option value="1992">1992</option>
                    <option value="1991">1991</option>
                    <option value="1990">1990</option>
                    <option value="1989">1989</option>
                    <option value="1988">1988</option>
                    <option value="1987">1987</option>
                    <option value="1986">1986</option>
                    <option value="1985">1985</option>
                    <option value="1984">1984</option>
                    <option value="1983">1983</option>
                    <option value="1982">1982</option>
                    <option value="1981">1981</option>
                    <option value="1980">1980</option>
                    <option value="1979">1979</option>
                    <option value="1978">1978</option>
                    <option value="1977">1977</option>
                    <option value="1976">1976</option>
                    <option value="1975">1975</option>
                    <option value="1974">1974</option>
                    <option value="1973">1973</option>
                    <option value="1972">1972</option>
                    <option value="1971">1971</option>
                    <option value="1970">1970</option>
                    <option value="1969">1969</option>
                    <option value="1968">1968</option>
                    <option value="1967">1967</option>
                    <option value="1966">1966</option>
                    <option value="1965">1965</option>
                    <option value="1964">1964</option>
                    <option value="1963">1963</option>
                    <option value="1962">1962</option>
                    <option value="1961">1961</option>
                    <option value="1960">1960</option>
                    <option value="1959">1959</option>
                    <option value="1958">1958</option>
                    <option value="1957">1957</option>
                    <option value="1956">1956</option>
                    <option value="1955">1955</option>
                    <option value="1954">1954</option>
                    <option value="1953">1953</option>
                    <option value="1952">1952</option>
                    <option value="1951">1951</option>
                    <option value="1950">1950</option>
                    <option value="1949">1949</option>
                    <option value="1948">1948</option>
                    <option value="1947">1947</option>
                    <option value="1946">1946</option>
                    <option value="1945">1945</option>
                    <option value="1944">1944</option>
                    <option value="1943">1943</option>
                    <option value="1942">1942</option>
                    <option value="1941">1941</option>
                    <option value="1940">1940</option>
                    <option value="1939">1939</option>
                    <option value="1938">1938</option>
                    <option value="1937">1937</option>
                    <option value="1936">1936</option>
                    <option value="1935">1935</option>
                    <option value="1934">1934</option>
                    <option value="1933">1933</option>
                    <option value="1932">1932</option>
                    <option value="1931">1931</option>
                    <option value="1930">1930</option>
                    <option value="1929">1929</option>
                    <option value="1928">1928</option>
                    <option value="1927">1927</option>
                    <option value="1926">1926</option>
                    <option value="1925">1925</option>
                    <option value="1924">1924</option>
                    <option value="1923">1923</option>
                    <option value="1922">1922</option>
                    <option value="1921">1921</option>
                </select>
                <select id="tamna_join_birthmonth" name="birthmonth">
                    <option value="none">월</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                <select id="tamna_join_birthday" name="birthday">
                    <option value="none">일</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>                       
            </div>
            <!-- phoneNum -->
            <div class="tamna_join_phoneNum_box">
                <label for="tamna_join_phoneNum" class="tamna_join_phoneNum_label">휴대폰번호</label>
                <input type="text" name="phoneNum" id="tamna_join_phoneNum" placeholder="- 없이 입력해주세요">
                <button type="button" class="tamna_join_phoneNum_btn" onclick="verify_Num()">인증번호 받기</button>
            </div>

            <!-- verifyNum -->
            <div class="tamna_join_verifyNum_box">
                <label for="tamna_join_verifyNum" class="tamna_join_verifyNum_label">인증번호</label>
                <input type="text" name="verifyNum" id="tamna_join_verifyNum" placeholder="인증번호를 입력하세요">
                <button type="button" class="tamna_join_verifyNum_btn" onclick="verify_check_Num()">인증번호 확인</button>
            </div>
            <!-- tamna input form end -->
            <button type="submit" value="next" class="tamna_join_next_btn">다&nbsp;&nbsp;&nbsp;음</button>
            <!-- tamna join next btn end -->
            </fieldset>
            </form>
        </div>
    </main>
    <!-- main end -->
    
    <!-- footer start -->
    <?php include "php/footer.php" ?>
    <!-- footer end -->


    <!-- script start -->
    <script type="text/javascript" src="js/join2.js"></script>
    <!-- script end -->



</body>

</html>