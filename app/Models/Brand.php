<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    public static $data,$image,$imageName,$directory,$imageUrl;

    public static function save_brand($request)
    {
        self::$data = new Brand();
        self::$data->name = $request->name??null;
        self::$data->save();
    }
    public static function update_brand($request)
    {
        self::$data = Brand::find($request->id);
        self::$data->name = $request->name??null;
        self::$data->status = $request->status??null;
        self::$data->save();
    }

}
