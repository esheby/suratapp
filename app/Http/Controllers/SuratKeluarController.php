<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kodesatu;
use App\Models\Kodedua;
use App\Models\Sk2022;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Sk2022::orderBy('id', 'desc')->get();
        return view('pages.suratkeluar.index')
            ->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kodesatu = Kodesatu::get();
        $kodedua = Kodedua::get();
        return view('pages.suratkeluar.create')
            ->with('kodesatu', $kodesatu)
            ->with('kodedua', $kodedua);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = new Sk2022();
        $insert->tanggal_surat = $request->tanggal;
        if ($request->custom != "") {
            $nomor = $request->custom;
            $insert->kepada = $request->kepada;
            $insert->perihal = $request->perihal;
            $insert->konseptor = $request->konseptor;
            $insert->keterangan = $request->keterangan;
            $insert->save();
            $idno = $insert->id;

            $updateno = Sk2022::find($idno);
            $tahun = explode('-', $updateno->tanggal_surat);
            $newnomor = $nomor. "/" . $idno . "/" . $tahun[0];
            $updateno->nomor = $newnomor;
            $updateno->save();
            return redirect('suratkeluar');
        } else {
            if ($request->kodedua == "") {
                $nomor = $request->naskah.".".$request->kodesatu;
            } else {
                $nomor = $request->naskah.".".$request->kodesatu.".".$request->kodedua;
            }
            $insert->kepada = $request->kepada;
            $insert->perihal = $request->perihal;
            $insert->konseptor = $request->konseptor;
            $insert->keterangan = $request->keterangan;
            $insert->save();

            $idno = $insert->id;

            $updateno = Sk2022::find($idno);
            $tahun = explode('-', $updateno->tanggal_surat);
            $newnomor = $nomor. "/" . $idno . "/" . $tahun[0];
            $updateno->nomor = $newnomor;
            $updateno->save();
            return redirect('suratkeluar')->with('success', 'Surat Keluar Telah Dibuat');
            
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Sk2022::find($id);
        return view('pages.suratkeluar.show')
            ->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Sk2022::find($id);
        return view('pages.suratkeluar.edit')
            ->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Sk2022::find($id);
        $update->tanggal_surat = $request->tanggal;
        $update->nomor = $request->nomor;
        $update->kepada = $request->kepada;
        $update->perihal = $request->perihal;
        $update->konseptor = $request->konseptor;
        $update->keterangan = $request->keterangan;
        $update->save();
        $alert = array('message'=>'Surat Keluar Telah Diubah');
        return redirect('suratkeluar')->with('success', 'Surat Keluar Telah Diubah');
    }

    public function delete($id)
    {
        $data = Sk2022::find($id);
        return view('pages.suratkeluar.delete')
            ->with('data', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sk2022::destroy($id);
        return redirect('/suratkeluar')->with('success', 'Surat Keluar Telah Dihapus');
    }
}
