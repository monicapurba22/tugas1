<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_Dashboard extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function Dashboard(){
        return view('dashboard');
    }

    // Pengeluaran
    public function Pengeluaran(){
        $pengeluaran = DB::table('pengeluaran')->get();
        $total_pengeluaran = DB::table('pengeluaran')->get()->sum('jumlah_pengeluaran');
        return view('pengeluaran', [
            'pengeluaran' => $pengeluaran,
            'total_pengeluaran' => $total_pengeluaran
        ]);
    }

    public function createPengeluaran(Request $request){
        DB::table('pengeluaran')->insert([
            'jenis_pengeluaran' => $request->jenis_pengeluaran,
            'tanggal_pengeluaran' => $request->tanggal_pengeluaran,
            'jumlah_pengeluaran' => $request->jumlah_pengeluaran,
            'berita' => $request->berita
        ]);

        return redirect('/pengeluaran');
    }

    public function updatePengeluaran(Request $request){
        DB::table('pengeluaran')->where('id_pengeluaran', $request->id_pengeluaran)->update([
            'jenis_pengeluaran' => $request->jenis_pengeluaran,
            'tanggal_pengeluaran' => $request->tanggal_pengeluaran,
            'jumlah_pengeluaran' => $request->jumlah_pengeluaran,
            'berita' => $request->berita
        ]);

        return redirect('/pengeluaran');
    }

    public function deletePengeluaran(Request $request){
        DB::table('pengeluaran')->where('id_pengeluaran', $request->id_pengeluaran)->delete();

        return redirect('/pengeluaran');
    }

    //Pemasukan
    public function Pemasukan(){
        $pemasukan = DB::table('pemasukan')->get();
        $total_pemasukan = DB::table('pemasukan')->get()->sum('jumlah_pemasukan');
        return view('pemasukan', [
            'pemasukan' => $pemasukan,
            'total_pemasukan' => $total_pemasukan
        ]);
    }

    public function createPemasukan(Request $request){
        DB::table('pemasukan')->insert([
            'jenis_pemasukan' => $request->jenis_pemasukan,
            'jumlah_pemasukan' => $request->jumlah_pemasukan,
            'tanggal_pemasukan' => $request->tanggal_pemasukan,
            'catatan' => $request->catatan
        ]);

        return redirect('/pemasukan');
    }

    public function updatePemasukan(Request $request){
        DB::table('pemasukan')->where('id_pemasukan', $request->id_pemasukan)->update([
            'jenis_pemasukan' => $request->jenis_pemasukan,
            'tanggal_pemasukan' => $request->tanggal_pemasukan,
            'jumlah_pemasukan' => $request->jumlah_pemasukan,
            'catatan' => $request->catatan
        ]);

        return redirect('/pemasukan');
    }

    public function deletePemasukan(Request $request){
        DB::table('pemasukan')->where('id_pemasukan', $request->id_pemasukan)->delete();

        return redirect('/pemasukan');
    }
}
