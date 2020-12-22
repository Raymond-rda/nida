<?php

namespace App\Http\Controllers;

use App\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DistrictController extends Controller
{
    public function district(){
        if (Auth::check()){
            return view('pages.district');
        }else{
            return view('welcome');
        }

    }
    public function getDistrict(){
        if (Auth::check()){
            $dist=District::with('Province')->get();
            return response()->json(['district' => $dist], 200);
        }else{
            return view('welcome');
        }
    }
    public function saveDistrict(Request $request){
        $dist=new District();
        $dist->province_id=$request['province'];
        $dist->name=$request['name'];
        $dist->save();
        return response()->json(['district' => 'ok'], 200);

    }
    public function show($id){
        $dist=District::find($id);
        if ($dist){
            return response()->json(['district' => $dist], 200);
        }
    }
    public function updateDistrict(Request $request){
        $dist=District::find($request['id']);
        if ($dist){
            $dist->name=$request['name'];
            $dist->save();
            return response()->json(['district' => 'ok'], 200);
        }
    }
    public function delete($id){
        $dist=District::find($id);
        if ($dist){
            $dist->delete();
            return response()->json(['district' => 'ok'], 200);
        }
    }
}
