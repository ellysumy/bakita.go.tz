
<div class="container px-0">
        <div class="col-12 special-page">
<!-- <div><section><h5></h5></section></div> -->
<h4 class="my-2 text-center   section-header">Maneno ya Mtandaoni </h4>
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width slides/quotes -->
  @foreach($words as $word)
  <div class="mySlides">
    <h3 style="background: yellow;"><b>Neno: </b> {{$word->word}}</h3>
    <p><strong>Maana:</strong> {{$word->meaning}}</p>
  </b><b>Mfano:</b>{{$word->example1}}</p>
  
  </div>
  @endforeach

  <!-- <div class="mySlides">
    <h3 style="background: yellow;">Neno: Ombwe</h3>
    <p><strong>Maana:</strong> Ukuta mfupi unaojengwa juu ya kisima ili kuzuia kitu chochote kutumbukia kiurahisi</p>
  <p><b>Mfano:</b>Fundi amejenga ombwe kisimani</p>
  
  </div>

  <div class="mySlides">
    <h3 style="background: yellow;"><b>Neno: </b> Muki</h3>
     <p><strong>Maana:</strong>Mtu mwenye fedha nyingi</p>
  <p><b>Mfano:</b>Muki anapendwa na watu wengi</p>
  
  </div> -->

  <!-- Next/prev buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!-- Dots/bullets/indicators -->
<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
</div></div>
<script type="text/javascript">
  var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>