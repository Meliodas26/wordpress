window.onscroll = function(){
	let actualLocation = window.pageYOffset;
	
	if(screen.width>=1200){
		if(actualLocation>550){
			document.getElementById("navbar-desktop-fixed").style.display = "flex";
			document.getElementById("opacity").style.display = "none";
		}else{
			document.getElementById("navbar-desktop-fixed").style.display = "none";
			document.getElementById("opacity").style.display = "block";
		}
	}else{
		if(actualLocation>550){
			document.getElementById("navbar-mobile-fixed").style.display = "flex";
			document.getElementById("nav-mobile").style.display = "none";
			document.getElementById("opacity").style.display = "none";
		}else{
			document.getElementById("navbar-mobile-fixed").style.display = "none";
			document.getElementById("opacity").style.display = "block";
			document.getElementById("nav-mobile").style.display = "none";
		}
	}
}

window.addEventListener("resize", function(){
	if(screen.width>=1200){
		document.getElementById("navbar-mobile-fixed").style.display = "none";
		if(window.pageYOffset>550)
			document.getElementById("navbar-desktop-fixed").style.display = "flex";
	}else{
		document.getElementById("navbar-desktop-fixed").style.display = "none";
		if(window.pageYOffset>550)
			document.getElementById("navbar-mobile-fixed").style.display = "flex";
	}
});