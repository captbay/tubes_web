<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Users;

class UserController extends Controller
{
    /**
    * index
    *
    * @return void
    */
    public function index()
    {
        //get posts
        $user = User::with(['users'])->paginate(5);
        //render view with posts
        return view('user.index', compact('user'));
    }

        /**
    * create
    *
    * @return void
    */
    public function create()
    {
        $user = User::get();
        return view('user.create',compact('user'));
    }

    /**
     * edit
     *
     * @param  Request $request
     * @return void
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'tgl_lahir' => 'required',
            'gender' => 'required',
            'telepon' => 'required|regex:/^(08)[0-9]{4,5}$/',
            'alamat' => 'required',
            ]);
            
            $user = User::where('id',$request->user)->first();

            if ($request->gender == 'Pria')
            $gender = 1;
            else
            $gender= 0;

        $user->update([
           'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $gender,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'image_user' => $request->image_user,
        ]);
        

        //redirect to index
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        User::where('id',$id)->delete();

        //redirect to index
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Dihapus!']);
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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'tgl_lahir' => 'required',
            'gender' => 'required',
            'telepon' => 'required|regex:/^(08)[0-9]{4,5}$/',
            'alamat' => 'required',
            ]);

            $user = User::where('id',$request->user)->first();
            
            if ($request->gender == 'Pria')
            $gender = 1;
            else
            $gender= 0;

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $gender,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
    ]);

    //Redirect jika berhasil mengirim email
    return redirect()->route('user.index')->with(['success' => 'Data Berhasil Disimpan!']);

    }
}
