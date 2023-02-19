@extends('sw.main')

@section ('content')
@include('sw.highlight')
<div class="home-page container">

    <div class="row">
      <div class="col-md-3 d-flex flex-column pt-3">
                <a href="#" 
          class="d-block cursor-pointer pt-3 d-flex justify-content-center mb-3  pb-3 " style="background-color:rgba(255,255,255,0.3)">
          <div class="d-inline-block">
                          <div class="text-center d-flex justify-content-center mx-auto  img-frame">
                <img src="uploads/administration/consolata.jpeg" alt="Ndugu. Consolata P. Mushi" class="img-fluid">
              </div>
              <div class="text-center  mt-2">
                <div class="text-bold "> <span class="d-inline-block border-bottom">Bi. Consolata Mushi </span> </div>
                <div>Katibu Mtendaji</div>
                
              </div>
                                    <div class="px-3 row mx-0"> 
              <div class="col bg-secondary p-1"></div>
              <div class="col-2 bg-primary p-1"></div>
            </div> 
                      </div>
        </a>
                <a href="#" 
          class="d-block cursor-pointer pt-3 d-flex justify-content-center mb-3  pb-3 " style="background-color:rgba(255,255,255,0.3)">
          <div class="d-inline-block">
                          <div class="text-center d-flex justify-content-center mx-auto  img-frame">
                <img src="/uploads/administration/vidah.jpeg" alt="Ndugu. Vidah E. Mutasa" class="img-fluid">
              </div>
              <div class="text-center  mt-2">
                <div class="text-bold "> <span class="d-inline-block border-bottom">Bi. Vidah Mutasa </span>  </div>
                <div>Kaimu Mkurugenzi wa Maendeleo na Matumizi ya Kiswahili</div>
                
              </div>
                                    <div class="px-3 row mx-0"> 
              <div class="col bg-secondary p-1"></div>
              <div class="col-2 bg-primary p-1"></div>
            </div> 
                      </div>
        </a>
                <a href="#" 
          class="d-block cursor-pointer pt-3 d-flex justify-content-center mb-3  pb-3 " style="background-color:rgba(255,255,255,0.3)">
          <div class="d-inline-block">
                          <div class="text-center d-flex justify-content-center mx-auto  img-frame">
                <img src="uploads/administration/someone.jpeg" alt="Hans H. Mbella" class="img-fluid">
              </div>
              <div class="text-center  mt-2">
                <div class="text-bold "> <span class="d-inline-block border-bottom">Bw. Hans Mbella </span> </div>
                <div>Mkurugenzi wa Huduma za Baraza</div>
                
              </div>
                <div class="px-3 row mx-0"> 
              <div class="col bg-secondary p-1"></div>
              <div class="col-2 bg-primary p-1"></div>

            </div>
          </div>
        </a>
      </div>
      <!-- //Slider Starting -->
      <div class="col-md-9">
          <div class="slider">
              <div id="myCarousel" class="carousel px-0 slide carousel-fade pt-3" data-ride="carousel" data-interval="10000">
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
                 <!--  @foreach ($slider1 as $slider11)
                    <div class="carousel-item rounded-0  active  ">
                      <img class="d-block w-100 rounded-000" alt="Jamhuri ya Muungano wa Tanzania" src="/images/{{$slider11->image_path}}">
                      <div class="mask flex-center">
                        <div class="container">
                          <div class="row align-items-center">
                            <div class="col-md-12 order-md-1 order-2 text-center">
                              <p class="text-white ">{{$slider11->description}}
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> -->
                    @endforeach
                                      @foreach ($sliders as $slider)
                       <div class="carousel-item rounded-0">
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
                                      <!-- <div class="carousel-item rounded-0 ">
                      <img class="d-block w-100 rounded-000" alt="Jamhuri ya Muungano wa Tanzania" src="uploads/gallery/slider2.png">
                      <div class="mask flex-center">
                        <div class="container">
                          <div class="row align-items-center">
                            <div class="col-md-12 order-md-1 order-2 text-center">
                              <p class="text-white ">
                                Baadhi ya wanafunzi wa Kiswahili kutoka Chuo Kikuu cha Hebron cha nchini Malawi wakiwa katika picha ya pamoja na walimu wao Wema Msigwa (wa nne kutoka kushoto) na Onni Sigalla (wa tatu kutoka kulia). Walimu hao kutoka Baraza la Kiswahili la Taifa (BAKITA) wapo nchini Malawi kwa ajili ya kufundisha Kiswahili.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                                      <div class="carousel-item rounded-0 ">
                      <img class="d-block w-100 rounded-000" alt="Jamhuri ya Muungano wa Tanzania" src="uploads/gallery/slider3.png">
                      <div class="mask flex-center">
                        <div class="container">
                          <div class="row align-items-center">
                            <div class="col-md-12 order-md-1 order-2 text-center">
                              <p class="text-white ">Baadhi ya wanafunzi wa Kiswahili kutoka Chuo Kikuu cha Hebron cha nchini Malawi wakiwa katika picha ya pamoja na walimu wao Wema Msigwa (wa nne kutoka kushoto) na Onni Sigalla ( wa tatu kutoka kulia). Walimu hao kutoka Baraza la Kiswahili la Taifa (BAKITA) wapo nchini Malawi kwa ajili ya kufundisha Kiswahili.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                                      <div class="carousel-item rounded-0 ">
                      <img class="d-block w-100 rounded-000" alt="Jamhuri ya Muungano wa Tanzania" src="uploads/gallery/slider4.png">
                      <div class="mask flex-center">
                        <div class="container">
                          <div class="row align-items-center">
                            <div class="col-md-12 order-md-1 order-2 text-center">
                              <p class="text-white ">Baraza la Kiswahili la Taifa (BAKITA), linampongeza Rais Samia Suluhu Hassan kwa kuendelea kubidhaisha Kiswahili nje ya nchi na utayari wake wa kupeleka walimu nchini Msumbiji kwa ajili ya kufundisha Kiswahili hasa katika shule za msingi.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                                      <div class="carousel-item rounded-0 ">
                      <img class="d-block w-100 rounded-000" alt="Jamhuri ya Muungano wa Tanzania" src="uploads/gallery/slider5.png">
                      <div class="mask flex-center">
                        <div class="container">
                          <div class="row align-items-center">
                            <div class="col-md-12 order-md-1 order-2 text-center">
                              <p class="text-white ">Baadhi ya wanafunzi wa Kiswahili kutoka Chuo Kikuu cha Hebron cha nchini Malawi wakiwa katika picha ya pamoja na walimu wao Wema Msigwa (wa nne kutoka kushoto) na Onni Sigalla ( wa tatu kutoka kulia). Walimu hao kutoka Baraza la Kiswahili la Taifa (BAKITA) wapo nchini Malawi kwa ajili ya kufundisha Kiswahili.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                                      <div class="carousel-item rounded-0 ">
                      <img class="d-block w-100 rounded-000" alt="Jamhuri ya Muungano wa Tanzania" src="uploads/gallery/slider6.png">
                      <div class="mask flex-center">
                        <div class="container">
                          <div class="row align-items-center">
                            <div class="col-md-12 order-md-1 order-2 text-center">
                              <p class="text-white ">Katibu Mtendaji wa BAKITA Bi. Consolata Mushi akijadiliana kuhusu ufundishaji wa Kiswahili kwa Wageni na Mwalimu Fortunata Msilu, (Mtanzania) ambaye anafundisha Cho Kikuu cha Northern Illinois huko Chicago Marekani. Bi. Mushi yupo nchini Marekani kuhudhuria kongamano la Chama cha Ukuzaji wa Kiswahili Duniani (CHAUKIDU).</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                                      <div class="carousel-item rounded-0 ">
                      <img class="d-block w-100 rounded-000" alt="Jamhuri ya Muungano wa Tanzania" src="uploads/gallery/slider7.png">
                      <div class="mask flex-center">
                        <div class="container">
                          <div class="row align-items-center">
                            <div class="col-md-12 order-md-1 order-2 text-center">
                              <p class="text-white ">BAKITA lazipongeza Serikali za Tanzania na Iran ujenzi wa Chuo Kikuu cha Kiswahili nchini</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> -->
                    
                    <!-- <div class="carousel-item rounded-0 ">
                      <img class="d-block w-100 rounded-000" alt="Jamhuri ya Muungano wa Tanzania" src="uploads/gallery/slider8.png">
                      <div class="mask flex-center">
                        <div class="container">
                          <div class="row align-items-center">
                            <div class="col-md-12 order-md-1 order-2 text-center">
                              <p class="text-white ">Baraza la Kiswahili la Taifa (BAKITA), linampongeza Rais Samia Suluhu Hassan kwa kuendelea kubidhaisha Kiswahili nje ya nchi na utayari wake wa kupeleka walimu nchini Msumbiji kwa ajili ya kufundisha Kiswahili hasa katika shule za msingi.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> -->
                                  </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                  
                  <img src="/site/images/svgs/left-arrow.svg" alt="">
                  <span class="sr-only">Nyuma</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                  
                  <img src="/site/images/svgs/right-arrow.svg" alt="">
                  <span class="sr-only">Mbele</span>
                </a>
              </div>
          </div>
          <!-- Slider ending -->
           <div class="main-content-inside mt-3 pb-2">
            <div class="col-md-12  px-md-2">
              <h4 class="my-2 text-center   section-header">Kuhusu BAKITA</h4>
              <p>
                Baraza la Kiswahili la Taifa (BAKITA) ni Shirika la Umma ambalo kwa kawaida huwa chini ya Wizara yenye dhamana ya Utamaduni. Baraza liliundwa kwa Sheria ya Bunge Na. 27 ya mwaka 1967 pamoja na marekebisho yake ya mwaka 1983 na 2016. Sheria hii inalipa Baraza mamlaka ya kusimamia na kuratibu shughuli za wadau wote wanaokuza lugha ya Kiswahili ndani na nje ya Jamhuri ya Muungano wa Tanzania. Baraza liliundwa kutokana na mapendekezo makuu ya Kamati iliyoundwa kwenye kikao cha wataalamu wa lugha kilichoitishwa na Waziri wa Elimu Disemba 1961. Lengo la kikao hicho lilikuwa ni kutoa mapendekezo yatakayosaidia kuinua Kiswahili kama lugha ya Taifa. Baraza lilianza kazi na watumishi wanne katika ofisi za Wizara ya Elimu. Miongoni mwa kazi ya kwanza ya Baraza ilipendekezwa iwe kufasiri msamiati na misemo ya Sheria. Baadaye mwaka 1972, Baraza lilipata ofisi zake katika jengo la Shirika la Nyumba la Taifa, mtaa wa Samora na Azikiwe jijini Dar es Salaam, na mwaka 2012 Baraza lilihamia Kitalu Na.45 B, Kijitonyama, jijini Dar es Salaam.
              </p>
            </div>
          </div>
          <div class="main-content-inside mt-3 pb-2">
            <div class="col-md-12  px-md-2">
              <h4 class="my-2 text-center   section-header">Huduma Zitolewazo na BAKITA</h4>
              @include('sw.service')
            </div>
          </div>
        </div>
          <div class="main-content-inside mt-3 pb-2">
            <div class="col-md-12  px-md-2">
                <h4 class="my-2 text-center   section-header">Habari Mpya </h4>
                <div class="row mt-4   justify-content-center ">
                 @foreach ($contents as $content)
                  <div class="post-slide7 col-xs-12 col-sm-4 col-md-4 my-2">
                        <div class="post-img">
                          <img src="/images/{{$content->image_path}}" alt="" class="w-100">
                                                  </div>
                        <div class="post-review">
                          <ul class="post-bar">
                       <li class="date-btn text-white">{{ date('jS M Y', strtotime($content->updated_at)) }}</li>
                          </ul >
                          <p class="post-description">{{$content->title}}</p>
                        </div>
                        <a href="{{$content->blogpost}}" class="read d-block">Soma zaidi<i class="fa fa-angle-right"></i></a>
                      </div>

                      @endforeach
                     
                    </div>
                <div class="text-right mt-2">
                    <a href="/blogu"><i>Angalia Zaidi</i></a>
                </div>
              </div>
          </div>
           <div class="mb-4 mt-2 main-content-inside pl-md-3  ">
              <div class="row  px-3 px-md-0 ">
                <div class="col-md-6 ">
                      <h4 class="mb-2 text-center px-xs-2 section-header">Matangazo </h4>
                    <div class=" mt-4   ">
                      <div class="d-flex pl-2 mx-0 w-100 bg-white  mb-2   has-hover-bounce  my-xs-1" >
                            <div class=" sm-hidee " style="width:25px">
                            <div class="h-100 hover-bounce w-100 d-flex align-items-center">
                                <style>.primary path{fill: var(--primary)} </style>
                                <svg class="primary" version="1.1" x="0px" y="0px"
                                    viewBox="0 0 512.001 512.001" class="w-100 h-100">
                                    <path d="M454.962,110.751c-0.018-0.185-0.05-0.365-0.081-0.545c-0.011-0.06-0.016-0.122-0.028-0.182
                                    c-0.043-0.215-0.098-0.425-0.159-0.632c-0.007-0.025-0.012-0.052-0.02-0.077c-0.065-0.213-0.141-0.421-0.224-0.625
                                    c-0.008-0.021-0.015-0.043-0.023-0.064c-0.081-0.195-0.173-0.384-0.269-0.57c-0.016-0.031-0.029-0.063-0.045-0.094
                                    c-0.093-0.173-0.196-0.339-0.301-0.504c-0.027-0.042-0.049-0.086-0.077-0.127c-0.103-0.154-0.216-0.3-0.33-0.446
                                    c-0.037-0.048-0.07-0.098-0.109-0.145c-0.142-0.173-0.294-0.338-0.451-0.498c-0.015-0.015-0.027-0.031-0.042-0.046l-104-104
                                    c-0.018-0.018-0.038-0.033-0.057-0.051c-0.156-0.153-0.317-0.301-0.486-0.44c-0.055-0.045-0.113-0.083-0.169-0.126
                                    c-0.138-0.107-0.275-0.214-0.42-0.311c-0.051-0.034-0.105-0.062-0.156-0.095c-0.156-0.099-0.312-0.197-0.475-0.284
                                    c-0.036-0.019-0.074-0.035-0.111-0.053c-0.181-0.093-0.365-0.183-0.554-0.262c-0.024-0.01-0.049-0.017-0.074-0.027
                                    c-0.202-0.081-0.406-0.157-0.616-0.221c-0.027-0.008-0.054-0.013-0.081-0.021c-0.206-0.06-0.415-0.115-0.628-0.158
                                    c-0.063-0.013-0.128-0.018-0.192-0.029c-0.177-0.031-0.354-0.062-0.536-0.08C344.001,0.013,343.751,0,343.5,0h-248
                                    C73.72,0,56,17.72,56,39.5v432c0,21.78,17.72,39.5,39.5,39.5h320c21.78,0,39.5-17.72,39.5-39.5v-360
                                    C455,111.249,454.987,110.999,454.962,110.751z M351,25.606L429.394,104H375.5c-13.509,0-24.5-10.99-24.5-24.5V25.606z M415.5,496
                                    h-320C81.991,496,71,485.01,71,471.5v-432C71,25.99,81.991,15,95.5,15H336v64.5c0,21.78,17.72,39.5,39.5,39.5H440v352.5
                                    C440,485.01,429.009,496,415.5,496z"/>
                                  <path d="M391.5,248h-48.002c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5H391.5c4.142,0,7.5-3.357,7.5-7.5S395.642,248,391.5,248z
                                    "/>
                                  <path d="M119.5,263h192.001c4.142,0,7.5-3.357,7.5-7.5s-3.358-7.5-7.5-7.5H119.5c-4.142,0-7.5,3.357-7.5,7.5S115.358,263,119.5,263
                                    z"/>
                                  <path d="M391.5,152h-200c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h200c4.142,0,7.5-3.357,7.5-7.5S395.642,152,391.5,152z"/>
                                  <path d="M119.5,167h40.003c4.142,0,7.5-3.357,7.5-7.5s-3.358-7.5-7.5-7.5H119.5c-4.142,0-7.5,3.357-7.5,7.5S115.358,167,119.5,167z
                                    "/>
                                  <path d="M391.5,344h-152c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h152c4.142,0,7.5-3.357,7.5-7.5S395.642,344,391.5,344z"/>
                                  <path d="M207.5,344h-88c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h88c4.142,0,7.5-3.357,7.5-7.5S211.642,344,207.5,344z"/>
                                  <path d="M391.5,200h-272c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h272c4.142,0,7.5-3.357,7.5-7.5S395.642,200,391.5,200z"/>
                                  <path d="M391.5,296h-272c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h272c4.142,0,7.5-3.357,7.5-7.5S395.642,296,391.5,296z"/>
                                </svg>
                              </div>
                            </div>
                            <div class="pl-2 my-auto py-2 ">
                                <div class="small text-primary">
                                  <span class="pr-1"> 20th Oct 2022 </span> |
                                  <span class="pl-1">  Nafasi za Kazi </span>
                                </div>
                                
                                <a href="uploads/documents/sw-1666253777-VACANCY%20ANNOUNCEMENT%20-%20SADC.pdf" 
                                  target="_blank" class="text-dark d-block">
                                    VACANT POST ADVERTISED BY THE - SOUTH AF...
                                </a>
                            </div>
                        </div>
                        <div class="d-flex pl-2 mx-0 w-100 bg-white  mb-2   has-hover-bounce  my-xs-1" 
                            >
                            <div class=" sm-hidee " style="width:25px">
                              <div class="h-100 hover-bounce w-100 d-flex align-items-center">
                                
                                <style>.primary path{fill: var(--primary)} </style>
                                <svg class="primary" version="1.1" x="0px" y="0px"
                                    viewBox="0 0 512.001 512.001" class="w-100 h-100">
                                    <path d="M454.962,110.751c-0.018-0.185-0.05-0.365-0.081-0.545c-0.011-0.06-0.016-0.122-0.028-0.182
                                    c-0.043-0.215-0.098-0.425-0.159-0.632c-0.007-0.025-0.012-0.052-0.02-0.077c-0.065-0.213-0.141-0.421-0.224-0.625
                                    c-0.008-0.021-0.015-0.043-0.023-0.064c-0.081-0.195-0.173-0.384-0.269-0.57c-0.016-0.031-0.029-0.063-0.045-0.094
                                    c-0.093-0.173-0.196-0.339-0.301-0.504c-0.027-0.042-0.049-0.086-0.077-0.127c-0.103-0.154-0.216-0.3-0.33-0.446
                                    c-0.037-0.048-0.07-0.098-0.109-0.145c-0.142-0.173-0.294-0.338-0.451-0.498c-0.015-0.015-0.027-0.031-0.042-0.046l-104-104
                                    c-0.018-0.018-0.038-0.033-0.057-0.051c-0.156-0.153-0.317-0.301-0.486-0.44c-0.055-0.045-0.113-0.083-0.169-0.126
                                    c-0.138-0.107-0.275-0.214-0.42-0.311c-0.051-0.034-0.105-0.062-0.156-0.095c-0.156-0.099-0.312-0.197-0.475-0.284
                                    c-0.036-0.019-0.074-0.035-0.111-0.053c-0.181-0.093-0.365-0.183-0.554-0.262c-0.024-0.01-0.049-0.017-0.074-0.027
                                    c-0.202-0.081-0.406-0.157-0.616-0.221c-0.027-0.008-0.054-0.013-0.081-0.021c-0.206-0.06-0.415-0.115-0.628-0.158
                                    c-0.063-0.013-0.128-0.018-0.192-0.029c-0.177-0.031-0.354-0.062-0.536-0.08C344.001,0.013,343.751,0,343.5,0h-248
                                    C73.72,0,56,17.72,56,39.5v432c0,21.78,17.72,39.5,39.5,39.5h320c21.78,0,39.5-17.72,39.5-39.5v-360
                                    C455,111.249,454.987,110.999,454.962,110.751z M351,25.606L429.394,104H375.5c-13.509,0-24.5-10.99-24.5-24.5V25.606z M415.5,496
                                    h-320C81.991,496,71,485.01,71,471.5v-432C71,25.99,81.991,15,95.5,15H336v64.5c0,21.78,17.72,39.5,39.5,39.5H440v352.5
                                    C440,485.01,429.009,496,415.5,496z"/>
                                  <path d="M391.5,248h-48.002c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5H391.5c4.142,0,7.5-3.357,7.5-7.5S395.642,248,391.5,248z
                                    "/>
                                  <path d="M119.5,263h192.001c4.142,0,7.5-3.357,7.5-7.5s-3.358-7.5-7.5-7.5H119.5c-4.142,0-7.5,3.357-7.5,7.5S115.358,263,119.5,263
                                    z"/>
                                  <path d="M391.5,152h-200c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h200c4.142,0,7.5-3.357,7.5-7.5S395.642,152,391.5,152z"/>
                                  <path d="M119.5,167h40.003c4.142,0,7.5-3.357,7.5-7.5s-3.358-7.5-7.5-7.5H119.5c-4.142,0-7.5,3.357-7.5,7.5S115.358,167,119.5,167z
                                    "/>
                                  <path d="M391.5,344h-152c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h152c4.142,0,7.5-3.357,7.5-7.5S395.642,344,391.5,344z"/>
                                  <path d="M207.5,344h-88c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h88c4.142,0,7.5-3.357,7.5-7.5S211.642,344,207.5,344z"/>
                                  <path d="M391.5,200h-272c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h272c4.142,0,7.5-3.357,7.5-7.5S395.642,200,391.5,200z"/>
                                  <path d="M391.5,296h-272c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h272c4.142,0,7.5-3.357,7.5-7.5S395.642,296,391.5,296z"/>
                                </svg>
                              </div>
                            </div>
                            <div class="pl-2 my-auto py-2 ">
                                <div class="small text-primary">
                                  <span class="pr-1"> 07th Oct 2022 </span> |
                                  <span class="pl-1">  Ufadhili </span>
                                </div>
                                
                                <a href="uploads/documents/sw-1665138824-TANGAZO%20INDIA%20OKTOBA%2c%202022.pdf" 
                                  target="_blank" class="text-dark d-block">
                                    ANNOUNCEMENT FOR TRAINING COURSES (SHORT...
                                </a>
                            </div>
                        </div>
                        <div class="d-flex pl-2 mx-0 w-100 bg-white  mb-2   has-hover-bounce  my-xs-1" 
                            >
                            <div class=" sm-hidee " style="width:25px">
                              <div class="h-100 hover-bounce w-100 d-flex align-items-center">
                                
                                <style>.primary path{fill: var(--primary)} </style>
                                <svg class="primary" version="1.1" x="0px" y="0px"
                                    viewBox="0 0 512.001 512.001" class="w-100 h-100">
                                    <path d="M454.962,110.751c-0.018-0.185-0.05-0.365-0.081-0.545c-0.011-0.06-0.016-0.122-0.028-0.182
                                    c-0.043-0.215-0.098-0.425-0.159-0.632c-0.007-0.025-0.012-0.052-0.02-0.077c-0.065-0.213-0.141-0.421-0.224-0.625
                                    c-0.008-0.021-0.015-0.043-0.023-0.064c-0.081-0.195-0.173-0.384-0.269-0.57c-0.016-0.031-0.029-0.063-0.045-0.094
                                    c-0.093-0.173-0.196-0.339-0.301-0.504c-0.027-0.042-0.049-0.086-0.077-0.127c-0.103-0.154-0.216-0.3-0.33-0.446
                                    c-0.037-0.048-0.07-0.098-0.109-0.145c-0.142-0.173-0.294-0.338-0.451-0.498c-0.015-0.015-0.027-0.031-0.042-0.046l-104-104
                                    c-0.018-0.018-0.038-0.033-0.057-0.051c-0.156-0.153-0.317-0.301-0.486-0.44c-0.055-0.045-0.113-0.083-0.169-0.126
                                    c-0.138-0.107-0.275-0.214-0.42-0.311c-0.051-0.034-0.105-0.062-0.156-0.095c-0.156-0.099-0.312-0.197-0.475-0.284
                                    c-0.036-0.019-0.074-0.035-0.111-0.053c-0.181-0.093-0.365-0.183-0.554-0.262c-0.024-0.01-0.049-0.017-0.074-0.027
                                    c-0.202-0.081-0.406-0.157-0.616-0.221c-0.027-0.008-0.054-0.013-0.081-0.021c-0.206-0.06-0.415-0.115-0.628-0.158
                                    c-0.063-0.013-0.128-0.018-0.192-0.029c-0.177-0.031-0.354-0.062-0.536-0.08C344.001,0.013,343.751,0,343.5,0h-248
                                    C73.72,0,56,17.72,56,39.5v432c0,21.78,17.72,39.5,39.5,39.5h320c21.78,0,39.5-17.72,39.5-39.5v-360
                                    C455,111.249,454.987,110.999,454.962,110.751z M351,25.606L429.394,104H375.5c-13.509,0-24.5-10.99-24.5-24.5V25.606z M415.5,496
                                    h-320C81.991,496,71,485.01,71,471.5v-432C71,25.99,81.991,15,95.5,15H336v64.5c0,21.78,17.72,39.5,39.5,39.5H440v352.5
                                    C440,485.01,429.009,496,415.5,496z"/>
                                  <path d="M391.5,248h-48.002c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5H391.5c4.142,0,7.5-3.357,7.5-7.5S395.642,248,391.5,248z
                                    "/>
                                  <path d="M119.5,263h192.001c4.142,0,7.5-3.357,7.5-7.5s-3.358-7.5-7.5-7.5H119.5c-4.142,0-7.5,3.357-7.5,7.5S115.358,263,119.5,263
                                    z"/>
                                  <path d="M391.5,152h-200c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h200c4.142,0,7.5-3.357,7.5-7.5S395.642,152,391.5,152z"/>
                                  <path d="M119.5,167h40.003c4.142,0,7.5-3.357,7.5-7.5s-3.358-7.5-7.5-7.5H119.5c-4.142,0-7.5,3.357-7.5,7.5S115.358,167,119.5,167z
                                    "/>
                                  <path d="M391.5,344h-152c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h152c4.142,0,7.5-3.357,7.5-7.5S395.642,344,391.5,344z"/>
                                  <path d="M207.5,344h-88c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h88c4.142,0,7.5-3.357,7.5-7.5S211.642,344,207.5,344z"/>
                                  <path d="M391.5,200h-272c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h272c4.142,0,7.5-3.357,7.5-7.5S395.642,200,391.5,200z"/>
                                  <path d="M391.5,296h-272c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h272c4.142,0,7.5-3.357,7.5-7.5S395.642,296,391.5,296z"/>
                                </svg>
                              </div>
                            </div>
                            <div class="pl-2 my-auto py-2 ">
                                <div class="small text-primary">
                                  <span class="pr-1"> 16th Sep 2022 </span> |
                                  <span class="pl-1">  Ufadhili </span>
                                </div>
                                
                                <a href="uploads/documents/sw-1663407291-TANGAZO%20INDIA%20SEPTEMBA%2c%202022.pdf" 
                                  target="_blank" class="text-dark d-block">
                                    ANNOUNCEMENT FOR TRAINING COURSES (SHORT...
                                </a>
                            </div>
                        </div>
                        <div class="d-flex pl-2 mx-0 w-100 bg-white  mb-2   has-hover-bounce  my-xs-1" 
                            >
                            <div class=" sm-hidee " style="width:25px">
                              <div class="h-100 hover-bounce w-100 d-flex align-items-center">
                                
                                <style>.primary path{fill: var(--primary)} </style>
                                <svg class="primary" version="1.1" x="0px" y="0px"
                                    viewBox="0 0 512.001 512.001" class="w-100 h-100">
                                    <path d="M454.962,110.751c-0.018-0.185-0.05-0.365-0.081-0.545c-0.011-0.06-0.016-0.122-0.028-0.182
                                    c-0.043-0.215-0.098-0.425-0.159-0.632c-0.007-0.025-0.012-0.052-0.02-0.077c-0.065-0.213-0.141-0.421-0.224-0.625
                                    c-0.008-0.021-0.015-0.043-0.023-0.064c-0.081-0.195-0.173-0.384-0.269-0.57c-0.016-0.031-0.029-0.063-0.045-0.094
                                    c-0.093-0.173-0.196-0.339-0.301-0.504c-0.027-0.042-0.049-0.086-0.077-0.127c-0.103-0.154-0.216-0.3-0.33-0.446
                                    c-0.037-0.048-0.07-0.098-0.109-0.145c-0.142-0.173-0.294-0.338-0.451-0.498c-0.015-0.015-0.027-0.031-0.042-0.046l-104-104
                                    c-0.018-0.018-0.038-0.033-0.057-0.051c-0.156-0.153-0.317-0.301-0.486-0.44c-0.055-0.045-0.113-0.083-0.169-0.126
                                    c-0.138-0.107-0.275-0.214-0.42-0.311c-0.051-0.034-0.105-0.062-0.156-0.095c-0.156-0.099-0.312-0.197-0.475-0.284
                                    c-0.036-0.019-0.074-0.035-0.111-0.053c-0.181-0.093-0.365-0.183-0.554-0.262c-0.024-0.01-0.049-0.017-0.074-0.027
                                    c-0.202-0.081-0.406-0.157-0.616-0.221c-0.027-0.008-0.054-0.013-0.081-0.021c-0.206-0.06-0.415-0.115-0.628-0.158
                                    c-0.063-0.013-0.128-0.018-0.192-0.029c-0.177-0.031-0.354-0.062-0.536-0.08C344.001,0.013,343.751,0,343.5,0h-248
                                    C73.72,0,56,17.72,56,39.5v432c0,21.78,17.72,39.5,39.5,39.5h320c21.78,0,39.5-17.72,39.5-39.5v-360
                                    C455,111.249,454.987,110.999,454.962,110.751z M351,25.606L429.394,104H375.5c-13.509,0-24.5-10.99-24.5-24.5V25.606z M415.5,496
                                    h-320C81.991,496,71,485.01,71,471.5v-432C71,25.99,81.991,15,95.5,15H336v64.5c0,21.78,17.72,39.5,39.5,39.5H440v352.5
                                    C440,485.01,429.009,496,415.5,496z"/>
                                  <path d="M391.5,248h-48.002c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5H391.5c4.142,0,7.5-3.357,7.5-7.5S395.642,248,391.5,248z
                                    "/>
                                  <path d="M119.5,263h192.001c4.142,0,7.5-3.357,7.5-7.5s-3.358-7.5-7.5-7.5H119.5c-4.142,0-7.5,3.357-7.5,7.5S115.358,263,119.5,263
                                    z"/>
                                  <path d="M391.5,152h-200c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h200c4.142,0,7.5-3.357,7.5-7.5S395.642,152,391.5,152z"/>
                                  <path d="M119.5,167h40.003c4.142,0,7.5-3.357,7.5-7.5s-3.358-7.5-7.5-7.5H119.5c-4.142,0-7.5,3.357-7.5,7.5S115.358,167,119.5,167z
                                    "/>
                                  <path d="M391.5,344h-152c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h152c4.142,0,7.5-3.357,7.5-7.5S395.642,344,391.5,344z"/>
                                  <path d="M207.5,344h-88c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h88c4.142,0,7.5-3.357,7.5-7.5S211.642,344,207.5,344z"/>
                                  <path d="M391.5,200h-272c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h272c4.142,0,7.5-3.357,7.5-7.5S395.642,200,391.5,200z"/>
                                  <path d="M391.5,296h-272c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h272c4.142,0,7.5-3.357,7.5-7.5S395.642,296,391.5,296z"/>
                                </svg>
                              </div>
                            </div>
                            <div class="pl-2 my-auto py-2 ">
                                <div class="small text-primary">
                                  <span class="pr-1"> 16th Sep 2022 </span> |
                                  <span class="pl-1">  Nafasi za Kazi </span>
                                </div>
                                
                                <a href="uploads/documents/sw-1663407362-TANGAZO%20INDIA%20SEPTEMBA%2c%202022.pdf" 
                                  target="_blank" class="text-dark d-block">
                                    ANNOUNCEMENT FOR TRAINING COURSES (SHORT...
                                </a>
                            </div>
                        </div>
                        <div class="d-flex pl-2 mx-0 w-100 bg-white  mb-2   has-hover-bounce  my-xs-1" 
                            >
                            <div class=" sm-hidee " style="width:25px">
                              <div class="h-100 hover-bounce w-100 d-flex align-items-center">
                                
                                <style>.primary path{fill: var(--primary)} </style>
                                <svg class="primary" version="1.1" x="0px" y="0px"
                                    viewBox="0 0 512.001 512.001" class="w-100 h-100">
                                    <path d="M454.962,110.751c-0.018-0.185-0.05-0.365-0.081-0.545c-0.011-0.06-0.016-0.122-0.028-0.182
                                    c-0.043-0.215-0.098-0.425-0.159-0.632c-0.007-0.025-0.012-0.052-0.02-0.077c-0.065-0.213-0.141-0.421-0.224-0.625
                                    c-0.008-0.021-0.015-0.043-0.023-0.064c-0.081-0.195-0.173-0.384-0.269-0.57c-0.016-0.031-0.029-0.063-0.045-0.094
                                    c-0.093-0.173-0.196-0.339-0.301-0.504c-0.027-0.042-0.049-0.086-0.077-0.127c-0.103-0.154-0.216-0.3-0.33-0.446
                                    c-0.037-0.048-0.07-0.098-0.109-0.145c-0.142-0.173-0.294-0.338-0.451-0.498c-0.015-0.015-0.027-0.031-0.042-0.046l-104-104
                                    c-0.018-0.018-0.038-0.033-0.057-0.051c-0.156-0.153-0.317-0.301-0.486-0.44c-0.055-0.045-0.113-0.083-0.169-0.126
                                    c-0.138-0.107-0.275-0.214-0.42-0.311c-0.051-0.034-0.105-0.062-0.156-0.095c-0.156-0.099-0.312-0.197-0.475-0.284
                                    c-0.036-0.019-0.074-0.035-0.111-0.053c-0.181-0.093-0.365-0.183-0.554-0.262c-0.024-0.01-0.049-0.017-0.074-0.027
                                    c-0.202-0.081-0.406-0.157-0.616-0.221c-0.027-0.008-0.054-0.013-0.081-0.021c-0.206-0.06-0.415-0.115-0.628-0.158
                                    c-0.063-0.013-0.128-0.018-0.192-0.029c-0.177-0.031-0.354-0.062-0.536-0.08C344.001,0.013,343.751,0,343.5,0h-248
                                    C73.72,0,56,17.72,56,39.5v432c0,21.78,17.72,39.5,39.5,39.5h320c21.78,0,39.5-17.72,39.5-39.5v-360
                                    C455,111.249,454.987,110.999,454.962,110.751z M351,25.606L429.394,104H375.5c-13.509,0-24.5-10.99-24.5-24.5V25.606z M415.5,496
                                    h-320C81.991,496,71,485.01,71,471.5v-432C71,25.99,81.991,15,95.5,15H336v64.5c0,21.78,17.72,39.5,39.5,39.5H440v352.5
                                    C440,485.01,429.009,496,415.5,496z"/>
                                  <path d="M391.5,248h-48.002c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5H391.5c4.142,0,7.5-3.357,7.5-7.5S395.642,248,391.5,248z
                                    "/>
                                  <path d="M119.5,263h192.001c4.142,0,7.5-3.357,7.5-7.5s-3.358-7.5-7.5-7.5H119.5c-4.142,0-7.5,3.357-7.5,7.5S115.358,263,119.5,263
                                    z"/>
                                  <path d="M391.5,152h-200c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h200c4.142,0,7.5-3.357,7.5-7.5S395.642,152,391.5,152z"/>
                                  <path d="M119.5,167h40.003c4.142,0,7.5-3.357,7.5-7.5s-3.358-7.5-7.5-7.5H119.5c-4.142,0-7.5,3.357-7.5,7.5S115.358,167,119.5,167z
                                    "/>
                                  <path d="M391.5,344h-152c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h152c4.142,0,7.5-3.357,7.5-7.5S395.642,344,391.5,344z"/>
                                  <path d="M207.5,344h-88c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h88c4.142,0,7.5-3.357,7.5-7.5S211.642,344,207.5,344z"/>
                                  <path d="M391.5,200h-272c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h272c4.142,0,7.5-3.357,7.5-7.5S395.642,200,391.5,200z"/>
                                  <path d="M391.5,296h-272c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h272c4.142,0,7.5-3.357,7.5-7.5S395.642,296,391.5,296z"/>
                                </svg>
                              </div>
                            </div>
                            <div class="pl-2 my-auto py-2 ">
                                <div class="small text-primary">
                                  <span class="pr-1"> 16th Sep 2022 </span> |
                                  <span class="pl-1">  Nafasi za Kazi </span>
                                </div>
                                
                                <a href="uploads/documents/sw-1663407570-TANGAZO%20MALAYSIA%20SEPTEMBA%2c%202022.pdf" 
                                  target="_blank" class="text-dark d-block">
                                    ANNOUNCEMENT FOR ONLINE TRAINING OPPORTU...
                                </a>
                            </div>
                        </div>
                      </div>
                    </div>

                 <div class="col-md-6 pr-0">
                  <h4 class="mb-2 w-100 text-center  section-header">Machapisho </h4>
                      
                      <div class="row mt-4 pl-3 w-100  mr-0 ">
                        <div class="row mx-0 w-100 bg-white  mb-2   has-hover-bounce  my-xs-1">
                                <div class="col-md-1  sm-hide ">
                                  <div class="h-100 w-100 d-flex align-items-center" style="min-width:25px">
                                    <img src="/site/images/svgs/document.svg" class="hover-bounce" alt="" style="width:25px">
                                  </div>
                                </div>
                                <div class="col-md-11 col-xs-12 my-auto py-2 ">
                                    <div class="small text-primary">
                                      <span class="pr-1"> 07th Oct 2022 </span> |
                                      <span class="pl-1">  Gazeti la Serikali </span>
                                    </div>
                                    
                                    <a href="uploads/documents/sw-1665955513-7%20OKTOBA%2c%202022.pdf" 
                                      target="_blank" class="text-dark d-block">
                                        GAZETI LA SERIKALI 07.10.2022
                                    </a>
                                </div>
                            </div>
                            <div class="row mx-0 w-100 bg-white  mb-2   has-hover-bounce  my-xs-1">
                                <div class="col-md-1  sm-hide ">
                                  <div class="h-100 w-100 d-flex align-items-center" style="min-width:25px">
                                    <img src="/site/images/svgs/document.svg" class="hover-bounce" alt="" style="width:25px">
                                  </div>
                                </div>
                                <div class="col-md-11 col-xs-12 my-auto py-2 ">
                                    <div class="small text-primary">
                                      <span class="pr-1"> 30th Sep 2022 </span> |
                                      <span class="pl-1">  Gazeti la Serikali </span>
                                    </div>
                                    
                                    <a href="uploads/documents/sw-1665955348-30%20SEPTEMBA%2c%202022.pdf" 
                                      target="_blank" class="text-dark d-block">
                                        GAZETI LA SERIKALI 30.09.2022
                                    </a>
                                </div>
                            </div>
                            <div class="row mx-0 w-100 bg-white  mb-2   has-hover-bounce  my-xs-1">
                                <div class="col-md-1  sm-hide ">
                                  <div class="h-100 w-100 d-flex align-items-center" style="min-width:25px">
                                    <img src="/site/images/svgs/document.svg" class="hover-bounce" alt="" style="width:25px">
                                  </div>
                                </div>
                                <div class="col-md-11 col-xs-12 my-auto py-2 ">
                                    <div class="small text-primary">
                                      <span class="pr-1"> 30th Sep 2022 </span> |
                                      <span class="pl-1">  Gazeti la Serikali </span>
                                    </div>
                                    
                                    <a href="uploads/documents/sw-1665955348-30%20SEPTEMBA%2c%202022.pdf" 
                                      target="_blank" class="text-dark d-block">
                                        GAZETI LA SERIKALI 30.09.2022
                                    </a>
                                </div>
                            </div>
                            <div class="row mx-0 w-100 bg-white  mb-2   has-hover-bounce  my-xs-1">
                                <div class="col-md-1  sm-hide ">
                                  <div class="h-100 w-100 d-flex align-items-center" style="min-width:25px">
                                    <img src="/site/images/svgs/document.svg" class="hover-bounce" alt="" style="width:25px">
                                  </div>
                                </div>
                                <div class="col-md-11 col-xs-12 my-auto py-2 ">
                                    <div class="small text-primary">
                                      <span class="pr-1"> 30th Sep 2022 </span> |
                                      <span class="pl-1">  Gazeti la Serikali </span>
                                    </div>
                                    
                                    <a href="uploads/documents/sw-1665955348-30%20SEPTEMBA%2c%202022.pdf" 
                                      target="_blank" class="text-dark d-block">
                                        GAZETI LA SERIKALI 30.09.2022
                                    </a>
                                </div>
                            </div>
                            <div class="row mx-0 w-100 bg-white  mb-2   has-hover-bounce  my-xs-1">
                                <div class="col-md-1  sm-hide ">
                                  <div class="h-100 w-100 d-flex align-items-center" style="min-width:25px">
                                    <img src="/site/images/svgs/document.svg" class="hover-bounce" alt="" style="width:25px">
                                  </div>
                                </div>
                                <div class="col-md-11 col-xs-12 my-auto py-2 ">
                                    <div class="small text-primary">
                                      <span class="pr-1"> 23rd Sep 2022 </span> |
                                      <span class="pl-1">  Gazeti la Serikali </span>
                                    </div>
                                    
                                    <a href="uploads/documents/sw-1665955257-23%20SEPTEMBA%2c%20%202022.pdf" 
                                      target="_blank" class="text-dark d-block">
                                        GAZETI LA SERIKALI 23.09.2022
                                    </a>
                                </div>
                            </div>
                        </div>
                      
                  </div>
              </div>
          </div>
        </div>

    </div>
</div>
    <!-- /contents -->
<!--Start of Books-->


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
  <img src="images/{{$book->image_path}}" alt="" class="w-100">
                          </div>
<div class="post-review">
  <ul class="post-bar">
    <li class="date-btn text-white">Bei: {{$book->price}}</li>
  </ul >
  <p class="post-description">ISBN: {{$book->isb}}<br>
    Jamii: {{$book->category}}<br>
    Mchapishaji: {{$book->publisher}}</p>
</div>
<a href="#" class="read d-block">Soma Zaidi<i class="fa fa-angle-right"></i></a>
</div>
@endforeach
 </div>
 <div class="row align-items-center"><a href="{{route('guestindex')}}"> Vitabu Zaidi</a></div>
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
                <!-- <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                  
                  <img src="/site/images/svgs/left-arrow.svg" alt="">
                  <span class="sr-only">Back</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                  
                  <img src="/site/images/svgs/right-arrow.svg" alt="">
                  <span class="sr-only">Next</span>
                </a> -->
              </div>
          </div>
    </div>

<!--End of Books-->

<!-- The maneno ya mtandaoni -->

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

<!-- End maneno ya mtandanon -->

@stop