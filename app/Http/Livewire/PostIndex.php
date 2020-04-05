<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;

class PostIndex extends Component
{
    public function render()
    {
        $posts = Post::latest()->get();

        return view('livewire.post-index')
            ->with([
                'posts' => $posts
            ]);
    }
}
