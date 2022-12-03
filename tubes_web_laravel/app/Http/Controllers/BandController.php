<?php

namespace App\Http\Controllers;

// import band
use App\Models\Band;

// exception
use Exception;

// Storage
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class BandController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $band = Band::latest()->paginate(5);
        //render view with posts
        return view('band.index', compact('band'));
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
        $this->validate($request, [
            'Nama' => 'required',
            'Harga' => 'required|Integer',
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Deskripsi' => 'required'
        ]);

        if ($request->hasFile('Image')) {

            //upload new image
            $image = $request->file('Image');
            $image->storeAs('public/bands', $image->hashName());

            //update band with new image
            Band::create([
                'Nama' => $request->Nama,
                'Harga' => $request->Harga,
                'Image' => $image->hashName(),
                'Deskripsi' => $request->Deskripsi
            ]);
        }

        try {
            //Mengisi variabel yang akan ditampilkan pada view mail
            // $content = [
            //     'body' => $request->nama_band,
            //     'title' => 'Band',
            // ];
            //Mengirim email ke emailtujuan@gmail.com

            // FacadesMail::to('agespramana9@gmail.com')->send(new
            //     BandMail($content));

            //Redirect jika berhasil mengirim email
            return redirect()->route('band.index')->with(['success' => 'Data Berhasil Disimpan, email telah terkirim!']);
        } catch (Exception $e) {
            //Redirect jika gagal mengirim email
            return redirect()->route('band.index')->with(['success' => 'Data Berhasil Disimpan, namun gagal mengirim email!']);
        }
    }

    /**
     * edit
     *
     * @param  mixed $post
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
        //validate form
        $this->validate($request, [
            'Nama' => 'required',
            'Harga' => 'required|Integer',
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Deskripsi' => 'required'
        ]);

        $band = Band::find($id);
        // check if image is uploaded
        if ($request->hasFile('Image')) {

            //upload new image
            $image = $request->file('Image');
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
        }

        //redirect to index
        return redirect()->route('band.index')->with(['success' => 'Data Berhasil Diubah!']);
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

        //delete image
        Storage::delete('public/bands/' . $band->Image);
        //delete band
        $band->delete();

        //redirect to index
        return redirect()->route('band.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}