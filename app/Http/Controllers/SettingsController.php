<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Setting;


use Session;

class SettingsController extends Controller
{
    public function index()
    {
        return view('settings.settings')->with('settings',Setting::first());
    }

    public function update()
    {


        $this->validate(request(),[
            'site_name'=>'required',
            'ceo_name'=>'required',

            'address'=>'required',
            'contact_number'=>'required',
            'contact_email'=>'required',
            'about_us_big'=>'required',
            'about_us_small'=>'required',
            'about_us_nutshell1'=>'required',
            'about_us_nutshell2'=>'required',
            'about_us_nutshell3'=>'required',
            'about_us_nutshell4'=>'required',






        ]);

        $settings = Setting::first();

        $settings->site_name =request()->site_name;
        $settings->ceo_name =request()->ceo_name;

        $settings->address =request()->address;

        $settings->contact_number =request()->contact_number;

        $settings->contact_email = request()->contact_email;

        $settings->about_us_big =request()->about_us_big;
        $settings->about_us_small =request()->about_us_small;
        $settings->about_us_nutshell1 =request()->about_us_nutshell1;
        $settings->about_us_nutshell2 =request()->about_us_nutshell2;
        $settings->about_us_nutshell3 =request()->about_us_nutshell3;
        $settings->about_us_nutshell4 =request()->about_us_nutshell4;



        $settings->save();

        return redirect()->back();


    }


}



