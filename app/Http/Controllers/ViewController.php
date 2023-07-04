<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Galeri;
use App\Models\Guru;
use App\Models\Header;
use App\Models\Jumat;
use App\Models\Kamis;
use App\Models\Kontak;
use App\Models\Rabu;
use App\Models\Sabtu;
use App\Models\Selasa;
use App\Models\Senin;
use App\Models\TentangKami;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class ViewController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => "TK Ma'arif Curug",
            'author' => "Novy Nurlelasari",
            'tentangKami' => TentangKami::get(),
            'kelas' => Senin::get(),
            'kelas1' => Selasa::get(),
            'kelas2' => Rabu::get(),
            'guru' => Guru::get(),
            'blogs' => Blog::latest()->paginate(3),
            'header' => Header::get(),
            'testimonis' => Testimoni::latest()->get()
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => "TK Ma'arif Curug",
            'author' => "Novy Nurlelasari",
            'tentangKami' => TentangKami::get()
        ]);
    }

    public function classes()
    {
        return view('classes', [
            'title' => "TK Ma'arif Curug",
            'author' => "Novy Nurlelasari",
            'kelas' => Senin::get(),
            'kelas1' => Selasa::get(),
            'kelas2' => Rabu::get(),
            'kelas3' => Kamis::get(),
            'kelas4' => Jumat::get(),
            'kelas5' => Sabtu::get(),
        ]);
    }

    public function teachers()
    {
        return view('teachers', [
            'title' => "TK Ma'arif Curug",
            'author' => "Novy Nurlelasari",
            'guru' => Guru::get()
        ]);
    }

    public function gallery()
    {
        return view('gallery', [
            'title' => "TK Ma'arif Curug",
            'author' => "Novy Nurlelasari",
            'galeri' => Galeri::get()
        ]);
    }

    public function blogs()
    {
        return view('blogs', [
            'title' => "TK Ma'arif Curug",
            'author' => "Novy Nurlelasari",
            'blogs' => Blog::latest()->filter(request(['search']))->paginate(3)->withQueryString()
        ]);
    }

    public function showBlog(Blog $blog)
    {
        return view('showblog', [
            'title' => "TK Ma'arif Curug",
            'author' => "Novy Nurlelasari",
            'blog' => $blog
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => "TK Ma'arif Curug",
            'author' => "Novy Nurlelasari"
        ]);
    }

    public function storeContact(Request $request)
    {
        $request->slug = SlugService::createSlug(Kontak::class, 'slug', $request->nama);

        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email:dns',
            'body' => 'required',
        ]);

        Kontak::create($validatedData);

        alert()->success('Kirim Pesan Sukses!', 'Pesan telah dikirim.');

        return redirect('/kontak');
    }
}
