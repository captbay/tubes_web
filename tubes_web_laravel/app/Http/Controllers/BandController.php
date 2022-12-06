<?php

namespace App\Http\Controllers;

// import band
use App\Models\Band;

// exception
use Exception;

// Storage
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class BandController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get bands
        // $band = Band::latest()->paginate(5);
        $band = Band::latest()->get();
        //render view with bands
        // return view('band.index', compact('band'));

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data Band',
            'data'    => $band
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
        //find band by ID
        $band = Band::find($id);

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Band',
            'data'    => $band
        ], 200);
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('band.create');
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
            $image->storeAs('public/bands', $image->hashName());

            //update band with new image
            $band = Band::create([
                'Nama' => $request->Nama,
                'Harga' => $request->Harga,
                'Image' => $image->hashName(),
                'Deskripsi' => $request->Deskripsi
            ]);

            if ($band) {

                return response()->json([
                    'success' => true,
                    'message' => 'Band Created',
                    'data'    => $band
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Band Failed to Save',
                    'data'    => $band
                ], 409);
            }
        }
        //data band failed save to database
        return response()->json([
            'success' => false,
            'message' => 'Band Not Found',
        ], 409);


        // try {
        //     //Mengisi variabel yang akan ditampilkan pada view mail
        //     // $content = [
        //     //     'body' => $request->nama_band,
        //     //     'title' => 'Band',
        //     // ];
        //     //Mengirim email ke emailtujuan@gmail.com

        //     // FacadesMail::to('agespramana9@gmail.com')->send(new
        //     //     BandMail($content));

        //     //Redirect jika berhasil mengirim email
        //     return redirect()->route('band.index')->with(['success' => 'Data Berhasil Disimpan, email telah terkirim!']);
        // } catch (Exception $e) {
        //     //Redirect jika gagal mengirim email
        //     return redirect()->route('band.index')->with(['success' => 'Data Berhasil Disimpan, namun gagal mengirim email!']);
        // }
    }

    /**
     * edit
     *
     * @param  mixed $band
     * @return void
     */
    public function edit(Int $id)
    {
        $band = Band::find($id);

        return view('band.edit', compact('band'));
    }


    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $band
     * @return void
     */
    public function update(Request $request, Int $id)
    {
        $band = Band::find($id);
        if (!$band) {
            //data band not found
            return response()->json([
                'success' => false,
                'message' => 'Band Not Found',
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
        if ($request->hasFile('Image') || $band) {

            //upload new image
            $image = $request->Image;
            $image->storeAs('public/bands', $image->hashName());

            //delete old image
            Storage::delete('public/bands/' . $band->Image);

            //update band with new image
            $band->update([
                'Nama' => $request->Nama,
                'Harga' => $request->Harga,
                'Image' => $image->hashName(),
                'Deskripsi' => $request->Deskripsi
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Band Updated',
                'data'    => $band
            ], 200);
        }

        //data band not found
        return response()->json([
            'success' => false,
            'message' => 'Band Not Found',
        ], 404);

        //redirect to index
        // return redirect()->route('band.index')->with(['success' => 'Data Berhasil Diubah!']);
    }


    /**
     * destroy
     *
     * @param  mixed $band
     * @return void
     */
    public function destroy(Int $id)
    {
        // //delete image
        // Storage::delete('public/bands/' . $band->image);

        $band = Band::find($id);

        if ($band) {
            //delete image
            Storage::delete('public/bands/' . $band->Image);
            //delete band
            $band->delete();

            return response()->json([
                'success' => true,
                'message' => 'Band Deleted',
            ], 200);
        }


        //data band not found
        return response()->json([
            'success' => false,
            'message' => 'Band Not Found',
        ], 404);

        //redirect to index
        // return redirect()->route('band.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}