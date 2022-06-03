<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Image;
use App\Models\Teams;
use Illuminate\Http\Request;
use Jona;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin'])->only('update');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::where('id', 3)->first(); // banner img
        $about = About::first();
        $boss = Teams::where('boss', true)->first();
        $teams = Teams::where('boss', false)->inRandomOrder()->limit(4)->get();
        if ($boss != null) {
            $teams = Teams::where('boss', false)->inRandomOrder()->limit(3)->get();
        }
        return view('pages.aboutUs', compact('banner', 'about', 'boss', 'teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $avatar = Image::where('id', $about->image_id)->first();

        if ($request->file) {
            $image = $request->file('file');
            $input['file'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/img/images_site/530x450');
            $imgFile = Jona::make($image->getRealPath());
            $imgFile->resize(530, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $input['file']);
            $avatar->src = $input['file'];
            $avatar->save();
        }

        $about->title = $request->title;
        $about->content = $request->content;
        $about->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
