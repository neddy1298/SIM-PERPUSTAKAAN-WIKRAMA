<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etube;
use DB;

class EtubeviewController extends Controller
{
    public function index()
    {
        $tubes = Etube::latest()
            ->join('kategoris', 'etube.id_kategori', '=', 'kategoris.id_kategori')
            ->select('etube.*', 'kategoris.nama_kategori')
            ->paginate(5);
        return view('perpustakaan.e-learning.video.content', compact('tubes'));
    }

    public function detail($id)
    {
        $tubes = Etube::find($id);
        $tubes->get();
        $tubes->update(['views' => ($tubes->views + 1)]);
        return view('perpustakaan.e-learning.video.detail.detail', compact('tubes'));


        // return json_encode($preftubes);
    }
}
