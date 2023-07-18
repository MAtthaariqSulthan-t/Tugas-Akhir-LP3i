<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class LogrequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Service::all();
        $name = 'logrequest';
        $fill = 'all';
        return view('admin.pages.requests.list', compact('data', 'name', 'fill'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Service::where('action', 'proses')
        ->get();
        $name = 'logrequest';
        $fill = 'proses';
        return view('admin.pages.requests.list', compact('data', 'name', 'fill'));
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
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $data = Service::where('action', 'selesai')
            ->get();
        $name = 'logrequest';
        $fill = 'selesai';
        return view('admin.pages.requests.list', compact('data', 'name', 'fill'));
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