<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MitraKerja;

class MitraKerjaController extends Controller
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
        $mitrakerja = MitraKerja::all();
        return view('AdminPanel/TentangKami/MitraKerja/index', compact('mitrakerja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel/TentangKami/MitraKerja/create');
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
            'logo_mitra' => 'required|image|mimes:jpg,png,jpeg'
        ]);
        $post = new MitraKerja;
        $post->nama_mitra = $request->nama_mitra;
        $file       = $request->file('logo_mitra');
        $fileName   = $file->getClientOriginalName();
        $request->file('logo_mitra')->move("assetAdmin/img/MitraKerja/", $fileName);
        $post->logo_mitra = $fileName;
        $post->waktu_mulai = $request->waktu_mulai;
        $post->waktu_selesai = $request->waktu_selesai;
        $post->email = $request->email;
        $post->bidang_teknis = $request->bidang_teknis;
        // $tambah->save();

        // return redirect()->to('/');
        $post->created_at = now();
        $post->updated_at = now();
        $post->save();
        return redirect()->route('mitra.index')->withSuccess('Data berhasil ditambahkan..');
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
        $mitrakerja = MitraKerja::find($id);
        return view('AdminPanel.TentangKami.MitraKerja.edit', compact('mitrakerja'));
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
            'logo_mitra' => 'required|image|mimes:jpg,png,jpeg'
        ]);
        $post = MitraKerja::findOrFail($id);
        $post->nama_mitra = $request->input('nama_mitra');
        $file       = $request->file('logo_mitra');
        $fileName   = $file->getClientOriginalName();
        $request->file('logo_mitra')->move("assetAdmin/img/MitraKerja/", $fileName);
        $post->logo_mitra = $fileName;
        $post->waktu_mulai = $request->input('waktu_mulai');
        $post->waktu_selesai = $request->input('waktu_selesai');
        $post->email = $request->input('email');
        $post->bidang_teknis = $request->input('bidang_teknis');
        // $tambah->save();

        // return redirect()->to('/');
        $post->created_at = now();
        $post->updated_at = now();
        $post->save($request->all());
        return redirect()->route('mitra.index')->withSuccess('Data berhasil diubah..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    // public function destroy(Request $request, $id)
    {
        // MitraKerja::where('id', $id)->delete();
        $delete = MitraKerja::find($id);
        $delete->delete();
        return redirect()->route('mitra.index')->withSuccess('Data berhasil dihapus..');
    }
}
