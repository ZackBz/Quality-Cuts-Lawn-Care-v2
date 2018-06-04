@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h1 class="display-4">Upload Images</h1>
    <form class="" action="/upload" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="fileupload" class="fileupload">
                <input id="fileupload" type="file" name="images[]" multiple required>
                <!-- <button type="button" class="btn btn-primary">Choose Files</button> -->
            </label>
        </div>
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category" required>
                <option selected disabled>Choose a cateory</option>
                @foreach(config('photocategory') as $category)
                <option value="{{$category}}">{{$category}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Caption</label>
            <input class="form-control" type="text" name="caption" required>
        </div>
        <button class="btn btn-primary" type="submit" name="submit">Upload</button>
    </form>
</div>
@endsection
