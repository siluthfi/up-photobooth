<?php

namespace App\Http\Controllers;

use App\Models\Backend\LogHistory;
use App\Http\Requests\StoreLogHistoryRequest;
use App\Http\Requests\UpdateLogHistoryRequest;

class LogHistoryController extends Controller
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
     * @param  \App\Http\Requests\StoreLogHistoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLogHistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Backend\LogHistory  $logHistory
     * @return \Illuminate\Http\Response
     */
    public function show(LogHistory $logHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backend\LogHistory  $logHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(LogHistory $logHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLogHistoryRequest  $request
     * @param  \App\Models\Backend\LogHistory  $logHistory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLogHistoryRequest $request, LogHistory $logHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backend\LogHistory  $logHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(LogHistory $logHistory)
    {
        //
    }
}
