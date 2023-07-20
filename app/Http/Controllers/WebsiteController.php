<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\BannerAndTitle;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Management;
use App\Models\Package;
use App\Models\PackageAppointment;
use App\Models\PaymentNumber;
use App\Models\Product;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\VideoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class WebsiteController extends Controller
{
    public function tech_web_home()
    {

        return view('frontend.home.home',[
            'services'=>Service::where('status',1)->where('service_home',1)->get(),
            'about'=>DB::table('abouts')->latest()->first(),
            'teams'=>Team::where('status',1)->where('add_home',1)->get(),
            'testimonials'=>Testimonial::where('status',1)->where('add_home',1)->get(),
            'info'=>DB::table('appointment_infos')->latest()->first(),
            'packages'=>Package::where('status',1)->where('add_home',1)->get(),
            'blogs'=>Blog::where('status',1)->where('add_home',1)->get(),
            'galleries'=>Gallery::where('status',1)->where('add_home',1)->get(),
            'titles'=>BannerAndTitle::get(),
            'banners'=>Banner::get(),



        ]);
    }
    public function tech_web_services_details($id)
    {
        return view('frontend.services.service_details',[
            'service'=>Service::find($id),
            'services'=>Service::where('status',1)->where('service_home',1)->get(),
            'number'=>PaymentNumber::latest()->first(),
        ]);
    }

    public function tech_web_all_details()
    {

        return view('frontend.services.all_services',[
            'services'=>Service::where('status',1)->paginate(8),
            'banner'=>BannerAndTitle::where('page','services')->latest()->first(),
            'titles'=>BannerAndTitle::get(),
        ]);
    }

    public function tech_web_about_page()
    {
        return view('frontend.about.about_page',[
            'about'=>DB::table('abouts')->latest()->first(),
            'testimonials'=>Testimonial::where('status',1)->where('add_home',1)->get(),
            'banner'=>BannerAndTitle::where('page','testimonial')->latest()->first(),
            'titles'=>BannerAndTitle::get(),
            'managements'=>Management::where('status',1)->get(),
        ]);
    }
    public function tech_web_team_page()
    {
        return view('frontend.team.team_page',[
            'teams'=>Team::where('status',1)->paginate(6),
            'banner'=>BannerAndTitle::where('page','doctors')->latest()->first(),
            'titles'=>BannerAndTitle::get(),
        ]);
    }
    public function tech_web_management_page()
    {
        return view('frontend.management.management_page',[
            'managements'=>Management::where('status',1)->paginate(8),
            'banner'=>BannerAndTitle::where('page','managements')->latest()->first(),
        ]);
    }
    public function tech_web_testimonial_page()
    {
        return view('frontend.testimonial.testimonial_page',[
            'testimonials'=>Testimonial::where('status',1)->paginate(8),
            'banner'=>BannerAndTitle::where('page','testimonial')->latest()->first(),
        ]);
    }
    public function tech_web_appointment_page()
    {
        return view('frontend.appointment.appointment_page',[
            'banner'=>BannerAndTitle::where('page','appointment')->latest()->first(),
            'info'=>DB::table('appointment_infos')->latest()->first(),
            'services'=>Service::where('status',1)->where('service_home',1)->get(),

        ]);
    }
    public function tech_web_medicine_page()
    {
        return view('frontend.medicine.medicine_page',[
            'banner'=>BannerAndTitle::where('page','appointment')->latest()->first(),
            'services'=>Service::where('status',1)->where('service_home',1)->get(),
            'products'=>Product::where('status',1)->where('add_home',1)->paginate(9),
            'categories'=>Category::get(),
            'brands'=>Brand::get(),

        ]);
    }

    public function tech_web_medicine_by_category($id)
    {
        return view('frontend.medicine.medicine_by_category',[
            'banner'=>BannerAndTitle::where('page','appointment')->latest()->first(),
            'services'=>Service::where('status',1)->where('service_home',1)->get(),
            'products'=>Product::where('status',1)->where('add_home',1)->where('category_id',$id)->paginate(9),
            'categories'=>Category::get(),
            'brands'=>Brand::get(),
            'category_id'=>$id,

        ]);

    }

    public function tech_web_medicine_by_brand($id)
    {
        return view('frontend.medicine.medicine_by_brand',[
            'banner'=>BannerAndTitle::where('page','appointment')->latest()->first(),
            'services'=>Service::where('status',1)->where('service_home',1)->get(),
            'products'=>Product::where('status',1)->where('add_home',1)->where('brand_id',$id)->paginate(9),
            'categories'=>Category::get(),
            'brands'=>Brand::get(),
            'brand_id'=>$id,

        ]);

    }

    public function tech_web_medicine_by_search(Request $request)
    {
//        return $request;
        $search = $request['search']??"";
        if (isset($request->category_id)){
            return view('frontend.medicine.medicine_search',[
                'banner'=>BannerAndTitle::where('page','appointment')->latest()->first(),
                'services'=>Service::where('status',1)->where('service_home',1)->get(),
                'products'=>Product::where('status',1)->where('add_home',1)->where('name','LIKE',"%$search%")->where('category_id',$request->category_id)->paginate(9),
                'categories'=>Category::get(),
                'brands'=>Brand::get(),
                'search'=>$search,

            ]);


        }
        elseif (isset($request->brand_id)){
            return view('frontend.medicine.medicine_search',[
                'banner'=>BannerAndTitle::where('page','appointment')->latest()->first(),
                'services'=>Service::where('status',1)->where('service_home',1)->get(),
                'products'=>Product::where('status',1)->where('add_home',1)->where('name','LIKE',"%$search%")->where('brand_id',$request->brand_id)->paginate(9),
                'categories'=>Category::get(),
                'brands'=>Brand::get(),
                'search'=>$search,

            ]);
        }
        else{
            return view('frontend.medicine.medicine_search',[
                'banner'=>BannerAndTitle::where('page','appointment')->latest()->first(),
                'services'=>Service::where('status',1)->where('service_home',1)->get(),
                'products'=>Product::where('status',1)->where('add_home',1)->where('name','LIKE',"%$search%")->paginate(9),
                'categories'=>Category::get(),
                'brands'=>Brand::get(),
                'search'=>$search,

            ]);

        }
    }

    public function tech_web_medicine_by_price(Request $request)
    {
//        return $request;\
        if (isset($request->category_id)){

            return view('frontend.medicine.medicine_price',[
                'banner'=>BannerAndTitle::where('page','appointment')->latest()->first(),
                'services'=>Service::where('status',1)->where('service_home',1)->get(),
                'products'=>Product::where('status',1)->where('add_home',1)->whereBetween('price',[$request->start,$request->end])->where('category_id',$request->category_id)->paginate(9),
                'categories'=>Category::get(),
                'brands'=>Brand::get(),
                'start'=>$request->start,
                'end'=>$request->end,
            ]);


        }
        elseif (isset($request->brand_id)){
            return view('frontend.medicine.medicine_price',[
                'banner'=>BannerAndTitle::where('page','appointment')->latest()->first(),
                'services'=>Service::where('status',1)->where('service_home',1)->get(),
                'products'=>Product::where('status',1)->where('add_home',1)->whereBetween('price',[$request->start,$request->end])->where('brand_id',$request->brand_id)->paginate(9),
                'categories'=>Category::get(),
                'brands'=>Brand::get(),
                'start'=>$request->start,
                'end'=>$request->end,
            ]);
        }
        else{
            return view('frontend.medicine.medicine_price',[
                'banner'=>BannerAndTitle::where('page','appointment')->latest()->first(),
                'services'=>Service::where('status',1)->where('service_home',1)->get(),
                'products'=>Product::where('status',1)->where('add_home',1)->whereBetween('price',[$request->start,$request->end])->paginate(9),
                'categories'=>Category::get(),
                'brands'=>Brand::get(),
                'start'=>$request->start,
                'end'=>$request->end,
            ]);

        }
    }

    public function tech_web_medicine_details($id)
    {
        return view('frontend.medicine.medicine_details',[
            'banner'=>BannerAndTitle::where('page','appointment')->latest()->first(),
            'product'=>Product::find($id),
            'categories'=>Category::get(),
            'brands'=>Brand::get(),

        ]);

    }
    public function tech_web_package_appointment_page($id)
    {
        return view('frontend.appointment.package_appointment_page',[
            'banner'=>BannerAndTitle::where('page','appointment')->latest()->first(),
            'services'=>Service::where('status',1)->where('service_home',1)->get(),
            'selected_services'=>Service::find($id),
            'number'=>PaymentNumber::latest()->first(),
        ]);
    }

    public function tech_web_user_appointments()
    {
        return view('frontend.user_appointment.user_appointment',[
            'appointments'=>PackageAppointment::where('user_id',Auth::user()->id)->with('service','user')->get(),
            'banner'=>BannerAndTitle::where('page','appointment')->latest()->first(),
        ]);

    }
    public function tech_web_make_appointment(Request $request)
    {
//        return $request;
        PackageAppointment::save_appointment($request);
        Alert::toast('Appointment Request Sent','success');
        return back();
    }
    public function tech_web_package_page()
    {
        return view('frontend.package.package_page',[
            'packages'=>Package::where('status',1)->paginate(6),
            'banner'=>BannerAndTitle::where('page','packages')->latest()->first(),
        ]);
    }
    public function tech_web_blogs_page()
    {
        return view('frontend.blogs.blogs_page',[
            'blogs'=>Blog::where('status',1)->paginate(6),
            'banner'=>BannerAndTitle::where('page','blogs')->latest()->first(),
            'titles'=>BannerAndTitle::get(),

        ]);
    }
    public function tech_web_gallery_page()
    {
        return view('frontend.gallery.gallery_page',[
            'galleries'=>Gallery::where('status',1)->get(),
            'banner'=>BannerAndTitle::where('page','gallery')->latest()->first(),
        ]);
    }
    public function tech_web_video_gallery_page()
    {
        return view('frontend.gallery.video_gallery_page',[
            'galleries'=>VideoGallery::where('status',1)->get(),
            'banner'=>BannerAndTitle::where('page','gallery')->latest()->first(),
        ]);
    }
    public function tech_web_blogs_details($id)
    {
        return view('frontend.blogs.blogs_details',[
            'blog'=>Blog::find($id),

        ]);
    }

    public function tech_web_contacts()
    {
        return view('frontend.contact.contact_page',[
            'banner'=>BannerAndTitle::where('page','contacts')->latest()->first(),
        ]);

    }

    public function tech_web_manage_appointments()
    {
        return view('admin.appointment.manage_appointments',[
            'appointments'=>PackageAppointment::with('service')->get(),

        ]);
    }

    public function tech_web_update_appointments($id)
    {
        $enrollment = PackageAppointment::find($id);
        if ($enrollment->status == 0){
            $enrollment->status = 1;
        }
        $enrollment->save();
        return back();
    }




}
