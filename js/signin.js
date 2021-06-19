//변수 선언
var signinId = document.querySelector('#email');
var signinPw = document.querySelector('#password');


//펑션

        
function signinFormCheck() {

    if(signinId.value == "") {
        alert("아이디를 입력해주세요.");
        signinId.focus();
        return false;
    };
        
    var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


    if (!reg.test(signinId.value)) {
        alert("아이디를 이메일 형식으로 입력해주세요.");
        signinId.focus();
        return false;
    };

    if(signinPw.value == "") {
        alert("비밀번호를 입력해주세요.");
        signinPw.focus();
        return false;
    };

    var signinPwLength = signinPw.value.length;

    if(signinPwLength < 8 || signinPwLength > 12) {
        alert("비밀번호는 8~12자리를 입력해주세요.");
        signinPw.focus();
        return false;
    };


return true;

};

