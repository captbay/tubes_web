<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

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
        $user = User::latest()->get();
        //render view with posts
        return response()->json([
            'success' => true,
            'message' => 'List Data User',
            'data'    => $user
        ], 200);
    }

    public function show($id)
    {
        $user = User::find($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data User',
            'data'    => $user
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
        return view('user.create', compact('user'));
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
        $user = User::find($id);
        if (!$user) {
            //data pesulap not found
            return response()->json([
                'success' => false,
                'message' => 'User Not Found',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required',
            'tgl_lahir' => 'required',
            'gender' => 'required',
            'telepon' => 'required|regex:/^(0)8[1-9][0-9]{6,9}$/',
            'alamat' => 'required',
            'image_user' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // check if image is uploaded
        if ($request->hasFile('image_user') || $user) {

            //upload new image
            $image_user = $request->image_user;
            $image_user->storeAs('public/users', $image_user->hashName());

            //delete old image
            if ($image_user != "default.png") {
                Storage::delete('public/users/' . $user->image_user);
            }
            $password = bcrypt($request->password);

            $user->update([
                'name' => $request->name,
                'password' => $password,
                'tgl_lahir' => $request->tgl_lahir,
                'gender' => $request->gender,
                'telepon' => $request->telepon,
                'alamat' => $request->alamat,
                'image_user' => $image_user->hashName(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'User Updated',
                'data'    => $user
            ], 200);
        }

        return response()->json([
            'success' => false,
            'message' => 'User Not Found',
        ], 404);
    }

    /**
     * destroy
     *
     * @param  Request $request
     * @return void
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if ($user) {
            //delete image
            Storage::delete('public/users/' . $user->image_user);
            //delete pesulap
            $user->delete();

            return response()->json([
                'success' => true,
                'message' => 'User Deleted',
            ], 200);
        }


        //data pesulap not found
        return response()->json([
            'success' => false,
            'message' => 'User Not Found',
        ], 404);
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function register(Request $request)
    {
        //Validasi Formulir
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'tgl_lahir' => 'required',
            'gender' => 'required',
            'telepon' => 'required|regex:/^(0)8[1-9][0-9]{6,9}$/',
            'alamat' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::where('id', $request->user)->first();

        $password = bcrypt($request->password);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'image_user' => "default.png",

        ]);
        event(new Registered($user));

        //Redirect jika berhasil mengirim email
        if ($user) {
            return response()->json([
                'success' => true,
                'message' => 'User Created',
                'data'    => $user
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User Failed to Save',
                'data'    => $user
            ], 409);
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User Not Found',
            ], 404);
        }
        $token = $user->createToken('Authentication Token')->accessToken;

        if (Hash::check($request->password, $user->password)) {
            if (!$user->hasVerifiedEmail()) {
                return response([
                    'message' => 'Email Not Verified',
                    'data' => null
                ], 401);
            }
            return response()->json([
                'message' => 'Authenticated',
                'user' => $user,
                'token_type' => 'Bearer',
                'access_token' => $token
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Login Failed',
            ], 409);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'success' => true,
            'message' => 'Success Logout',
        ], 200);
    }
}