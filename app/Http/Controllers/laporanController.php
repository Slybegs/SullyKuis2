<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\informasiPerusahaan;
use App\Models\informasiPelanggan;
use App\Models\invoiceProduk;
use App\Models\daftarProduk;
use PDF;

class laporanController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    public function cetak_pdf()
    {
        //tarik data 
        $informasiPerusahaan = informasiPerusahaan::all();
        $informasiPelanggan = informasiPelanggan::all();
        $invoiceProduk = invoiceProduk::all();
        $daftarProduk = daftarProduk::all();

        $pdf = PDF::loadview('laporan/invoicepdf',['informasiPerusahaan'=>$informasiPerusahaan, 'informasiPelanggan'=>$informasiPelanggan, 'invoiceProduk'=>$invoiceProduk, 'daftarProduk'=>$daftarProduk]);
        return $pdf->download('laporan-invoice-pdf');  
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
