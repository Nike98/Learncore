@extends('layouts.app')

@section('content')

<h4>{{ $thread->subject }}</h4>
<hr>

<div class="thread-details">
    {{ $thread->thread }}
</div>

<div class="actions">
    {{-- Edit --}}
    <a href="{{ route('thread.edit', $thread->id) }}" class="btn btn-info btn-xs">Edit</a>

    {{-- Delete --}}
    <form action="{{ route('thread.destroy', $thread->id) }}" method="POST" class="inline-it">
        <input type="submit" value="Delete" class="btn btn-danger btn-xs">
    </form>
</div>

@endsection
