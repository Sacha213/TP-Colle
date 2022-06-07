<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentairesRequest;
use App\Http\Requests\UpdateCommentairesRequest;
use App\Models\Commentaires;

class CommentairesController extends Controller
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
     * @param  \App\Http\Requests\StoreCommentairesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentairesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commentaires  $commentaires
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaires $commentaires)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commentaires  $commentaires
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaires $commentaires)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentairesRequest  $request
     * @param  \App\Models\Commentaires  $commentaires
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentairesRequest $request, Commentaires $commentaires)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commentaires  $commentaires
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaires $commentaires)
    {
        //
    }
}
