<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ArticleTag;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Jona;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'webmaster'], ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articleCategories = ArticleCategory::all();
        $banner = Banner::where('id', 2)->first(); // banner img
        $articles = Article::orderBy('id', 'desc')->paginate(6);
        return view('pages.blog', compact('banner', 'articles', 'articleCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('pages.pagesDashboard.store.storeArticle', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //creation article
        $article = new Article();
        $article->title = $request->title;
        $article->content = $request->content;
        $article->article_category_id = $request->article_category_id;
        $article->user_id = Auth::user()->id;

        $article->save();

        $articleId = Article::latest()->first();

        //resize image
        if ($request->file) {
            $avatar = new Image();
            $image = $request->file('file');
            $input['file'] = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/img/images_site/270x230');
            $imgFile = Jona::make($image->getRealPath());
            $imgFile->resize(270, 230, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $input['file']);
            $destinationPath = public_path('/img/images_site/320x200');
            $imgFile->resize(320, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $destinationPath = public_path('/img/images_site/1090x450');
            $imgFile->resize(1090, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $avatar->src = $input['file'];
            $avatar->name = $input['file'];
            $avatar->article_id = $articleId->id;
            $avatar->save();
        }

        foreach ($request->tags as $tag) {
            $art_tag = new ArticleTag;
            $art_tag->article_id = $articleId->id;
            $art_tag->tag_id = $tag;
            $art_tag->save();
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $banner = Banner::where('id', 11)->first();
        return view('pages.showArticle', compact('banner', 'article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Category::all();
        $articleTagsArray = array();
        $tags = Tag::all();
        foreach ($article->tag as $tagArticle) {
            array_push($articleTagsArray, $tagArticle->name);
        }
        return view('pages.pagesDashboard.edit.editArticle', compact('article', 'categories', 'tags', 'articleTagsArray'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->title = $request->title;
        $article->content = $request->content;
        $article->article_category_id = $request->article_category_id;
        $article->save();

        DB::table('article_tag')->where('article_id', $article->id)->delete();

        foreach ($request->tags as $tag) {
            $art_tag = new ArticleTag;
            $art_tag->article_id = $article->id;
            $art_tag->tag_id = $tag;
            $art_tag->save();
        }

        //resize image
        if ($request->file) {
            $avatar = Image::where('article_id', $article->id)->first();
            $image = $request->file('file');
            $input['file'] = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/img/images_site/270x230');
            $imgFile = Jona::make($image->getRealPath());
            $imgFile->resize(270, 230, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $input['file']);
            $destinationPath = public_path('/img/images_site/320x200');
            $imgFile->resize(320, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $destinationPath = public_path('/img/images_site/1090x450');
            $imgFile->resize(1090, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $avatar->src = $input['file'];
            $avatar->name = $input['file'];
            $avatar->save();
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article, Request $request)
    {
        $article->delete();
        return redirect()->back();
    }
}
