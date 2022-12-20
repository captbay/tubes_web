<?php

namespace App\Http\Controllers;

use App\Models\Komika;
use Illuminate\Http\Request;
use App\Models\PembelianKomika;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

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
        $pembelian = PembelianKomika::with(['komikas'])->get();
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
        $pembelian = PembelianKomika::get();
        return view('pembelian.create', compact('pembelian'));
    }

    /**
     * edit
     *
     * @param  Request $request
     * @return void
     */

    public function show($id)
    {
        $pembelian = PembelianKomika::find($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Pembelian',
            'data'    => $pembelian
        ], 200);
    }

    public function edit($id)
    {
        $pembelian = PembelianKomika::find($id);
        return view('pembelian.edit', compact('pembelian'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'tgl_pembelian' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $pembelian = PembelianKomika::find($id);
        if (!$pembelian) {
            //data pesulap not found
            return response()->json([
                'success' => false,
                'message' => 'Pembelian Not Found',
            ], 404);
        }




        // $pembelian = PembelianKomika::find($id);
        // $komika = Komika::where('id', $request->komika)->first();
        // $user = User::where('id', $request->user)->first();
        $pembelian->update([
            // 'id_user' => $user->id,
            // 'id_komika' => $komika->id,
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
        PembelianKomika::where('id', $id)->delete();

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
    public function store(Request $request,  $id_user, $id_product)
    {
        // Validasi Formulir
        $validator = Validator::make($request->all(), [
            'tgl_pembelian' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $komika = Komika::find($id_product);
        $user = User::find($id_user);
        //Fungsi Simpan Data ke dalam Database
        $pembelian = PembelianKomika::create([
            'id_user' => $user->id,
            'id_komika' => $komika->id,
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