@extends('home')

@section('heading', "Create Thread")

@section('content')

@include('layouts.partials.error')
@include('layouts.partials.success')

<div class="row">
    <div class="well">
        <form action="{{ route('thread.store') }}" class="form-vertical" method="POST" role="form" id="create-thread-form">
            @csrf
            <div class="form-group">
                <label for="Subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" name="type" id="type" placeholder="Type" value="{{ old('type') }}">
            </div>
            <div class="form-group">
                <label for="thread">Thread</label>
                <textarea class="form-control" name="thread" id="thread" placeholder="Thread body..." value="{{ old('thread') }}"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

{{-- @include('thread.partials.thread-list') --}}

@endsection
