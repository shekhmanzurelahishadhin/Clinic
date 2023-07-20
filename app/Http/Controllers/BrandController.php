<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function tech_web_add_brand()
    {
        return view('admin.brand.brand',[
            'brands'=>Brand::get()
        ]);

    }

    public function tech_web_store_brand(Request $request)
    {
        Brand::save_brand($request);
        return back()->with('message','Brand added successfully');
    }

    public function tech_web_edit_brand($id)
    {
        return view('admin.brand.edit_brand',[
            'brand'=>Brand::find($id),
        ]);
    }

    public function tech_web_update_brand(Request $request)
    {
        Brand::update_brand($request);
        return back()->with('message','Brand update successfully');
    }
}
