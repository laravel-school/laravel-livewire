<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;

class PostList extends Component
{
    public function render()
    {
        $posts = Post::latest()->get();

        return view('livewire.post-list', [
            'posts' => $posts
        ]);
    }
}
