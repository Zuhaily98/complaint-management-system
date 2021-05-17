<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;
use App\Models\District;
use App\Models\Panel;

class AjaxController extends Controller
{
    // public function index()
    // {
    //     $data['countries'] = Country::get(["name","id"]);
    //     return view('welcome', $data);
    // }

    public function getCity(Request $request)
    {
        $data['cities'] = City::where("state_id", $request->state_id)->get(["city","id"]);

        return response()->json($data);
    }

    public function getDistrict(Request $request)
    {
        $data['districts'] = District::where("city_id", $request->city_id)->get(["district","id"]);

        return response()->json($data);
    }

    public function getPanel(Request $request)
    {
        $data['panels'] = Panel::where("district_id", $request->district_id)->get(["name","id"]);

        return response()->json($data);
    }
}
