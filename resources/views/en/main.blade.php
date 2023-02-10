 <!DOCTYPE html>
<html lang="sw">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Language" content="sw">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="President’s Office Public Service Management and Good Governance&#039;s Official Website | Tovuti Rasmi ya BAKITA">
    <meta name="keywords" content="Tanzania,DODOMA,POPSM,Good Governance,Public Service Management,BAKITA ">
    <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="ms-icon-144x144.html">
  <meta name="theme-color" content="#1D2F6F">
  <meta name="apple-mobile-web-app-status-bar-style" content="#1D2F6F">

  <title>BAKITA
  </title>

  <!-- favicons -->
  <link rel="apple-touch-icon" sizes="57x57" href="site/images/icon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="site/images/icon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="site/images/icon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="site/images/icon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="site/images/icon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="site/images/icon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="site/images/icon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="site/images/icon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="site/images/icon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="site/images/icon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="site/images/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="site/images/icon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="site/images/bakita_logo.png">

  <link rel="stylesheet"  href="site/css/master.min3661.css?v=2.0">
  


  <style media="screen">
.left-25{
  left: 25%;
  position: relative;
}
</style>

  
  <style>
    p img,img, iframe img { max-width: 100% !important;}
    .bg-none{background:unset !important;}
    .input, .input:focus, .input:active, input.input{outline:none !important;}
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container max-1920 px-0">

    <!-- HEADER -->
    @include('en.nav')
    <!-- @yield('header') -->
    <!-- /HEADER -->

    <!-- contents Content-->
    
      @yield('content')

<!-- Main Contents -->

    <!-- FOOTER -->
    @include('en.footer')
    <!-- /FOOTER -->
</div>
  
  <input type="hidden" id="base_url" value="index.html">

   <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="site/js/jquery.min.js"></script>
   <script src="site/js/bootstrap.bundle.min.js"></script>
   <script src="site/js/slick.min.js"></script>
   <script src="site/js/datatables.min.js"></script>
   <script src="site/js/magnific-popup.min.js"></script>

 
   <script src="site/js/custom.min.js"></script>

   <script src="admin/js/visitors-counter/client.min.js"></script>    <script src="admin/js/visitors-counter/visitors.logs.js"></script>

   <script type="text/javascript">

    // get all images and set them to max-width 100%
    const load_styles_triggers = document.querySelectorAll('.load-styles-trigger');
    var x = 0;

    loadStyles();

    if(load_styles_triggers.length) load_styles_triggers.forEach(trigger => {
      trigger.addEventListener("click", ev => { loadStyles() });
    })

    function loadStyles(){
      var frames = document.querySelectorAll("iframe");
      if(frames.length){
        frames.forEach(frame => {
          frame.addEventListener("load", ev => {
              const new_style_element = document.createElement("style");
              new_style_element.textContent = "img { max-width:100% }"
              ev.target.contentDocument.head.appendChild(new_style_element);
              console.log(++x)
          });
        });
      }
    }

    
   
      $('.chatbubble').find('.unexpanded').on('click', function() {
        $('.chatbubble').toggleClass('opened');

        $('.chatbubble').find('.unexpanded').find('.title').text(
            $('.chatbubble').hasClass('opened') ? 'Minimize  Window' : 'Toa Maoni'
          );
        });
    </script>
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
  
</body>


</html>
