<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Manual;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function index () {
        return view('pages.homepage');
    }
    public function show($brand_id, $brand_slug)
    {
        
        $brand = Brand::findOrFail($brand_id);
        $manuals = Manual::all()->where('brand_id', $brand_id);

        // foreach ($manuals as $manual) {
        //     if(!$manual->locally_available) {
        //         $manual->increment('visits');
        //     }
        // }

        return view('pages/manual_list', [
            "brand" => $brand,
            "manuals" => $manuals,
        ]);

    }
}
