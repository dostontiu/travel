<?php

namespace App\Http\Controllers;

use App\Account;
use App\PostTour;
use App\Region;
use App\TourCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::all();
        return view('frontend.account.index', ['accounts' => $accounts]);
    }

    public function show($company_name)
    {
        $account = Account::where('company_name', $company_name)->get()->first();
        $categories = TourCategory::where('parent_id', null)->get();
        $regions = Region::where('parent_id', null)->get();
        if ($account==null){
            abort(404);
        }
//        dd($account->user->email);

//        $posts = PostTour::where('price_type_id', $account->user_id);
        $posts = PostTour::where('user_id', $account->user_id)->latest()->paginate(6);
        if (request()->ajax()) {
            return view('frontend.posttour.presult', ['posts' => $posts]);
        }

        return view('frontend.account.show', compact('account', 'categories', 'regions', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()==false){
            redirect('frontend.login');
        }
        return view('frontend.account.create');
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
            'company_name' => 'required|min:5|',
            'address' => 'required|min:20|max:200',
            'description' => 'required|min:30',
            'telephone' => 'required|min:7|max:20',
            'emails' => 'required|min:5|max:50',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'messenger' => 'required|min:5',
            'user_id' => 'unique',
        ]);

        $logo = $request->file('logo');
        $banner = $request->file('banner');

        $logo_name = rand() . '.' . $logo->getClientOriginalExtension();
        $banner_name = rand() . '.' . $banner->getClientOriginalExtension();
        $logo->move(public_path('images'), $logo_name);
        $banner->move(public_path('images'), $banner_name);

        $account = new Account();
        $account->address = $request->address;
        $account->company_name = $request->company_name;
        $account->description = $request->description;
        $account->telephone = $request->telephone;
        $account->emails = $request->emails;
        $account->logo = $logo_name;  /*esdan chiqmasin*/
        $account->banner = $banner_name;
        $account->messenger = $request->messenger;
        $account->work_time_start = $request->work_time_start;
        $account->work_time_end = $request->work_time_end;
        $account->user_id = auth()->id();
        $account->save();
        return redirect('/account/'.$account->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $account = Account::find($id);
        return view('frontend.account.edit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validate
        $logo = $request->file('logo');
        $logo_name = $request->hidden_logo;
        $banner = $request->file('banner');
        $banner_name = $request->hidden_banner;

        $request->validate([
            'company_name' => 'required|min:5|',
            'address' => 'required|min:20|max:200',
            'description' => 'required|min:30',
            'telephone' => 'required|min:7|max:20',
            'emails' => 'required|min:5|max:50',
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048|',
            'banner' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'messenger' => 'required|min:5',
            'user_id' => 'unique',
        ]);

        if ($logo!=''){
            $logo_name = rand() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('images'), $logo_name);
        }

        if ($banner!=''){
            $banner_name = rand() . '.' . $banner->getClientOriginalExtension();
            $banner->move(public_path('images'), $banner_name);
        }

        $account = Account::find($id);
        $account->company_name = $request->get('company_name');
        $account->address = $request->get('address');
        $account->description = $request->get('description');
        $account->telephone = $request->get('telephone');
        $account->emails = $request->get('emails');
        $account->logo = $logo_name;
        $account->banner = $banner_name;
        $account->messenger = $request->get('messenger');
        $account->work_time_start = $request->get('work_time_start');
        $account->work_time_end = $request->get('work_time_end');
//        $account->user_id = $request->get('user_id');
        $account->save();
        return redirect('/account/'.$id)->with('success', 'Successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
