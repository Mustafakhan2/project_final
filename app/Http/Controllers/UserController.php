<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function logn()
    {
        $utype = Auth::user()->usertype;

        if ($utype == 1) {
            return view('main');
        } elseif ($utype == 0) {
            return view('home');
        }
    }
    public function show(Request $request)
    {
        $users = User::all();
        return view('main', compact('users'));
    }
    public function destroy($id)
    {
        $deluser = User::find($id);
        $deluser->delete();
        return redirect()->route('admin.dashboard');
    }

    public function edit($id)
    {
        $edituser = User::find($id);
        $data = compact(['edituser']);
        return view('edit')->with($data);
    }
    public function update(Request $request, $id)
    {
        $data = User::find($id);
        $data->name = $request['name'];
        $data->password = $request['password'];
        $data->email = $request['email'];
        $data->save();
        return redirect()->route('admin.dashboard');
    }
}
