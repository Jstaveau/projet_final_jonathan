<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Image;
use Illuminate\Http\Request;
use Jona;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('pages.pagesDashboard.edit.bennerEdit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $avatar = Image::where('id', $banner->image_id)->first();
        
        if ($request->file) {
            $image = $request->file('file');
            $input['file'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/img/images_site/1920x300');
            $imgFile = Jona::make($image->getRealPath());
            $imgFile->resize(1920, 300)->save($destinationPath . '/' . $input['file']);
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $input['file']);
            $avatar->src = $input['file'];
            $avatar->save();
        }

        $banner->title = $request->title;
        $banner->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
