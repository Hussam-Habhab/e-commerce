<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,User $user)
    {

        $data = $request->validate([
            'first_name' => 'required ' , 
            'last_name' => 'required ' ,
            'phone_number' => 'required|digits:10 | regex:([0-9]+)' ,
            'email' => 'required | email' ,
            'password' => 'min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'

        ]);

    
        
            // dd('nnnnnn');
            // unset($data['password_confirmation']);
            $user = $user->create($data);

            // Assign a role to the user
            $user->assignRole('customer');

            return view('auth.create')->with('success','account created successfully') ;
        


        
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
