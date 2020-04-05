<div>
    <h1>List of Post</h1>

    @foreach($posts as $post)
        <livewire:post-single :post="$post" :key="$post->id">
    @endforeach
</div>
