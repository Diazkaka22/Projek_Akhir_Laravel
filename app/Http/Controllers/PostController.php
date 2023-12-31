<?php
namespace App\Http\Controllers;
//import Model "Post
use App\Models\Post;
//return type View
use Illuminate\View\View;
use Illuminate\support\Facades\DB;
;
//return type redirectResponse
use Illuminate\Http\RedirectResponse;
use Illuminate\support\Facades\Storage;
use Illuminate\Http\Request;
class PostController extends Controller
{
public function index(): View
{
//get posts
$posts = Post::latest()->paginate(5);
//render view with posts
return view('posts.admin', compact('posts'));
}
public function tampil(): view
{
    //get posts
    $posts = Post::latest()->paginate(5);

    //render view with posts
    return view('front', compact('posts'));
}
public function blog(): view
{
    //get posts
    $posts = Post::latest()->paginate();

    //render view with posts
    return view('blog', compact('posts'));
}
public function create(): View
{
return view('posts.create');
}

public function store(Request $request): RedirectResponse
{
    //validate form
    $this->validate($request, [
    'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
    'title' => 'required|min:5',
    'content' => 'required|min:10'
    ]);
    //upload image
    $image = $request->file('image');
    $image->storeAs('public/posts', $image->hashName());
    //create post
    Post::create([
    'image' => $image->hashName(),
    'title' => $request->title,
    'content' => $request->content
    ]);
    //redirect to index
    return redirect()->route('posts.index')->with(['success' => 'Data
    
    Berhasil Disimpan!']);
    }
    public function show (string $id)
    {
        //getpost by ID
        $posts = Post::findOrFail($id);

        //render view with post
        return view('posts.show', compact('posts'));
    }
    public function edit(string $id) : View
    {
        //get post by id
        $posts = Post::findOrFail($id);

        //render view with post
        return view('posts.edit', compact('posts'));
    }
    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'image'   => 'image|mimes:jpeg,jpg,png|max:2048',
            'title'   => 'required|min:5',
            'content' => 'required|min:10'
        ]);
        //get post by id
        $post = Post::findOrFail($id);
        //check if image is uploaded
        if ($request->hasFile('image')) {
    //upload new image
     $image = $request->file('image');
     $image->storeAs('storage/posts', $image->hashName());

    //delete old image
    Storage::delete('storage/posts/'.$post->image);

    //update post with new image
    $post->update([
    'image' => $image->hashName(),
    'title' => $request->title,
    'content' => $request->content
    ]);

    } else {

    //update post without image
    $post->update([
        'title' => $request->title,
        'content' => $request->content
    ]);
    }
    //redirect to index
    return redirect()->route('posts.index')->with(['success' => 'Data
    Berhasil Diubah!']);
    }
    public function destroy(string $id)
    {
        $posts = Post::findOrFail($id);

        $posts->delete();

        return redirect()->route('posts.index')->with(['success' => 'data berhasil dihapus!']);
    }
    public function search (request $request)
    {
        $search = $request->search;
        $posts = DB::table('posts')
        ->where('title','like', "%".$search."%")
        ->paginate();
        return view('posts.admin', compact('posts'));
    }
}