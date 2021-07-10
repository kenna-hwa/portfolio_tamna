var ul = document.querySelector('.slidewrap');

var firstItemClone = ul.firstElementChild.cloneNode(true);
        ul.appendChild(firstItemClone);
        
function move() {

    var curIndex = 0;

    setInterval(function () {
        ul.style.transition = '3s';
        ul.style.transform = "translate3d(-" + 767 * (curIndex + 1) + "px, 0px, 0px)";

        curIndex++;

        if (curIndex === 4) {
            setTimeout(function () {
                ul.style.transition = '0s';
                ul.style.transform = "translate3d(0px, 0px, 0px)";
            }, 20)
            curIndex = 0;
        }

    }, 3800);
};
document.addEventListener("DOMContentLoaded", function () {
    move();
});