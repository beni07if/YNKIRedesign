<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staf;
use App\Models\Postinganmedia;
use App\Models\Pesan;
use RealRashid\SweetAlert\SweetAlertServiceProvider;
use RealRashid\SweetAlert\Facades\Alert;

class WebViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $postDesc = Postinganmedia::orderBy('id', 'DESC', 'deskripsi')->limit(1)->get();
        $postingan = Postinganmedia::orderBy('id', 'DESC')->limit(2)->get();
        $postinganmore = Postinganmedia::orderBy('id', 'DESC')->limit(5)->get();
        return view('Index', compact('postingan', 'postinganmore'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function DashboardAdminPanel()
    {
        return view('AdminPanel.DashboardAdminPanel');
    }

    public function Staf()
    {
        $staf = Staf::all();
        return view('TentangKami.Staf.Staf', compact('staf'));
    }

    public function DetailStaf($id)
    {
        $staf = Staf::where('id', $id)->get();
        return view('TentangKami.Staf.DetailStaf', compact('staf'));
    }

    public function ListRilis()
    {
        $listRilis = Postinganmedia::orderBy('id', 'DESC')->where('kategori', 'Rilis')->get();
        return view('MediaDanPublikasi.Rilis.ListRilis', compact('listRilis'));
    }

    public function DetailRilis($id)
    {
        $postDetail = Postinganmedia::where('id', $id)->get();
        $postinganmedia = Postinganmedia::where('kategori', 'Rilis')->get();
        return view('MediaDanPublikasi.Rilis.DetailRilis', compact('postDetail', 'postinganmedia'));
        // return $postDetail;
    }

    public function ListOpini()
    {
        $listOpini = Postinganmedia::where('kategori', 'Opini')->get();
        return view('MediaDanPublikasi.Opini.ListOpini', compact('listOpini'));
    }

    public function DetailOpini($id)
    {
        $postDetail = Postinganmedia::where('id', $id)->get();
        $postinganmedia = Postinganmedia::where('kategori', 'Opini')->get();
        return view('MediaDanPublikasi.Opini.DetailOpini', compact('postDetail', 'postinganmedia'));
        // return $postDetail;
    }

    public function ListKabarDariLapangan()
    {
        $listKabarDariLapangan = Postinganmedia::where('kategori', 'Kabar Dari Lapangan')->get();
        return view('MediaDanPublikasi.KabarDariLapangan.ListKabarDariLapangan', compact('listKabarDariLapangan'));
    }

    public function DetailKabarDariLapangan($id)
    {
        $postDetail = Postinganmedia::where('id', $id)->get();
        $postinganmedia = Postinganmedia::where('kategori', 'Kabar Dari Lapangan')->get();
        return view('MediaDanPublikasi.KabarDariLapangan.DetailKabarDariLapangan', compact('postDetail', 'postinganmedia'));
        // return $postDetail;
    }

    public function ListProgramStrategi()
    {
        $ListProgramStrategi = Postinganmedia::where('kategori', 'KabarDariLapangan')->get();
        return view('Program.ProgramStrategi.ListProgramStrategi', compact('ListProgramStrategi'));
    }

    public function KontakKami()
    {
        return view('TentangKami.KontakKami.KontakKami');
    }

    public function KirimPesan(Request $request)
    {
        $pesan = new Pesan;
        $pesan->name = $request->name;
        $pesan->email = $request->email;
        $pesan->subject = $request->subject;
        $pesan->pesan = $request->pesan;
        $pesan->created_at = now();
        $pesan->updated_at = now();
        $pesan->save();
        return back()->withSuccess('Pesan terkirim..');
    }
}
