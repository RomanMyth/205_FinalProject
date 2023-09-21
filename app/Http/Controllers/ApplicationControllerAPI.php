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
        $form_application = $request->all();

        foreach ($products as $product){
            if($product->application_id == $request->application_id){
                return redirect('/');
            }
        }

        JobApplications::create($form_application);
        return $form_application;
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
