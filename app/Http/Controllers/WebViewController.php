<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staf;
use App\Models\Postinganmedia;

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
        $postingan = Postinganmedia::orderBy('id', 'DESC')->limit(1)->get();
        return view('Index', compact('postingan'));
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
        $listRilis = Postinganmedia::where('kategori', 'Rilis')->get();
        return view('MediaDanPublikasi.Rilis.ListRilis', compact('listRilis'));
    }

    public function DetailRilis($id)
    {
        $postDetail = Postinganmedia::where('id', $id)->get();
        $postinganmedia = Postinganmedia::where('kategori', 'Rilis')->get();
        return view('MediaDanPublikasi.Rilis.DetailRilis', compact('postDetail', 'postinganmedia'));
        // return $postDetail;
    }
}