@extends('layouts.main')

@section('content')
<div class="container mt-5 pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    You are logged in as <strong>{{ Auth::user()->name }}</strong>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">Photo Gallery?</div>

                <div class="list-group list-group-flush">
                    <a href="/upload" class="list-group-item list-group-item-action">
                        Add Images
                    </a>
                    <a href="/remove" class="list-group-item list-group-item-action">
                        Remove Images
                    </a>
                </div>
            </div>

            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn btn-danger mt-4">Logout</button>
            </form>
        </div>
    </div>
</div>
@endsection
