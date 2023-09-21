<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $searchQuery = $request->input('search');
    $posts = Post::where('title', 'like', '%'.$searchQuery.'%')
        ->orWhere('description', 'like', '%'.$searchQuery.'%')
        ->paginate(4);

    return view('blog.index', compact('posts', 'searchQuery'));
}

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view ('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png',

        ]);
        $slug = Str::slug($request->title, '-');
        $newImage = uniqid() . '-' . $slug . '-' . $request->image->extension();
        $request->image->move(public_path('image'),$newImage);

     
        Post::create(
            [
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'slug' => $slug,
                'image' => $newImage,
                'user_id' => auth()->user()->id
            ]
        );
        return redirect('/blog');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
    $title = Str::slug($slug, ' ');

    return view('blog.show')
        ->with('post', Post::where('title', $title)->first());
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $title = Str::slug($slug, ' ');

    return view('blog.edit')
        ->with('post', Post::where('title', $title)->first());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
{
    $post = Post::where('slug', $slug)->firstOrFail();

    $title = Str::slug($request->input('title'), ' ');
    $newImage = $post->image;

    if ($request->hasFile('image')) {
        // Delete the old image
        $oldImage = public_path('image/' . $post->image);
        if (file_exists($oldImage)) {
            unlink($oldImage);
        }

        // Upload the new image
        $newImage = uniqid() . '-' . $slug . '.' . $request->image->extension();
        $request->image->move(public_path('image'), $newImage);
    }

    $post->update([
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'slug' => $title,
        'image' => $newImage,
        'user_id' => auth()->user()->id
    ]);

    return redirect('/blog/' . $title)->with('message', 'Modified successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $title = Str::slug($slug, ' ');
        Post::where('title',$title)->delete();
        return redirect('/blog')->with('message', 'Post Deleted !');
    }


    
    
}
