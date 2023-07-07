<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('Admin.User.index', compact('users'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return User::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usr = User::find($id);
        return view('Admin.User.edit', compact('usr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user->update($data);

        return redirect()->route('users.index')->with('message', 'Product Edited Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usr = User::find($id);
        $usr->delete();

        // return redirect()->back()->with('message', 'Deleted Succesfuly');
        return 1;
    }
}
