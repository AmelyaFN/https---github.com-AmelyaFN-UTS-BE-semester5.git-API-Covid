<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patien;

class PatienController extends Controller
{
    function index() {
        //Menggunakan model Patien untuk select data
        $patiens = Patien::all();

        $data = [
            'message' => 'Get all Patiens',
            'data' => $patiens
        ];

        return response()->json($data, 200);
    }

    function store(Request $request) {
        //Menangkap data request dari body 
        $patiens = Patien::create([
            'name'=> $request->name,
            'phone'=> $request->phone,
            'address'=> $request->address,
            'status'=> $request->status,
            'in_date_at'=> $request->in_date_at,
            'out_date_at' => $request->out_date_at
        ]);

        $data = [
            'message' => 'Patient is created successfully',
            'data' => $patiens
        ];

        return response()->json($data, 201);
    }

    //Get Detail Resource
    function show($id) {
        //
        $patiens = Patien::find($id);

        $data = [
            'message' => "Get Patients with $id",
            'data' => $patiens
        ];

        return response()->json($data, 200);
    }

    function update($id, Request $request) {
        //
        $patiens = Patien::find($id);

        $patiens = $patiens->update([
            'name'=> $request->name ? $request->name : $patiens->name ,
            'phone'=> $request->phone ? $request->phone : $patiens->phone ,
            'address'=> $request->address ? $request->address : $patiens->address ,
            'status'=> $request->status ? $request->status : $patiens->status ,
            'in_date_at'=> $request->in_date_at ? $request->in_date_at : $patiens->in_date_at ,
            'out_date_at' => $request->out_date_at ? $request->out_date_at : $patiens->out_date_at 
        ]);

        $data = [
            'message' => 'Patient is updated successfully',
            'data' => $patiens
        ];

        return response()->json($data, 201);
    }

    function destroy($id) {
        //
        $patiens = Patien::find($id);
        $patiens = $patiens->delete();
        $data = [
            'message' => "Delete Patient is successfully"
        ];

        return response()->json($data, 200);
    }
}
