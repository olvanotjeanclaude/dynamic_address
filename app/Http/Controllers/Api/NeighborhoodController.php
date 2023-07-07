<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Neighborhood;
use Illuminate\Http\Request;

class NeighborhoodController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "neighborhood" => "required",
            "district_id" => "required"
        ]);

        $neighborhood = Neighborhood::where("name", $request->neighborhood)
            ->where("district_id", $request->district_id)
            ->first();

        if (is_null($neighborhood)) {
            return Neighborhood::create([
                "name" => $request->neighborhood,
                "district_id" => $request->district_id
            ]);
        }

        return $neighborhood;
    }
}
