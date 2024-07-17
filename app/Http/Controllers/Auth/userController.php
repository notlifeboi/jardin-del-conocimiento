<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function edit(string $id)
    {
        $editarPerfil = User::findOrFail($id);
        return view('user.edit',['editarPerfil'=>[$editarPerfil]]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $UserEdit = User::findOrFail($id);
        $UserEdit->name = $request->input('nameEdit');
        $UserEdit->email = $request->input('emailEdit');
        $UserEdit->password = Hash::make($request->input('passwordEdit'));

        if($request->hasFile("pictureEdit")) {
            $file = $request->file('pictureEdit');
            $destinationPath = "profile/";
            $filename = time() . "-" . $file->getClientOriginalName();
            $uploadSuccess = $request -> file('pictureEdit')->move($destinationPath, $filename);
            $UserEdit -> picture = "/" . $destinationPath . $filename;
        }
        $UserEdit -> save();
        return redirect('/home');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
