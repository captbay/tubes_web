<?php

namespace App\Http\Controllers;

use App\Models\Komika;
// exception
use Exception;

// Storage
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class KomikaController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $komika = Komika::latest()->paginate(5);
        //render view with posts
        return view('komika.index', compact('komika'));
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
        $this->validate($request, [
            'Nama' => 'required',
            'Harga' => 'required|Integer',
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Deskripsi' => 'required'
        ]);

        if ($request->hasFile('Image')) {

            //upload new image
            $image = $request->file('Image');
            $image->storeAs('public/komikas', $image->hashName());

            //update komika with new image
            Komika::create([
                'Nama' => $request->Nama,
                'Harga' => $request->Harga,
                'Image' => $image->hashName(),
                'Deskripsi' => $request->Deskripsi
            ]);
        }

        try {
            //Mengisi variabel yang akan ditampilkan pada view mail
            // $content = [
            //     'body' => $request->nama_komika,
            //     'title' => 'Komika',
            // ];
            //Mengirim email ke emailtujuan@gmail.com

            // FacadesMail::to('agespramana9@gmail.com')->send(new
            //     KomikaMail($content));

            //Redirect jika berhasil mengirim email
            return redirect()->route('komika.index')->with(['success' => 'Data Berhasil Disimpan, email telah terkirim!']);
        } catch (Exception $e) {
            //Redirect jika gagal mengirim email
            return redirect()->route('komika.index')->with(['success' => 'Data Berhasil Disimpan, namun gagal mengirim email!']);
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
        //validate form
        $this->validate($request, [
            'Nama' => 'required',
            'Harga' => 'required|Integer',
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Deskripsi' => 'required'
        ]);

        $komika = Komika::find($id);
        // check if image is uploaded
        if ($request->hasFile('Image')) {

            //upload new image
            $image = $request->file('Image');
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
        }

        //redirect to index
        return redirect()->route('komika.index')->with(['success' => 'Data Berhasil Diubah!']);
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

        Storage::delete('public/komikas/' . $komika->Image);
        //delete komika
        $komika->delete();

        //redirect to index
        return redirect()->route('komika.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}