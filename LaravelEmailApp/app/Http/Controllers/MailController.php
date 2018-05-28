<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

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

    public function basic_email(){
        $data = array('name' => "Md Noorshid");

        Mail::send(['text' => 'mail'],$data,function($message){
        $message -> to('md.noorshid@reactiveworks.in') -> subject
        ('Laravle Test Mail......');
        $message->from('md.noorshid@reactiveworks.in','Md Noorshid');
        });
        echo "Basic Email Sent , check inbox";
    }

    public function html_email(){
        $data = array('name'=>"Md Noorshid");
        Mail::send('mail', $data, function($message) {
           $message->to('raja.d@reactiveworks.in')->subject
              ('Laravel HTML Testing Mail');
           $message->from('md.noorshid@reactiveworks.in','Md Noorshid');
        });
        echo "HTML Email Sent. Check  inbox.";
     }

     public function attachment_email(){
        $data = array('name'=>"Md Noorshid");
        Mail::send('mail', $data, function($message) {
           $message->to('md.noorshid@reactiveworks.in')->subject
              ('Laravel Testing Mail with Attachment');
           $message->attach('C:\Users\mdnoo\Desktop\ImportantStuffs\LIST OF HOLIDAYS 2018.docx');
        });
        echo "Email Sent with attachment. Check  inbox.";
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
