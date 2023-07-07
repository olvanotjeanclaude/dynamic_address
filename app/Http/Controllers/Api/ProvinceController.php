<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function index()
    {
        return Province::with("districts.neighborhoods")->get();
    }

    public function store(Request $request)
    {
        $province = Province::where("name", $request->province)->first();

        if (is_null($province) && $request->province) {
            $province = Province::create(["name" => $request->province]);

            return response()->json([
                "success" => "Added successfully",
                "province" => $province
            ]);
        }

        return response()->json(["message" => "empty"]);
    }
}
