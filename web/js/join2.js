

//변수 선언
var tuName = document.getElementById("tamna_join_username");

var tuGmale = document.getElementById("tamna_join_gender_male");
var tuGfemale = document.getElementById("tamna_join_gender_female");


var tuBirthyear = document.getElementById("tamna_join_birthyear");
var tuBirthmonth = document.getElementById("tamna_join_birthmonth");
var tuBirthday = document.getElementById("tamna_join_birthday");
var tuMobile = document.getElementById('tamna_join_phoneNum');
var tuVerify = document.getElementById('tamna_join_verifyNum');



//인증번호 받기


function verify_Num(){
    
    var tuMobileLength = tuMobile.value.length;

    if(tuMobile.value == "") {
        alert("휴대폰번호를 입력해주세요.");
        tuMobile.focus();
    }else if(tuMobileLength < 8 || tuMobileLength > 11) {
        alert("휴대폰번호를 다시 확인해주세요.");
        tuMobile.focus();
    } else{
        alert("인증번호를 입력해주세요.");
    };

};

//인증번호를 입력하고 인증을 하면 상태 변화가 있어야 하고
//그 상태변화가 있어야 다음 버튼이 눌려야 함!!



//인증번호 확인


function verify_check_Num(){

    var tuVerifyLength = tuVerify.value.length;

    if(tuVerify.value == "") {
        alert("휴대폰으로 발송된 인증번호를 입력해주세요.");
        tuVerify.focus();
        return false;
    }else if(tuVerifyLength <5 || tuVerifyLength > 5) {
        alert("인증번호를 다시 확인해주세요.");
        tuVerify.focus();
        return false;
    }else{
        var conf = confirm("휴대폰 번호가 인증되었습니다.");
    };
};



//입력 검증

function joinFormCheckSecond(){

    if(tuName.value == "") {
        alert("이름을 입력해주세요");
        tuName.focus();
        return false;
    };

    if(!tuGmale.checked && !tuGfemale.checked) {
        alert("성별을 선택해주세요");
        tuGmale.focus();
        return false;
    };

    if(tuBirthyear.value == "none") {
        alert("태어난 년도를 선택해주세요");
        tuBirthyear.focus();
        return false;
    };

    if(tuBirthmonth.value == "none") {
        alert("태어난 월을 선택해주세요");
        tuBirthmonth.focus();
        return false;
    };

    if(tuBirthday.value == "none") {
        alert("태어난 날짜를 선택해주세요");
        tuBirthday.focus();
        return false;
    };

//조건문도 변수에 넣을 수 있나?

    if(tuMobile.value == "") {
        alert("휴대폰번호를 입력해주세요.");
        tuMobile.focus();
        return false;
    };

    var reg = /^[0-9]+$/g;
     
    if (!reg.test(tuMobile.value)) {
        alert("휴대폰번호는 숫자만 입력할 수 있습니다.");
        tuMobile.focus();
        return false;
    };

    var tuMobileLength = tuMobile.value.length;

    if (tuMobileLength < 8 || tuMobileLength > 11) {
        alert("휴대폰번호를 다시 확인해주세요.");
        tuMobile.focus();
        return false;
    };
    if(tuVerify.value == "") {
        alert("인증번호를 입력해주세요.");
        tuVerify.focus();
        return false;
    };

    var tuVerifyLength = tuVerify.value.length;

    if (tuVerifyLength <5 || tuVerifyLength > 5) {
        alert("인증번호를 다시 확인해주세요.");
        tuVerify.focus();
        return false;
    };
    if (conf.value==false){
        alert("휴대폰번호를 인증해주세요.");
        return false;
    };
    return true;
}; 




