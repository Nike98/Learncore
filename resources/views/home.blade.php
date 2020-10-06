@extends('layouts.app')

@section('content')

<div class="container">

    {{--
            @yield('banner')
                * Not working/showing
                * Function: Shows the banner "Learncore" on the head of the page
                * try fixing if required to be displayed
        --}}

    {{--<div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
</div>

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

<div class="row">
    @section('category')
    @include('layouts.partials.categories')
    @show
    {{-- Threads display section --}}
    <div class="col-md-9">
        <div class="row content-heading">
            <h4>@yield('heading')</h4>
        </div>
        <div class="content-wrap well">@include('thread.partials.thread-list')</div>
    </div>
</div>
</div>
@endsection
