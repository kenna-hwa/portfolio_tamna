$(function(){
    //gnb
    $(".topmenu").mouseenter(function () {
        $(".sub, .gnb_sub_box").stop().slideDown("1200");
    });
    $(".main").mouseenter(function () {
        $(".sub, .gnb_sub_box").stop().slideUp("1000");
    });

});