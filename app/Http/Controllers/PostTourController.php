<?php

namespace App\Http\Controllers;

use App\ImgPostTour;
use App\PostTour;
use App\Region;
use App\TourCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostTourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = PostTour::paginate(6);

        if ($request->ajax()) {
            return view('frontend.posttour.presult', compact('posts'));
        }
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
        $categories = TourCategory::all();
        $regions = Region::all();
        return view('frontend.posttour.create', compact(['posttour', 'categories', 'regions']));
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
            'category_id' => 'required',
            'region_id' => 'required',
            'facility' => '',
            'insurance' => '',
            'user_id' => '',
        ]);
        $posttour = PostTour::create($data);

        $this->addImages($posttour->id);

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
//        $this->authorize(PostTour::class, 'auth');
        if (auth()->id()==$posttour->user_id){
            $images = ImgPostTour::where('post_tour_id', $posttour->id)->get();
            $categories = TourCategory::all();
            $regions = Region::all();
            return view('frontend.posttour.edit', compact(['posttour','images', 'categories', 'regions']));
        }
        return back();
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
            'category_id' => 'required',
            'region_id' => 'required',
        ]);
        $posttour->update($data);
        $this->addImages($posttour->id);
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

    public function addImages($id)
    {
        $images = session('upload-images');
        session()->forget('upload-images');
        if ($images){
            foreach ($images as $image) {
                ImgPostTour::create([
                    'name' => $image,
                    'post_tour_id' => $id,
                ]);
            }
        }
    }

    public function delImage(Request $request){
        $id = $request->image_id;
        $img = ImgPostTour::find($id);
        $img->delete();
        $image_path = public_path().'/images/'.$img->name;
        File::delete($image_path);
        return 'success';
    }

}
