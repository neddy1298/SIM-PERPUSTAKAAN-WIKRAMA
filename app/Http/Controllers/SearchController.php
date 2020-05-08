<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class SearchController extends Controller
{


    public function search(Request $request)
    {

        $search = $request->judul;

        $ebook_s = DB::table('ebook')
            ->where('judul', 'like', "%" . $search . "%")
            ->paginate();
        $etube_s = DB::table('etube')
            ->where('judul', 'like', "%" . $search . "%")
            ->paginate();
        $artikel_s = DB::table('artikel')
            ->where('judul', 'like', "%" . $search . "%")
            ->paginate();


        return view('perpustakaan.search.content',
            ['ebook_s' => $ebook_s, 'etube_s' => $etube_s, 'artikel_s' => $artikel_s]);
    }

    public function search_ebook(Request $request)
    {

        $search = $request->judul;

        $ebook_s = DB::table('ebook')
            ->where('judul', 'like', "%" . $search . "%")
            ->paginate();


        return view('perpustakaan.search.content',
            ['ebook_s' => $ebook_s]);
    }
}
