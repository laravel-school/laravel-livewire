<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostIndex extends Component
{
    use WithPagination;
    // public $posts;

    protected $listeners = [
        'postAdded',
    ];

    public function postAdded($postId)
    {
        // $this->posts->prepend(Post::find($postId));
    }

    public function mount()
    {
        // $this->posts = Post::latest()->paginate(3);
    }

    public function render()
    {
        return view('livewire.post-index')
            ->with([
                'posts' => Post::latest()->paginate(3)
            ]);
    }
}
