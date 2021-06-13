


//변수 선언
//checkbox
var checkAll = document.querySelector("#chkbox_all");
var checkTwo = document.querySelector("#chkbox_2");
var checkThree = document.querySelector('#chkbox_3');
var checkFour = document.querySelector('#chkbox_4');
var checkFive = document.querySelector('#chkbox_5');
var checkSix = document.querySelector('#chkbox_6');
var checkSeven = document.querySelector('#chkbox_7');
var checkEight = document.querySelector('#chkbox_8');
var checkNine = document.querySelector('#chkbox_9');
var checkTen = document.querySelector('#chkbox_10');
var checkEleven = document.querySelector('#chkbox_11');
var checkChoice = document.querySelector('#chkbox_12');

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




