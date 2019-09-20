<?php

namespace App\Http\Controllers;

use App\ContentBlocks;
use Illuminate\Http\Request;

class ContentBlocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $block = ContentBlocks::all();
        echo $block;
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
     * @param  \App\ContentBlocks  $contentBlocks
     * @return \Illuminate\Http\Response
     */
    public function show(ContentBlocks $contentBlocks, $id)
    {
        //
        $block = ContentBlocks::find($id)->type;
        echo $block;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContentBlocks  $contentBlocks
     * @return \Illuminate\Http\Response
     */
    public function edit(ContentBlocks $contentBlocks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContentBlocks  $contentBlocks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContentBlocks $contentBlocks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContentBlocks  $contentBlocks
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContentBlocks $contentBlocks)
    {
        //
    }
}
