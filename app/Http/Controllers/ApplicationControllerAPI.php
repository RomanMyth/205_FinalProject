<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobApplications;

class ApplicationControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //returns all 
        $applications = JobApplications::all();

        return view('applications',['applications'=>$applications]);
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

        $products = JobApplications::all();
        // !DOES NOT WORK!
        if (is_array($products)){
            for ($i = 0; $i < count($products); $i++){
                if($products[$i]->application_id == $request->application_id){
                    return redirect('/');
                }
            }
        }
        elseif(count($products) == 0){}
        else{
            if($products->application_id == $request->application_id){
                return redirect('/');
            }
        }
        // !END OF NON WORKING CODE BLOCK!

        $product = $request->all();

        JobApplications::create($product);
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
