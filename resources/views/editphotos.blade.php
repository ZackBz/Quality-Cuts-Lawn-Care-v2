@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h1 class="display-4">Edit Caption</h1>
    <form class="" action="/edit" method="post">
        @csrf
        <div class="form-group">
            <label>Caption</label>
            <input type="hidden" name="id" value="{{$edit->id}}">
            <input class="form-control" type="text" name="caption" value="{{$edit->captions}}" required>
        </div>
        <button class="btn btn-primary" type="submit" name="submit">Save</button>
    </form>
</div>
@endsection
