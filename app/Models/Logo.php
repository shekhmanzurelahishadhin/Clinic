<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;
    public static $data, $image, $imageName, $imageDirectory, $imageUrl;
    //    save category start
    public static function saveWebsiteLogo($request)
    {
        if($request->id){
            self::$data = Logo::find($request->id);
            self::$data->site_name = $request->site_name??null;
            if ($request->file('frontend_logo_image')) {
                if (self::$data->frontend_logo_image) {
                    if (file_exists(self::$data->frontend_logo_image)) {
                        unlink(self::$data->frontend_logo_image);
                        self::$data->frontend_logo_image = self::saveLogoImage($request);
                    }
                } else {
                    self::$data->frontend_logo_image = self::saveLogoImage($request);
                }
            }
            if ($request->file('backend_logo_image')) {
                if (self::$data->backend_logo_image) {
                    if (file_exists(self::$data->backend_logo_image)) {
                        unlink(self::$data->backend_logo_image);
                        self::$data->backend_logo_image = self::saveBackendLogoImage($request);
                    }
                } else {
                    self::$data->backend_logo_image = self::saveBackendLogoImage($request);
                }
            }
            if ($request->file('footer_logo_image')) {
                if (self::$data->footer_logo_image) {
                    if (file_exists(self::$data->footer_logo_image)) {
                        unlink(self::$data->footer_logo_image);
                        self::$data->footer_logo_image = self::saveFooterLogoImage($request);
                    }
                } else {
                    self::$data->footer_logo_image = self::saveFooterLogoImage($request);
                }
            }
            if ($request->file('favicon')) {
                if (self::$data->favicon) {
                    if (file_exists(self::$data->favicon)) {
                        unlink(self::$data->favicon);
                        self::$data->favicon = self::saveFaviconImage($request);
                    }
                } else {
                    self::$data->favicon = self::saveFaviconImage($request);
                }
            }
            self::$data->save();
        }
        else{
//            dd($request->site_name);
            self::$data = new Logo();
            self::$data->site_name = $request->site_name??null;
            self::$data->frontend_logo_image = self::saveLogoImage($request);
            self::$data->backend_logo_image = self::saveBackendLogoImage($request);
            self::$data->footer_logo_image = self::saveFooterLogoImage($request);
            self::$data->favicon = self::saveFaviconImage($request);
            self::$data->save();
        }

    }
    //save category end

    //save image start
    public static function saveLogoImage($request)
    {
        if ($request->file('frontend_logo_image')) {
            self::$image = $request->file('frontend_logo_image');
            self::$imageName = 'frontend_logo_image-' . rand() . '.' . self::$image->Extension();
            self::$imageDirectory = 'logo/';
            self::$imageUrl = self::$imageDirectory . self::$imageName;
            self::$image->move(self::$imageDirectory,self::$imageName);
            return self::$imageUrl;
        }
    }

    public static function saveBackendLogoImage($request)
    {
        if ($request->file('backend_logo_image')) {
            self::$image = $request->file('backend_logo_image');
            self::$imageName = 'backend-logo-' . rand() . '.' . self::$image->Extension();
            self::$imageDirectory = 'logo/';
            self::$imageUrl = self::$imageDirectory . self::$imageName;
            self::$image->move(self::$imageDirectory,self::$imageName);
            return self::$imageUrl;
        }
    }

    public static function saveFooterLogoImage($request)
    {
        if ($request->file('footer_logo_image')) {
            self::$image = $request->file('footer_logo_image');
            self::$imageName = 'footer-logo-' . rand() . '.' . self::$image->Extension();
            self::$imageDirectory = 'logo/';
            self::$imageUrl = self::$imageDirectory . self::$imageName;
            self::$image->move(self::$imageDirectory,self::$imageName);
            return self::$imageUrl;
        }
    }


    public static function saveFaviconImage($request)
    {
        if ($request->file('favicon')) {
            self::$image = $request->file('favicon');
            self::$imageName = 'favicon-' . rand() . '.' . self::$image->Extension();
            self::$imageDirectory = 'logo/';
            self::$imageUrl = self::$imageDirectory . self::$imageName;
            self::$image->move(self::$imageDirectory,self::$imageName);
            return self::$imageUrl;
        }
    }
}
