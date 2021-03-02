<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Advers;

class AdversController extends Controller
{


    public function list(Request $request){
        $advers = Advers::all();
        return response()->json([$advers]);
    }


    public function add(Request $request) {

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


    public function update(Request $request) {
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


    public function show(Request $request) {
        $advers = Advers::findOrFail($request->id);
        return response()->json([$advers, ['status' => 'OK']]);
    }

    public function delete(Request $request){
        $advers = Advers::find($request->id);
        if ($advers->delete()) {
            return response()->json(['status' => 'OK']);
        }
        return response()->json(['status' => 'Error']);
    }


}
