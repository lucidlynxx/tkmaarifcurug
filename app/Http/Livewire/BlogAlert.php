<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class BlogAlert extends Component
{
    public $blogId;

    public function render()
    {
        return view('livewire.blog-alert');
    }

    public function destroy($blogId)
    {
        $fileGambar = Blog::where('id', $blogId)->first();

        if ($fileGambar->image) {
            Storage::delete($fileGambar->image);
        }

        Blog::find($blogId)->delete();

        return redirect('/dashboard/acara');
    }
}
