@extends('layouts.app')

@section('content')
<div class="container">

<h1>Add A New Piece of Art</h1>

<form class="" method="POST" action="">
  @csrf
  <div class="card mb-2 around">
    <div class="card-body">
      <div class="form-group">Artwork information
        <!-- below is the dropdown of active exhibits -->
        <input class="form-control mt-2 mb-5 around" name="exhibit" id="exhibit" placeholder="Name your exhibit">

        <!-- this adds the new art info -->
        <input class="form-control mt-2 mb-5 around" name="year_completed" id="year_completed" placeholder="When was this photo taken?">
        <input class="form-control mt-2 mb-5 around" name="artist" id="artist" placeholder="Who took the photo?">
        <input class="form-control mt-2 mb-5 around" name="url" id="url" placeholder="What's the photo url?">
        <input class="form-control mt-2 mb-5 around" name="description" id="description" placeholder="How would you describe this?">

      </div>
    </div>
  </div>

    <div class="text-center">
      <button type="submit" class="mt-2 btn btn-outline-primary">Save</button>
    </div>
  </form>


</div>
@endsection
