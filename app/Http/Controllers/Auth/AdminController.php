<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Housedetails;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function createhouse(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'date' => 'required',
            'mobile' => 'required',
            'housename' => 'required',
            'housetype' => 'required',
            'facilities' => 'required',
            'guest' => 'required',
            'price' => 'required',
        ]);
        $user = User::where('name', $request->name)->first();
        $admin = new Housedetails();
        $admin->user_id = $user->id;
        $admin->name = $request['name'];
        $admin->address = $request['address'];
        $admin->city = $request['city'];
        $admin->date = $request['date'];
        $admin->mobile = $request['mobile'];
        $admin->housename = $request['housename'];
        $admin->housetype = $request['housetype'];
        $admin->facilities = $request['facilities'];
        $admin->guest = $request['guest'];
        $admin->price = $request['price'];
        $data = $request->all();
        $img = array();
        for ($i = 0; $i < count($data['image']); $i++) {
            $imageName = time() . '.' . $data['image'][$i]->getClientOriginalName();
            $data['image'][$i]->move(public_path('images'), $imageName);
            array_push($img, $imageName);
        }
        $data1 = array(
            'image' =>  implode(",", $img),
        );
        $admin->image = $data1['image'];
        $admin->save();
        return redirect('/createhouse');
    }
    public function housedetails()
    {
        $houses = Housedetails::where('user_id', Auth::id())->get();
        return  view('/createhouse', ['houses' => $houses]);
    }

    public function updatedetails(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'date' => 'required',
            'mobile' => 'required',
            'housename' => 'required',
            'housetype' => 'required',
            'facilities' => 'required',
            'guest' => 'required',
            'price' => 'required',
        ]);
        $id = $request->id;
        $data = Housedetails::find($id);
        if ($data == null) {
            return response()->json(['message' => 'Invalid Id']);
        }
        $admin = Housedetails::where('id', $id)->first();
        $admin->name = $request['name'];
        $admin->address = $request['address'];
        $admin->city = $request['city'];
        $admin->date = $request['date'];
        $admin->mobile = $request['mobile'];
        $admin->housename = $request['housename'];
        $admin->housetype = $request['housetype'];
        $admin->facilities = $request['facilities'];
        $admin->guest = $request['guest'];
        $admin->price = $request['price'];
        $data = $request->all();
        $img = array();
        for ($i = 0; $i < count($data['image']); $i++) {
            $imageName = time() . '.' . $data['image'][$i]->getClientOriginalName();
            $data['image'][$i]->move(public_path('images'), $imageName);
            array_push($img, $imageName);
        }
        $data1 = array(
            'image' =>  implode(",", $img),
        );
        $admin->image = $data1['image'];
        $admin->save();
        return redirect('/createhouse');
    }
    public function delete($id)
    {
        Housedetails::find($id)->delete();
        return redirect('/createhouse');
    }
}
