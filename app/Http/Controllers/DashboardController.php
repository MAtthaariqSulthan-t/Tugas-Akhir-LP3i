<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataProses = Service::where('action', 'proses')->count();
        $dataReq = Service::where('action', 'req')->count();
        $dataSelesai = Service::where('action', 'selesai')->count();
        $dataBatal = Service::where('action', 'batal')->count();
        $data = Service::where('action', 'proses')
            ->orWhere('action', 'req')
            ->orderBy('created_at', 'desc')
            ->get();
        $name = 'request';
        return view('admin.pages.dashboard', compact('data', 'name', 'dataBatal', 'dataProses', 'dataSelesai', 'dataReq'));
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
    //export function
    public function exportPdf()
    {
        $datas = Service::all();
        $pdf = Pdf::loadView('pdf.export-dataLaba', ['datas' => $datas]);
        return $pdf->download('dataLayananBantuan.pdf' . Carbon::now()->timestamp . '.pdf');
    }
}
