@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <form action="/logout" method="post">
                @csrf
                <a class="btn btn-primary mt-4" href="/upload">Upload Images</a>
                <button type="submit" class="btn btn-danger mt-4">Logout</button>
            </form>
        </div>
    </div>
</div>
@endsection
