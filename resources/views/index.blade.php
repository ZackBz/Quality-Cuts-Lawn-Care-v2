@extends('layouts.main')

@section('pages')
<meta property="sniddl:page" name="index" content="/views/home">
<meta property="sniddl:page" name="photos" content="/photos">
<meta property="sniddl:page" name="contact" content="/views/contact">
@endsection

@section('content')
    <div class="pages">
        <div id="page-index" class="page-visible">
            @include('pages/home')
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/js/app.js"></script>
@endsection
