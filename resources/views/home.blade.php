@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {{--
            @yield('banner')
                * Not working/showing
                * Function: Shows the banner "Learncore" on the head of the page
                * try fixing if required to be displayed
        --}}

        {{--<div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        {{ __('You are logged in!') }}
    </div>
</div>
</div> --}}

{{-- Category Section --}}
<div class="col-md-3">
    <ul class="list-group {{--list-group-flush *Repair when doing colors for the site--}}">
        <a href="{{--{{route('thread.index')}}--}}" class="list-group-item d-flex justify-content-between align-items-center">All Thread<span class="badge badge-primary badge-pill">14</span></a>
        <a href="" class="list-group-item d-flex justify-content-between align-items-center">C Language<span class="badge badge-primary badge-pill">3</span></a>
        <a href="" class="list-group-item d-flex justify-content-between align-items-center">C++<span class="badge badge-primary badge-pill">8</span></a>
        <a href="" class="list-group-item d-flex justify-content-between align-items-center">Java Core<span class="badge badge-primary badge-pill">25</span></a>
        <a href="" class="list-group-item d-flex justify-content-between align-items-center">Python<span class="badge badge-primary badge-pill">10</span></a>
    </ul>
</div>

{{-- Threads display section --}}
<div class="col-md-9">
    <div class="content-wrap well">@include('thread.partials.thread-list')</div>
</div>
</div>
</div>
@endsection
