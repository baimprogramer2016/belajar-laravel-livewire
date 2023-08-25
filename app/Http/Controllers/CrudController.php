<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class CrudController extends Controller
{
    public function index(Request $request)
    {

        //$data_pegawai = Pegawai::paginate(10); //select * from pegawai

        $query = Pegawai::query();

        $query->when(!empty($request->search), function ($q) use ($request) {
            return $q->where('nama', 'like', '%' . $request->search . '%') //select * from pegawai where nama like '%joni%'
                ->orWHere('alamat', 'like', '%' . $request->search . '%');
        });

        $data_pegawai = $query->orderby('id', 'desc')->paginate(10);
        return view('pages.crud', [
            "data_pegawai" => $data_pegawai
        ]);
    }

    public function simpan(Request $request)
    {
        Pegawai::create($request->all());
        return back()->with('message', "Data Berhasil diinput");
    }

    public function modalTambah(Request $request)
    {
        return view('pages.crud-modal-tambah');
    }
}
