<?php

namespace App\Http\Controllers;

use App\PageBlock as BlockInPage;
use App\ContentBlocks as Block;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PageBlockController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());


        //check is request valid
        $validator = Validator::make($request->all(), [
            'page' => 'required|integer',
            'type' => 'required|integer',
        ]);
        // return back bad request
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        //create new block
        $block = new Block();
        $block->type_id = $request->type;
        //save block
        $block->save();
        //create bolck in page
        $blockInPage = new BlockInPage();
        $blockInPage->page_id = $request->page;
        $blockInPage->block_id = $block->id;
        //connect block to page
        $blockInPage->save();
        //redirect back if OK, with a msg
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PageBlock  $pageBlock
     * @return \Illuminate\Http\Response
     */
    public function show(PageBlock $pageBlock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PageBlock  $pageBlock
     * @return \Illuminate\Http\Response
     */
    public function edit(PageBlock $pageBlock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PageBlock  $pageBlock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PageBlock $pageBlock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PageBlock  $pageBlock
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageBlock $pageBlock)
    {
        //
    }
}
