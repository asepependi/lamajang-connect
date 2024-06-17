<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $req)
    {
        DB::beginTransaction();
        try {
            $validator = \Validator::make(
                $req->all(),
                [
                    'name' => 'required|unique:users,name',
                    'password' => 'required|min:8'
                ],
                [
                    'name.required' => 'Silahkan Masukkan Nama !',
                    'name.unique' => 'Nama sudah tersedia !',
                    'password.required' => 'Silahkan Masukkan Password !',
                    'password.min' => 'Password minimal 8 karakter !'
                ]
            );

            if ($validator->fails()) {
                $messages = $validator->getMessageBag();
                return redirect()->back()->with('error', $messages->first())->withInput();
            }

            DB::commit();
            $user = new User();
            $user->name = $req->name;
            $user->password = bcrypt($req->passsword);
            $user->save();

            return redirect()->route('login')->with('success', 'Data berhasil disimpan !');
        } catch (\Exception $err) {
            DB::rollback();
            $messages = $err->getMessage();
            return redirect()->back()->with('error', $messages);
        }
    }
}
