<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class ArtikelviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = Artikel::latest()
            ->join('kategoris', 'artikel.id_kategori', '=', 'kategoris.id_kategori')
            ->select('artikel.*', 'kategoris.nama_kategori')
            ->paginate(5);
        return view('perpustakaan.blog.content', compact('artikels'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($id)
    {
        $artikels = Artikel::find($id);
        $artikels->update(['views' => ($artikels->views + 1)]);
        return view('perpustakaan.blog.blog-detail.content', ['artikels' => $artikels]);
    }
}
