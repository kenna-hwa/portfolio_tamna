$(function(){
    $(".sub, .gnb_sub_box").css('display','none');
    //gnb

    $(".header_box, .topmenu, .sub, .gnb_sub_box").mouseenter(function () {
        $(".sub, .gnb_sub_box").stop().slideDown("1200");
    });
    $(".header_box, .topmenu, .sub, .gnb_sub_box").mouseleave(function () {
        $(".sub, .gnb_sub_box").stop().slideUp("1000");
    });

});



