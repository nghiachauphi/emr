<?php

namespace App\Http\Controllers;

use App\Models\EmrList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;

class EmrListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('emrlist.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //api-12
        $response = Http::accept('application/json;charset=utf-8')->withHeaders([
            'Authorization' => 'Bearer '.session('token')
        ])->post('http://103.162.31.19:1818/api/emr/'.$request->id_emr.'/create',
            $request->all()
        );

        dd(json_decode($response->body()));
        if ($response)
        {
            return view('emrlist.index');
        }

        return Response()->json(["message" => $response->body()]);
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
     * @param  \App\Models\EmrList  $amrList
     * @return \Illuminate\Http\Response
     */
    public function show(EmrList $amrList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmrList  $amrList
     * @return \Illuminate\Http\Response
     */
    public function edit(EmrList $amrList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmrList  $amrList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmrList $amrList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmrList  $amrList
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmrList $amrList)
    {
        //
    }
}
