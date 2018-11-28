@extends('frontbuil.layouts.app')

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





                    {!! Form::model($user, ['route' => 'profile.sensible-info-email', 'class' => 'form-horizontal', 'method' => 'put'] ) !!}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">

                                {!! Form::email('email', old('email'), ['class' => 'form-controll']) !!}

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>

                    {!! Form::close() !!}




                    {!! Form::open(['route' => 'profile.sensible-info-pass', 'class' => 'form-horizontal', 'method' => 'put' ]) !!}
                        {{ csrf_field() }}   

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

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
