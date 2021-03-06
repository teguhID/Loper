<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PekerjaModel;

class LoperViewController extends Controller
{
    public function Dashboard()
    {
        $data = PekerjaModel::limit(6)->get();
        return view('mainView.loper')->with('data', $data);
    }

    public function ListPerusahaan()
    {
        return view('mainView.listPerusahaan');
    }

    public function ListLowongan()
    {
        return view('mainView.listLowongan');
    }

    public function ListPekerja()
    {
        $data = PekerjaModel::all();
        return view('mainView.listPekerja')->with('data', $data);
    }

    public function DetailPekerja($id)
    {
        $data = PekerjaModel::find($id);
        return view('mainView.detailPekerja')->with('data', $data);
    }

    public function DetailLowongan()
    {
        return view('mainView.detailLowongan');
    }

    public function DetailPerusahaan()
    {
        return view('mainView.detailPerusahaan');
    }

    public function Perusahaan()
    {
        return view('mainView.perusahaan.Perusahaan');
    }
}
