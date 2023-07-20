<?php

namespace App\Http\Controllers;

use App\Models\AppointmentInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentInfoController extends Controller
{
    //
    public function tech_web_add_appointment_info()
    {
        return view('admin.appointment.appointment_info',[
            'infos'=>AppointmentInfo::get(),
            'appointment_info'=>DB::table('appointment_infos')->latest()->first(),

        ]);

    }

    public function tech_web_store_appointment_info(Request $request)
    {
        AppointmentInfo::save_appointment_info($request);
        return back()->with('message','Appointment info added successfully');
    }

    public function tech_web_edit_appointment_info($id)
    {
        return view('admin.appointment.appointment_info_edit',[
            'appointment_info'=>AppointmentInfo::find($id),
        ]);
    }

    public function tech_web_update_appointment_info(Request $request)
    {
        AppointmentInfo::update_appointment_info($request);
        return back()->with('message','Appointment info update successfully');
    }
}
