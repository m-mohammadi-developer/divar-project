<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Advers;

class AdversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
        //
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


    public function list(Request $request){
        $advers = Advers::all();
        return response()->json([$advers]);
    }


    public function add(Request $request) {
        // 'name', 'description', 'price',	'user_id', 'category_id', '',
        $advers = new Advers();
        $advers->name = $request->name;
        $advers->description = $request->description;
        $advers->price = $request->price;
        $advers->user_id = $request->user_id;
        $advers->category_id = $request->category_id;
        $advers->is_confirmed = $request->is_confirmed;

        if ($advers->save()) {
            return response()->json([$advers, ['status' => 'OK']]);
        } 
        return response()->json([['status' => 'Error']]);
    }


    public function updateForApi(Request $request) {
        // 'name', 'description', 'price',	'user_id', 'category_id', '',
        $advers = Advers::findOrFail($request->id);
        $advers->name = $request->name;
        $advers->description = $request->description;
        $advers->price = $request->price;
        $advers->user_id = $request->user_id;
        $advers->category_id = $request->category_id;
        $advers->is_confirmed = $request->is_confirmed;

        if ($advers->save()) {
            return response()->json([$advers, ['status' => 'OK']]);
        } 
        return response()->json([['status' => 'Error']]);

    }


    public function showForApi(Request $request) {
        $advers = Advers::findOrFail($request->id);
        return response()->json([$advers, ['status' => 'OK']]);
    }

    public function deleteForApi(Request $request){
        $advers = Advers::find($request->id);
        if ($advers->delete()) {
            return response()->json(['status' => 'OK']);
        }
        return response()->json(['status' => 'Error']);
    }


}
