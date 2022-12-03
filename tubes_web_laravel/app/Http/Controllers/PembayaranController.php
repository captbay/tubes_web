<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\User;
use App\Models\Users;

class PembayaranController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $pembayaran = Pembayaran::with(['users'])->paginate(5);
        //render view with posts
        return view('pembayaran.index', compact('pembayaran'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        $user = User::get();
        return view('pembayaran.create', compact('user'));
    }

    /**
     * edit
     *
     * @param  Request $request
     * @return void
     */
    public function edit($id)
    {
        $pembayaran = Pembayaran::find($id);
        $user = User::get();
        return view('pembayaran.edit', compact('pembayaran', 'user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_user' => 'required',
            'metode_pembayaran' => 'required',
            'total_bayar' => 'required',
        ]);

        $pembayaran = Pembayaran::find($id);
        $user = User::where('id', $request->user)->first();

        $pembayaran->update([
            'id_user' => $user->id,
            'metode_pembayaran' => $request->metode_pembayaran,
            'total_bayar' => $request->total_bayar,
        ]);


        //redirect to index
        return redirect()->route('pembayaran.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        Pembayaran::where('id', $id)->delete();

        //redirect to index
        return redirect()->route('pembayaran.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //Validasi Formulir
        $request->validate([
            'id_user' => 'required',
            'metode_pembayaran' => 'required',
            'total_bayar' => 'required',
        ]);
        $user = User::where('id', $request->user)->first();
        //Fungsi Simpan Data ke dalam Database
        Pembayaran::create([
            'id_user' => $user->id,
            'metode_pembayaran' => $request->metode_pembayaran,
            'total_bayar' => $request->total_bayar,
        ]);

        //Redirect jika berhasil mengirim email
        return redirect()->route('pembayaran.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}