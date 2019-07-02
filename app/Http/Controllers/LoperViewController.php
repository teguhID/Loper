<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoperViewController extends Controller
{
    public function Dashboard()
    {
        return view('mainVIew.loper');
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
        return view('mainView.listPekerja');
    }

    public function DetailPekerja()
    {
        return view('mainView.detailPekerja');
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
