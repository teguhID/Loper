<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LowonganModel;
use App\LamaranModel;
use App\PerusahaanModel;
use Auth;

class LowonganController extends Controller
{
    public function index()
    {
        # code...
    }

    public function ShowAllPublicLowongan()
    {
        $data = PerusahaanModel::join('lowongan', 'lowongan.id_perusahaan', 'perusahaan.id_perusahaan')->get();
        return view('perusahaan.lowongan.allPublicLowongan')->with('data', $data);
    }

    public function create()
    {
        $data = PerusahaanModel::where('nama_perusahaan', Auth::user()->name)->first();
        return view('perusahaan.lowongan.buatLowongan')->with('data', $data);
    }

    public function store(Request $req)
    {
        $data = LowonganModel::create($req->except(['_token', '_method', 'name']));
        return redirect('perusahaan/lowongan');
    }

    public function show($id)
    {
        $data = [
            'dataCvMasuk' => LamaranModel::where('id_lowongan', $id)->where('id_perusahaan', Auth::user()->id)->count(),
            'lowongan' => LowonganModel::find($id),
            'perusahaan' => PerusahaanModel::where('nama_perusahaan', Auth::user()->name)->first(),
        ];
        return view('perusahaan/lowongan/detailLowongan')->with($data);
    }

    public function edit($id)
    {
        $data = [
            'lowongan' => LowonganModel::find($id),
            'perusahaan' => PerusahaanModel::where('nama_perusahaan', Auth::user()->name)->first(),
        ];
        return view('perusahaan/lowongan/editLowongan')->with($data);
    }

    public function update(Request $req, $id)
    {
        LowonganModel::find($id)->update($req->all());
        return redirect('perusahaan/lowongan');
    }

    public function DeleteLowongan($id)
    {
        LowonganModel::find($id)->delete();
        return redirect('perusahaan/lowongan');
    }

    public function CvMasuk($id)
    {
        $data = LamaranModel::join('pekerja', 'pekerja.id_pelamar', 'lamaran.id_pekerja')->where('id_lowongan', $id)->where('status','Cv Terkirim')->get();
        return view('perusahaan.lowongan.cvMasuk')->with('data', $data);
    }

    public function ProsesCv($idLowongan, $idPekerja)
    {
        LamaranModel::where('id_pekerja',$idPekerja)->update(['status' => 'Cv Di Proses']);
        $data = LamaranModel::join('pekerja', 'pekerja.id_pelamar', 'lamaran.id_pekerja')->where('id_lowongan', $idLowongan)->where('status','Cv Di Proses')->get();
        return view('perusahaan.lowongan.cvTerproses')->with('data', $data);
    }

    public function ViewProsesCv($id)
    {
        $data = LamaranModel::join('pekerja', 'pekerja.id_pelamar', 'lamaran.id_pekerja')->where('id_lowongan', $id)->where('status','Cv Di Proses')->get();
        return view('perusahaan.lowongan.cvTerproses')->with('data', $data);
    }
}
