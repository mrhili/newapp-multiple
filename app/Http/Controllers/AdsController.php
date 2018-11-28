<?php

//You should store variables to call them 

namespace App\Http\Controllers;

use App\Ads;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PicRequest;
use Yajra\Datatables\Datatables;
use \stdClass;
use Auth;
use App\Pic;
use CommonPics;
use App\Slider;
class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $latests = Ads::paginate( 9 );

        $mosts = Ads::orderBy('vue', 'DESC')->paginate( 9 );

        $citiesNode = Category::where('slug', 'cities')->first();

        $cities = Category::descendantsOf( $citiesNode )->toTree()->pluck('name','id')->toArray();

        $methodeTypesId = Category::where('slug', 'methode-types')->first()->id;

        $landTypesId = Category::where('slug', 'land-types')->first()->id;

        $roofTypesId = Category::where('slug', 'roof-types')->first()->id;

        $realEstateTypesId = Category::where('slug', 'real-estate-types')->first()->id;

        $landId = Category::where('slug', 'land')->first()->id;

        $sliders = Slider::where('active', true)->get();

        return view('front.welcome',compact('businessTypes', 'realEstateTypes', 'latests', 'mosts', 'cities', 'methodeTypesId', 'landTypesId', 'roofTypesId', 'realEstateTypesId','landId', 'sliders'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
    public function store(PicRequest $request)
    {
        //
        $landId = \App\Category::where('slug', 'land')->first()->id;

        $array = [
        'user_id'=> Auth::id(),
        'title' => $request->title,
        'price' => $request->price,
        'disc' => $request->disc,
        'size_land' => $request->size_land,
        'cat' => $request->cat,
        'cat_business' => $request->cat_business,
        'position' => $request->positions,
            ];



        if( $request->cat == $landId ){

            $array['cat_land'] = $request->cat_land;

        }else{
            $array = array_except( $request->toarray(), ['cat_land','imgs']);
            $array['user_id'] = Auth::id();
            $array['position'] = $request->positions;
        }

        if( Auth::user()->role >= 2 ){

            $array['status'] = 1;


        }else{

            $array['status'] = 0;

        }


        $ads = Ads::create($array);

        foreach($request->imgs as $num => $img){

            $imgName = CommonPics::storeFile($img, 'ads');

            Pic::create([
                'ads_id' => $ads->id,
                'name' => $imgName
                ]);

        }

        return redirect()->route('ads.show', $ads->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function show(Ads $ads, $id)
    {
        //
        $ads = Ads::find($id);

        return view('front.adsShow', compact('ads'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function edit(Ads $ads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function update(PicRequest $request, $id)
    {
        //





        $ads = Ads::find( $id );


        $landId = \App\Category::where('slug', 'land')->first()->id;

        $array = [
        'title' => $request->title,
        'price' => $request->price,
        'disc' => $request->disc,
        'size_land' => $request->size_land,
        'cat' => $request->cat,
        'cat_business' => $request->cat_business,
        'position' => $request->positions,
            ];



        if( $request->cat == $landId ){

            if( $ads->cat != $landId ){

                $ads::update([

                        'floor_number' => null,
                        'rooms' => null,
                        'apart_number' => null,
                        'bathrooms' => null,
                        'kitchens' => null,
                        'livingrooms' => null,
                        'garages' => null,
                        'cat_roof' => null,

                    ]);

            }

            $array['cat_land'] = $request->cat_land;


        }else{

            if( $ads->cat == $landId ){
                $ads::update([

                        'cat_land' => null,

                    ]);

            }



            $array = array_except( $request->toarray(), ['cat_land','imgs']);
            $array['position'] = $request->positions;
        }


        $ads::update($array);

        foreach($request->imgs as $num => $img){

            $imgName = CommonPics::storeFile($img, 'ads');

            Pic::create([
                'ads_id' => $ads->id,
                'name' => $imgName
                ]);

        }

        return redirect()->route('ads.show', $ads->id);











//

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ads $ads)
    {
        //
    }

    public function addAds(Ads $ads)
    {
        $citiesNode = \App\Category::where('slug', 'cities')->first();

        $cities = \App\Category::descendantsOf( $citiesNode )->toTree()->pluck('name','id')->toArray();

        $methodeTypesId = \App\Category::where('slug', 'methode-types')->first()->id;

        $landTypesId = \App\Category::where('slug', 'land-types')->first()->id;

        $roofTypesId = \App\Category::where('slug', 'roof-types')->first()->id;

        $realEstateTypesId = \App\Category::where('slug', 'real-estate-types')->first()->id;

        $landId = \App\Category::where('slug', 'land')->first()->id;

        $landTypesNode = \App\Category::where('slug', 'land-types')->first();

        $landTypes = \App\Category::descendantsOf( $landTypesNode )->toTree()->pluck('name','id')->toArray();


        $roofTypesNode = \App\Category::where('slug', 'roof-types')->first();

        $roofTypes = \App\Category::descendantsOf( $roofTypesNode )->toTree()->pluck('name','id')->toArray();


        return view('frontbuil.addAds', compact('cities', 'methodeTypesId', 'landTypesId', 'roofTypesId', 'realEstateTypesId','landId','landTypes','roofTypes'));
    }

    public function updateAds(Ads $ads, $id)
    {
        $citiesNode = \App\Category::where('slug', 'cities')->first();

        $cities = \App\Category::descendantsOf( $citiesNode )->toTree()->pluck('name','id')->toArray();

        $methodeTypesId = \App\Category::where('slug', 'methode-types')->first()->id;

        $landTypesId = \App\Category::where('slug', 'land-types')->first()->id;

        $roofTypesId = \App\Category::where('slug', 'roof-types')->first()->id;

        $realEstateTypesId = \App\Category::where('slug', 'real-estate-types')->first()->id;

        $landId = \App\Category::where('slug', 'land')->first()->id;

        $landTypesNode = \App\Category::where('slug', 'land-types')->first();

        $landTypes = \App\Category::descendantsOf( $landTypesNode )->toTree()->pluck('name','id')->toArray();


        $roofTypesNode = \App\Category::where('slug', 'roof-types')->first();

        $roofTypes = \App\Category::descendantsOf( $roofTypesNode )->toTree()->pluck('name','id')->toArray();

        $ads = Ads::find($id);


        return view('frontbuil.updateAds', compact('cities', 'methodeTypesId', 'landTypesId', 'roofTypesId', 'realEstateTypesId','landId','landTypes','roofTypes', 'ads'));
    }
 




    public function data()
    {
        //
        return view('back.ads.data');
    }

    public function datatable()
    {
        //
        return Datatables::of(Ads::query())

        ->editColumn('position', function( $model ){
            return Category::find( $model->position )->name ;
        })

        ->editColumn('cat', function( $model ){
            return Category::find( $model->cat )->name ;
        })


        ->editColumn('cat_business', function( $model ){
            return Category::find( $model->cat_business )->name ;
        })

        ->editColumn('action', function($model){
            return link_to('#', 'action', ['class' => 'btn btn-success btn-circle btn-click', 'data-toggle'=>'modal', 'data-target'=>'#modal-default', 'id' => $model->id ], null);
        })

        ->editColumn('del', function($model){
            return link_to_route('ads.destroy', 'delete', [ $model->id ], ['class' => 'btn btn-danger btn-circle']);
        })

        ->make(true);
    }

    public function get($id)
    {
        //
        $ad = Ads::find($id);
        $toReturn = [];

        foreach ($ad->toArray() as $a => $value) {
            # code...


            switch ($a) {
                case 'position':
                        if( $value != null){ 
                            $toReturn[$a] = Category::find($value)->name ;
                        }else{ 
                            $toReturn[$a] = $value ;
                        }
                    break;

                case 'cat':
                        if( $value != null){ 
                            $toReturn[$a] = Category::find($value)->name ;
                        }else{ 
                            $toReturn[$a] = $value ;
                        }
                    break;

                case 'cat_business':
                        if( $value != null){ 
                            $toReturn[$a] = Category::find($value)->name ; 
                        }else{ 
                            $toReturn[$a] = $value ;
                        }
                    break;
                case 'cat_land':
                        if( $value != null){ 
                            $toReturn[$a] = Category::find($value)->name ; 
                        }else{ 
                            $toReturn[$a] = $value ; 
                        }
                    break;

                case 'cat_roof':
                        if( $value != null){ 
                            $toReturn[$a] = Category::find($value)->name ; 
                        }else{ 
                            $toReturn[$a] = $value ;
                        }
                    break;


                default:
                    $toReturn[$a] = $value ;
                    
            }

        }
        return response()->json( $toReturn );
    }

    public function changeStatus(Request $request, $id){

        $ad = Ads::find($id);
        $statuts;

        if( $request->status == 1){
            $status = true;
        }else{
            $status = false;
        }

        $ad->status = $status;

        return response()->json( $ad->save() );
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function quick($cat_business, $cat, Ads $as)
    {
        //


    $latests = \App\Ads::paginate( 9 );

    $mosts = \App\Ads::orderBy('vue', 'DESC')->paginate( 9 );

    $citiesNode = \App\Category::where('slug', 'cities')->first();

    $cities = \App\Category::descendantsOf( $citiesNode )->toTree()->pluck('name','id')->toArray();


    $methodeTypesId = \App\Category::where('slug', 'methode-types')->first()->id;

    $landTypesId = \App\Category::where('slug', 'land-types')->first()->id;

    $roofTypesId = \App\Category::where('slug', 'roof-types')->first()->id;

    $realEstateTypesId = \App\Category::where('slug', 'real-estate-types')->first()->id;

    $landId = \App\Category::where('slug', 'land')->first()->id;

    /**/

    $landTypesNode = \App\Category::where('slug', 'land-types')->first();

    $landTypes = \App\Category::descendantsOf( $landTypesNode )->toTree()->pluck('name','id')->toArray();


    $roofTypesNode = \App\Category::where('slug', 'roof-types')->first();

    $roofTypes = \App\Category::descendantsOf( $roofTypesNode )->toTree()->pluck('name','id')->toArray();


    $as::where('cat_business', 9)->where('cat', 9)->where('status', true)->orderBy('id', 'desc')
                ->paginate(20);

    return redirect()->route('main',compact('businessTypes', 'realEstateTypes', 'latests', 'mosts', 'cities', 'methodeTypesId', 'landTypesId', 'roofTypesId', 'realEstateTypesId','landId', 'landTypes', 'roofTypes', 'as'));

        
    }


    public function main(Request $req, Ads $as )
    {



    $latests = \App\Ads::paginate( 9 );

    $mosts = \App\Ads::orderBy('vue', 'DESC')->paginate( 9 );

    $citiesNode = \App\Category::where('slug', 'cities')->first();

    $cities = \App\Category::descendantsOf( $citiesNode )->toTree()->pluck('name','id')->toArray();


    $methodeTypesId = \App\Category::where('slug', 'methode-types')->first()->id;

    $landTypesId = \App\Category::where('slug', 'land-types')->first()->id;

    $roofTypesId = \App\Category::where('slug', 'roof-types')->first()->id;

    $realEstateTypesId = \App\Category::where('slug', 'real-estate-types')->first()->id;

    $landId = \App\Category::where('slug', 'land')->first()->id;

    /**/

    $landTypesNode = \App\Category::where('slug', 'land-types')->first();

    $landTypes = \App\Category::descendantsOf( $landTypesNode )->toTree()->pluck('name','id')->toArray();


    $roofTypesNode = \App\Category::where('slug', 'roof-types')->first();

    $roofTypes = \App\Category::descendantsOf( $roofTypesNode )->toTree()->pluck('name','id')->toArray();





            $breadCrumb = [];

        if( $req->titleS != null ){

            $as = $as->where('titleS', 'like', '%'.$req->titleS.'%');

            $breadCrumb['titleS'] = [ 'value' => $req->titleS, 'name' => 'titleS' ];
        }

        if( $req->title != null ){

            $as = $as->where('title', 'like', '%'.$req->title.'%');


            $breadCrumb['title'] = [ 'value' => $req->title, 'name' => 'title' ];
        }


        if( $req->cat != null ){

            $as =  $as->where('cat', $req->cat );

            $breadCrumb['cat'] = [ 'value' => $req->cat, 'name' => Category::find( $req->cat )->name ];
        }

        if( $req->cat_business != null ){

            $as =  $as->where('cat_business', $req->cat_business );

            $breadCrumb['cat_business'] = [ 'value' => $req->cat_business, 'name' => Category::find( $req->cat_business )->name ];
        }

        if( $req->position != null ){

            $as =  $as->where('position', $req->position );

            $breadCrumb['position'] = [ 'value' => $req->position, 'name' => Category::find( $req->position )->name ];
        }

        if( $req->minPrice != null ){

            $as = $as->where('price','>=' , $req->minPrice );

            $breadCrumb['minPrice'] = [ 'value' => $req->minPrice, 'name' => 'minPrice' ];
        }

        if( $req->maxPrice != null ){

            $as = $as->where('price','<=' , $req->maxPrice );

            $breadCrumb['maxPrice'] = [ 'value' => $req->maxPrice, 'name' => 'maxPrice' ];
        }

        if( $req->minSizeLand != null ){

            $as = $as->where('size_land','>=' , $req->minSizeLand );

            $breadCrumb['minSizeLand'] = [ 'value' => $req->minSizeLand, 'name' => 'minSizeLand' ];
        }

        if( $req->maxSizeLand != null ){

            $as = $as->where('size_land','<=' , $req->maxSizeLand );

            $breadCrumb['maxSizeLand'] = [ 'value' => $req->maxSizeLand, 'name' => 'maxSizeLand' ];
        }


        if( $req->cat == $landId ){

            if( $req->cat_land != null ){

                $as =  $as->where('cat_land', $req->cat_land );

                $breadCrumb['cat_land'] = [ 'value' => $req->cat_land, 'name' => Category::find( $req->cat_land )->name ];
            }

        }else{


            if( $req->minRooms != null ){

                $as = $as->where('rooms','>=' , $req->minRooms );

                $breadCrumb['minRooms'] = [ 'value' => $req->minRooms, 'name' => 'minRooms' ];
            }

            if( $req->maxRooms != null ){

                $as = $as->where('rooms','<=' , $req->maxRooms );

                $breadCrumb['maxRooms'] = [ 'value' => $req->maxRooms, 'name' => 'maxRooms' ];
            }

            if( $req->minBathRooms != null ){

                $as = $as->where('price','>=' , $req->minBathRooms );

                $breadCrumb['minBathRooms'] = [ 'value' => $req->minBathRooms, 'name' => 'minBathRooms' ];
            }

            if( $req->maxBathRooms != null ){

                $as = $as->where('bathrooms','<=' , $req->maxBathRooms );

                $breadCrumb['maxBathRooms'] = [ 'value' => $req->maxBathRooms, 'name' => 'maxBathRooms' ];
            }

            if( $req->minKitchens != null ){

                $as = $as->where('kitchens','>=' , $req->minKitchens );

                $breadCrumb['minKitchens'] = [ 'value' => $req->minKitchens, 'name' => 'minKitchens' ];
            }

            if( $req->maxKitchens != null ){

                $as = $as->where('kitchens','<=' , $req->maxKitchens );

                $breadCrumb['maxKitchens'] = [ 'value' => $req->maxKitchens, 'name' => 'maxKitchens' ];
            }

            if( $req->minLivingRooms != null ){

                $as = $as->where('livingrooms','>=' , $req->minLivingRooms );

                $breadCrumb['minLivingRooms'] = [ 'value' => $req->minLivingRooms, 'name' => 'minLivingRooms' ];
            }

            if( $req->maxLivingRooms != null ){

                $as = $as->where('livingrooms','<=' , $req->maxLivingRooms );

                $breadCrumb['maxLivingRooms'] = [ 'value' => $req->maxLivingRooms, 'name' => 'maxLivingRooms' ];
            }

            if( $req->minGarages != null ){

                $as = $as->where('garages','>=' , $req->minGarages );

                $breadCrumb['minGarages'] = [ 'value' => $req->minGarages, 'name' => 'minGarages' ];
            }

            if( $req->maxGarages != null ){

                $as = $as->where('garages','<=' , $req->maxGarages );

                $breadCrumb['maxGarages'] = [ 'value' => $req->maxGarages, 'name' => 'maxGarages' ];
            }

            if( $req->cat_roof != null ){

                $as =  $as->where('cat_roof', $req->cat_roof );

                $breadCrumb['cat_roof'] = [ 'value' => $req->cat_roof, 'name' => Category::find( $req->cat_roof )->name ];
            }


        }




        $as =  $as->where('status', true)->orderBy('id', 'desc')
                ->paginate(20);

        $fRequest = $req->all();

        return view('front.main' ,compact('businessTypes', 'realEstateTypes', 'latests', 'mosts', 'cities', 'methodeTypesId', 'landTypesId', 'roofTypesId', 'realEstateTypesId','landId', 'landTypes', 'roofTypes', 'as', 'breadCrumb', 'fRequest'));


    }








}

