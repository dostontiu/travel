<?php

namespace App\Http\Controllers;

use App;
use App\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function viewSwitch($name)
    {
        if ($name=='grid'){
            session()->put('viewswitch', 'grid');
        } else {
            session()->put('viewswitch', 'list');
        }
        return back();
    }

    public function lang($locale)
    {
        foreach (App\TourLang::all() as $item){
            if ($item->locale==$locale){
                session()->put('locale_id', $item->id);
            }
        }
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }


    public function singletour()
    {
        return view('frontend.singletour');
    }

    public function alltoursgrid()
    {
        return view('frontend.alltoursgrid');
    }

    public function alltourslist()
    {
        return view('frontend.alltourslist');
    }

    public function login1()
    {
        return view('frontend.login1');
    }

    public function cart()
        {
            return view('frontend.cart');
        }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function galery()
    {
        return view('frontend.galery');
    }

    public function generalpage()
    {
        return view('frontend.generalpage');
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
     * @param  \App\Travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function show(Travel $travel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function edit(Travel $travel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travel $travel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Travel $travel)
    {
        //
    }
}
