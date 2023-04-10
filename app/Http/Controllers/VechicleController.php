<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class VechicleController extends Controller
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
        try {
             Vehicle::create([
                'name'      => $request->name,
                'acquired_date'  => $request->acquired_date,
                'parking_location' => $request->parking_location,
                'worker_id' => $request->worker_id,
                'license_number' => $request->license_number,
            ]);
        } catch (\Exception $e) {
                return response()->json([
                    'message' => 'Error occured while creating vehicle information'
                ]);
        }

        return response()->json([
            'vehicle_name' =>  $request->name,
            'message' => ' vehicle information added successfully',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            
            return Vehicle::findOrFail($id);

        }catch(\Exception $e){
            
            return response()->json([
                'message' => 'vehicle  record not found',
            ]);
        }
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
         try {
             Vehicle::where('id', $id)->update($request->all());
        } catch (\Exception $e) {
                return response()->json([
                    'message' => 'Error occured while updating vehicle information'
                ]);
        }

        return response()->json([
            'message' => ' vehicle information updated successfully',
        ]);
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
