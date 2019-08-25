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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PostTourController extends Controller
{

    public function index(Request $request)
    {
        $posts = PostTour::with('postTourContent')->latest()->paginate(6);
        $categories = TourCategory::where('parent_id', null)->get();
        $regions = Region::where('parent_id', null)->get();
        if ($request->ajax()) {
            return view('frontend.posttour.presult', ['posts' => $posts]);
        }
        return view('frontend.posttour.index', ['posts'=>$posts, 'categories'=>$categories, 'regions'=>$regions]);
    }


    public function show(PostTour $posttour)
    {
        if ($posttour->postTourContent==null){
            return abort(404, 'Bu tildagi post mavjud emas lekin boshqa tillarda bolishi mumkin');
        }
        return view('frontend.posttour.show', compact('posttour'));
    }


    public function create($locale, $id=null)
    {
        if (!in_array($locale, $this->getLocales())){
            abort(404, 'There is not '. $locale . ' language');
        }
        $images = null;
        $has_lang = [];
        $posttour = new PostTour();
        $posttourcontent = new PostTourContent();
        $categories = TourCategory::all();
        $regions = Region::all();
        $languages = TourLang::all();
        $price_types = PriceType::all();
        if ($id != null){
            $posttour = PostTour::find($id);
            if ($posttour == null){
                abort(404, 'There is not any information for id='.$id);
            }
            if (in_array(TourLang::where('locale', $locale)->get('id')->first()->id, $this->hasLang($id))){
                abort(404, 'You cannot create for this language because it has already created!');
            }
            $images = ImgPostTour::where('post_tour_id', $posttour->id)->get();
            $has_lang = $this->hasLang($id);
        }
        return view('frontend.posttour.create', compact(['posttour', 'posttourcontent', 'categories', 'regions', 'languages', 'price_types', 'has_lang', 'images', 'locale']));
    }


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
            $post_tour['user_id'] = auth()->id();
            $post_tour['status_id'] = 1;
            $post = PostTour::create($post_tour);
            $post_id = $post->id;
        } else {
            if (in_array($post_tour_content['lang_id'], $this->hasLang($post_id))){
                return redirect()->back()->with('error', 'This language post already exist!');
            }
        }
        $post_tour_content['post_tour_id'] = $post_id;
        $post_tour_content['user_id'] = auth()->id();
        $post_tour_content['status_id'] = 1;
        PostTourContent::create($post_tour_content);
        $this->addImages($post_id);
        return redirect(route('posttour.index'))->with('success', 'Your post added successfuly!');
    }


    public function edit(PostTour $posttour, $locale)
    {
        if (!in_array($locale, $this->getLocales())){
            abort(404, 'There is not '. $locale . ' language');
        }
        $categories = TourCategory::all();
        $regions = Region::all();
        $languages = TourLang::all();
        $price_types = PriceType::all();
        $has_lang = $this->hasLang($posttour->id);
        $posttourcontent = PostTourContent::where('post_tour_id', $posttour->id)->where('lang_id', $this->getLangId($locale))->first();
//        dd($posttourcontent);
        if ($posttourcontent==null){
            return abort(404, 'There is no post in this language');
        }
        return view('frontend.posttour.edit', compact(['posttour', 'posttourcontent', 'categories', 'regions', 'languages', 'price_types', 'has_lang', 'locale']));
    }


    public function update(PostTour $posttour)
    {
        $post_tour = request()->validate([
            'price' => 'required|integer',
            'price_type_id' => 'required|integer',
            'sale' => 'required|integer',
            'rooms' => 'required|integer',
            'category_id' => 'required|integer',
            'region_id' => 'required|integer',
        ]);
        $post_tour['status_id'] = $posttour->status_id;
        $posttour->update($post_tour);

        $post_tour_content = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'service' => 'required',
            'term' => 'required',
            'activity' => 'required',
            'lang_id' => '',
            'facility' => '',
            'insurance' => '',
        ]);
        $post_tour_content['user_id'] = auth()->id();
        $posttourcontent = PostTourContent::where('post_tour_id', $posttour->id)->where('lang_id', $post_tour_content['lang_id'])->first();
        $posttourcontent->update($post_tour_content);
        $this->addImages($posttour->id);

        return redirect(route('posttour.index'))->with('success', 'Your post updated successfuly!');
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
        foreach (PostTourContent::where('post_tour_id', $id)->get('lang_id') as $langs) {
            $has_lang[$langs->lang_id] = $langs->lang_id;
//                $has_lang = PostTourContent::where('post_tour_id', $id)->get('lang_id')->toArray();
        }
        return array_unique($has_lang);
    }

    public function getLocales()
    {
        $langs = TourLang::all();
        foreach ($langs as $lang) {
            $locale[$lang->id] = $lang->locale;
        }
        return $locale;
    }

    public function getLangId($locale)
    {
        $lang_id = session()->get('locale_id');
        foreach (TourLang::all() as $item) {
            if ($locale==$item->locale){
                $lang_id = $item->id;
            }
        }
        return $lang_id;
    }

}
