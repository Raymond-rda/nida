<?php

namespace App\Http\Controllers;

use App\District;
use App\Population;
use App\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PopulationController extends Controller
{
    public function getPopulations(){
        if (Auth::check()){
            $pop=Population::with(['District','Province'])->get();
            return response()->json(['populations' => $pop], 200);
        }else{
            return view('welcome');
        }
    }
    public function Register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'nid' => ['required', 'string', 'min:16', 'max:16', 'unique:populations'],
            'phone' => ['required', 'string', 'numeric', 'unique:populations'],
            'sex' => ['required'],
            'dob' => ['required'],
            'province' => ['required'],
            'district' => ['required'],
            'biometric' => ['required', 'string', 'max:500', 'unique:populations'],

        ]);
        if ($validator->fails()) {
            return response()->json(['response'=>'fail','data'=>$validator->messages()], 400);
        }
//        return response()->json(['response' => $request->all()], 200);
        $pop=new Population();
        $pop->province_id=$request['province'];
        $pop->district_id=$request['district'];
        $pop->nid=$request['nid'];
        $pop->name=$request['name'];
        $pop->phone=$request['phone'];
        $pop->dob=$request['dob'];
        $pop->sex=$request['sex'];
        $pop->biometric=$request['biometric'];
        $pop->save();
        return response()->json(['response' => 'ok','data'=>$pop], 200);
    }
    public function getProvince(){
        $prov=Province::all();
        return response()->json(['province' => $prov], 200);
    }
    public function getDistrict(){
        $dist=District::all();
        return response()->json(['district' => $dist], 200);
    }
    public function provinceDistrict(Request $request){
        $dist=District::where('province_id','=',$request['id'])->get();
        return response()->json(['district' => $dist], 200);
    }

    public function checkNida(Request $request){
        $people=Population::where('nid','=',$request['nid'])->first();
        if ($people) {
            return response()->json(['data' => $people], 200);
        }else{
            return response()->json(['data' => []], 404);
        }
    }
}
