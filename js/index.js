//변수 선언
var topwrap = document.querySelector("#topwrap");
var topmenu = document.querySelectorAll(".topmenu");
var subbox = document.querySelector(".subwrap");
var submenu = document.querySelectorAll("#submenu");


    
// 네비게이션 메뉴 시작
topwrap.addEventListener("mouseenter", function(){
    subbox.style.display="block";
    submenu.style.display="block";
}, false);

submenu.addEventListener("mouseleave", function(){
    subbox.style.display="none";
    submenu.style.display="none";
}, false);
//네비게이션 메뉴 끝



$(document).ready(function(){

// 네비게이션 메뉴 시작



// 네비게이션 메뉴 끝







//슬라이더 시작

    var $slider = $('.slider'),
    $firstSlide = $slider.find('li').first() // 첫번째 슬라이드
    .stop(true).animate({'opacity':1},200); // 첫번째 슬라이드만 보이게 하기
    
    function PrevSlide(){ // 이전버튼 함수
    stopSlide();startSlide(); //타이머 초기화
    var $lastSlide = $slider.find('li').last() //마지막 슬라이드
    .prependTo($slider); //마지막 슬라이드를 맨 앞으로 보내기  
    $secondSlide = $slider.find('li').eq(1)//두 번째 슬라이드 구하기
    .stop(true).animate({'opacity':0},400); //밀려난 두 번째 슬라이드는 fadeOut 시키고
    $firstSlide = $slider.find('li').first() //맨 처음 슬라이드 다시 구하기
    .stop(true).animate({'opacity':1},400);//새로 들어온 첫 번째 슬라이드는 fadeIn 시키기
    }
    
    function NextSlide(){ // 다음 버튼 함수
    stopSlide();startSlide(); //타이머 초기화
    $firstSlide = $slider.find('li').first() // 첫 번째 슬라이드
    .appendTo($slider); // 맨 마지막으로 보내기
    var $lastSlide = $slider.find('li').last() // 맨 마지막으로 보낸 슬라이드
    .stop(true).animate({'opacity':0},400); // fadeOut시키기
    $firstSlide = $slider.find('li').first()// 맨 처음 슬라이드
    .stop(true).animate({'opacity':1},400);// fadeIn 시키기
    }
    
    $('.next').on('click', function(){ //다음버튼 클릭
    NextSlide();
    });
    $('.prev').on('click', function(){ //이전 버튼 클릭
    PrevSlide();
    });
    
    startSlide(); // 자동 슬라이드 시작
    
    var theInterval;
    
    function startSlide() {
    theInterval = setInterval(NextSlide, 3000); //자동 슬라이드 설정
    }

    function stopSlide() { //자동 멈추기
    clearInterval(theInterval);
    }
    
});       
//슬라이더 끝


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













