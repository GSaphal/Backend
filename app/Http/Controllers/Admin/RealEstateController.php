<?php

namespace App\Http\Controllers\Admin;

use App\Models\RealEstate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RealEstateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $realestate=RealEstate::all();
        if($realestate)
        {
        return view('admin.realestate.viewrealestate',compact('realestate'));
        }
        else
        {
            return view('admin.realestate.viewrealestate');

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.realestate.createrealestate');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $realEstate=new RealEstate;
      $realEstate->property_name=$request->property_name;
      $realEstate->property_price=$request->property_price;
      $realEstate->price_status=$request->price_status;
      $realEstate->address=$request->address;
      $realEstate->city=$request->city;
      $realEstate->district=$request->district;
      $realEstate->country=$request->country;
      $realEstate->province=$request->province;
      $realEstate->ward_number=$request->ward_number;
      $realEstate->house_number=$request->house_number;
      $realEstate->zip_code=$request->zip_code;
      $realEstate->property_area=$request->property_area;
      $realEstate->number_of_bedrooms=$request->number_of_bedrooms;
      $realEstate->number_of_bathrooms=$request->number_of_bathrooms;
      $realEstate->number_of_floors=$request->number_of_floors;
      $realEstate->building_age=$request->building_age;
      $realEstate->gym= ($request->gym==='yes')?$request->gym:'no';
      $realEstate->garden=($request->garden==='yes')?$request->garden:'no';
      $realEstate->swimming_pool=($request->swimming_pool==='yes')?$request->swimming_pool:'no';
      $realEstate->internet=($request->internet==='yes')?$request->internet:'no';
      $realEstate->parking=($request->parking==='yes')?$request->parking:'no';
      $realEstate->water=($request->water==='yes')?$request->water:'no';
      $realEstate->school_college_nearby=($request->school_college_nearby==='yes')?$request->school_college_nearby:'no';
      $realEstate->shopping_nearby=($request->shopping_nearby==='yes')?$request->shopping_nearby:'no';
      $realEstate->bank_nearby=($request->bank_nearby==='yes')?$request->bank_nearby:'no';
      $realEstate->pitched_road=($request->pitched_road==='yes')?$request->pitched_road:'no';
      $realEstate->airport_nearby=($request->airport_nearb==='yes')?$request->airport_nearby:'no';
      $realEstate->sewage=($request->sewage==='yes')?$request->sewage:'no';
      $realEstate->alarm=($request->alarm==='yes')?$request->alarm:'no';
      $realEstate->cctv=($request->cctv=='yes')?$request->cctv:'no';  
      $realEstate->ac=($request->ac==='yes')?$request->ac:'no';
     $realEstate->alarm=($request->alarm==='yes')?$request->alarm:'no';
     $realEstate->user_id=Auth::user()->id;
        $realEstate->description=$request->description;
        $realEstate->save();
        return redirect('admin/realestate');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RealEstate  $realEstate
     * @return \Illuminate\Http\Response
     */
    public function show(RealEstate $realEstate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RealEstate  $realEstate
     * @return \Illuminate\Http\Response
     */
    public function edit(RealEstate $realEstate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RealEstate  $realEstate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RealEstate $realEstate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RealEstate  $realEstate
     * @return \Illuminate\Http\Response
     */
    public function destroy(RealEstate $realEstate)
    {
        //
    }
}
