<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applications;

class ApplicationControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'firstname'=>'required',
           'lastname'=>'required',
           'email'=>'required',
           'address'=>'required',
           'education'=>'required',
           'years_of_experience'=>'required',
        ]);

        $accept_id = false;
        $num = 0;

        while (!$accept_id){
            $product = $request->all();
            $num = rand(0, 999);
            $application = Applications::findOrFail($num);
            if(isset($application)){
                return $accept_id = true;
            }
        }

        $product = $request->all();
        $product = array_splice($product, 0, 0, $num);
        Applications::create($product);
        return $product;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
