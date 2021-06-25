
// window.onload = function() {

// function openTab(evt, tabName) {

// 	var i, tabcontent, tablinks;
// 	tabcontent = document.getElementsByClassName("tabcontent");
// 	for (i = 0; i < tabcontent.length; i++) {
// 	  tabcontent[i].style.display = "none";
// 	}
// 	tablinks = document.getElementsByClassName("tablinks");
// 	for (i = 0; i < tablinks.length; i++) {
// 	  tablinks[i].className = tablinks[i].className.replace(" active", "");
// 	}
// 	document.getElementById(tabName).style.display = "block";
// 	evt.currentTarget.className += " active";
// }       
// };


var kbTab = document.getElementById("kbTab");
var konaTab = document.getElementById("konaTab");
var paperTab = document.getElementById("paperTab");

var sectionKB = document.getElementById("sectionKB");
var sectionKona = document.getElementById("sectionKona");
var sectionPaper = document.getElementById("sectionPaper");


kbTab.addEventListener("click", function() {
	var sectionKB = document.getElementById("sectionKB");
	var sectionKona = document.getElementById("sectionKona");
	var sectionPaper = document.getElementById("sectionPaper");

	kbTab.style.background = "#21bdbd";
	konaTab.style.background = "#fff";
	paperTab.style.background = "#fff";

	sectionKB.style.display = "block";
	sectionKona.style.display = "none";
	sectionPaper.style.display = "none";

  });

  konaTab.addEventListener("click", function() {
	var sectionKB = document.getElementById("sectionKB");
	var sectionKona = document.getElementById("sectionKona");
	var sectionPaper = document.getElementById("sectionPaper");

	kbTab.style.background = "#fff";
	konaTab.style.background = "#21bdbd";
	paperTab.style.background = "#fff";

	sectionKB.style.display = "none";
	sectionKona.style.display = "block";
	sectionPaper.style.display = "none";

  });

  
  paperTab.addEventListener("click", function() {
	var sectionKB = document.getElementById("sectionKB");
	var sectionKona = document.getElementById("sectionKona");
	var sectionPaper = document.getElementById("sectionPaper");

	kbTab.style.background = "#fff";
	konaTab.style.background = "#fff";
	paperTab.style.background = "#21bdbd";
	
	sectionKB.style.display = "none";
	sectionKona.style.display = "none";
	sectionPaper.style.display = "block";

  });