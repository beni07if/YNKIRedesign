<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staf;

class StafController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staf = Staf::all();
        return view('AdminPanel.TentangKami.Staf.Staf', compact('staf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel.TentangKami.Staf.CreateStaf');
    }

    public function master()
    {
        return view('Layouts.MasterAdminPanel');
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
        $staf = new Staf;
        $staf->nama = $request->nama;
        $staf->email = $request->email;
        $staf->alamat = $request->alamat;
        $staf->jenis_kelamin = $request->jenis_kelamin;
        $staf->jabatan = $request->jabatan;
        $staf->biodata = $request->biodata;
        $staf->no_hp = $request->no_hp;
        $file       = $request->file('foto');
        $fileName   = $file->getClientOriginalName();
        $request->file('foto')->move("assetAdmin/img/staf/", $fileName);
        $staf->foto = $fileName;
        // $tambah->save();

        // return redirect()->to('/');
        $staf->password =  bcrypt($request->password);
        $staf->created_at = now();
        $staf->updated_at = now();
        $staf->save();
        return redirect()->route('staf.index');
        // return back()->with('message', 'Mahasiswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staf = Staf::find($id);
        return view('TentangKami.DetailStaf', compact('staf'));
        // return $staf;
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

    public function ListStaf()
    {
        return view('AdminPanel.TentangKami.Staf.ListStaf');
    }
}
