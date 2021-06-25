$(window).ready(function(){

    $('.sub, .gnb_sub_box').hide();

    //$('.sub, .gnb_sub_box').css('visibility', 'hidden');

    //gnb

});

$(document).ready(function(){
    
    $(".topmenu").mouseenter(function () {
        $(".sub, .gnb_sub_box").stop().slideDown("1000");
    });
    $(".topmenu").mouseleave(function () {
        $(".sub, .gnb_sub_box").stop().slideDown("1000");
    });
    $(".main").mouseenter(function () {
        $(".sub, .gnb_sub_box").stop().slideUp("1000");
    });

})