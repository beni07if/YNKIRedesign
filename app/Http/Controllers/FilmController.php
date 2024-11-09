<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('MediaDanPublikasi.Rilis.Rilis');
        $film = Film::where('kategori', 'Film')->get();
        return view('AdminPanel.MediaDanPublikasi.Film.Film', compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel.MediaDanPublikasi.Film.CreateFilm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'required|video|max:100000'
        // ]);
        $post = new Film;
        $post->id_user = $request->id_user;
        $post->judul = $request->judul;
        $post->title = $request->title;
        $post->caption = $request->caption;
        $post->captions = $request->captions;
        $post->kategori = $request->kategori;
        $post->categories = $request->categories;
        $post->video = $request->video;
        $post->deskripsi = $request->deskripsi;
        $post->description = $request->description;
        // $file       = $request->file('video');
        // $fileName   = $file->getClientOriginalName();
        // $request->file('video')->move("assetAdmin/img/Film/", $fileName);
        // $post->video = $fileName;
        // $tambah->save();

        // return redirect()->to('/');
        $post->created_at = now();
        $post->updated_at = now();
        $post->save();
        return redirect()->route('film.index')->withSuccess('Data berhasil ditambahkan..');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = Film::find($id);
        return view('AdminPanel.MediaDanPublikasi.Film.DetailFilm', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = Film::find($id);
        return view('AdminPanel.MediaDanPublikasi.Film.EditFilm', compact('film'));
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
        // $this->validate($request, [
        //     'required|video|max:100000'
        // ]);
        $post = Film::findOrFail($id);
        $post->id_user = $request->input('id_user');
        $post->judul = $request->input('judul');
        $post->title = $request->input('title');
        $post->caption = $request->input('caption');
        $post->captions = $request->input('captions');
        $post->kategori = $request->input('kategori');
        $post->categories = $request->input('categories');
        $post->video = $request->input('video');
        $post->deskripsi = $request->input('deskripsi');
        $post->description = $request->input('description');
        // $file       = $request->file('video');
        // $fileName   = $file->getClientOriginalName();
        // $request->file('video')->move("assetAdmin/img/Film/", $fileName);
        // $post->video = $fileName;
        // $tambah->save();

        // return redirect()->to('/');
        $post->created_at = now();
        $post->updated_at = now();
        $post->save($request->all());
        // $post->save($request());
        return redirect()->route('film.index')->withSuccess('Data berhasil diubah..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Mencari resource berdasarkan ID
        $resource = Film::find($id);

        // Jika resource tidak ditemukan, kembalikan response 404
        if (!$resource) {
            return redirect()->route('film.index')->with('error', 'Resource not found');
        }

        // Menghapus resource
        $resource->delete();

        // Mengembalikan response sukses
        return redirect()->route('film.index')->with('success', 'Resource deleted successfully');
    }
}