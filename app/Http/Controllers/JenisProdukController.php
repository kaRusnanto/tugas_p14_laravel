<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisProduk;

class JenisProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jpr = JenisProduk::all();
        if (isset($jpr)) {
            $hasil = [
                'success' => true,
                'message' => 'Data JenisProduk',
                'data' => $jpr
            ];
            return response()->json($hasil, 200);
        } else {
            $fails = [
                'success' => false,
                'message' => 'Data JenisProduk Tidak Ditemukan',
                'data' => []
            ];
            return response()->json($fails, 404);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
