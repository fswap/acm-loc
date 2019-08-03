const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener('click', function(){
	navLinks.classList.remove("close");
	navLinks.classList.toggle("open");
});

navLinks.addEventListener('click',function(){
     navLinks.classList.toggle("close");
});

$(function(){
	$(".chart").easyPieChart({
		size:150,
		barColor:'#4834d4',
		scaleColor:false,
		lineWidth: 10,
		lineCap: 'circle',
		animate:1700
	})
})

