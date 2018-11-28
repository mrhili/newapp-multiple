@extends('frontbuil.layouts.app')

@section('content')


@component('frontbuil.components.header')

    @slot('h1')
        Register
    @endslot
@endcomponent


<!--

            $table->string('img');



-->

    <!-- container -->
    <div class="container" style="direction: rtl;">
                <div class="row">
                    <div class="col-md-6 pull-right">
                        <h3 class="section-title">رسالتـــــك</h3>
                        <p>
                        Lorem Ipsum is inting and typesetting in simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the is dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        
                            <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->

                    {!! Form::open(['route' => 'profile.img-store', 'files' => true, 'method' => 'put']) !!}

                        <div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
                            <label for="img" class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">

                                {!! Form::file('img') !!}

                                @if ($errors->has('img'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('img') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>



                        <div class="text-center">

                                <img src="{{ \App\Helpers\Common\Pics::ifImg( 'profils', $user->img ) }}" class="img-responsive" width="30%"/>


                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>

                    {!! Form::close() !!}





                    {!! Form::model($user, ['route' => 'profile.add-info-store','method' => 'put']) !!}






                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">

                                {!! Form::text('name', old('name') , [ 'class' => 'form-control', 'required' => true, 'autofocus' => true ]) !!}

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('phoneNumber') ? ' has-error' : '' }}">
                            <label for="phoneNumber" class="col-md-4 control-label">Phone number</label>

                            <div class="col-md-6">

                                {!! Form::tel('phoneNumber', old('phoneNumber') , [ 'class' => 'form-control', 'required' => true ]) !!}

                                @if ($errors->has('phoneNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phoneNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('webSite') ? ' has-error' : '' }}">
                            <label for="webSite" class="col-md-4 control-label">Website</label>

                            <div class="col-md-6">

                                {!! Form::url('webSite', old('webSite') , [ 'class' => 'form-control', 'required' => true ]) !!}

                                @if ($errors->has('webSite'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('webSite') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('disc') ? ' has-error' : '' }}">
                            <label for="disc" class="col-md-4 control-label">Discription</label>

                            <div class="col-md-6">

                                {!! Form::textarea('disc', old('disc') , [ 'class' => 'form-control', 'required' => true ]) !!}

                                @if ($errors->has('disc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('disc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <p><a onclick="geoFindMe()">Show my location</a></p>
                            <div id="out"></div>   
                            <p id=""> or simply fill inputs using this website<a href="https://www.latlong.net/" target="_blank">lat long</a></p>


                            <label for="lang" class="col-md-4 control-label">lang</label>

                            <div class="col-md-6">

                                {!! Form::text('lang', old('lang') , ['id' => 'lang', 'class' => 'form-control', 'required' => true, 'autofocus' => true ]) !!}

                                @if ($errors->has('lang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lang') }}</strong>
                                    </span>
                                @endif
                            </div>   

                            <label for="lat" class="col-md-4 control-label">lat</label>

                            <div class="col-md-6">

                                {!! Form::text('lat', old('lat') , ['id' => 'lat', 'class' => 'form-control', 'required' => true, 'autofocus' => true ]) !!}

                                @if ($errors->has('lat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>














                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
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

<script type="text/javascript">

    
function geoFindMe() {

    

  var output = document.getElementById("out");

  if (!navigator.geolocation ){
    output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
    return;
  }

  function success(position) {
    var latitude  = position.coords.latitude;
    var longitude = position.coords.longitude;

    $('#lat').val( latitude );

    $('#lang').val( longitude );

    output.innerHTML = '<p>Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°</p>';

    var img = new Image();
    img.src = "https://maps.googleapis.com/maps/api/staticmap?center=" + latitude + "," + longitude + "&zoom=13&size=300x300&sensor=false";

    output.appendChild(img);
  }

  function error() {
    output.innerHTML = "Unable to retrieve your location use this website https://www.latlong.net/ and fill the inputs";
  }

  output.innerHTML = "<p>Locating…</p>";

  navigator.geolocation.getCurrentPosition(success, error);
}

</script>




@endsection
