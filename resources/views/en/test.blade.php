@extends('en.main')
@section('content')
<div id="main">
  <div class="container">
<div class="accordion" id="faq">
                    <div class="card">
                        <div class="card-header" id="faqhead1">
                            <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1"
                            aria-expanded="true" aria-controls="faq1">Organization Structure of the National Kiswahili Council</a>
                        </div>

                        <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                            <div class="card-body">
                                <div class="col-12 px-0 mt-4">
                          <!-- <img src="/uploads/gallery/bakitastructure.png"> -->
                          <img src="/uploads/gallery/bakitastructure.png" alt="" class="img-fluid">
                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead2">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                            aria-expanded="true" aria-controls="faq2">The History of National Kiswahili Concil</a>
                        </div>

                        <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                            <div class="card-body">
                                The National Kiswahili Council, translated into Kiswahili as Baraza la Kiswahili la Taifa, (BAKITA) is a Public Organization which operates under the Ministry responsible for Culture. The Council was established by an Act of Parliament No. 27 of 1967 and its amendments of 1983 and 2016 . The Act mandates the Council with authority to manage and coordinate all activities related with the promotion of Kiswahili in the United Republic of Tanzania and beyond. Establishment of the Council was in line with recommendations made by the Committee of language practitioners formed by the Minister of Education in December 1961, to develop proposals for the development of Kiswahili as a national language. The Council started its operations with four members of staff who were housed in the offices of the Ministry of Education. Among the first tasks of the Council was to develop Kiswahili technical vocabularies for different domains of knowledge. In 1972; the Council moved to the Coronation Building of the National House Corporation at Samora and Azikiwe Avenues in Dar es Salaam, and in 2012 the Council moved to Plot Number 45 B, Kijitonyama in Dar es Salaam.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead3">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                            aria-expanded="true" aria-controls="faq3">S.S.S</a>
                        </div>

                        <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                                moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- put the test for books -->
               <div class="container">
  <h2>Carousel Example</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="la.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="chicago.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="ny.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



                <!-- End test of books -->



    </div>
  </div>

@stop