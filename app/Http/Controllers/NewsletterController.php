<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterMail;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
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
        $newsletters = Newsletter::all();
        $mailsNewsletter = array();
        foreach ($newsletters as $newsletter) {
            array_push($mailsNewsletter, $newsletter->email);
        }
        if (!in_array($request->email, $mailsNewsletter)) {
            $newsletter = new Newsletter();
            $newsletter->email = $request->email;
            $newsletter->save();

            $details = [
                'subject' => 'Newsletter',
                'mail' => $request->email,
                'message' => 'Merci pour votre inscription à la newsletter',
            ];
            
            Mail::to($request->email)->send(new NewsletterMail($details));
        }


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {
        //
    }
}
