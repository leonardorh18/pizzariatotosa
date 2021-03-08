<!DOCTYPE html>
<html>
	
<head>
	<title>ToToSa - A pizzaria mais gostosa da cidade</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta charset="UTF-8">
	<meta name="description" content="Pizzaria Totosa">
	<meta name="keywords" content="Pizza, totosa, Pizzaria">
	<meta name="author" content="Leonardo H. Rocha">

	<script>
window.onload = function() {
  showSlides();
};
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
	</script>
</head>
<body>
	
	<?php include "header.php"?>
	
<div id = 'area-principal'>
		<?php include "aside.php"?>
	<main id="principal"> 
		
		<div class="slideshow-container">

			<!-- Full-width images with number and caption text -->
		  
			<div class="mySlides fade">
			  <div class="numbertext">1 / 3</div>
			  <img src="imagens/pizza2.jpg" style="width:100%">
			  
			</div>
		  
			<div class="mySlides fade">
			  <div class="numbertext">2 / 3</div>
			  <img src="imagens/pizza3.jpg" style="width:100%">
			  
			</div>

			<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
				<img src="imagens/pizza4.jpg" style="width:100%">
				
			  </div>
		  
			<!-- Next and previous buttons -->
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		  </div>
		  <br>
		  
		  <!-- The dots/circles -->
		  <div style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
		  </div>
		</div>
	</main>
</div>

	<?php include "chat.php"?>
	<?php include "footer.php"?>


	

</body>
</html>