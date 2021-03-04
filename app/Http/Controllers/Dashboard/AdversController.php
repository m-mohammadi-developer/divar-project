<?php

namespace App\Http\Controllers\Dashboard;

use App\Advers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdversController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index()
    {
        $advers = Advers::all();
        return view('dashboard/adverses', compact('advers'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
