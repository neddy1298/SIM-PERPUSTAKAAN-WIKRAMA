<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use File;

class AkunController extends Controller
{
    public function index()
    {
        return view('admin.akun.index')->with('edit', '0');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.akun.edit', compact('user'))->with('edit', '1');
    }

    // public function show(Request $request,$id)
    // {

    // }
    public function update(Request $request, $id)
    {
        if ($request->hasFile('img_profile')) {
            $foto = $request->file('img_profile');
            $namaFile = \Carbon\Carbon::now()->timestamp . '_' . uniqid() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('asset/upload/users/'), $namaFile);
            $user = User::find($id);
            $image_url = $user['img_profile'];
            File::delete(public_path('asset/upload/users/') . $image_url);
            $user->update($request->all());
            $user->update(['img_profile' => $namaFile]);
            return redirect('admin/akun')->with('warning', 'User Profile berhasil di edit');
            // return json_encode($image_url);
        } else {
            $user = User::find($id);
            $user->update($request->all());
            return redirect('admin/akun')->with('warning', 'User Profile berhasil di edit');
        }

        // return json_encode($user);
    }
}
