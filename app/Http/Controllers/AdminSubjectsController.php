<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subjects;
use Illuminate\Support\Facades\Session;

class AdminSubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subjects::all();
        return view('admin.subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subjects::all();
        Session::flash('create_subject', 'The Subject had been created');
        return redirect(route('subjects.index'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Subjects::create($input);
        return redirect(route('subjects.create'));
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

        Subjects::findOrFail($id)->delete();

        Session::flash('deleted_subject', 'The Subject had been DELETED');

        return redirect(route('subjects.index'));
    }
//    public function delete($id){
//        Subjects::findOrFail($id)->delete();
//
//        Session::flash('deleted_subject', 'The Subject had been DELETED');
//
//        return redirect(route('subjects.index'));
//    }
}
