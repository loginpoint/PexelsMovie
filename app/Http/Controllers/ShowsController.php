<?php

namespace App\Http\Controllers;

use App\Models\shows;
use Illuminate\Http\Request;

class ShowsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
       $discover = shows::get('popular','movie',1);
       $upcoming = shows::get('upcoming','movie',1);
       $populartv = shows::get('popular','tv',1);
       $genre    = shows::genre('movie');
       $genreTv    = shows::genre('tv');
       return view('Pages.Discover',['discover'=>$discover,'genre'=>$genre,'genreTv'=>$genreTv,'upcoming'=>$upcoming,'populartv'=>$populartv]);
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
    public function display($type = 'movie',$sort = 'popular',$page = 1) {
        $display = shows::get($sort,$type,$page);
        $genre    = shows::genre('movie');
        $genreTv    = shows::genre('tv');
        $max = shows::page_num($type,$sort);
        return view('Pages.display',['display'=>$display,'genre'=>$genre,'genreTv'=>$genreTv,'type'=>$type,'sort'=>$sort,'page'=>$page,'max'=>$max]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\shows  $shows
     * @return \Illuminate\Http\Response
     */
    public function show(shows $shows)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\shows  $shows
     * @return \Illuminate\Http\Response
     */
    public function edit(shows $shows)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\shows  $shows
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, shows $shows)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\shows  $shows
     * @return \Illuminate\Http\Response
     */
    public function destroy(shows $shows)
    {
        //
    }
}
