<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\State;
use App\Models\City;
use Illuminate\Http\Request;
 
class FamilyController extends Controller
{
    public function index(){
        $states = State::with('cities')->get();

        $familys = Family::with('state','city')->get();
        // return view('family', compact('states'));
        return view('family',['states'=>$states,'familys'=>$familys],);
    }

    public function getCities($stateId)
{
    $cities = \App\Models\City::where('state_id', $stateId)->get();
    return response()->json($cities);
}

    public function create(Request $request){
        $family = new Family;
        $family->name = $request->name;
        $family->lastname = $request->lastname;
        $family->birthdate = $request->birthdate;
        $family->mobile_no = $request->mobile_no;
        $family->address = $request->address;
        $family->state = $request->state;
        $family->city = $request->city;
        $family->pincode = $request->pincode;
        $family->marital_status = $request->marital_status;
        $family->hobbies = $request->hobbies;
         $family->save();
         return redirect(route('index'));
    }
}
