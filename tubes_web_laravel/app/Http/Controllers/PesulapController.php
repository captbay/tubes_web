<?php

namespace App\Http\Controllers;

use App\Models\Pesulap;
// exception
use Exception;

// Storage
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class PesulapController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        // $pesulap = Pesulap::latest()->paginate(5);
        $pesulap = Pesulap::latest()->get();
        //render view with posts
        // return view('pesulap.index', compact('pesulap'));

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data Pesulap',
            'data'    => $pesulap
        ], 200);
    }
    /**
     * show
     *
     * @param  mixed $id
     * @return void
     */
    public function show($id)
    {
        //find pesulap by ID
        $pesulap = Pesulap::find($id);

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Pesulap',
            'data'    => $pesulap
        ], 200);
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('pesulap.create');
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
            'Nama' => 'required',
            'Harga' => 'required|Integer',
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Deskripsi' => 'required'
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        if ($request->hasFile('Image')) {

            //upload new image
            $image = $request->file('Image');
            $image->storeAs('public/pesulaps', $image->hashName());

            //update pesulap with new image
            $pesulap = Pesulap::create([
                'Nama' => $request->Nama,
                'Harga' => $request->Harga,
                'Image' => $image->hashName(),
                'Deskripsi' => $request->Deskripsi
            ]);

            if ($pesulap) {

                return response()->json([
                    'success' => true,
                    'message' => 'Pesulap Created',
                    'data'    => $pesulap
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Pesulap Failed to Save',
                    'data'    => $pesulap
                ], 409);
            }
        }
        //data pesulap failed save to database
        return response()->json([
            'success' => false,
            'message' => 'Pesulap Not Found',
        ], 409);

        // try {
        //     //Mengisi variabel yang akan ditampilkan pada view mail
        //     // $content = [
        //     //     'body' => $request->nama_pesulap,
        //     //     'title' => 'Pesulap',
        //     // ];
        //     //Mengirim email ke emailtujuan@gmail.com

        //     // FacadesMail::to('agespramana9@gmail.com')->send(new
        //     //     PesulapMail($content));

        //     //Redirect jika berhasil mengirim email
        //     return redirect()->route('pesulap.index')->with(['success' => 'Data Berhasil Disimpan, email telah terkirim!']);
        // } catch (Exception $e) {
        //     //Redirect jika gagal mengirim email
        //     return redirect()->route('pesulap.index')->with(['success' => 'Data Berhasil Disimpan, namun gagal mengirim email!']);
        // }
    }

    /**
     * edit
     *
     * @param  mixed $pesulap
     * @return void
     */
    public function edit(Int $id)
    {
        $pesulap = Pesulap::find($id);

        return view('pesulap.edit', compact('pesulap'));
    }


    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $pesulap
     * @return void
     */
    public function update(Request $request, Int $id)
    {
        $pesulap = Pesulap::find($id);
        if (!$pesulap) {
            //data pesulap not found
            return response()->json([
                'success' => false,
                'message' => 'Pesulap Not Found',
            ], 404);
        }
        //validate form
        $validator = Validator::make($request->all(), [
            'Nama' => 'required',
            'Harga' => 'required|Integer',
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Deskripsi' => 'required'
        ]);
        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // check if image is uploaded
        if ($request->hasFile('Image') || $pesulap) {

            //upload new image
            $image = $request->Image;
            $image->storeAs('public/pesulaps', $image->hashName());

            //delete old image
            Storage::delete('public/pesulaps/' . $pesulap->Image);

            //update pesulap with new image
            $pesulap->update([
                'Nama' => $request->Nama,
                'Harga' => $request->Harga,
                'Image' => $image->hashName(),
                'Deskripsi' => $request->Deskripsi
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Pesulap Updated',
                'data'    => $pesulap
            ], 200);
        }

        //data pesulap not found
        return response()->json([
            'success' => false,
            'message' => 'Pesulap Not Found',
        ], 404);

        //redirect to index
        // return redirect()->route('pesulap.index')->with(['success' => 'Data Berhasil Diubah!']);
    }


    /**
     * destroy
     *
     * @param  mixed $pesulap
     * @return void
     */
    public function destroy(Int $id)
    {
        // //delete image
        // Storage::delete('public/pesulaps/' . $pesulap->image);

        $pesulap = Pesulap::find($id);

        if ($pesulap) {
            //delete image
            Storage::delete('public/pesulaps/' . $pesulap->Image);
            //delete pesulap
            $pesulap->delete();

            return response()->json([
                'success' => true,
                'message' => 'Pesulap Deleted',
            ], 200);
        }


        //data pesulap not found
        return response()->json([
            'success' => false,
            'message' => 'Pesulap Not Found',
        ], 404);

        //redirect to index
        // return redirect()->route('pesulap.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}