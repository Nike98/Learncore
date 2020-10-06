<h2 class="h2 p-2">Threads</h2>
<div class="list-group">
    @forelse ($threads as $thread)
    <a href="{{ route('thread.show', $thread->id) }}" class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex">
            <h4 class="h4 mb-1">{{ $thread->subject }}</h4>
        </div>

        <p class="list-group-item-text">{{ Str::limit($thread->thread, 100, '...') }}</p>
        {{-- <small><img src=""></small>
        <small></small> --}}
    </a>
    @empty
    <h5 class="h5">No further threads to show</h5>
    @endforelse
</div>
