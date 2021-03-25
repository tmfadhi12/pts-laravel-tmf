<?php

namespace App\Http\Controllers;

use App\Models\sc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\karyawanImport;
use App\Exports\karyawanExport;

class KaryawanController extends Controller
{
    public function index()
    {
        $data = sc::get();
        return view('karyawan',compact('data'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $data = new sc;
        $data->namaKaryawan = $request->nama_karyawan;
        $data->hadirMasuk = $request->hadir_masuk;
        $data->izinMasuk = $request->izin_masuk;
        $data->bolosMasuk = $request->bolos_masuk;
        $data->telatMasuk = $request->telat_masuk;

        $data->save();
        return redirect('/karyawan');
    }

    public function edit($id)
    {
        $data = sc::where('id', $id)->first();
        return view('edit',compact('data'));
    }

    public function update(Request $request)
    {
        $data = sc::where('id',$request->id)->first();
        $data->namaKaryawan = $request->nama_karyawan;
        $data->hadirMasuk = $request->hadir_masuk;
        $data->izinMasuk = $request->izin_masuk;
        $data->bolosMasuk = $request->bolos_masuk;
        $data->telatMasuk = $request->telat_masuk;

        $data->save();
        return redirect('/karyawan');
    }

    public function destroy($id)
    {
        $data = sc::where('id', $id)->delete();

        return redirect()->back();
    }

    public function import(Request $request) 
    {
        Excel::import(new karyawanImport,  $request->file('file')->store('temp'));
        
        return redirect('/karyawan');
    }

    public function importFile()
    {
        return view('import');
    }

    public function exportCsv()
    {
        return Excel::download(new karyawanExport,'pts.csv');
        return redirect('/karyawan');
    }

    public function exportXlsx()
    {
        return Excel::download(new karyawanExport,'pts.xlsx');
        return redirect('/karyawan');
    }

    public function exportPDF()
    {
        return Excel::download(new karyawanExport,'pts.pdf');
        return redirect('/karyawan');
    }
}
