<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.blog.index', [
            'title' => "TK Ma'arif Curug | Blog",
            'author' => 'Novy Nurlelasari',
            'blogs' => Blog::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blog.create', [
            'title' => "TK Ma'arif Curug | Blog",
            'author' => 'Novy Nurlelasari',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {
        $request->slug = SlugService::createSlug(Blog::class, 'slug', $request->judul);

        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'body' => 'required',
            'image' => 'image|file|max:5120',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('tkmaarifcurug-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Blog::create($validatedData);

        alert()->success('Buat Data Sukses!', 'Data Acara telah ditambahkan.');

        return redirect('/dashboard/acara');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $acara)
    {
        return view('dashboard.blog.show', [
            'title' => "TK Ma'arif Curug | Blog",
            'author' => 'Novy Nurlelasari',
            'blog' => $acara
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $acara)
    {
        return view('dashboard.blog.edit', [
            'title' => "TK Ma'arif Curug | Blog",
            'author' => 'Novy Nurlelasari',
            'blog' => $acara
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $acara)
    {
        $rules = [
            'judul' => 'required|max:255',
            'body' => 'required',
            'image' => 'image|file|max:5120',
        ];

        if ($request->slug != $acara->slug) {
            $rules['slug'] = 'required|unique:blogs';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('tkmaarifcurug-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Blog::where('id', $acara->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data acara telah diubah.');

        return redirect('/dashboard/acara');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
