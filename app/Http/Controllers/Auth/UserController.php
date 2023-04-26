<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Housedetails;
use App\Models\Book;

class UserController extends Controller
{
    public function houselist(Request $request)
    {
        if ($request->location == null && $request->check_in == null) {
            $status = 'Null';
            $users = Housedetails::where('status', $status)->get();
        } elseif ($request->location != null && $request->check_in != null) {
            $status = 'Null';
            $users = Housedetails::where('status', $status)->where('city', $request->location)->get();
        }
        return view('listing', ['users' => $users]);
    }
    public function booking(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'adult' => 'required',
            'child' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
        ]);
        $users = new Book();
        $users->booking_id = $request['id'];
        $users->name = $request['name'];
        $users->email = $request['email'];
        $users->phone = $request['phone'];
        $users->adult = $request['adult'];
        $users->child = $request['child'];
        $users->check_in = $request['check_in'];
        $users->check_out = $request['check_out'];
        $users->save();

        $admin = Housedetails::where('id', $request->id)->first();
        $admin->check_in = $request->check_in;
        $admin->check_out = $request->check_out;
        $admin->status = 'Booked';
        $admin->save();

        return redirect('/listing');
    }
    public function bookinglist()
    {
        $books = Book::with('housedetails')->get();
        return view('bookinglist', ['books' => $books]);
    }
}
