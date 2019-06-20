<?php

namespace App\Http\Controllers;

use App\ImgPostTour;
use App\PostTour;
use Illuminate\Http\Request;

class PostTourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = PostTour::paginate(5);
        return view('frontend.posttour.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posttour = new PostTour();
        return view('frontend.posttour.create', compact('posttour'));
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
        $request['user_id'] = auth()->id();
        $data = $request->validate([
            'name' => 'required',
            'cost' => 'required',
            'discount' => 'required',
            'title' => 'required',
            'description' => 'required',
            'service' => 'required',
            'rooms' => 'required',
            'term' => 'required',
            'activity' => 'required',
            'facility' => '',
            'insurance' => '',
            'user_id' => '',
        ]);
        $posttour = PostTour::create($data);

        $images = session('upload-images');
        session()->forget('upload-images');
        if ($images){
            foreach ($images as $image) {
                ImgPostTour::create([
                    'name' => $image,
                    'post_tour_id' => $posttour->id,
                ]);
            }
        }
        return redirect('posttour')->with('success', 'Your post added successfuly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PostTour  $postTour
     * @return \Illuminate\Http\Response
     */
    public function show(PostTour $posttour)
    {
        $images = ImgPostTour::where('post_tour_id', $posttour->id)->get();
        return view('frontend.posttour.show', compact('posttour', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PostTour  $postTour
     * @return \Illuminate\Http\Response
     */
    public function edit(PostTour $posttour)
    {
        $images = ImgPostTour::where('post_tour_id', $posttour->id)->get();
        return view('frontend.posttour.edit', compact(['posttour','images']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostTour  $postTour
     * @return \Illuminate\Http\Response
     */
    public function update(PostTour $posttour)
    {
        $data = request()->validate([
            'name' => 'required',
            'cost' => 'required',
            'discount' => 'required',
            'title' => 'required',
            'description' => 'required',
            'service' => 'required',
            'rooms' => 'required',
            'term' => 'required',
            'activity' => 'required',
        ]);
        $posttour->update($data);
        return redirect('/posttour/'.$posttour->id)->with('success', 'Your post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostTour  $postTour
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostTour $postTour)
    {
        //
    }



    public function uploadImages(Request $request){

        if (session('upload-images')==null){
            session()->put('upload-images', []);
        }

        $image = $request->file('file');
        if ($image){
            $imageName = rand().'.'.$image->getClientOriginalExtension();
            session()->push('upload-images', $imageName);
            $image->move('images', $imageName);
        }
    }

    public function delImage($id){
        $img = new ImgPostTour();
        $img = ImgPostTour::find($id);
        $img->delete();
//        ImgPostTour::find($id)->delete();
        return response()->json([
            'success' => 'Deleted successfully'
        ]);
    }

    public function dlt(){
        return view('frontend.posttour.show')->response()->json([
            'success' => 'Deleted successfully'
        ]);
    }

}
