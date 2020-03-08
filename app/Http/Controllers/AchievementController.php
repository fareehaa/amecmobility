<?php

namespace App\Http\Controllers;

use App\Achiement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.achievement.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.achievement.add');
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
     * @param  \App\Achiement  $achiement
     * @return \Illuminate\Http\Response
     */
    public function show(Achiement $achiement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Achiement  $achiement
     * @return \Illuminate\Http\Response
     */
    public function edit(Achiement $achiement)
    {
        return view('admin.achievement.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Achiement  $achiement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achiement $achiement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Achiement  $achiement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achiement $achiement)
    {
        //
    }
}
