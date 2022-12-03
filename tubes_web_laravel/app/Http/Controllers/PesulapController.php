<?php

namespace App\Http\Controllers;

use App\Models\Pesulap;
// exception
use Exception;

// Storage
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

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
        $pesulap = Pesulap::latest()->paginate(5);
        //render view with posts
        return view('pesulap.index', compact('pesulap'));
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
        $this->validate($request, [
            'Nama' => 'required',
            'Harga' => 'required|Integer',
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Deskripsi' => 'required'
        ]);

        if ($request->hasFile('Image')) {

            //upload new image
            $image = $request->file('Image');
            $image->storeAs('public/pesulaps', $image->hashName());

            //update pesulap with new image
            Pesulap::create([
                'Nama' => $request->Nama,
                'Harga' => $request->Harga,
                'Image' => $image->hashName(),
                'Deskripsi' => $request->Deskripsi
            ]);
        }

        try {
            //Mengisi variabel yang akan ditampilkan pada view mail
            // $content = [
            //     'body' => $request->nama_pesulap,
            //     'title' => 'Pesulap',
            // ];
            //Mengirim email ke emailtujuan@gmail.com

            // FacadesMail::to('agespramana9@gmail.com')->send(new
            //     PesulapMail($content));

            //Redirect jika berhasil mengirim email
            return redirect()->route('pesulap.index')->with(['success' => 'Data Berhasil Disimpan, email telah terkirim!']);
        } catch (Exception $e) {
            //Redirect jika gagal mengirim email
            return redirect()->route('pesulap.index')->with(['success' => 'Data Berhasil Disimpan, namun gagal mengirim email!']);
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
        //validate form
        $this->validate($request, [
            'Nama' => 'required',
            'Harga' => 'required|Integer',
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Deskripsi' => 'required'
        ]);

        $pesulap = Pesulap::find($id);
        // check if image is uploaded
        if ($request->hasFile('Image')) {

            //upload new image
            $image = $request->file('Image');
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
        }

        //redirect to index
        return redirect()->route('pesulap.index')->with(['success' => 'Data Berhasil Diubah!']);
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

        Storage::delete('public/pesulaps/' . $pesulap->Image);
        //delete pesulap
        $pesulap->delete();

        //redirect to index
        return redirect()->route('pesulap.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}