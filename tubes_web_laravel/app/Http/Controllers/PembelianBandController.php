<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;
use App\Models\PembelianBand;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class PembelianBandController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $pembelian = PembelianBand::latest()->get();

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
        $pembelian = PembelianBand::get();
        return view('pembelian.create', compact('pembelian'));
    }

    public function show($id)
    {
        $pembelian = PembelianBand::find($id);
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
        $pembelian = PembelianBand::find($id);
        return view('pembelian.edit', compact('pembelian'));
    }

    public function update(Request $request, $id)
    {
        $pembelian = PembelianBand::find($id);
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

        $pembelian = PembelianBand::find($id);
        $band = Band::where('id', $request->band)->first();
        $user = User::where('id', $request->user)->first();
        $pembelian->update([
            'id_user' => $user->id,
            'id_band' => $band->id,
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
        PembelianBand::where('id', $id)->delete();

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

        $band = Band::where('id', $request->id_band)->first();
        $user = User::where('id', $request->id_user)->first();

        $pembelian = PembelianBand::create([
            'id_user' => $user->id,
            'id_band' => $band->id,
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
