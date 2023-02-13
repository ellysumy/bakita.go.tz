@extends('sw.main')

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
<h4 class="my-2 text-center   section-header">Vitabu vya BAKITA</h4>

<div class="row mt-4   justify-content-center ">
  @foreach($books as $book)
  <div class="post-slide7 col-xs-12 col-sm-4 col-md-4 my-2">
    <div class="post-img">
      <img src="/images/{{$book->image_path}}" alt="" class="w-100">
    </div>
<div class="post-review">
  <ul class="post-bar">
    <li class="date-btn text-white">Bei: {{$book->price}}/=</li>
  </ul >
  <p class="post-description">ISBN: {{$book->isbn}}<br>
    Jamii: {{$book->category}}<br>
    Mchapishaji: {{$book->publisher}}</p>
</div>
<a href="{{route('swshow', $book->slug)}}" class="read d-block">Angalia Zaidi Kitabu<i class="fa fa-angle-right"></i></a>
</div>
@endforeach
<div class="col-md-12">
  {{ $books->links('sw.custompagination')}}
</div>
 
 

 </div>
<div class="text-right mt-2">
</div>
</div>
</div>

@stop