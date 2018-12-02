<?php

namespace App\Http\Controllers;

use App\ForumModel\Fcategory;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\FcategoryResource;



class FcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FcategoryResource::collection(fcategory::latest()->get());


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fcategory = new Fcategory;
        $fcategory->name = $request->name;
        $fcategory->slug = str_slug($request->name);
        $fcategory->save();
        return response('created', \Symfony\Component\HttpFoundation\Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ForumModel\Fcategory  $fcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Fcategory $fcategory)
    {
        return new FcategoryResource($fcategory);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ForumModel\Fcategory  $fcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Fcategory $fcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ForumModel\Fcategory  $fcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fcategory $fcategory)
    {
        $fcategory->update(
            [
                'name'=>$request->name,
                'slug'=>str_slug($request->name)
            ]
        );
        return response('Updated', Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ForumModel\Fcategory  $fcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fcategory $fcategory)
    {
        $fcategory->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
