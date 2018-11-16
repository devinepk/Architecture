@extends('layouts.app')

@section('content')
<div class="container">

<h1 class="text-center mt-3 mb-5">Life in the Abstract</h1>

<ul>

@foreach ($exhibits as $exhibit)


<div class="card mb-5" >
  <div class="card-header text-center">
    {{ $exhibit->artist }}
  </div>
  <img class="card-img-top" src="{!! $exhibit->url !!}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">{{ $exhibit->description }}</p>
    <p class="card-text"><small class="text-muted">Published: {{ $exhibit->year_completed}}</small></p>
  </div>
</div>



@endforeach

</ul>


</div>
@endsection
