<?php

namespace App\Http\Controllers;

use App\Models\JacketModel;
use App\Http\Requests\StoreJacketModelRequest;
use App\Http\Requests\UpdateJacketModelRequest;

class JacketModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreJacketModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJacketModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JacketModel  $jacketModel
     * @return \Illuminate\Http\Response
     */
    public function show(JacketModel $jacketModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JacketModel  $jacketModel
     * @return \Illuminate\Http\Response
     */
    public function edit(JacketModel $jacketModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJacketModelRequest  $request
     * @param  \App\Models\JacketModel  $jacketModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJacketModelRequest $request, JacketModel $jacketModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JacketModel  $jacketModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(JacketModel $jacketModel)
    {
        //
    }
}
