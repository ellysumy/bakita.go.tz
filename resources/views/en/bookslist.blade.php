@extends('en.main')

<style>
    .page-item.active .page-link{
        z-index: 3;
        color: #fff !important  ;
        background-color: #00ACD6 !important;
        border-color: #00ACD6 !important;
        border-radius: 50%;
        padding: 6px 12px;
    }
    .page-link{
        z-index: 3;
        color: #00ACD6 !important;
        background-color: #fff;
        border-color: #007bff;
        border-radius: 50%;
        padding: 6px 12px !important;
    }
    .page-item:first-child .page-link{
        border-radius: 30% !important;
    }
    .page-item:last-child .page-link{
        border-radius: 30% !important;   
    }
    .pagination li{
        padding: 3px;
    }
    .disabled .page-link{
        color: #212529 !important;
        opacity: 0.5 !important;
    }
</style>
@section('content')

<!-- We put the contents here about books. This later will take fro database. -->

<div class="container mt-3 pb-2">
            
  <div class="col-md-12  px-md-2">
<h4 class="my-2 text-center   section-header">BAKITA BOOKS PAGE</h4>

<div class="row mt-4   justify-content-center ">
  @foreach($books as $book)
  <div class="post-slide7 col-xs-12 col-sm-4 col-md-4 my-2">
    <div class="post-img">
      <img src="/images/{{$book->image_path}}" alt="" class="w-100">
    </div>
<div class="post-review">
  <ul class="post-bar">
    <li class="date-btn text-white">Price: {{$book->price}}/=</li>
  </ul >
  <p class="post-description">ISBN: {{$book->isbn}}<br>
    Category: {{$book->category}}<br>
    Publisher: {{$book->publisher}}</p>
</div>
<a href="{{ route('sw.show', $book->slug)}}" class="read d-block">Read More<i class="fa fa-angle-right"></i></a>
</div>

@endforeach
 
 <!-- <div class="post-slide7 col-xs-12 col-sm-4 col-md-4 my-2">
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
</div> -->
 <!-- <div class="post-slide7 col-xs-12 col-sm-4 col-md-4 my-2">
<div class="post-img">
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
</div> -->
<div class="col-md-12">
                            {{ $books->links('sw.custompagination')}}
                        </div>
 </div>

     <!-- {!! $books->links() !!} -->
       

<div class="text-right mt-2">
</div>
</div>
</div>



<!-- <div class="container mt-3 pb-2">
            
  <div class="col-md-12  px-md-2">
<div class="row mt-4   justify-content-center ">
  <div class="post-slide7 col-xs-12 col-sm-4 col-md-4 my-2">
<div class="post-img">
  <img src="uploads/gallery/kamusi.jpeg" alt="" class="w-100">
                          </div>
<div class="post-review">
  <ul class="post-bar">
    <li class="date-btn text-white">Bei: Tsh 25,000/=</li>
  </ul >
  <p class="post-description">ISBN: 9789987020984<br>
    Jamii: Kamusi<br>
    Mchapishaji: BAKITA (2017)</p>
</div>
<a href="#" class="read d-block">NUNUA<i class="fa fa-angle-right"></i></a>
</div>
<div class="post-slide7 col-xs-12 col-sm-4 col-md-4 my-2">
<div class="post-img">
  <img src="uploads/gallery/furahia_kiswahili.jpeg" alt="" class="w-100">
                          </div>
<div class="post-review">
  <ul class="post-bar">
    <li class="date-btn text-white">Bei: Tsh 15,000/=</li>

  </ul >
  <p class="post-description">ISBN: 9987720064<br>
    Jamii: Machapisho<br>
    Mchapishaji: BAKITA (2013)</p>
</div>
<a href="#" class="read d-block">NUNUA<i class="fa fa-angle-right"></i></a>
</div>
<div class="post-slide7 col-xs-12 col-sm-4 col-md-4 my-2">
<div class="post-img">
                              <img src="uploads/gallery/mwongozo.jpeg" alt="" class="w-100">
                          </div>
<div class="post-review">
  <ul class="post-bar">
    <li class="date-btn text-white">Bei:Tsh. 6000/=</li>

  </ul >
  <p class="post-description">ISBN: 9987720064<br>
    Jamii: Machapisho<br>
    Mchapishaji: BAKITA (2013)</p>
</div>
<a href="#" class="read d-block">NUNUA<i class="fa fa-angle-right"></i></a>
</div>
                                                        </div>
<div class="text-right mt-2">
</div>
</div>
</div> -->
@stop