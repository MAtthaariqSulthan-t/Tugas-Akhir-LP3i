<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\UserTest;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Service::all();
        return view('user.pages.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = UserTest::all();
        $service = new Service;
        return view('user.pages.layanan', compact('data', 'service'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Service::create($request->all());
        return redirect()->route('service.index')->with('notif', 'permintaan berhasil terkirim');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $data = $request->all();
        $service->update($data);
        return redirect()->route('service.index')->with('notif', 'permintaan berhasil terkirim');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
