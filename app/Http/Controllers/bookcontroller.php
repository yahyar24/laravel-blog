<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;

use Session;

class bookcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Messages.Messagebook')->with('books', book::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Messages.createbook');
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
            'first_name_book' => 'required|max:255',
            'featured' => 'required|image',
            'last_name_book' => 'required',
            'email_book' => 'required',
            'how_many' => 'required',
            'date' => 'required',
            'Destination' => 'required',
            'message_book' => 'required',
            'Phone' => 'required',
            'date_last' => 'required',
            'Destination_last' => 'required',
            
        ]);

        $featured = $request->featured;

        $featured_new_name = time().$featured->getClientOriginalName();

        $featured->move('uploads/books', $featured_new_name);

         book::create([
            'first_name_book' => $request->first_name_book,
            'email_book'=>$request->email_book,
            'featured' =>'uploads/books/' .$featured_new_name,
            'last_name_book' =>$request->last_name_book,
            'how_many' =>$request->how_many,
            'date' =>$request->date,
            'Destination' =>$request->Destination,
            'message_book' =>$request->message_book,
            'Phone' =>$request->Phone,
            'Destination_last' =>$request->Destination_last,
            'date_last' =>$request->date_last,

            
        ]);


        Session::flash('success' ,'تم ارسال طلبك.');

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
        $post = book::withTrashed()->where('id',$id)->first();

        $post->forceDelete();

        Session::flash('success', 'book deleted premlitly');

        return redirect()->back();

    }
}
