<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Teams;
use Illuminate\Http\Request;
use Jona;

class TeamsController extends Controller
{
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
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function show(Teams $teams)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teams = Teams::find($id);
        return view('pages.pagesDashboard.edit.editTeam', compact('teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $teams = Teams::find($id);
        //resize image
        if ($request->file) {
            $avatar = new Avatar();
            $image = $request->file('file');
            $input['file'] = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/img/images_site/120x120');
            $imgFile = Jona::make($image->getRealPath());
            $imgFile->resize(120, 120, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $input['file']);
            $avatar->src = $input['file'];
            $avatar->save();

            $avatar_id = Avatar::orderBy('id', 'desc')->first();
            $teams->avatar_id = $avatar_id->id;
        }

        $teams->name = $request->name;
        $teams->post = $request->post;
        $teams->description = $request->description;
        $oldBoss = Teams::where('boss', true)->first();
        if ($request->boss != null) {
            if ($oldBoss != null) {
                $oldBoss->boss = false;
                $oldBoss->save();
            }
            $teams->boss = true;
        } else {
            $teams->boss = false;
        }
        $teams->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teams $teams)
    {
        //
    }
}
