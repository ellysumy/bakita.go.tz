  @extends('en.main')

@section('content')
<div class="home-page container">

<head>
	<h4>Hello there....</h4>
</head>

          
          <div class="slider">
              <div id="myCarousel" class="carousel px-0 slide carousel-fade pt-3" data-ride="carousel" data-interval="5000">
                <div class="carousel-inner">
                    <div class="carousel-item rounded-0  active  ">
                      <img class="d-block w-100 rounded-000" alt="Jamhuri ya Muungano wa Tanzania" src="uploads/gallery/slider2.png">
                      <div class="mask flex-center">
                        <div class="container">
                          <div class="row align-items-center">
                            <div class="col-md-12 order-md-1 order-2 text-center">
                              <p class="text-white ">Baadhi ya wanafunzi wa Kiswahili kutoka Chuo Kikuu cha Hebron cha nchini Malawi wakiwa katika picha ya pamoja na walimu wao Wema Msigwa (wa nne kutoka ushoto) na Onni Sigalla ( wa tatu kutoka kulia). Walimu hao kutoka Baraza la Kiswahili la Taifa (BAKITA) wapo nchini Malawi kwa ajili ya kufundisha Kiswahili.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @foreach ($sliders as $slider)
                       <div class="carousel-item rounded-0 ">
                      <img class="d-block w-100 rounded-000" alt="Jamhuri ya Muungano wa Tanzania" src="/images/{{$slider->image_path}}">
                      <div class="mask flex-center">
                        <div class="container">
                          <div class="row align-items-center">
                            <div class="col-md-12 order-md-1 order-2 text-center">
                              <p class="text-white ">{{$slider-> description}}
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                     
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

@stop