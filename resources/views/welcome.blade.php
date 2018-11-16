@extends('layouts.app')

@section('title')
Home
@endsection


@section('content')
<div class="container">

<h1 class="text-center mt-3 mb-5">Life in the Abstract</h1>

<ul>

@foreach ($exhibits as $exhibit)


<div class="card mb-5" >
  <div class="card-header text-center">
    {{ $exhibit->artist }}
  </div>
  <a href="{!! $exhibit->url !!}"><img class="card-img-top" src="{!! $exhibit->url !!}" alt="Card image cap"></a>
  <div class="card-body">
    <p class="card-text mb-0">{{ $exhibit->description }}</p>
    <p class="card-text mb-0"><small>This art was created on {{ $exhibit->year_completed}}</small></p>
    <p class="card-text mb-0"><small>It was published here on {{ $exhibit->created_at}}</small></p>
    <p class="card-text"><small><a href="#" class="text-danger">Delete</a></small></p>
  </div>
</div>




@endforeach

</ul>


</div>
@endsection
