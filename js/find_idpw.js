

//변수 선언
var tuid = document.getElementById('tamna_find_userid');
var tuName = document.getElementById("tamna_join_username");
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
        alert("인증번호를 입력해주세요.");
        tuVerify.focus();
        return false;
    }else if(tuVerifyLength <5 || tuVerifyLength > 5) {
        alert("인증번호를 다시 확인해주세요.");
        tuVerify.focus();
        return false;
    }else{
        var conf = confirm("인증되었습니다.");
    };
};



//입력 검증

function findIdCheck(){

    if(tuid.value == "") {
        alert("아이디를 입력해주세요");
        tuid.focus();
        return false;
    };
    
    var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


    if (!reg.test(tuid.value)) {
        alert("아이디를 이메일 형식으로 입력해주세요.");
        tuid.focus();
        return false;
    };


    if(tuName.value == "") {
        alert("이름을 입력해주세요");
        tuName.focus();
        return false;
    };

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




