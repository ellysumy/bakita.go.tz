@extends('sw.main')

@section('content')

<!-- We put the contents here about books. This later will take fro database. -->

<div class="container mt-3 pb-2">
            
  <div class="col-md-12  px-md-2">
<h4 class="my-2 text-center   section-header">BAKITA VIEW PAGE</h4>

<div class="row mt-4   justify-content-center ">
<!--   @foreach($books as $book)
  <div class="post-slide7 col-xs-12 col-sm-4 col-md-4 my-2">
    <div class="post-img">
      <img src="uploads/gallery/istilahi.jpeg" alt="" class="w-100">
    </div>
<div class="post-review">
  <ul class="post-bar">
    <li class="date-btn text-white">Price: {{$book->price}}/=</li>
  </ul >
  <p class="post-description">ISBN: {{$book->isbn}}<br>
    Category: {{$book->category}}<br>
    Publisher: {{$book->publisher}}</p>
</div>
<a href="#" class="read d-block">Read More<i class="fa fa-angle-right"></i></a>
</div>
@endforeach -->

<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-4">
      <div class="post-img" >
      <img src="/images/{{$book->image_path}}" alt="" class="w-100" style="max-height: 450px;">
    </div>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4 class="card-title">Jina la Kitabu: {{$book->name}}</h4>
        <p class="card-text text-xl text-gray-700 pt-8 pb-10 leading-8 font-light"> <b>Maelezo ya Kitabu:</b><br>{{$book->description}}
        </p>
        <hr>
        <p class="post-description"><b>ISBN: </b>{{$book->isbn}}<br>
          <hr>
    <b>Jamii: </b>{{$book->category}}<br>
    <hr>
    <b>Mchapishaji: </b>{{$book->publisher}}</p>
    <p class="card-text"><small class="text-muted"> By <span class="font-bold italic text-gray-800">{{ $book->user->name }}</span>, Created on {{ date('jS M Y', strtotime($book->updated_at)) }}
    </span> </small></p>
</div>

       
        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
      </div>
    </div>
  </div>
  <div><a class="button" href="/bookslist"> Vitabu Vingine</a></div>
</div>

 
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

 </div>

    
       

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