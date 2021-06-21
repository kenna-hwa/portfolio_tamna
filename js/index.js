

window.onload = function(){

//네비게이션

//변수 선언
var topwrap = document.querySelector("#topwrap");
var topmenu = document.querySelectorAll(".topmenu");
var subbox = document.querySelector(".subwrap");
var submenu = document.querySelectorAll("#submenu");


    
// 네비게이션 메뉴 시작
// topwrap.addEventListener("mouseenter", function(){
//     subbox.style.display="block";
//     submenu.style.display="block";
// }, false);

// submenu.addEventListener("mouseleave", function(){
//     subbox.style.display="none";
//     submenu.style.display="none";
// }, false);

//네비게이션 메뉴 끝



// 유튜브
// 유튜브 링크 시작

    // 변수 선언
    let youtubeOfcLink = document.querySelector(".youtube_official_link")
    let youtubeKBLink = document.querySelector(".youtube_kb_link")


  
    // DOM
    youtubeOfcLink.addEventListener("click", function youtubeOfcLinkOpen() {
        this.href = "https://www.youtube.com/watch?v=_bEZYRQUcqc"
        this.target = "_blank"
    });

    youtubeKBLink.addEventListener("click", function youtubeKBLinkOpen() {
        this.href = "https://www.youtube.com/watch?v=zXVD5agK39k"
        this.target = "_blank"
    });
// 유튜브 링크 끝






};








