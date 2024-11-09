<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postinganmedia;
use App\Http\Controllers\RilisController;
use RealRashid\SweetAlert\SweetAlertServiceProvider;
use RealRashid\SweetAlert\Facades\Alert;

class RilisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('MediaDanPublikasi.Rilis.Rilis');
        $postinganmedia = Postinganmedia::where('kategori', 'Rilis')->get();
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
        return redirect()->route('rilis.index')->withSuccess('Data berhasil ditambahkan..');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postinganmedia = Postinganmedia::find($id);
        return view('AdminPanel.MediaDanPublikasi.Rilis.DetailRilis', compact('postinganmedia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postinganmedia = Postinganmedia::find($id);
        return view('AdminPanel.MediaDanPublikasi.Rilis.EditRilis', compact('postinganmedia'));
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
        $this->validate($request, [
            'foto' => '|image|mimes:jpg,png,jpeg'
        ]);
        $post = Postinganmedia::findOrFail($id);
        $post->id_user = $request->input('id_user');
        $post->judul = $request->input('judul');
        $post->title = $request->input('title');
        $post->caption = $request->input('caption');
        $post->captions = $request->input('captions');
        $post->kategori = $request->input('kategori');
        $post->deskripsi = $request->input('deskripsi');
        $post->description = $request->input('description');
        $file       = $request->file('foto');
        $fileName   = $file->getClientOriginalName();
        $request->file('foto')->move("assetAdmin/img/PostinganMedia/", $fileName);
        $post->foto = $fileName;
        // $tambah->save();

        // return redirect()->to('/');
        $post->created_at = now();
        $post->updated_at = now();
        $post->save($request->all());
        // $post->save($request());
        return redirect()->route('rilis.index')->withSuccess('Data berhasil diubah..');
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
        $resource = Postinganmedia::find($id);

        // Jika resource tidak ditemukan, kembalikan response 404
        if (!$resource) {
            return redirect()->route('rilis.index')->with('error', 'Resource not found');
        }

        // Menghapus resource
        $resource->delete();

        // Mengembalikan response sukses
        return redirect()->route('rilis.index')->with('success', 'Resource deleted successfully');
    }

    public function ListRilis()
    {
        return view('AdminPanel.MediaDanPublikasi.Rilis.ListRilis');
    }

    public function DetailRilis($id)
    {
        $postinganmedia = Postinganmedia::find($id);
        return view('AdminPanel.MediaDanPublikasi.Rilis.DetailRilis', compact('postinganmedia'));
    }

    public function PostinganYNKI()
    {
        $postinganmedia = Postinganmedia::orderBy('id', 'DESC')->get();
        return view('AdminPanel.MediaDanPublikasi.Rilis.PostinganYNKI', compact('postinganmedia'));
    }

    public function Profil()
    {
        return view('AdminPanel.Profil.Index');
    }
}