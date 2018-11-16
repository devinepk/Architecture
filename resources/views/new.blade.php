@extends('layouts.app')

@section('title')
  New Photo
@endsection


@section('content')
<div class="container">


<form class="" method="POST" action="">
  @csrf
  <div class="card mb-2 around">
    <div class="card-header text-center">
  Add A New Piece of Art
  </div>
    <div class="card-body">
      <div class="form-group">
        <!-- below is the dropdown of active exhibits -->
        <label for="exhibit">Name your exhibit</label>
        <input class="form-control mt-2 mb-5 around" name="exhibit" id="exhibit">

        <!-- this adds the new art info -->
        <label for="year_completed">When was this photo taken?</label>
        <input class="form-control mt-2 mb-5 around" name="year_completed" id="year_completed">
        <label for="artist1">Who took the photo?</label>
        <input class="form-control mt-2 mb-5 around" name="artist" id="artist">
        <label for="url">What's the photo url?</label>
        <input class="form-control mt-2 mb-5 around" name="url" id="url">
        <label for="description">How would you describe this?</label>
        <input class="form-control mt-2 mb-5 around" name="description" id="description">

      </div>
    </div>
  </div>

    <div class="text-center">
      <button type="submit" class="mt-2 btn btn-outline-primary">Save</button>
    </div>
  </form>


</div>
@endsection
