<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\Komika;
use Illuminate\Http\Request;
use App\Models\PembelianKomika;
use App\Models\Pesulap;
use App\Models\User;
use App\Models\Users;

class PembelianKomikaController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $pembelian = PembelianKomika::with(['users'])->paginate(5);
        //render view with posts
        return view('pembelian.index', compact('pembelian'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        $pembelian = PembelianKomika::get();
        return view('pembelian.create', compact('pembelian'));
    }

    /**
     * edit
     *
     * @param  Request $request
     * @return void
     */
    public function edit($id)
    {
        $pembelian = PembelianKomika::find($id);
        return view('pembelian.edit', compact('pembelian'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tgl_pembelian' => 'required',
        ]);

        $pembelian = PembelianKomika::find($id);
        $band = Band::where('id', $request->band)->first();
        $komika = Komika::where('id', $request->komika)->first();
        $pesulap = Pesulap::where('id', $request->pesulap)->first();
        $user = User::where('id', $request->user)->first();
        $pembelian->update([
            'id_user' => $user->id,
            'id_band' => $band->id,
            'id_komika' => $komika->id,
            'id_pesulap' => $pesulap->id,
            'tgl_pembelian' => $request->tgl_pembelian,
        ]);


        //redirect to index
        return redirect()->route('pembelian.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  Request $request
     * @return void
     */
    public function destroy($id)
    {

        //delete post
        PembelianKomika::where('id', $id)->delete();

        //redirect to index
        return redirect()->route('pembelian.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request, Int $id)
    {
        //Validasi Formulir
        $request->validate([
            'tgl_pembelian' => 'required',
        ]);

        $pembelian = PembelianKomika::find($id);
        $band = Band::where('id', $request->band)->first();
        $komika = Komika::where('id', $request->komika)->first();
        $pesulap = Pesulap::where('id', $request->pesulap)->first();
        $user = User::where('id', $request->user)->first();
        //Fungsi Simpan Data ke dalam Database
        PembelianKomika::create([
            'id_user' => $user->id,
            'id_band' => $band->id,
            'id_komika' => $komika->id,
            'id_pesulap' => $pesulap->id,
            'tgl_pembelian' => $request->tgl_pembelian,
        ]);

        //Redirect jika berhasil mengirim email
        return redirect()->route('pembelian.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}