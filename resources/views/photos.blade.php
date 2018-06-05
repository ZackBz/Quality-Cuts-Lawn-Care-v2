@if($remove)
    @extends('layouts.main')
    @section('content')
@endif
<div class="container">

    <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Photos</h1>
        <p class="lead">Feel free to view one of the photo galleries below. Check back often we add images as soon as we can!</p>
    </div>

    @foreach($categories as $category)
    <h2>{{$category}}</h2>
    <hr class="featurette-divider">
    <div class="row mb-3">

    @foreach($images->where('category', $category)->all() as $image)
        <div class="col-md-4">
            <form action="/remove" method="post">
                @csrf
                <div class="card mb-2">
                    @if($remove)
                        <button type="submit" name="id" value="{{$image->id}}" class="gallery-remove">Remove &times;</button>
                    @endif
                    <a href="#" data-toggle="modal" data-target="#image-{{$image->id}}"><img class="card-img-top" src="{{$image->url}}" alt="Card image cap"></a>
                    <div class="card-body">
                        <p class="card-text">{{$image->captions}} </p>
                    </div>
                </div>
            </form>
        </div>

        <div class="modal" tabindex="-1" id="image-{{$image->id}}" role="dialog">
          <div class="modal-dialog custom-modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Image Enlarger</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <div class="modal-body">
                <img class="img-fluid" src="{{$image->url}}" alt="Card image cap">
              </div>

            </div>
          </div>
        </div>
        @endforeach

    </div>

    @endforeach


</div>

@if($remove)
    @endsection
@endif
