<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class inputController extends Controller
{
    //
    public function index()
    {
        $bukus = DB::table('bukus')->get();

        return view('index',['bukus' => $bukus]);
    }
    
    //
    public function tambah(){

        return view('tambah');

    }
   
   //
    public function action(Request $request)
    {

    DB::table('bukus')->insert([
        'id' => $request->id,
        'judul' => $request->judul,
        'penerbit' => $request->penerbit,
        'tahunTerbit' => $request->tahunTerbit,
        'pengarang' => $request->pengarang
    ]);

    return redirect('/bukus');

    }







    //
    public function edit($id)
    {

    $buku = DB::table('bukus')->where('id',$id)->get();
    
    return view('edit',['bukus' => $buku]);
 
    }

    //
    public function update(Request $request)
    {

    DB::table('bukus')->where('id',$request->id)->update([
        'id' => $request->id,
        'judul' => $request->judul,
        'penerbit' => $request->penerbit,
        'tahunTerbit' => $request->tahunTerbit,
        'pengarang' => $request->pengarang
    ]);
    
    return redirect('/bukus');
    }

    //
    public function hapus($id)
    {

    DB::table('bukus')->where('id',$id)->delete();

    return redirect('/bukus');
    }
}
