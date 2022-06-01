<?php

namespace App\Http\Controllers;

use App\Mail\AnswerMail;
use App\Mail\FormMail;
use App\Models\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;

class MailController extends Controller
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
        $mail = new Mail();
        $mail->name = $request->name;
        $mail->mail = $request->mail;
        $mail->message = $request->message;
        $mail->readed = false;
        $mail->archived = false;
        $mail->save();

        $details = [
            'subject' => 'Contact form',
            'name' => $request->name,
            'mail' => $request->mail,
            'message' => $request->message,
        ];

        FacadesMail::to($details['mail'])->send(new FormMail($details));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function show(Mail $mail)
    {
        $mail->readed = true;
        $mail->save();
        return view('pages.pagesDashboard.show.showMail', compact('mail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function edit(Mail $mail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mail $mail)
    {   
        $mail->archived = !$mail->archived;
        $mail->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mail $mail)
    {
        $mail->delete();
        return redirect()->back();
    }

    public function writeAnswer($id)
    {
        $mail = Mail::find($id);
        return view('pages.pagesDashboard.writeAnswer', compact('mail'));
    }
    public function sendAnswer(Request $request, $id)
    {   
        $mail = Mail::find($id);
        $details = [
            'subject' => $request->subject,
            'name' => $mail->name,
            'message' => $request->message,
        ];
        FacadesMail::to($mail->mail)->send(new AnswerMail($details));

        return view('pages.pagesDashboard.writeAnswer', compact('mail'));
    }
}
