<div class="home-page container" >
 <div class="slider">
  <h4 class="my-2 text-center   section-header">Vitabu vya BAKITA</h4>

              <div id="myCarousel" class="carousel px-0 slide carousel-fade pt-3" data-ride="carousel" data-interval="10000">
                <div class="carousel-inner">

                    <div class="carousel-item rounded-0  active  ">
                      <div class="container mt-3 pb-2" >
            
  <div class="col-md-12  px-md-2">
<div class="row mt-4   justify-content-center ">
  @foreach ($books as $book)
  <div class="post-slide7 col-xs-12 col-sm-4 col-md-4 my-2" >
<div class="post-img" >
  <img src="uploads/gallery/kamusi.jpeg" alt="" class="w-100">
                          </div>
<div class="post-review">
  <ul class="post-bar">
    <li class="date-btn text-white">Bei: {{$book->price}}</li>
  </ul >
  <p class="post-description">ISBN: {{$book->isb}}<br>
    Jamii: {{$book->category}}<br>
    Mchapishaji: {{$book->publisher}}</p>
</div>
<a href="#" class="read d-block">NUNUA<i class="fa fa-angle-right"></i></a>
</div>
@endforeach

 </div>
<div class="text-right mt-2">
</div>
</div>
</div>
                  </div>

                  
                       <!--<div class="carousel-item rounded-0 ">
                      <div class="container mt-3 pb-2">
            
  <div class="col-md-12  px-md-2">


 <div class="row mt-4   justify-content-center ">
  <div class="post-slide7 col-xs-12 col-sm-4 col-md-4 my-2">
    <div class="post-img" >
      <img src="uploads/gallery/istilahi.jpeg" alt="" class="w-100">
    </div>
<div class="post-review">
  <ul class="post-bar">
    <li class="date-btn text-white">Bei: Tsh 8,000/=</li>
  </ul >
  <p class="post-description">ISBN: 9987903142<br>
    Jamii: Machapisho<br>
    Mchapishaji: BAKITA (2012)</p>
</div>
<a href="#" class="read d-block">NUNUA<i class="fa fa-angle-right"></i></a>
</div>
 <div class="post-slide7 col-xs-12 col-sm-4 col-md-4 my-2">
<div class="post-img">
  <img src="uploads/gallery/kiswahili_utandawazi.jpeg" alt="" class="w-100">
                          </div>
<div class="post-review">
  <ul class="post-bar">
    <li class="date-btn text-white">Bei: Tsh 4,000/=</li>

  </ul >
  <p class="post-description">ISBN: 9987903142<br>
    Jamii: Machapisho<br>
    Mchapishaji: BAKITA (2004)</p>
</div>
<a href="#" class="read d-block">NUNUA<i class="fa fa-angle-right"></i></a>
</div>
 <div class="post-slide7 col-xs-12 col-sm-4 col-md-4 my-2">
<div class="post-img" >
 <img src="uploads/gallery/tafsiri_sanifu.jpeg" alt="" class="w-100">
                          </div>
<div class="post-review">
  <ul class="post-bar">
    <li class="date-btn text-white">Bei: Tsh 3,000/=</li>

  </ul >
  <p class="post-description">ISBN: 9987903134<br>
    Jamii: Machapisho<br>
    Mchapishaji: BAKITA (2004)</p>
</div>
<a href="#" class="read d-block">NUNUA<i class="fa fa-angle-right"></i></a>
</div>
 </div>
<div class="text-right mt-2">
</div>
</div>
</div>
</div> -->
                                      
                  </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                  
                  <img src="site/images/svgs/left-arrow.svg" alt="">
                  <span class="sr-only">Back</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                  
                  <img src="site/images/svgs/right-arrow.svg" alt="">
                  <span class="sr-only">Next</span>
                </a>
              </div>
          </div>
    </div>

