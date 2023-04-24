<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Housedetails;;
class UserController extends Controller
{
    public function houselist(Request $request)
    {
        if ($request->location == null && $request->check_in == null) {
            $status = 'Null';
            $users = Housedetails::where('status', $status)->get();
            return view('listing', ['users' => $users]);
        } elseif ($request->location != null && $request->check_in != null) {
            $status = 'Null';
            $users = Housedetails::where('status', $status)->where('city', $request->location)->get();
            return view('listing', ['users' => $users]);
        }
    }
}
