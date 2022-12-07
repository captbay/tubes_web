<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\User;
use App\Models\Users;
use Illuminate\Support\Facades\Validator;

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
        $pembayaran = Pembayaran::latest()->get();
        //render view with posts
        return response()->json([
            'success' => true,
            'message' => 'List Data Pembayaran',
            'data'    => $pembayaran
        ], 200);
    }

    public function show($id)
    {
        $pembayaran = Pembayaran::find($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Pembayaran',
            'data'    => $pembayaran
        ], 200);
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
        $pembayaran = Pembayaran::find($id);
        if (!$pembayaran) {
            //data pesulap not found
            return response()->json([
                'success' => false,
                'message' => 'Pembayaran Not Found',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'id_user' => 'required',
            'metode_pembayaran' => 'required',
            'total_bayar' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $pembayaran = Pembayaran::find($id);
        $user = User::where('id', $request->user)->first();

        $pembayaran->update([
            'id_user' => $user->id,
            'metode_pembayaran' => $request->metode_pembayaran,
            'total_bayar' => $request->total_bayar,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Pembayaran Updated',
            'data'    => $pembayaran
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
        Pembayaran::where('id', $id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Pembayaran Deleted',
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
            'id_user' => 'required',
            'metode_pembayaran' => 'required',
            'total_bayar' => 'required',
        ]);

        $user = User::find($request->id_user);
        //Fungsi Simpan Data ke dalam Database
        $pembayaran = Pembayaran::create([
            'id_user' => $user->id,
            'metode_pembayaran' => $request->metode_pembayaran,
            'total_bayar' => $request->total_bayar,
        ]);

        //Redirect jika berhasil mengirim email
        if ($pembayaran) {
            return response()->json([
                'success' => true,
                'message' => 'Pembayaran Created',
                'data'    => $pembayaran
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Pembayaran Failed to Save',
                'data'    => $pembayaran
            ], 409);
        }
    }
}
