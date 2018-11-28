@extends('frontbuil.layouts.app')

@section('stylesheets')




@endsection

@section('content')


@component('frontbuil.components.header')

    @slot('h1')
        {{ $ads->title }}
    @endslot
@endcomponent








    <!-- container -->
    <div class="container" style="direction: rtl;">
                <div class="row">
                    <div class="col-md-6 pull-right">
                        <h3 class="section-title">رسالتـــــك</h3>
                        <p>
                        {{ $ads->disc }}
                        </p>
                        <p>
                        
                        </p>
                        
                            <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->






                            






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





@endsection
