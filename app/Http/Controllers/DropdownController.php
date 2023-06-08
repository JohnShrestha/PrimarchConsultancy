<?php

namespace App\Http\Controllers;

use App\Models\AccountGeneralInformation;
use App\Models\District;
use App\Models\Palika;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;
use Redirect, Response;

class DropdownController extends Controller
{
    function index()
    {
        $data['states'] = DB::table('states')->get();

        return view("dropdown", $data);
    }
    function getDistrict(Request $request)
    {
        $data['district'] = District::where("province_id", $request->province_id)->get(["district_en", "id"]);
        return response()->json($data);

    }
    function getPalika(Request $request)
    {
        $data['palika'] = Palika::where("district_id", $request->district_id)->get(["palika_en", "id"]);
        return Response::json($data);

        // return view("dropdown",$result);
    }

    function getAccount(Request $request)
    {
        //dd($request->all());
        $data['account'] = AccountGeneralInformation::where('id',$request->name)->get();
        return response()->json($data);

    }
}
