<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postinganmedia;
use App\Http\Controllers\RilisController;

class RilisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('MediaDanPublikasi.Rilis.Rilis');
        $postinganmedia = Postinganmedia::all();
        return view('AdminPanel.MediaDanPublikasi.Rilis.Rilis', compact('postinganmedia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel.MediaDanPublikasi.Rilis.CreateRilis');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|image|mimes:jpg,png,jpeg'
        ]);
        $post = new Postinganmedia;
        $post->id_user = $request->id_user;
        $post->judul = $request->judul;
        $post->title = $request->title;
        $post->caption = $request->caption;
        $post->captions = $request->captions;
        $post->kategori = $request->kategori;
        $post->categories = $request->categories;
        $post->deskripsi = $request->deskripsi;
        $post->description = $request->description;
        $file       = $request->file('foto');
        $fileName   = $file->getClientOriginalName();
        $request->file('foto')->move("assetAdmin/img/PostinganMedia/", $fileName);
        $post->foto = $fileName;
        // $tambah->save();

        // return redirect()->to('/');
        $post->created_at = now();
        $post->updated_at = now();
        $post->save();
        return redirect()->route('rilis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ListRilis()
    {
        return view('AdminPanel.MediaDanPublikasi.Rilis.ListRilis');
    }
}
