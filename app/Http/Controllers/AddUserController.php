<?php

namespace App\Http\Controllers;

use App\Models\AddUser;
use Illuminate\Http\Request;

class AddUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view("home.new_user");
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $newUser=AddUser::create([
            "name"=>$request->name,
            "book"=>$request->book,
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddUser  $addUser
     * @return \Illuminate\Http\Response
     */
    public function show(AddUser $addUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddUser  $addUser
     * @return \Illuminate\Http\Response
     */
    public function edit(AddUser $addUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AddUser  $addUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddUser $addUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddUser  $addUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddUser $addUser)
    {
        //
    }
}
