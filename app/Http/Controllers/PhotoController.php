<?php

namespace App\Http\Controllers;

use App\Photo;
use Image;
use Illuminate\Http\Request;
use App\Setting;


class PhotoController extends Controller
{
    public function index()

    {

        $photos=Photo::orderBy('id','desc')->paginate(7);
        return view('front.blogimageindex')->withPhotos($photos)->with('settings',Setting::first());
    }


    public function create()
    {
        return view('front.blogimage')->with('settings',Setting::first());
    }
    public function store( Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'featured_image'=>'sometimes|image'



        ));
        $photos = new Photo;
        $photos->title= $request->title;

        $image = $request->file('featured_image');
        $filename =time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('postphotoimages/' .$filename);
        Image::make($image)->resize(640,426)->save($location);
        $photos->featured_image =$filename;
        $photos->save();
        return redirect()->route('photo');


    }
    public function destroy($id)
    {
        $photos =Photo::find($id);
        $photos->delete();

        return redirect()->route('photo');
    }

}
