
function downAction(){

    let downbtn = document.querySelector(".down_wrap");
    


};

if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
    document.documentElement.classList.add("dark");
}

document.getElementById("toggleTheme").addEventListener("click", () => {
    document.body.classList.toggle("dark");
    toggleThemetxt();
});


let chk = document.getElementById("toggleTheme").checked;

console.log(chk === false);

let toggletxt = document.getElementById("togglelabel").textContent;

console.log(toggletxt);

function toggleThemetxt(){

    if(chk === true){
        alert("바뀜!")
    }

}
