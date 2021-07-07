var hamburger = document.querySelector(".gnb_more");
var subbox = document.querySelector(".gnb_sub_box");
var subtext = document.querySelectorAll(".sub");

function burgerin(){
    var subbox = document.querySelector(".gnb_sub_box");
    var subtext = document.querySelectorAll(".sub");

    subbox.style.display = "block";
    subtext.style.visibility = "visible";
}



function burgerout(){
var subtext = document.querySelectorAll(".sub");
var subbox = document.querySelector(".gnb_sub_box");
    subbox.style.display = "none";
    subtext.style.visibility = "hidden";

}