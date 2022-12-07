<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\Komika;
use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Pesulap;
use App\Models\User;
use App\Models\Users;
use Illuminate\Support\Facades\Validator;

class PembelianController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $pembelian = Pembelian::latest()->get();
        //render view with posts
        return response()->json([
            'success' => true,
            'message' => 'List Data Pembelian',
            'data'    => $pembelian
        ], 200);
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        $pembelian = Pembelian::get();
        return view('pembelian.create', compact('pembelian'));
    }

    public function show($id)
    {
        $pembelian = Pembelian::find($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Pembelian',
            'data'    => $pembelian
        ], 200);
    }
    /**
     * edit
     *
     * @param  Request $request
     * @return void
     */
    public function edit($id)
    {
        $pembelian = Pembelian::find($id);
        return view('pembelian.edit', compact('pembelian'));
    }

    public function update(Request $request, $id)
    {
        $pembelian = Pembelian::find($id);
        if (!$pembelian) {
            //data pesulap not found
            return response()->json([
                'success' => false,
                'message' => 'Pembelian Not Found',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'tgl_pembelian' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        
        $pembelian = Pembelian::find($id);
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

        return response()->json([
            'success' => true,
            'message' => 'Pembelian Updated',
            'data'    => $pembelian
         ], 200);

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
        Pembelian::where('id', $id)->delete();

        //redirect to index
        return response()->json([
                'success' => true,
                'message' => 'Pesulap Deleted',
            ], 200);
        
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
        $validator = Validator::make($request->all(), [
            'tgl_pembelian' => 'required',
        ]);

        $pembelian = Pembelian::find($id);
        $band = Band::where('id', $request->band)->first();
        $komika = Komika::where('id', $request->komika)->first();
        $pesulap = Pesulap::where('id', $request->pesulap)->first();
        $user = User::where('id', $request->user)->first();

        $pembelian=Pembelian::create([
            'id_user' => $user->id,
            'id_band' => $band->id,
            'id_komika' => $komika->id,
            'id_pesulap' => $pesulap->id,
            'tgl_pembelian' => $request->tgl_pembelian,
        ]);

        //Redirect jika berhasil mengirim email
        if ($pembelian) {
            return response()->json([
                'success' => true,
                'message' => 'Pembelian Created',
                'data'    => $pembelian
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Pembelian Failed to Save',
                'data'    => $pembelian
            ], 409);
        }
    }
}