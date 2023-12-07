<?php

namespace App\Http\Controllers;

use App\Models\Address\Province;
use App\Models\Address\Region;
use Illuminate\Http\Request;

class AddresController extends Controller
{

    public function getRegions()
    {
        $regions = Region::all();
        return response()->json($regions);
    }

    public function getProvinces($region_id)
    {
        $region = Region::find($region_id);
        $provinces = $region->provinces;
        return response()->json($provinces);
    }

    public function getCommunesByProvince($province_id)
    {
        $province = Province::find($province_id);
        $communes = $province->communes;
        return response()->json($communes);
    }

    public function getCommunesByRegion($region_id)
    {
        $region = Region::find($region_id);
        $communes = $region->communes;
        return response()->json($communes);
    }
}
