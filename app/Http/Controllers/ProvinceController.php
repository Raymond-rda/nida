<?php

namespace App\Http\Controllers;

use App\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProvinceController extends Controller
{
    public function Province(){
        if (Auth::check()){
            return view('pages.province');
        }else{
            return view('welcome');
        }

    }
    public function getProvince(){
        if (Auth::check()){
            $pro=Province::all();
            return response()->json(['province' => $pro], 200);
        }else{
            return view('welcome');
        }
    }
    public function saveProvince(Request $request){
        $pro=new Province();
        $pro->name=$request['name'];
        $pro->save();
        return response()->json(['province' => 'ok'], 200);

    }
    public function show($id){
        $pro=Province::find($id);
        if ($pro){
            return response()->json(['province' => $pro], 200);
        }
    }
    public function updateProvince(Request $request){
        $pro=Province::find($request['id']);
        if ($pro){
            $pro->name=$request['name'];
            $pro->save();
            return response()->json(['province' => 'ok'], 200);
        }
    }
    public function delete($id){
        $pro=Province::find($id);
        if ($pro){
            $pro->delete();
            return response()->json(['province' => 'ok'], 200);
        }
    }
}
