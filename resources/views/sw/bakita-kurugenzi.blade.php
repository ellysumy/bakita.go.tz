@extends('sw.main')

@section('content')
<div class="container px-0">
        <div class="col-12 special-page">
                  <div class="col-12 p-4">
                    <h4>
          Kurugenzi za BAKITA
        </h4>
<div class="row row-cols-1 row-cols-md-2 g-4">
        <!-- Starting new cards -->
  <div class="col">
 <div class="accordion" id="faq">
                    <div class="card">
                        <div class="card-header" id="faqhead1">
                            <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1"
                            aria-expanded="true" aria-controls="faq1">Kurugenzi ya Maendeleo na Matumizi ya Kiswahili</a>
                        </div>

                        <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                            <div class="card-body row">
                              <div class="col">
                                <img src="uploads/gallery/slider2.png">
                              </div>
                              <div class="col">
                              <h3>Majukumu ya Kurugenzi ya Huduma za Baraza</h3>
                              <hr class="bg-dark">

                              <p>
                                Kuratibu na kusimamia shughuliza ukuzaji wa lugha ya Kiswahili na matumizi yake kwa mujibu wa sheria, kanuni na taratibu za Baraza
                              </p></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead1">
                            <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq2"
                            aria-expanded="true" aria-controls="faq2">Kurugenzi ya Huduma za Baraza</a>
                        </div>

                        <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                            <div class="card-body row">
                              <div class="col">
                                <img src="uploads/gallery/slider4.png">
                              </div>
                              <div class="col"> <h3>Majukumu ya Kurugenzi ya Huduma za Baraza</h3>
                                <hr class="bg-dark">
                                <p>
                                  Kusimamia masuala ya fedha na rasilimaliwatu, kutoa huduma za kiutawala na kuratibu masuala ya mipango, uendeshaji na tathmini.
                                </p>
                                 </div>
                                
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
        <!-- End new cards -->

</div>
 <!-- End new cards -->
  </div>
</div>
</div>

@stop