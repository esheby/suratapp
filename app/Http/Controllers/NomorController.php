<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kodesatu;
use App\Models\Kodedua;

class NomorController extends Controller
{
    public function get_nomor(Request $request){
        if (!$request->kodesatu) {
            $html='<option value="">Pilih Kode</option>';
        } else {
            $html = '';
            $kodedua = Kodedua::where('noksatu', $request->kodesatu)->get();
            foreach ($kodedua as $kode) {
                $html .='<option value="'.$kode->nokdua.'">'.$kode->nokdua.'</option>';
            }
        }
        return response()->json(['html'=>$html]);
    }

    public function get_naskah(Request $request){
        $j_satu = Kodesatu::where('noksatu', $request->kodesatu)->get('judul');
        $k_satu = Kodesatu::where('noksatu', $request->kodesatu)->get('deskripsi');
        return response()->json(['j_satu'=>$j_satu, 'k_satu'=>$k_satu]);
    }
    public function get_naskahdua(Request $request){
            $j_dua = Kodedua::where('nokdua', $request->kodedua)->get('judul');
            $k_dua = Kodedua::where('nokdua', $request->kodedua)->get('deskripsi');
            return response()->json(['j_dua'=>$j_dua, 'k_dua'=>$k_dua]);
        
    }
}
