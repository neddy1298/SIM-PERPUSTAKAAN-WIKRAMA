<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Etube;
use App\Ebook;
use App\Artikel;
use File;

class UsersController extends Controller
{
    public function index()
    {
        $artikels = Artikel::get();
        $tubes = Etube::get();
        $books = Ebook::get();
        $users = User::latest()->paginate(5);
        return view('admin.users.index', compact('users', 'books', 'tubes', 'artikels'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'img_profile' => 'required|image|max:2048'
        ]);
        $foto = $request->file('img_profile');
        $namaFile = \Carbon\Carbon::now()->timestamp . '_' . uniqid() . '.' . $foto->getClientOriginalExtension();
        $foto->move(public_path('asset/upload/users/'), $namaFile);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'title' => $request->title,
            'position' => $request->position,
            'address' => $request->address,
            'about_me' => $request->about_me,
            'img_profile' => $namaFile,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'github' => $request->github,
            'password' => $request->password,
        ]);
        // User::create($request->all());
        return redirect('admin/users')->with('sukses', 'Berhasil menambah user');
    }

    public function edit(Request $request, $id)
    {
        $user = User::find($id);

        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // if ($request->hasFile('img_profile')) {
        //     $user = User::find($id);
        // $foto = $request->file('img_profile');
        // $namaFile = \Carbon\Carbon::now()->timestamp . '_' . uniqid() . '.' . $foto->getClientOriginalExtension();
        // $foto->move(public_path('asset/upload/users/'),$namaFile);
        // $image_url = $user['img_profile'];
        // File::delete(public_path('asset/upload/ebook/') . $image_url);
        // $user->update([
        //     'name'         => $request->name,
        //     'username'     => $request->username,
        //     'email'        => $request->email,
        //     'title'        => $request->title,
        //     'position'     => $request->position,
        //     'address'      => $request->address,
        //     'about_me'     => $request->about_me,
        //     'img_profile'  => $namaFile,
        //     'instagram'    => $request->instagram,
        //     'twitter,'     => $request->twitter,
        //     'github,'      => $request->github,
        //     'password,'    => $request->password,
        // ]);
        // return redirect('admin/users')->with('warning','Berhasil mengubah data');
        // }else{
        //     $user = User::find($id);
        //     $user->update($request->all());
        //     return redirect('admin/users')->with('warning','Berhasil mengubah data');
        // }
        if ($request->hasFile('img_profile')) {
            $foto = $request->file('img_profile');
            $namaFile = \Carbon\Carbon::now()->timestamp . '_' . uniqid() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('asset/upload/users/'), $namaFile);
            $user = User::find($id);
            $image_url = $user['img_profile'];
            File::delete(public_path('asset/upload/users/') . $image_url);
            $user->update($request->all());
            $user->update(['img_profile' => $namaFile]);
            return redirect('admin/users')->with('warning', 'Berhasil mengubah data');
            // return json_encode($image_url);
        } else {
            $user = User::find($id);
            $user->update($request->all());
            return redirect('admin/users')->with('warning', 'Berhasil mengubah data');
        }
    }

    public function delete(Request $request, $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/users')->with('danger', 'Data berhasil dihapus');

    }

}
