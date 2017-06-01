<?php
include_once "header.php";
include_once "bdd/webservice.php";
include_once "bdd/connexion.php";

?>
</html>
<body>
	<section>
	<div class="section">
		<div class="transbox">
			</br></br></br>
			<div class="slideshow-container">
				<div class="mySlides fade">
				  <div class="numbertext">1 / 4</div>
				  <img src="image/adrift_04.jpg" style="width:100%">
				</div>

				<div class="mySlides fade">
				  <div class="numbertext">2 / 4</div>
				  <img src="image/monument.jpg" style="width:100%">
				</div>

				<div class="mySlides fade">
				  <div class="numbertext">3 / 4</div>
				  <img src="image/ville.jpg" style="width:100%">
				</div>

				<div class="mySlides fade">
				  <div class="numbertext">4 / 4</div>
				  <img src="image/futuriste.jpg" style="width:100%">
				</div>
			</div>
			<br>
			<div style="text-align:center">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span>
			  <span class="dot"></span>
			</div>
			
			<div class="accueil">
			<?php
			if(!empty($_SESSION['pseudo'])){
				?> <a href="ModifText.php" ><img src="image/param.png"></a> <?php
			}
				$myfile = fopen("texte/info.txt", "r") or die("Unable to open file!");
				echo nl2br(utf8_encode(fread($myfile,filesize("texte/info.txt"))));
				fclose($myfile);
				
				if(!empty($_SESSION['pseudo'])){
				?> <a href="ModifText1.php" ><img src="image/param.png"></a> <?php
			}
				echo"</br>";
				
				$myfile = fopen("texte/info1.txt", "r") or die("Unable to open file!");
				echo nl2br(utf8_encode(fread($myfile,filesize("texte/info1.txt"))));
				fclose($myfile);
				
				echo "</br></br>";
				$cui = new webservice($db);
				$cui->DernierRentree($db);
				echo "</br>";
			?>
			</div>
			
			
			<script>
			var slideIndex = 0;
			showSlides();

			function showSlides() {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("dot");
				for (i = 0; i < slides.length; i++) {
				   slides[i].style.display = "none";  
				}
				slideIndex++;
				if (slideIndex> slides.length) {slideIndex = 1}    
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex-1].style.display = "block";  
				dots[slideIndex-1].className += " active";
				setTimeout(showSlides, 2000); // Change image every 2 seconds
			}
			</script>
		</div>
	</div>
	</section>
</body>
</html>

<?php
include_once "footer.php";
?>
