<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staf;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class StafController extends Controller
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
        // $staf->embedded_foto = $request->embedded_foto;
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
        return redirect()->route('staf.index')->withSuccess('Data staf berhasil ditambahkan..');
        // return redirect('tasks')->withSuccess('Task Created Successfully!');
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
        $staf = Staf::find($id);
        return view('AdminPanel.TentangKami.Staf.EditStaf', compact('staf'));
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
            'foto' => 'required|image|mimes:jpg,png,jpeg'
        ]);
        $staf = Staf::findOrFail($id);
        $staf->nama = $request->input('nama');
        $staf->email = $request->input('email');
        $staf->alamat = $request->input('alamat');
        $staf->jenis_kelamin = $request->input('jenis_kelamin');
        $staf->jabatan = $request->input('jabatan');
        $staf->no_hp = $request->input('no_hp');
        $file       = $request->file('foto');
        $fileName   = $file->getClientOriginalName();
        $request->file('foto')->move("assetAdmin/img/staf/", $fileName);
        $staf->foto = $fileName;
        $staf->biodata = $request->input('biodata');
        $staf->password = $request->input('password');
        // $tambah->save();

        // return redirect()->to('/');
        $staf->created_at = now();
        $staf->updated_at = now();
        $staf->save($request->all());
        return redirect()->route('staf.index')->withSuccess('Data berhasil diubah..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Staf::find($id);
        $delete->delete();
        return redirect()->route('staf.index')->withSuccess('Data berhasil dihapus..');
    }

    public function ListStaf()
    {
        return view('AdminPanel.TentangKami.Staf.ListStaf');
    }
}
