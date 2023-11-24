<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Blog;
use App\Models\Tag;
use App\Http\Requests\Admin\BlogCreateRequest;
use Illuminate\Support\Facades\Auth;
use Hash;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return Inertia::render('Admin/Blog/List', [
            'blogs' => $blogs,
        ]);
    }

    public function create(){
        return Inertia::render('Admin/Blog/Create');
    }

    public function edit(Request $request){
        $blog = Blog::find($request->id);
        $tags = $this->getTagNames($blog->tags);
        return Inertia::render('Admin/Blog/Update', [
            'blog' => $blog,
            'tags' => $tags,
        ]);
    }

    public function store(BlogCreateRequest $request){
        $tags = $this->double_explode(' ', ',', '、', '#', '　', '＃', $request->tags);
        $blog = Blog::create([
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);
        $blog->tags()->attach($this->getTagIds($tags));
        return redirect()->route('admin.blog.index');
    }

    public function update(BlogCreateRequest $request){
        $tags = $this->double_explode(' ', ',', '、', '#', '　', '＃', $request->tags);
        $blog = Blog::find($request->id);
        $blog->update([
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);
        $blog->tags()->sync($this->getTagIds($tags));
        return redirect()->route('admin.blog.index');
    }

    public function show(Request $request){
        $blog = Blog::find($request->id);
        $tags = $this->getTagNames($blog->tags);
        return Inertia::render('Admin/Blog/Show', [
            'blog' => $blog,
            'tags' => $tags,
        ]);
    }

    public function delete(){
        return redirect()->route('admin.blog.index');
    }

    //タグのIDをまとめる
    public function getTagIds($tags) {
        //HACK(あとできれいになおして あとどっかの関数にまとめて)
        $tagIds = [];
        foreach ($tags as $key => $tagName){
            if(!empty($tagName)){
                $tag = Tag::firstOrCreate([
                    'name' => $tagName,
                ]);
                array_push($tagIds, $tag->id);
            }
        }
        return array_unique($tagIds);
    }


    //タグのなまえをまとめる
    public function getTagNames($tags) {
        //HACK(あとできれいになおして あとどっかの関数にまとめて)
        $tagName = null;
        foreach ($tags as $tag){
            $tagName = $tagName.$tag->name.",";
        }
        return $tagName;
    }

    //タグの配列を作成する
    public function double_explode($word1, $word2, $word3, $word4, $word5, $word6, $str) {
        //HACK(あとできれいになおして あとどっかの関数にまとめて)
        $return1 = array();
        $return2 = array();
        $return3 = array();
        $return4 = array();
        $return = array();

        //分割文字その1で文字列を分割
        $array = explode($word1, $str);

        //各配列を分割文字その2で分割して結合していく
        foreach ($array as $value) {
            $return1 = array_merge($return1, explode($word2, $value));
        }
        foreach ($return1 as $value) {
            $return2 = array_merge($return2, explode($word3, $value));
        }
        foreach ($return2 as $value) {
            $return3 = array_merge($return3, explode($word3, $value));
        }
        foreach ($return3 as $value) {
            $return4 = array_merge($return4, explode($word3, $value));
        }
        foreach ($return4 as $value) {
            $return = array_merge($return, explode($word4, $value));
        }
        return $return;
    }
}

