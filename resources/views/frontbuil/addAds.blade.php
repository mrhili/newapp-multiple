@extends('frontbuil.layouts.app')

@section('stylesheets')




@endsection

@section('content')


@component('frontbuil.components.header')

    @slot('h1')
        Register
    @endslot
@endcomponent








    <!-- container -->
    <div class="container" style="direction: rtl;">
                <div class="row">
                    <div class="col-md-6 pull-right">
                        <h3 class="section-title">رسالتـــــك</h3>
                        <p>
                        Lorem Ipsum is inting and typesetting in simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the is dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        
                            <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->



                    <form action="{{ route('ads.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('imgs') ? ' has-error' : '' }}">
                            <label for="imgs" class="col-md-4 control-label">imgs</label>

                            <div class="col-md-6">

                                <input type="file" name="imgs[]" multiple="multiple" class="form-control" />

                                @if ($errors->has('imgs'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('imgs') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">

                                {!! Form::text('title', old('title'), ['class' => 'form-control']) !!}

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">price</label>

                            <div class="col-md-6">

                                {!! Form::number('price', old('price'), ['class' => 'form-control']) !!}

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('disc') ? ' has-error' : '' }}">
                            <label for="disc" class="col-md-4 control-label">disc</label>

                            <div class="col-md-6">

                                {!! Form::textarea('disc', old('disc'), ['class' => 'form-control']) !!}

                                @if ($errors->has('disc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('disc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('size_land') ? ' has-error' : '' }}">
                            <label for="size_land" class="col-md-4 control-label">size_land</label>

                            <div class="col-md-6">

                                {!! Form::number('size_land', old('size_land'), ['class' => 'form-control']) !!}

                                @if ($errors->has('size_land'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('size_land') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('size_land') ? ' has-error' : '' }}">
                            <label for="size_land" class="col-md-4 control-label">size_land</label>

                            <div class="col-md-6">

                                {!! Form::number('size_land', old('size_land'), ['class' => 'form-control']) !!}

                                @if ($errors->has('size_land'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('size_land') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cities" class="col-md-4 control-label">cities</label>

                            <div class="col-md-6">

                                {!! Form::select('cities', $cities , null ,['id' => 'cities', 'class' => 'form-control', 'style' => 'width: 100%;']) !!}


                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('positions') ? ' has-error' : '' }}">
                            <label for="positions" class="col-md-4 control-label">positions</label>

                            <div class="col-md-6">

                                {!! Form::select('positions', [] , null ,['id' => 'positions', 'class' => 'form-control', 'style' => 'width: 100%;']) !!}

                                @if ($errors->has('positions'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('positions') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cat') ? ' has-error' : '' }}">
                            <label for="cat" class="col-md-4 control-label">cat</label>

                            <div class="col-md-6">

                                {!! Form::select('cat', $realEstateTypes, null, ['id' => 'realEstateTypes', 'class' => 'form-control']) !!}

                                @if ($errors->has('cat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cat_business') ? ' has-error' : '' }}">
                            <label for="cat_business" class="col-md-4 control-label">cat_business</label>

                            <div class="col-md-6">

                                {!! Form::select('cat_business', $businessTypes, null, ['id' => 'businessTypes', 'class' => 'form-control']) !!}

                                @if ($errors->has('cat_business'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cat_business') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        {{-- land --}}


                        <div class="form-group{{ $errors->has('cat_land') ? ' has-error' : '' }} land">
                            <label for="cat_land" class="col-md-4 control-label">cat_land</label>

                            <div class="col-md-6">

                                {!! Form::select('cat_land', $landTypes, null, ['id' => 'cat_land', 'class' => 'form-control']) !!}

                                @if ($errors->has('cat_land'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cat_land') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- -land --}}







                        {{-- not land --}}



                        <div class="form-group{{ $errors->has('floorNumber') ? ' has-error' : '' }} not-land">
                            <label for="floorNumber" class="col-md-4 control-label">floorNumber</label>

                            <div class="col-md-6">

                                {!! Form::number('floorNumber', old('floorNumber'), ['class' => 'form-control']) !!}

                                @if ($errors->has('floorNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('floorNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('rooms') ? ' has-error' : '' }} not-land">
                            <label for="rooms" class="col-md-4 control-label">rooms</label>

                            <div class="col-md-6">

                                {!! Form::number('rooms', old('rooms'), ['class' => 'form-control']) !!}

                                @if ($errors->has('rooms'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rooms') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('bathrooms') ? ' has-error' : '' }} not-land">
                            <label for="bathrooms" class="col-md-4 control-label">bathrooms</label>

                            <div class="col-md-6">

                                {!! Form::number('bathrooms', old('bathrooms'), ['class' => 'form-control']) !!}

                                @if ($errors->has('bathrooms'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bathrooms') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('kitchens') ? ' has-error' : '' }} not-land">
                            <label for="kitchens" class="col-md-4 control-label">kitchens</label>

                            <div class="col-md-6">

                                {!! Form::number('kitchens', old('kitchens'), ['class' => 'form-control']) !!}

                                @if ($errors->has('kitchens'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kitchens') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('livingrooms') ? ' has-error' : '' }} not-land">
                            <label for="livingrooms" class="col-md-4 control-label">livingrooms</label>

                            <div class="col-md-6">

                                {!! Form::number('livingrooms', old('livingrooms'), ['class' => 'form-control']) !!}

                                @if ($errors->has('livingrooms'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('livingrooms') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('garages') ? ' has-error' : '' }} not-land">
                            <label for="garages" class="col-md-4 control-label">garages</label>

                            <div class="col-md-6">

                                {!! Form::number('garages', old('garages'), ['class' => 'form-control']) !!}

                                @if ($errors->has('garages'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('garages') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('cat_roof') ? ' has-error' : '' }} not-land">
                            <label for="cat_roof" class="col-md-4 control-label">cat_roof</label>

                            <div class="col-md-6">

                                {!! Form::select('cat_roof', $roofTypes, null, ['id' => 'cat_roof', 'class' => 'form-control']) !!}

                                @if ($errors->has('cat_roof'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cat_roof') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        {{-- -not land --}}


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>

                    {!! Form::close() !!}











                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="section-title">عنوان المكتب</h3>
                                <div class="contact-info">
                                    <h5>العناوين</h5>
                                    <p>5th Street, Carl View - United States</p>
                                    
                                    <h5>البريد الالكتروني</h5>
                                    <p>info@webthemez.com</p>
                                    
                                    <h5>الهاتف</h5>
                                    <p>+09 123 1234 123</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="section-title">Timings</h3>
                                <div class="contact-info">
                                    <h5>السبت - الخميس</h5>
                                    <p>09:00 AM - 6:30 PM</p>
                                    
                                    <h5>الجمعه</h5>
                                    <p>Closed</p>
                                    
                                    <!--<h5>Sunday</h5>
                                    <p>Closed</p>-->
                                </div>
                            </div>
                        </div>
                        <h3 class="section-title">ابقى على اتصال</h3>
                        <p>
                        Lorem ipsumn qersl ioinm sersoe non urna dolor sit amet, consectetur piesn qersl ioinm sersoe non urna dolor aecena.
                        </p>                        
                    </div>
                </div>
            </div>
    <!-- /container -->








@endsection

@section('scripts')

@section('scripts')
<script>

jQuery.noConflict()(function ($) { // this was missing for me

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




@endsection
