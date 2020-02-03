var slideidx = 0;
showSlides();

function showSlides() {
	var i;
	var slides = document.getElementsByClassName("slide");
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	slideidx++;
	if (slideidx > slides.length) {
		slideidx = 1;
	}
	slides[slideidx-1].style.display = "block";
	setTimeout(showSlides, 2000);
}