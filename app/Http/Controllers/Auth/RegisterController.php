<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(Request $request)
    {

        $register = new User();
        $register->name = $request['name'];
        $register->email = $request['email'];
        $register->password = Hash::make($request['password']);
        $register->mobile = $request['mobile'];
        $register->save();
        return redirect('/');
    }
}
