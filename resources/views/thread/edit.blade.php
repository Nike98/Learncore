@extends('home')

@section('heading', "Create Thread")

@section('content')

@include('layouts.partials.error')
@include('layouts.partials.success')

<div class="row">
    <div class="well">
        <form action="{{ route('thread.update', $thread->id) }}" class="form-vertical" method="POST" role="form" id="create-thread-form">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="Subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="{{ $thread->subject }}">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" name="type" id="type" placeholder="Type" value="{{ $thread->type }}">
            </div>
            <div class="form-group">
                <label for="thread">Thread</label>
                <textarea class="form-control" name="thread" id="thread" placeholder="Thread body..." value="{{ $thread->thread }}"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

{{-- @include('thread.partials.thread-list') --}}

@endsection
