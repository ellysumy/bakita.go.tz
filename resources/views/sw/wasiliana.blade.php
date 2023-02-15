@extends('sw.main')

@section('content')
<div class="container px-0">
        <div class="col-12 special-page">
                  <div class="col-12 p-4">
                    <h4>
          Contact Us
        </h4>
<div class="row row-cols-1 row-cols-md-2 g-4">
        <!-- Starting new cards -->
  <div class="col">
  <div class="card" style="text-align:justify"><span style="font-size:12pt font-family:&quot;Times New Roman&quot;,serif">
    
    <div class="col">
      <div class="card-body">
        <!-- <h5 class="card-title"> Contact Us  </h5> -->
        <!--Section: Contact v.2-->
<section class="mb-4">
@if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                        @endif
    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Wasiliana Nasi</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Una swali lolote? Tafadhali usisite kuwasiliana nasi. Timu yetu ipo tayari kukuhudumia kwa wakati.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">

            <form id="contact-form" name="contact-form" action="/contact-form" method="POST">
              @csrf
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Jina lako</label>
                            <input type="text" id="name" name="name" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Baruapepe Yako</label>
                            <input type="text" id="email" name="email" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Sababu</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                            
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Ujumbe wako</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>
            <br>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Tuma</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>S.L.P 4766, Kijitonyama, Dar es Salaam, Tanzania</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+255222762243 , +255222762213</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>km@bakita.go.tz</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
        
      </div>
    </div>
  </span>
  </div>
</div>
        <!-- End new cards -->

</div>
 <!-- End new cards -->
  </div>
</div>
</div>

@stop