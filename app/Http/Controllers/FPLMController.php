<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contentisu;

class FPLMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postDetail = Contentisu::all();
        $postinganmedia = Contentisu::all();
        return view('FPLM.index', compact('postDetail', 'postinganmedia'));
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
        //destroy
    }

    public function fplm03()
    {
        $postDetail = Contentisu::all();
        $postinganmedia = Contentisu::all();
        return view('FPLM.fplm03', compact('postDetail', 'postinganmedia'));
    }
    public function fplm04()
    {
        $postDetail = Contentisu::all();
        $postinganmedia = Contentisu::all();
        return view('FPLM.fplm04', compact('postDetail', 'postinganmedia'));
    }
    public function fplm10()
    {
        $postDetail = Contentisu::all();
        $postinganmedia = Contentisu::all();
        return view('FPLM.fplm10', compact('postDetail', 'postinganmedia'));
    }
}
