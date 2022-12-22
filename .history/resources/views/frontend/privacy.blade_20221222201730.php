@extends('frontend.layouts.app')

@section('content')
<div class="page-header page-header-small clear-filter" filter-color="teal">
    <div class="page-header-image" data-parallax="true" style="background-image:url('{{asset('img/cover-01.jpg')}}');">
    </div>
    <div class="container">
        <h3 class="title">
            Privacy Policy - {{ config('app.name') }}
        </h3>
    </div>
</div>

<div class="section">
    <div class="container text-center">
        <strong>Privacy Policy</strong>

        
    </div>
</div>

@endsection
