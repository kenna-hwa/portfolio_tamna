window.onload = function () {



    // 변수 선언
    let youtubeOfcLink = document.querySelector(".youtube_official_link")
    let youtubeKBLink = document.querySelector(".youtube_kb_link")

        var topwrap = document.querySelector("#topwrap");
        var topmenu = document.querySelector(".topmenu");
        var subbox = document.querySelector(".subwrap");
        var submenu = document.querySelector("#submenu");


  
    // DOM
    youtubeOfcLink.addEventListener("click", function youtubeOfcLinkOpen() {
        this.href = "https://www.youtube.com/watch?v=_bEZYRQUcqc"
        this.target = "_blank"
    });

    youtubeKBLink.addEventListener("click", function youtubeKBLinkOpen() {
        this.href = "https://www.youtube.com/watch?v=zXVD5agK39k"
        this.target = "_blank"
    });


    topwrap.addEventListener("mouseenter", function(){
        subbox.style.display="block";
        submenu.style.display="block";
    }, false);
    
    submenu.addEventListener("mouseleave", function(){
        subbox.style.display="none";
        submenu.style.display="none";
    }, false);
    


}//onload function 마침
