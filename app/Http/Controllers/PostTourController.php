<?php

namespace App\Http\Controllers;

use App\ImgPostTour;
use App\PostTour;
use App\PostTourContent;
use App\PriceType;
use App\Region;
use App\TourCategory;
use App\TourLang;
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
        $posts = PostTour::latest()->paginate(6);

        if ($request->ajax()) {
            return view('frontend.posttour.presult', ['posts' => $posts]);
        }
        return view('frontend.posttour.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id=0)
    {

        $posttour = new PostTour();
        $posttourcontent = new PostTourContent();
        $categories = TourCategory::all();
        $regions = Region::all();
        $languages = TourLang::all();
        $price_types = PriceType::all();
        $has_lang = [];

        foreach (PostTour::with('postTourContent')->get() as $item) {
            if ($item->id==$id){
                $posttour = PostTour::find($id);
                foreach ($item->postTourContent as $d){
                    $has_lang[] = $d->lang_id;
                }
            }
        }
        $images = ImgPostTour::where('post_tour_id', $posttour->id)->get();

        return view('frontend.posttour.create', compact(['posttour', 'posttourcontent', 'categories', 'regions', 'languages', 'price_types', 'has_lang', 'images']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $post_id = $request['post_id'];
        $post_tour = $request->validate([
            'price' => 'required|integer',
            'price_type_id' => 'required|integer',
            'sale' => 'required|integer',
            'rooms' => 'required|integer',
            'category_id' => 'required|integer',
            'region_id' => 'required|integer',
            'status_id' => '',
        ]);
        $post_tour_content = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'service' => 'required',
            'term' => 'required',
            'activity' => 'required',
            'lang_id' => 'required',
            'facility' => '',
            'insurance' => '',
        ]);

        if ($post_id == null){
            $post_tour['status_id'] = 1;
            $post = PostTour::create($post_tour);
            $post_id = $post->id;
        }
        //langni tekshirish
        if (in_array($post_tour_content['lang_id'], $this->hasLang($post_id))){
            return redirect('posttour/create/'.$post_id)->with('error', 'This language post already exist!')->withInput();
//            return 'bu til bor';
        }
        $post_tour_content['post_tour_id'] = $post_id;
        $post_tour_content['user_id'] = auth()->id();
        $post_tour_content['status_id'] = 1;
        PostTourContent::create($post_tour_content);
//        dd($post_tour_content);
        $this->addImages($post_id);
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
    public function edit(PostTour $posttour, $locale=null)
    {

        $images = ImgPostTour::where('post_tour_id', $posttour->id)->get();
        $categories = TourCategory::all();
        $regions = Region::all();
        $languages = TourLang::all();
        $price_types = PriceType::all();
        $has_lang = [0=>'disabled'];
        $posttourcontent = PostTourContent::where('post_tour_id', $posttour->id)->where('lang_id', $this->getLangId($locale))->first();
        if ($posttourcontent==null){
            return abort(404, 'Bu tildagi post mavjud emas');
        }
        return view('frontend.posttour.edit', compact(['posttour', 'posttourcontent', 'images', 'categories', 'regions', 'languages', 'price_types', 'has_lang']));
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
        dd($posttour);

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

    public function hasLang($id)
    {
        $has_lang = [];
        foreach (PostTour::with('postTourContent')->get() as $item) {
            if ($item->id==$id){
                foreach ($item->postTourContent as $d){
                    $has_lang[] = $d->lang_id;
                }
            }
        }
        return $has_lang;
    }

    public function getLangId($locale)
    {
        $lang_id = null;
        foreach (TourLang::all() as $item) {
            if ($locale==$item->locale){
                $lang_id = $item->id;
            }
        }
        return $lang_id;
    }

}
