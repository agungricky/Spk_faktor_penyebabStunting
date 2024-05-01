<?php

namespace App\Http\Controllers;

use App\Models\dataSolusi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = dataSolusi::all();
        return view('website.Admin.Dashboard', compact('query'));
    }

    public function dataBidan()
    {
        return view('website.Admin.dataBidan');
    }

    public function dataKader()
    {
        return view('website.Admin.dataKader');
    }

    public function dataPengguna()
    {
        return view('website.Admin.dataPengguna');
    }

    public function Solusi()
    {
        $query = dataSolusi::all();
        return view('website.Admin.Solusi', compact('query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
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
        return view('website.Admin.ShowSolusi', compact('id'));
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
