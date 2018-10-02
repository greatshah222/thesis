<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal;
use App\Setting;
use Image;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personals=Personal::orderBy('id','desc')->paginate(4);
        return view('settings.personals')->withPersonals($personals)->with('settings',Setting::first());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('settings.personalscreate')->with('settings',Setting::first());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {
        $this->validate($request, array(
            'employee_name' => 'required|max:255',
            'featured_employee_image'=>'sometimes|image'



        ));

        $personals = new Personal;
        $personals->employee_name = $request->employee_name;
        $personals->employee_info = $request->employee_info;
        $personals->employee_fb_link = $request->employee_fb_link;
        $personals->employee_twitter_link = $request->employee_twitter_link;
        $personals->employee_google_link = $request->employee_google_link;
        $personals->employee_instagram_link = $request->employee_instagram_link;
        $image = $request->file('featured_employee_image');
        $filename =time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('employeeimage/' .$filename);
        Image::make($image)->resize(640,426)->save($location);
        $personals->featured_employee_image =$filename;








        $personals->save();
        return redirect()->route('personals.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personal = Personal::findOrFail($id);
        return view('settings.personalsedit')->withPersonal($personal)->with('settings',Setting::first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
