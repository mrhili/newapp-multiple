<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

use App\User;

use App\Ads;

use Mapper;

use App\Helpers\Common\Pics;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {
        //
        Mapper::map(53.381128999999990000, -1.470085000000040000);

        $activBuil = Ads::where('user_id', $id)->where('status', true)->paginate(9);

        if( Auth::check() ){

            $myId = Auth::id();

        }else{
            $myId = null;
        }

        

        return view('frontbuil.profile', compact('activBuil', 'id', 'myId'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ads($id)
    {

        $ads = Ads::where('user_id', $id)->where('status', true)->paginate(9);

        $myId = Auth::id();

        return view('frontbuil.ads', compact('ads', 'id', 'myId'));
    }

    public function adsNotChecked()
    {
        if( Auth::check() && (Auth::id() != $id)){
            return back();
        }else{
            $ads = Ads::where('user_id', $id)->where('status', true)->paginate(9);
            $myId = Auth::id();

            return view('frontbuil.ads', compact('ads', 'myId'));
        }

    }

    public function adsFavorite()
    {

            $ads = Ads::where('status', true)->paginate(9);

            $myId = Auth::id();

            return view('frontbuil.ads', compact('ads', 'myId'));




    }

    public function addInfo()
    {


            $user = User::find( Auth::id() );

            return view('frontbuil.addInfo', compact( 'user' ) );



    }

    public function addInfoStore(Request $request)
    {

            $user = User::find( Auth::id() );

            $user->name = $request->name;

            $user->phoneNumber = $request->name;

            $user->webSite = $request->name;

            $user->disc = $request->name;

            $user->lat = $request->lat;

            $user->lang = $request->lang;

            $user->save();

            return redirect()->route('profile', ['id' => $user->id] );

    }

    public function imgStore(Request $request)
    {


            $user = User::find( Auth::id() );

            if( $request->hasFile( 'img' ) ){

                if( $request->file( 'img' )->getClientOriginalName() !=  $user->img ){

                    $imagAndTime = Pics::storeCompareFile( 'img', 'profils', $user->img ,$request );

                    $user->img = $imagAndTime;

                    $user->save();

                    return redirect()->route('profile', ['id' => $user->id] );

                }else{

                    return back();

                }

            }else{

                return back();

            }


    }

    public function sensibleInfo(Request $request){

        $user = User::find( Auth::id() );


        return view('frontbuil.sensibleInfo', compact('user'));



    }

    public function sensibleInfoEmail(Request $request){

        $request->validate( [

            'email' => 'required|string|email|max:255|unique:users'

        ]);

        $user = User::find( Auth::id() );

        $user->email = $request->email;
        $user->save();


        return redirect()->route('profile', ['id' => $user->id] );



    }

    public function sensibleInfoPass(Request $request){

        $request->validate( [
            'password' => 'required|string|min:6|confirmed'

        ]);

        $user = User::find( Auth::id() );

        $user->password = bcrypt($request->password);
        $user->save();
        

        return redirect()->route('profile', ['id' => $user->id] );


    }


    public function data()
    {
        //
        return view('back.users.data');
    }

    public function datatable()
    {
        //
        return Datatables::of(User::query())


        ->editColumn('lang_lat', function($model){
            return link_to('#', 'action', ['class' => 'btn btn-success btn-circle btn-click', 'id' => $model->id ], null);
        })

        ->editColumn('del', function($model){
            return link_to_route('ads.destroy', 'delete', [ $model->id ], ['class' => 'btn btn-danger btn-circle']);
        })

        ->make(true);
    }


}
