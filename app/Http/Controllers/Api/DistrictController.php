<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "district" => "required",
            "province_id" => "required"
        ]);

        $district = District::where("name", $request->district)
            ->where("province_id", $request->province_id)
            ->first();

        if (is_null($district)) {
            return District::create([
                "name" => $request->district,
                "province_id" => $request->province_id
            ]);
        }

        return $district;
    }
}
