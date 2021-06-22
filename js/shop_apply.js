

//변수 

var shopNum = document.getElementById("tamna_shop_apply_input_busiNum");

//유효성 검사

function busiNumCheck(){

    //입력 검증
        if(shopNum.value == "") {
            alert("사업자등록번호를 입력해주세요.");
            shopNum.focus();
            return false;
        };

        var shopNumLength = shopNum.value.length;

        if(shopNumLength < 10 || shopNumLength > 10) {
            alert("사업자등록번호는 10자리입니다.");
            shopNum.focus();
            return false;
        };

        return true;
};

