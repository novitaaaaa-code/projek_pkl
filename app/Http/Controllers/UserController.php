<?php

namespace App\Http\Controllers;

use App\Http\Middleware\isadmin;
use Illuminate\Http\Request;
use App\Models\User;
use Alert;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users =User::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users =User::all();
        return view('admin.user.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'name' => 'required',
            'email' => 'required|unique:users',
            'password'=>'required|min:8',
        ]);
        $user = new User();
         $user->name = $request->name;
         $user->email = $request->email;
         $user->password = bcrypt($request->password);
         $user->isadmin = $request->isadmin;
         $user->save();
         Alert::success('success', 'Data Berhasil Disimpan')->autoClose(1000);
         return redirect()->route('user.index');

    }
    /**
     * Display the specified resource.
     */
     public function show(string $id)
     {
        // $user = User::findOrFail($id);
        // return view('user.show', compact('user'));
     }

    /**
     * Show the form for editing the specified resource.
     */
     public function edit(string $id)
     {

         $user = User::findOrFail($id);
         return view('admin.user.edit', compact('user'));

     }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, string $id)
     {
         $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password'=>'required|min:8',

         ]);
         $user = User::findOrFail($id);
         $user->name = $request->name;
         $user->email = $request->email;
         $user->password = bcrypt($request->password);
         $user->isadmin = $request->isadmin;
         $user->save();
         alert::success('success', 'Data Berhasil Disimpan')->autoClose(1000);
         return redirect()->route('user.index');
     }

    /**
     * Remove the specified resource from storage.
     */
     public function destroy($id)
     {
         $user = User::findOrFail($id);
         $user->delete();
         toast('Data delete Successfully', 'success')->autoClose(1000);
         return redirect()->route('user.index');
     }
}
