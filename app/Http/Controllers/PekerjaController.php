<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PekerjaModel;
use App\LowonganModel;
use App\PerusahaanModel;
use App\LamaranModel;
use App\User;
use Auth;

class PekerjaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Dashboard()
    {
         $data = [
             'pekerja' => PekerjaModel::where('nama', Auth::user()->name)->first(),
             'lowongan' => LowonganModel::limit(3)->get()
         ];

         return view('pekerja.dashboard')->with($data);
    }

    public function ViewCv()
    {
        $data = PekerjaModel::where('nama', Auth::user()->name)->first();
        return view('pekerja.cv')->with('data', $data);
    }

    public function EditCv()
    {
        $data = PekerjaModel::where('nama', Auth::user()->name)->first();
        return view('pekerja.editCv')->with('data', $data);;
    }

    public function UpdateCv(Request $req, $id)
    {
        $idPekerja = $idPekerja = PekerjaModel::where('id', $id)->first()->id_pelamar;
        PekerjaModel::where('id', $id)->update($req->except(['_token', '_method', 'name']));
        User::where('id', $idPekerja)->update(['name' => $req->nama]);
        return redirect('pekerja/cv');
    }

    public function KirimCv($id)
    {
        $idLowongan = LowonganModel::find($id)->id;
        $idPekerja = Auth::user()->id;
        $idPerusahaan = LowonganModel::find($id)->id_perusahaan;
        LamaranModel::create([
            'id_lowongan' => $idLowongan,
            'id_pekerja' => $idPekerja,
            'id_perusahaan' => $idPerusahaan,
            'status' => 'Cv Terkirim'
        ]);
        return redirect('pekerja/detailLowongan/' . $id);
    }

    public function TarikCv($id)
    {
        LamaranModel::find($id)->delete();
        return \App::make('redirect')->back();
    }

    public function ViewListPerusahaan()
    {
        $data = PerusahaanModel::all();
        return view('pekerja.listPerusahaan')->with('data', $data);
    }

    public function ViewDetailPerusahaan($id)
    {
        $data = PerusahaanModel::find($id);
        return view('pekerja.detailPerusahaan')->with('data', $data);
    }

    public function ViewListLowongan()
    {
        $data = PerusahaanModel::join('lowongan', 'lowongan.id_perusahaan', 'perusahaan.id_perusahaan')->get();
        return view('pekerja.listLowongan')->with('data', $data);
    }

    public function ViewDetailLowongan($id)
    {
        $getvarDataLowonganForPerusahaan = LowonganModel::find($id)->id_perusahaan;
        $data = [
            'dataLamaran' => LamaranModel::where('id_lowongan', $id)->first(),
            'lowongan' => LowonganModel::find($id),
            'perusahaan' => PerusahaanModel::where('id_perusahaan', $getvarDataLowonganForPerusahaan)->first(),
        ];
        return view('pekerja/detailLowongan')->with($data);
    }

    public function CvTerkirim()
    {
        $data = LamaranModel::join('lowongan', 'lowongan.id', 'lamaran.id_lowongan')->get();
        return view('pekerja/cvTerkirim')->with('data', $data);
    }
}
