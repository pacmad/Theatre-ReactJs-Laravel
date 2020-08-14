<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use App\Http\Resources\Movie as MovieResource; 

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MovieResource::collection(Movie::all());
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
       $request->validation([
	'title' => 'required',
	'description' => 'required',
	]);
	$movie=new Movie([
	'title' => $request->title,
	'description' => $request->description,
	]);
	$movie->save();
	return response()->json([
	'data'=>'Movie created'
	]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return new MovieResource(Movie::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validation([
	'title' => 'required',
	'description' => 'required',
	]);
	$movie= Movie::findOrFail($id);
	
	$movie->title => $request->title,
	$movie->description => $request->description,
	
	$movie->save();
	return response()->json([
	'data'=>'Movie updated'
	]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie = Movie::findOrFail($id);
	$movie->delete();

	return response()->json([
	'data' => 'Post deleted'
	]);
    }
}
