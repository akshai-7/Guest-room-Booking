<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Housedetails;

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
        ]);
        $admin = new Housedetails();
        $admin->name = $request['name'];
        $admin->address = $request['address'];
        $admin->city = $request['city'];
        $admin->date = $request['date'];
        $admin->mobile = $request['mobile'];
        $admin->housename = $request['housename'];
        $admin->housetype = $request['housetype'];
        $admin->facilities = $request['facilities'];
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
        $houses = Housedetails::get();
        return  view('/createhouse', ['houses' => $houses]);
    }

    public function updatedetails(Request $request, $id)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'date' => 'required',
            'mobile' => 'required',
            'housename' => 'required',
            'housetype' => 'required',
            'facilities' => 'required',
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
