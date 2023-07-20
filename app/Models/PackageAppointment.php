<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageAppointment extends Model
{
    use HasFactory;
    public static $data;

    public static function save_appointment($request)
    {
        self::$data= new PackageAppointment();
        self::$data->name = $request->name??null;
        self::$data->user_id = $request->user_id??null;
        self::$data->service_id = $request->service_id??null;
        self::$data->payment_type = $request->payment_type??null;
        self::$data->payment_option = $request->payment_option??null;
        self::$data->number = $request->number??null;
        self::$data->transaction_id = $request->transaction_id??null;
        self::$data->date = $request->date??null;
        self::$data->price = $request->price??null;
        self::$data->save();

    }

    public function service()
    {
        return $this->belongsTo(Service::class);

    }
    public function user()
    {
        return $this->belongsTo(User::class);

    }
}
