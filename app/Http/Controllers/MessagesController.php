<?php

namespace App\Http\Controllers;
use App\Messages;
use Session;


use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Messages.Messages')->with('messages', Messages::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            
        ]);
        $message = new Messages;
        $message ->first_name = $request ->input('first_name');
        $message ->last_name = $request ->input('last_name');
        $message ->email = $request ->input('email');
        $message ->subject = $request ->input('subject');
        $message ->message = $request ->input('message');

        //save message
        $message->save();

        Session::flash('success' ,'Send message successfully.');

       return redirect()->back();
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

        $post = Messages::withTrashed()->where('id',$id)->first();

        $post->forceDelete();

        Session::flash('success', 'Post deleted premlitly');

        return redirect()->back();



    }
}
