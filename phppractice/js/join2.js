

//변수 선언
var tuName = document.querySelector("#tamna_join_username");
var tuGender = document.querySelector('.gender');
var tuBirthyear = document.querySelector('#tamna_join_birthyear');
var tuBirthmonth = document.querySelector('#tamna_join_birthmonth');
var tuBirthday = document.querySelector('tamna_join_birthday');
var tuMobile = document.querySelector('#tamna_join_phoneNum');
var tuVarify = document.querySelector('#tamna_join_verifyNum');

//입력 검증

function joinFormCheckSecond(){

    if(tuName.value == "") {
        alert("이름을 입력해주세요");
        tuName.focus();
        return false;
    };



    return true;
};