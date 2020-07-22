<h2 class="h2">Threads</h2>
<div class="list-group">
    @forelse ($threads as $thread)
    <a href="" class="list-group-item list-group-item-action flex-column align-items-start">
        <h4 class="h4 list-group-item-heading">{{ $thread->subject }}</h4>
        <p class="list-group-item-text">{{ $thread->thread }}</p>
    </a>
    @empty
    <h5 class="h5">No further threads to show</h5>
    @endforelse
</div>
