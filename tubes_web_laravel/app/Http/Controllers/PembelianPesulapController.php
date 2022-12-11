<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembelianPesulap;
use App\Models\Pesulap;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


class PembelianPesulapController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $pembelian = PembelianPesulap::latest()->get();
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
        $pembelian = PembelianPesulap::get();
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
        $pembelian = PembelianPesulap::find($id);
        return view('pembelian.edit', compact('pembelian'));
    }

    public function show($id)
    {
        $pembelian = PembelianPesulap::find($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Pembelian',
            'data'    => $pembelian
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $pembelian = PembelianPesulap::find($id);
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

        $pembelian = PembelianPesulap::find($id);
        $pesulap = Pesulap::where('id', $request->pesulap)->first();
        $user = User::where('id', $request->user)->first();
        $pembelian->update([
            'id_user' => $user->id,
            'id_pesulap' => $pesulap->id,
            'tgl_pembelian' => $request->tgl_pembelian,
        ]);


        //redirect to index
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
        PembelianPesulap::where('id', $id)->delete();

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
    public function store(Request $request)
    {
        //Validasi Formulir
        $validator = Validator::make($request->all(), [
            'tgl_pembelian' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $pesulap = Pesulap::where('id', $request->pesulap)->first();
        $user = User::where('id', $request->user)->first();
        //Fungsi Simpan Data ke dalam Database
        $pembelian = PembelianPesulap::create([
            'id_user' => $user->id,
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
