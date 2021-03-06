<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PerusahaanModel;
use App\LowonganModel;
use App\lamaranModel;
use App\PekerjaModel;
use App\User;
use File;
use Auth;

class PerusahaanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Dashboard()
    {
        $data = PerusahaanModel::where('nama_perusahaan', Auth::user()->name)->first();
        return view('perusahaan.dashboard')->with('data', $data);
    }

    public function ViewListPekerja()
    {
        $data = PekerjaModel::all();
        return view('perusahaan.listPekerja')->with('data', $data);
    }

    public function ViewDetailPekerja($id)
    {
        $data = PekerjaModel::find($id);
        return view('perusahaan.detailPekerja')->with('data', $data);
    }

    public function ViewListLowongan()
    {
        lamaranModel::join('lowongan', 'lowongan.id', 'lamaran.id_lowongan')->get();
        $data=[
            'perusahaan' => PerusahaanModel::where('nama_perusahaan', Auth::user()->name)->first(),
            'lowongan' => LowonganModel::where('perusahaan', Auth::user()->name)->get(),
        ];
        return view('perusahaan.lowongan.listLowongan')->with($data);
    }

    public function ViewProfilePerusahaan()
    {
        $data = PerusahaanModel::where('nama_perusahaan', Auth::user()->name)->first();
        return view('perusahaan.profilePerusahaan')->with('data', $data);
    }

    public function EditProfilePerusahaan()
    {
        $data = PerusahaanModel::where('nama_perusahaan', Auth::user()->name)->first();
        return view('perusahaan.editProfile')->with('data', $data);
    }

    public function UpdateProfilePerusahaan(Request $req, $id)
    {
        $file_logo = $req->logo;
        if ($file_logo == null) {
            //only data without foto
            $idPerusahaan = PerusahaanModel::where('id', $id)->first()->id_perusahaan;
            PerusahaanModel::where('id', $id)->update($req->except(['_token', '_method', 'logo']));
            User::where('id', $idPerusahaan)->update(['name' => $req->nama_perusahaan]);
            return redirect('perusahaan/profile');
        } else {
            //foto
                //delete foto
            $logo = PerusahaanModel::where('id',$id)->first()->logo;
            File::delete('img/perusahaan/'.$logo);
                //insert foto
            $name_logo = time()."_".$file_logo->getClientOriginalName();
            $file_logo->move('img/perusahaan', $name_logo);
            PerusahaanModel::where('id', $id)->first()->update(['logo'=>$name_logo,]);
            //data
            $idPerusahaan = PerusahaanModel::where('id', $id)->first()->id_perusahaan;
            PerusahaanModel::where('id', $id)->update($req->except(['_token', '_method', 'logo']));
            User::where('id', $idPerusahaan)->update(['name' => $req->nama_perusahaan]);
            return redirect('perusahaan/profile');
        }
        // $idPerusahaan = PerusahaanModel::where('id', $id)->first()->id_perusahaan;
        // PerusahaanModel::where('id', $id)->update($req->except(['_token', '_method', 'name']));
        // User::where('id', $idPerusahaan)->update(['name' => $req->nama_perusahaan]);
        // return redirect('perusahaan/profile');
    }
}
