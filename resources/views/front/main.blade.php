@extends('front.layouts.app')

@section('title')
Welcome
@endsection

@section('keywords')
Exchange web application
@endsection

@section('addStylesheets')
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('vendor/noui/nouislider.min.css') !!}">
@endsection


@section('content')

	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/config/{{GetSetting::getConfig('banner-main')}});">
		<h2 class="l-text2 t-center">
			Women
		</h2>
		<p class="m-text13 t-center">
			New Arrivals Women Collection 2018
		</p>
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categories
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="#" class="s-text13 active1">
									All
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13">
									Women
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13">
									Men
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13">
									Kids
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13">
									Accesories
								</a>
							</li>
						</ul>

						<!--  -->
						<h4 class="m-text14 p-b-32">
							Filters
						</h4>

						<div class="filter-price p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-17">
								Price
							</div>

							<div class="wra-filter-bar">
								<div id="filter-bar"></div>
							</div>

							<div class="flex-sb-m flex-w p-t-16">
								<div class="w-size11">
									<!-- Button -->
									<button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
										Filter
									</button>
								</div>

								<div class="s-text3 p-t-10 p-b-10">
									Range: $<span id="value-lower">610</span> - $<span id="value-upper">980</span>
								</div>
							</div>
						</div>

						<div class="filter-color p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-12">
								Color
							</div>

							<ul class="flex-w">
								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
									<label class="color-filter color-filter1" for="color-filter1"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
									<label class="color-filter color-filter2" for="color-filter2"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
									<label class="color-filter color-filter3" for="color-filter3"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
									<label class="color-filter color-filter4" for="color-filter4"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
									<label class="color-filter color-filter5" for="color-filter5"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
									<label class="color-filter color-filter6" for="color-filter6"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
									<label class="color-filter color-filter7" for="color-filter7"></label>
								</li>
							</ul>
						</div>

						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>

						</div>

						<div class="p-t-22 p-b-50 bo3">

<!---------------------------------------------------->
         {!! Form::open(['route' => 'main']) !!}

          {{ csrf_field() }}




@php

    $cat = \App\Helpers\Common\FormFields::initVar($fRequest, 'cat');

@endphp



                                <div class="form-group">
                                  <label for="type">  نوع العقار </label>


                                  {!! Form::select('cat', $realEstateTypes, $cat, ['placeholder' => 'Pick', 'id' => 'realEstateTypes', 'class' => 'form-control']) !!}

                                </div>

@php

    $cat_business = \App\Helpers\Common\FormFields::initVar($fRequest, 'cat_business');

@endphp

                                <div class="form-group">
                                  <label for="status">  للايجار ام للبيع </label>
                                   {!! Form::select('cat_business', $businessTypes, $cat_business, ['id' => 'businessTypes', 'class' => 'form-control']) !!}
                                </div>

@php

    $city = \App\Helpers\Common\FormFields::initVar($fRequest, 'cities');

@endphp

                                <div class="form-group">
                                  <label for="cities">المدينة</label>

                                  {!! Form::select('cities', $cities , $city ,['id' => 'cities', 'class' => 'form-control']) !!}

                                </div>


                                <div class="form-group">
                                  <label for="location">الموقع</label>


                                  {!! Form::select('position', [] , null ,['id' => 'positions', 'class' => 'form-control']) !!}


                                </div>

@php

    $minPrice = \App\Helpers\Common\FormFields::initVar($fRequest, 'minPrice');

@endphp

                            <div class="form-group">
                              <label for="maxprice">  اقل سعر  </label>
                              {!! Form::number('minPrice', $minPrice ,['class' => 'form-control', 'placeholder' => 'ادخل الحد الادنى او اتركه فارغا']) !!}
                            </div>

@php

    $maxPrice = \App\Helpers\Common\FormFields::initVar($fRequest, 'maxPrice');

@endphp

                            <div class="form-group">
                              <label for="minprice">أقصى سعر</label>
                              {!! Form::number('maxPrice', $maxPrice,['class' => 'form-control', 'placeholder' => 'ادخل الحد الأقصى او اتركه فارغا']) !!}
                            </div>


@php

    $title = \App\Helpers\Common\FormFields::initVar($fRequest, 'title');

@endphp



                            <div class="form-group">
                              <label for="minprice">كلمة البحث</label>
                              {!! Form::search('title', $title,['class' => 'form-control', 'placeholder' => 'تحتوي على عذه الكلمة']) !!}
                            </div>

@php

    $minSizeLand = \App\Helpers\Common\FormFields::initVar($fRequest, 'minSizeLand');

@endphp


                            <div class="form-group">
                              <label for="maxprice">  اقل مساحة  </label>
                              {!! Form::number('minSizeLand', $minSizeLand ,['class' => 'form-control', 'placeholder' => 'أدنى مساحة']) !!}
                            </div>

@php

    $maxSizeLand = \App\Helpers\Common\FormFields::initVar($fRequest, 'maxSizeLand');

@endphp

                            <div class="form-group">
                              <label for="minprice">اكبر مساحة</label>
                              {!! Form::number('maxSizeLand', $maxSizeLand,['class' => 'form-control', 'placeholder' => 'أقصى مساحة']) !!}
                            </div>

@php

    $cat_land = \App\Helpers\Common\FormFields::initVar($fRequest, 'cat_land');

@endphp

                            {{-- Land --}}

                                <div class="form-group land">
                                  <label for="type">  نوع الأرض </label>
                                  {!! Form::select('cat_land', $landTypes , $cat_land ,['class' => 'form-control']) !!}
                                </div>
@php

    $minFloorNumber = \App\Helpers\Common\FormFields::initVar($fRequest, 'minFloorNumber');

@endphp


                            {{-- Not Land --}}

                            <div class="form-group not-land">
                              <label for="maxprice">  اقل عدد الطبقات  </label>
                              {!! Form::number('minFloorNumber', $minFloorNumber,['class' => 'form-control', 'placeholder' => 'أدنى عدد الطبقات']) !!}
                            </div>
@php

    $maxFloorNumber = \App\Helpers\Common\FormFields::initVar($fRequest, 'maxFloorNumber');

@endphp

                            <div class="form-group not-land">
                              <label for="minprice">اكبر عدد الطبقات</label>
                              {!! Form::number('maxFloorNumber', $maxFloorNumber ,['class' => 'form-control', 'placeholder' => 'أقصى عدد الطبقات']) !!}
                            </div>

@php

    $minRooms = \App\Helpers\Common\FormFields::initVar($fRequest, 'minRooms');

@endphp

                            <div class="form-group not-land">
                              <label for="maxprice">  اقل عدد الغرق  </label>
                              {!! Form::number('minRooms', $minRooms,['class' => 'form-control', 'placeholder' => 'أدنى عدد الغرف']) !!}
                            </div>

@php

    $maxRooms = \App\Helpers\Common\FormFields::initVar($fRequest, 'maxRooms');

@endphp

                            <div class="form-group not-land">
                              <label for="minprice">اكبر عدد الغرق</label>
                              {!! Form::number('maxRooms', $maxRooms,['class' => 'form-control', 'placeholder' => 'أقصى عدد الغرف']) !!}
                            </div>

@php

    $minBathRooms = \App\Helpers\Common\FormFields::initVar($fRequest, 'minBathRooms');

@endphp

                            <div class="form-group not-land">
                              <label for="maxprice">  اقل عدد الحمامات  </label>
                              {!! Form::number('minBathRooms', $minBathRooms ,['class' => 'form-control', 'placeholder' => 'أدنى عدد الغرف']) !!}
                            </div>

@php

    $maxBathRooms = \App\Helpers\Common\FormFields::initVar($fRequest, 'maxBathRooms');

@endphp

                            <div class="form-group not-land">
                              <label for="minprice">اكبر عدد الحمامات</label>
                              {!! Form::number('maxBathRooms', $maxBathRooms,['class' => 'form-control', 'placeholder' => 'أقصى عدد الغرف']) !!}
                            </div>
@php

    $minKitchens = \App\Helpers\Common\FormFields::initVar($fRequest, 'minKitchens');

@endphp

                            <div class="form-group not-land">
                              <label for="maxprice">  اقل عدد المطابخ  </label>
                              {!! Form::number('minKitchens', $minKitchens ,['class' => 'form-control', 'placeholder' => 'أدنى عدد الغرف']) !!}
                            </div>

@php

    $maxKitchens = \App\Helpers\Common\FormFields::initVar($fRequest, 'maxKitchens');

@endphp

                            <div class="form-group not-land">
                              <label for="minprice">اكبر عدد المطابخ</label>
                              {!! Form::number('maxKitchens', $maxKitchens ,['class' => 'form-control', 'placeholder' => 'أقصى عدد الغرف']) !!}
                            </div>

@php

    $minLivingRooms = \App\Helpers\Common\FormFields::initVar($fRequest, 'minLivingRooms');

@endphp

                            <div class="form-group not-land">
                              <label for="maxprice">  اقل عدد غرف المعيشة  </label>
                              {!! Form::number('minLivingRooms', $minLivingRooms ,['class' => 'form-control', 'placeholder' => 'أدنى عدد الغرف']) !!}
                            </div>

@php

    $maxLivingRooms = \App\Helpers\Common\FormFields::initVar($fRequest, 'maxLivingRooms');

@endphp


                            <div class="form-group not-land">
                              <label for="minprice">اكبر غرف المعيشة</label>
                              {!! Form::number('maxLivingRooms', $maxLivingRooms ,['class' => 'form-control', 'placeholder' => 'أقصى عدد الغرف']) !!}
                            </div>

@php

    $minGarages = \App\Helpers\Common\FormFields::initVar($fRequest, 'minGarages');

@endphp

                            <div class="form-group not-land">
                              <label for="maxprice">  اقل عدد المرائب  </label>
                              {!! Form::number('minGarages', $minGarages,['class' => 'form-control', 'placeholder' => 'أدنى عدد الغرف']) !!}
                            </div>

@php

    $maxGarages = \App\Helpers\Common\FormFields::initVar($fRequest, 'maxGrages');

@endphp

                            <div class="form-group not-land">
                              <label for="minprice">اكبر عدد المرائب</label>
                              {!! Form::number('maxGarages', $maxGarages,['class' => 'form-control', 'placeholder' => 'أقصى عدد الغرف']) !!}
                            </div>


@php

    $cat_roof = \App\Helpers\Common\FormFields::initVar($fRequest, 'cat_roof');

@endphp

                                <div class="form-group not-land">
                                  <label for="type">  نوع السقيفة </label>
                                   {!! Form::select('cat_roof', $roofTypes , $cat_roof ,['class' => 'form-control']) !!}

                                </div>


          <div class="col-md-12 col-sm-12" style="direction: ltr;margin-bottom: 20%;"><button type="submit" class="btn btn-block btn-info ">ابحث<span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></div>
{!! Form::close() !!} 



<!---------------------------------------------------->





						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Default Sorting</option>
									<option>Popularity</option>
									<option>Price: low to high</option>
									<option>Price: high to low</option>
								</select>
							</div>

							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Price</option>
									<option>$0.00 - $50.00</option>
									<option>$50.00 - $100.00</option>
									<option>$100.00 - $150.00</option>
									<option>$150.00 - $200.00</option>
									<option>$200.00+</option>

								</select>
							</div>
						</div>

						<span class="s-text8 p-t-5 p-b-5">
							Showing 1–12 of 16 results
						</span>
					</div>

					<!-- Product -->
					<div class="row">
						@foreach($as as $a)
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="images/item-02.jpg" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												View ->
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
										{{ $a->title }}
									</a>

									<span class="block2-price m-text6 p-r-5">
										${{ $a->price }}
									</span>
								</div>
							</div>
						</div>
						@endforeach

					</div>

					<div class="pagination flex-m flex-w p-t-26">

					{{ $as->links() }}

					</div>

					<!-- Pagination 
					<div class="pagination flex-m flex-w p-t-26">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div>
					-->
				</div>
			</div>
		</div>
	</section>



@endsection

@section('addScripts')
<!--===============================================================================================-->
	<script type="text/javascript" src="{!! asset('fashe/vendor/noui/nouislider.min.js') !!}"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
@endsection

@section('scripts')
<script>

jQuery.noConflict()(function ($) { // this was missing for me

	$('.pagination>li').addClass("item-pagination flex-c-m trans-0-4");
    $('.pagination>li.active').addClass("active-pagination");

  window.methodeTypesId = {{ $methodeTypesId }};
  window.landTypesId = {{ $landTypesId }};
  window.roofTypesId = {{ $roofTypesId }};
  window.realEstateTypesId = {{ $realEstateTypesId }};
  window.landId = {{ $landId }};



    $(document).ready(function() { 

    var cities = $('#cities');

    changeSelect();

  function changeSelect(){

      
      var positions = $('#positions');

      var options, index, optionKey;

    var id = cities.find('option:selected').attr("value");

    axios.get('/childrenselect/'+id)
      .then(function (response) {
        positions.find('option').remove();
        options = response.data;


        for(optionKey in options) {

          positions.append('<option value="'+optionKey+'">'+options[optionKey]+'</option>');
        }


      })
    .catch(function (error) {
        console.log(error);
     });
  }

  cities.change(function() {
    changeSelect();
  });





/**************/


    var realEstateTypes = $('#realEstateTypes');

    changeSelectRealEstate();

  function changeSelectRealEstate(){

      
      var landClass = $('.land');

      var notLandClass = $('.not-land');

    var id = realEstateTypes.find('option:selected').attr("value");

    if(id == window.landId){

      landClass.children().show();
      notLandClass.children().hide();

    }else{

      landClass.children().hide();
      notLandClass.children().show();

    }

  }

  realEstateTypes.change(function() {
    changeSelectRealEstate();
  });

    });
});

/*
$(document).ready(function(){



  $("#cities").change(function() {
    var id = $(this).children(":selected").attr("id");
  });

});
*/
</script>


@endsection