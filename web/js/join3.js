//변수 선언
var tuId = document.getElementById("tamna_join_id");
var tuDomain = document.querySelector(".tamna_join_id_select_input")
var tuDomainSel = document.getElementById("tamna_join_id_domain");
var tuPw = document.getElementById("tamna_input_pw");
var tuPwCheck = document.getElementById("tamna_input_pw_check");
var tuPw = document.getElementById("tamna_input_pw");


//유효성 검사

function joinFormCheckFinal(){

//입력 검증
    if(tuId.value == "") {
        alert("이메일의 아이디를 입력해주세요");
        tuId.focus();
        return false;
    };

    if(tuDomain.value == "") {
        alert("이메일을 확인해주세요");
        tuDomain.focus();
        return false;
    };
     
    if(tuPw.value == "") {
        alert("비밀번호를 입력해주세요.");
        tuPw.focus();
        return false;
    };
    
    //비밀번호 유효성 검사

    var tuPwlength = tuPw.value.length;

    if(tuPwlength < 8 || tuPwlength > 12) {
        alert("비밀번호는 영문 대소문자, 숫자, 특수문자의 조합으로 8~12자리를 입력해주세요.");
        tuPw.focus();
        return false;
    };

    if(!tuPw.value.match(/([a-zA-Z0-9].*[!,@,#,$,%,^,&,*,?,_,~])|([!,@,#,$,%,^,&,*,?,_,~].*[a-zA-Z0-9])/))
    {
    alert("비밀번호는 영문 대소문자, 숫자, 특수문자의 조합으로 8~12자리를 입력해주세요.");
    tuPw.focus();
    return false;
    }

    if(tuPwCheck.value == "") {
        alert("비밀번호를 다시 입력해주세요.");
        tuPwCheck.focus();
        return false;
    };

    if(tuPw.value != tuPwCheck.value) {
        alert("비밀번호를 확인해주세요.");
        tuPwCheck.focus();
        return false;
    };


    return true;


};

//이메일 셀렉트 선택
function emailChange() {
    var idx = tuDomainSel.options.selectedIndex;
    var getText = tuDomainSel.options[idx].value;
    tuDomain.value = getText;
};