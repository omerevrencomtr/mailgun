<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mailgun\Mailgun;
use App\Mail;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mail = Mail::all();
        return response()->json($mail);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mail = New Mail;
        $mail->timestamp=$request['timestamp'];
        $mail->token=$request['token'];
        $mail->signature=$request['signature'];
        $mail->domain=$request['domain'];
        $mail->from=$request['From'];
        $mail->x_envelope_from=$request['X-Envelope-From'];
        $mail->to=$request['To'];
        $mail->dkim_signature=$request['Dkim-Signature'];
        $mail->subject=$request['subject'];
        $mail->x_received=$request['X-Received'];
        $mail->in_reply_to=$request['In-Reply-To'];
        $mail->date=$request['Date'];
        $mail->message_id=$request['Message-Id'];
        $mail->mime_version=$request['Mime-Version'];
        $mail->received=$request['Received'];
        $mail->recipient=$request['recipient'];
        $mail->sender=$request['sender'];
        $mail->x_mailgun_incoming=$request['X-Mailgun-Incoming'];
        $mail->x_gm_message_state=$request['X-Gm-Message-State'];
        $mail->message_headers=$request['message-headers'];;
        $mail->references=$request['References'];
        $mail->content_type=$request['Content-Type'];
        $mail->body_plain=$request['body-plain'];
        $mail->body_html=$request['body-html'];
        $mail->stripped_html=$request['stripped-html'];
        $mail->stripped_text=$request['stripped-text'];
        $mail->stripped_signature=$request['stripped-signature'];
        $mail->save();
        return response()->json(true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mail = Mail::find($id);
        return response()->json($mail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mail = Mail::find($id)->delete();
        return response()->json($mail);
    }
}
