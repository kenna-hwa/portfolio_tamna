
$(function(){
    $(".sub, .gnb_sub_box, .gnb_signin_join_wrap, .menu").css('display','none');
    //gnb

    $(".gnb_more, .sub, .gnb_sub_box, .gnb_signin_join_wrap, .menu").mouseenter(function () {
        $(".sub, .gnb_sub_box, .gnb_signin_join_wrap, .menu").stop().toggle("1300");
    });

    $(".gnb_more, .sub, .gnb_sub_box, .gnb_signin_join_wrap, .menu").mouseleave(function () {
        $(".sub, .gnb_sub_box, .gnb_signin_join_wrap, .menu").stop().hide("1300");
    });
    


});

