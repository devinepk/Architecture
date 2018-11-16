@extends('layouts.app')

@section('content')
<div class="container">

<h1>Architecture</h1>

<ul>

@foreach ($exhibits as $exhibit)

    <li>{{ $exhibit->url }}</li>

@endforeach

</ul>


</div>
@endsection
