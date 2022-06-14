<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Mongodb\Auth\Authenticatable;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

//use Session;

class UserViewController extends Controller
{


    public function postlogin(Request $request)
    {
        $response = Http::post('http://103.162.31.19:1818/api/leo/login',
        [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if (Session('_token'))
        {
            Session::put('token', json_decode($response->body())->token);
            return redirect()->to("/user");
        }

        return Response()->json(["message" => $response->body()]);
    }

    public function index()
    {
        return view('user.index');
    }

    public function emr()
    {
        return view('emrlist.index');
    }

    public function login_local()
    {
        return view('/user');
    }

    public function index_local()
    {
        return view('user.index');
    }

    public function create()
    {
        return view('user.create');
    }

    public function update()
    {
        return view('user.index');
    }

    public function delete()
    {
        return view('user.delete');
    }
}
