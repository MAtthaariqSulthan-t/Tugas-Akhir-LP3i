<?php

namespace App\Http\Controllers;

use App\Models\Devisi;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class DevisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Devisi::all();
        return view('admin.pages.devisis.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $devisi = new Devisi;
        return view('admin.pages.devisis.form', compact('devisi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'devisi' => 'required',
            'code' => 'required',
        ]);

        Devisi::create($request->all());
        return redirect()->route('devisi.index')->with('success', 'data berhasil ditambahakan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Devisi $devisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Devisi $devisi)
    {
        return view('admin.pages.devisis.form', ['devisi' => $devisi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Devisi $devisi)
    {
        $data = $request->all();
        $devisi->update($data);
        return redirect()->route('devisi.index')->with('success', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Devisi $devisi)
    {
        $data = $devisi->all();
        $devisi->delete($data);
        return redirect()->route('devisi.index')->with('success', 'data berhasil di hapus');
    }
}
