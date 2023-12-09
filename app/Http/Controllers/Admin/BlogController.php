<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Blog;
use App\Models\Tag;
use App\Models\BlogBlock;
use App\Models\BlogComponent;
use App\Models\Block;
use App\Models\Component;
use App\Http\Requests\Admin\BlogCreateRequest;
use Illuminate\Support\Facades\Auth;
use Hash;

class BlogController extends Controller
{
    public function index(){

        $blogs = Auth::user()->blogs;
        return Inertia::render('Admin/Blog/Index', [
            'blogs' => $blogs,
        ]);
    }

    public function create(){
        return Inertia::render('Admin/Blog/Create');
    }

    public function edit(Request $request){
        $blog = Auth::user()->blogs()->where('id',$request->id)->with(['blog_blocks.blog_components'])->first();
        $tags = \Common::get_tag_names($blog->tags);
        return Inertia::render('Admin/Blog/Update', [
            'blog' => $blog,
            'tags' => $tags,
        ]);
    }

    public function store(BlogCreateRequest $request){
        $tags = \Common::double_explode(' ', ',', '、', '#', '　', '＃', $request->tags);
        $blog = Auth::user()->blogs()->create([
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);
        $blog->tags()->attach(\Common::get_tag_ids($tags));
        $this->storeBlocks($request->blocks,$blog);
        // dd($blog->blog_blocks);
        return redirect()->route('admin.blog.index');
    }

    public function update(BlogCreateRequest $request){
        $tags = \Common::double_explode(' ', ',', '、', '#', '　', '＃', $request->tags);
        $blog = Auth::user()->blogs()->find($request->id);
        $blog->update([
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);
        $blog->tags()->sync(\Common::get_tag_ids($tags));
        $this->updateBlocks($request->blocks,$blog);
        return redirect()->route('admin.blog.index');
    }

    public function show(Request $request){
        // $blog = Blog::find($request->id);
        $blog = Auth::user()->blogs()->where('id',$request->id)->with(['blog_blocks.blog_components'])->first();
        $tags = \Common::get_tag_names($blog->tags);
        return Inertia::render('Admin/Blog/Show', [
            'blog' => $blog,
            'tags' => $tags,
        ]);
    }

    public function delete(){
        return redirect()->route('admin.blog.index');
    }

    public function storeBlocks($blocks,$blog){
        foreach ($blocks as $block){
            $blogBlock = $blog->blog_blocks()->create([
                'blog_id' => $blog->id,
                'block_id' => $block["block_id"],
                'sort_by' => 0,
                'content' => $block["content"],
            ]);
            if($blogBlock->block_id == 2){
                foreach ($block["blog_components"] as $component){
                    $blogBlock->blog_components()->create([
                        'blog_block_id' => $blogBlock->id,
                        'component_id' => $component["component_id"],
                        'sort_by' => 0,
                        'content' => $component["content"],
                    ]);
                }
            }
        }
    }
    public function updateBlocks($blocks,$blog){

        foreach ($blocks as $block){
            $blog->blog_blocks()->delete();
        }
        $this->storeBlocks($blocks,$blog);
    }

}

