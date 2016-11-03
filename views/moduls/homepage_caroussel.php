		<div id="carroussel"class="w3-section"style="margin-top:100px!important;">

<div class="w3-content w3-margin-bottom" style="min-width:100%;">
<div class="w3-display-container">
  <img class=" w3-animate-zoom  w3-card-24 mySlides w3-round-large" 
  src="http://www.w3schools.com/w3css/img_mountains_wide.jpg" style="width:100%;height:100%;">
  <h2 class="w3-display-topmiddle">Titre de la photo</h2>
  </div><!--TITRE CARROUSEUL -->
  
  
  <!-- Container -->
  
  <img class="w3-animate-fading  w3-card-24 mySlides w3-round-large" src="http://www.w3schools.com/w3css/img_mountains_wide.jpg" style="width:100%;height:100%;">
  <img class="w3-animate-zoom  w3-card-24 mySlides w3-round-large" src="http://www.w3schools.com/w3css/img_nature_wide.jpg" style="width:100%;height:100%;">
</div>

<div class="w3-center w3-margin-top">
  <div class="w3-section ">
    <button class="w3-btn  w3-text-shadow" onclick="plusDivs(-1)">Précédent</button>
    <button class="w3-btn w3-text-shadow" onclick="plusDivs(1)">Prochain</button>
  </div>
  <button class="w3-btn demo w3-btn-floating w3-text-shadow" onclick="currentDiv(1)">1</button>
  <button class="w3-btn demo w3-btn-floating w3-text-shadow" onclick="currentDiv(2)">2</button>
  <button class="w3-btn demo w3-btn-floating w3-text-shadow" onclick="currentDiv(3)">3</button>
  
  </div>
  	</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);
function plusDivs(n) {
  showDivs(slideIndex += n);
}
function currentDiv(n) {
  showDivs(slideIndex = n);
}
function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-red", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-red";
}
</script>