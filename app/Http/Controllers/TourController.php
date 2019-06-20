<?php

namespace App\Http\Controllers;

//use App\PostTour;
use App\PostTour;
use App\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Tour::all();
        return view('frontend.tour.index', ['posts' => $posts]);
    }

    public function list()
    {
        return view('frontend.tour.list');
    }

    public function grid()
    {
        return view('frontend.tour.grid');
    }

    public function map()
    {
        return view('frontend.tour.map');
    }

    public function singlepage()
    {
        return view('frontend.tour.singlepage');
    }

    public function singlegalery()
    {
        return view('frontend.tour.singlegalery');
    }

    public function cart()
    {
        return view('frontend.tour.cart');
    }

    public function booking()
    {
        return view('frontend.tour.booking');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.tour.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate
        $request->validate([
            'name' => 'required',
            'cost' => 'required',
            'discount' => 'required',
            'title' => 'required',
            'describe' => 'required',
            'service' => 'required',
            'rooms' => 'required',
            'term' => 'required',
        ]);

        $tour = PostTour::create([
            'name' => $request->name,
            'cost' => $request->cost,
            'discount' => $request->discount,
            'title' => $request->title,
            'describe' => $request->describe,
            'service' => $request->service,
            'rooms' => $request->rooms,
            'term' => $request->term,
            ]);
        return redirect('/tour/'.$tour->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        //
    }
}
