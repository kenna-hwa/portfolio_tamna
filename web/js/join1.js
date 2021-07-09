


//변수 선언
//checkbox
var checkAll = document.getElementById("chkbox_all");
var checkTwo = document.getElementById("chkbox_2");
var checkThree = document.getElementById('chkbox_3');
var checkFour = document.getElementById('chkbox_4');
var checkFive = document.getElementById('chkbox_5');
var checkSix = document.getElementById('chkbox_6');
var checkSeven = document.getElementById('chkbox_7');
var checkEight = document.getElementById('chkbox_8');
var checkNine = document.getElementById('chkbox_9');
var checkTen = document.querySelector('chkbox_10');
var checkEleven = document.getElementById('chkbox_11');
var checkChoice = document.getElementById('chkbox_12');



//전체 선택


checkAll.addEventListener('click', function(){
var checkOpt = document.querySelectorAll(".checkinput");
var allchk = document.querySelector("#chkbox_all");

for (var i = 0; i < checkOpt.length; i++) {
checkOpt[i].checked = allchk.checked;
      };
}, false);



//선택 검증

function joinFormCheckFirst() {

//필수 선택
    if(!checkTwo.checked){
        alert("필수 약관에 동의하셔야 가입이 가능합니다.");
        checkTwo.focus();
        return false;
    };
    if(!checkThree.checked){
        alert("필수 약관에 동의하셔야 가입이 가능합니다.");
        checkThree.focus();
        return false;
    };
    if(!checkFour.checked){
        alert("필수 약관에 동의하셔야 가입이 가능합니다.");
        checkFour.focus();
        return false;
    };
    if(!checkFive.checked){
        alert("필수 약관에 동의하셔야 가입이 가능합니다.");
        checkFive.focus();
        return false;
    };
    if(!checkSix.checked){
        alert("필수 약관에 동의하셔야 가입이 가능합니다.");
        checkSix.focus();
        return false;
    };
    if(!checkSeven.checked){
        alert("필수 약관에 동의하셔야 가입이 가능합니다.");
        checkSeven.focus();
        return false;
    };
    if(!checkEight.checked){
        alert("필수 약관에 동의하셔야 가입이 가능합니다.");
        checkEight.focus();
        return false;
    };
    if(!checkNine.checked){
        alert("필수 약관에 동의하셔야 가입이 가능합니다.");
        checkNine.focus();
        return false;
    };
    if(!checkTen.checked){
        alert("필수 약관에 동의하셔야 가입이 가능합니다.");
        checkTen.focus();
        return false;
    };
    if(!checkEleven.checked){
        alert("필수 약관에 동의하셔야 가입이 가능합니다.");
        checkEleven.focus();
        return false;
    };
//선택 선택




return true;


};




