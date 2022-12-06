<?php

namespace App\Http\Controllers;

use App\Models\Komika;
// exception
use Exception;

// Storage
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;


class KomikaController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get komikas
        // $komika = Komika::latest()->paginate(5);
        $komika = Komika::latest()->get();
        //render view with komikas
        // return view('komika.index', compact('komika'));

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data Komika',
            'data'    => $komika
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
        //find komika by ID
        $komika = Komika::find($id);

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Post',
            'data'    => $komika
        ], 200);
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('komika.create');
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
            $image->storeAs('public/komikas', $image->hashName());

            //update komika with new image
            $komika = Komika::create([
                'Nama' => $request->Nama,
                'Harga' => $request->Harga,
                'Image' => $image->hashName(),
                'Deskripsi' => $request->Deskripsi
            ]);

            if ($komika) {

                return response()->json([
                    'success' => true,
                    'message' => 'Komika Created',
                    'data'    => $komika
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Komika Failed to Save',
                    'data'    => $komika
                ], 409);
            }
        }
        //data komika failed save to database
        return response()->json([
            'success' => false,
            'message' => 'Komika Not Found',
        ], 409);

        // try {
        //     //Mengisi variabel yang akan ditampilkan pada view mail
        //     // $content = [
        //     //     'body' => $request->nama_komika,
        //     //     'title' => 'Komika',
        //     // ];
        //     //Mengirim email ke emailtujuan@gmail.com

        //     // FacadesMail::to('agespramana9@gmail.com')->send(new
        //     //     KomikaMail($content));

        //     //Redirect jika berhasil mengirim email
        //     return redirect()->route('komika.index')->with(['success' => 'Data Berhasil Disimpan, email telah terkirim!']);
        // } catch (Exception $e) {
        //     //Redirect jika gagal mengirim email
        //     return redirect()->route('komika.index')->with(['success' => 'Data Berhasil Disimpan, namun gagal mengirim email!']);
        // }
    }

    /**
     * edit
     *
     * @param  mixed $komika
     * @return void
     */
    public function edit(Int $id)
    {
        $komika = Komika::find($id);

        return view('komika.edit', compact('komika'));
    }


    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $komika
     * @return void
     */
    public function update(Request $request, Int $id)
    {
        $komika = Komika::find($id);
        if (!$komika) {
            //data komika not found
            return response()->json([
                'success' => false,
                'message' => 'Komika Not Found',
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
        if ($request->hasFile('Image') || $komika) {

            //upload new image
            $image = $request->Image;
            $image->storeAs('public/komikas', $image->hashName());

            //delete old image
            Storage::delete('public/komikas/' . $komika->Image);

            //update komika with new image
            $komika->update([
                'Nama' => $request->Nama,
                'Harga' => $request->Harga,
                'Image' => $image->hashName(),
                'Deskripsi' => $request->Deskripsi
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Komika Updated',
                'data'    => $komika
            ], 200);
        }
        //data komika not found
        return response()->json([
            'success' => false,
            'message' => 'Komika Not Found',
        ], 404);


        //redirect to index
        // return redirect()->route('komika.index')->with(['success' => 'Data Berhasil Diubah!']);
    }


    /**
     * destroy
     *
     * @param  mixed $komika
     * @return void
     */
    public function destroy(Int $id)
    {
        // //delete image
        // Storage::delete('public/komikas/' . $komika->image);

        $komika = Komika::find($id);

        if ($komika) {
            Storage::delete('public/komikas/' . $komika->Image);
            //delete komika
            $komika->delete();

            return response()->json([
                'success' => true,
                'message' => 'Komika Deleted',
            ], 200);
        }



        //data komika not found
        return response()->json([
            'success' => false,
            'message' => 'Komika Not Found',
        ], 404);

        //redirect to index
        // return redirect()->route('komika.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}