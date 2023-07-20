<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterDetail extends Model
{
    use HasFactory;
    public static $data, $image, $imageName, $imageDirectory, $imageUrl;
    public static function saveFooterDetail($request)
    {
//        dd($request);
        if($request->id){
            self::$data = FooterDetail::find($request->id);
            if ($request->file('footer_image')) {
                if (self::$data->footer_image) {
                    if (file_exists(self::$data->footer_image)) {
                        unlink(self::$data->footer_image);
                        self::$data->footer_image = self::saveFooterImage($request);
                    }
                } else {
                    self::$data->footer_image = self::saveFooterImage($request);
                }
            }
            self::$data->details =$request->details;
            self::$data->credit =$request->credit;
            self::$data->save();
        }
        else{
            self::$data = new FooterDetail();
            self::$data->footer_image = self::saveFooterImage($request);
            self::$data->details =$request->details;
            self::$data->credit =$request->credit;
            self::$data->save();
        }

    }
    public static function saveFooterImage($request)
    {
        if ($request->file('footer_image')) {
            self::$image = $request->file('footer_image');
            self::$imageName = 'footer-' . rand() . '.' . self::$image->Extension();
            self::$imageDirectory = 'footer/';
            self::$imageUrl = self::$imageDirectory . self::$imageName;
            self::$image->move(self::$imageDirectory,self::$imageName);
            return self::$imageUrl;
        }
    }
}
