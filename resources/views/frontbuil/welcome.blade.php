@extends('frontbuil.layouts.app')

@section('title')
Welcome
@endsection

@section('keywords')
Exchange web application
@endsection


@section('content')

@include('frontbuil.partials.slider')


   
  <!--
   //////////////////////////////////////////////////////////////////////////////////////////
    
  
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->

<div class="container" style="width: 25%;float: right;background-color: rgba(158, 27, 34, 0.85);;margin-top: 21.9%;padding-bottom: 2%;direction: rtl;">

    <div style="/* width:220px; *//* margin-right: 5px; */padding-top: 0;margin-top: 15%;margin-right: 5%;margin-left: 5%;">
<form class="form-horizontal" role="form">
                                  <div class="form-group">
                                    <label for="filter">نوع العقار</label>
                                    <select class="form-control">
                                        <option value="0" selected="">كل العقارات</option>
                                        <option value="1">فلل</option>
                                        <option value="2">بيوت</option>
                                        <option value="3">شقق</option>
                                        <option value="4">اراضي</option>
                                        <option value="4">فتحات تجاريه</option>
                                        <option value="4"> صالات اعراس ومناسبات </option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Author</label>
                                    <input class="form-control" type="text">
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Contains the words</label>
                                    <input class="form-control" type="text">
                                  </div>
          <div class="col-md-12 col-sm-12" style="direction: ltr;margin-bottom: 20%;"><button type="submit" class="btn btn-block btn-info ">ابحــــــــــــث<span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></div>
                                </form>   

                       </div> 
    
    <center>
 
    
          
                    <h2 style="
    color: white;
">خدمات العقارات </h2>
    </center>

                    <ul class="nav" style="direction: rtl;
    right: 0;
    width: 100%;
    float: right;
    padding-right: 0px;
    margin-left: 70%;
    padding-left: 0;
    background-color: rgb(255, 255, 255);">
                        
                          <div class="headerNN">  </div>                           
                        <li class="active">
                            <a href="{{url ('ShowAllBuilding')}}" target="">
                            <i class="glyphicon glyphicon-home"></i>
                            كل العقارات</a>
                        </li>
                        
                        <br>
                             <div class="headerNN" style="margin-top:10px;"><center><b>
                                 عقارات للبيع  
                                 </b></center>
                             </div>  
                                                         
                        
                        <li>
                            <a href="{{url ('bighouseForSale')}}" target="">
                            <i class="glyphicon glyphicon-user"></i>
                            فلل للبيع
                                 </a>
                        </li>
                        <li>
                            <a href="{{url ('houseForSale')}}" target="">
                            <i class="glyphicon glyphicon-user"></i>
                            بيوت للبيع
                                 </a>
                        </li>
                        <li>
                            <a href="{{url ('apartForSale')}}" target="">
                            <i class="glyphicon glyphicon-flag"></i>
                            شقق للبيع </a>
                        </li>
                        <li>
                            <a href="{{url ('landForSale')}}" target="">
                            <i class="glyphicon glyphicon-user"></i>
                            اراضي للبيع
                                 </a>
                        </li>
                         <br>
                         <div class="headerNN"><center><b>عقارات للايجار </b></center></div>            
                        
                        <li>
                            <a href="{{url ('bighouseForRent')}}" target="">
                            <i class="glyphicon glyphicon-ok"></i>
                            صالات اعراس ومناسبات </a>
                        </li>
                        <li>
                            <a href="{{url ('bighouseForRent')}}" target="">
                            <i class="glyphicon glyphicon-ok"></i>
                            فلل للايجار  </a>
                        </li>
                        <li>
                            <a href="{{url ('houseForRent')}}" target="">
                            <i class="glyphicon glyphicon-ok"></i>
                            بيوت للايجار  </a>
                        </li>
                        <li>
                            <a href="{{url ('landForRent')}}" target="">
                            <i class="glyphicon glyphicon-ok"></i>
                            اراضي للايجار  </a>
                        </li>
                        <li>
                        </li><li>
                            <a href="{{url ('apartForRent')}}">
                            <i class="glyphicon glyphicon-flag"></i>
                            شقق للايجار </a>
                        </li>
                    </ul>
                    
                    

                      </div>
       
            
    
    

<br>
<br>



<style>
    
  body {
  background:  white;
}

/* Profile container */


.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}   
      
    
    </style>
    
  <!--  
    ===========================================================================================
    -->
    
    
    
    
    

                <section class="news-box top-margin">
        <div class="container" style="width:75%;float: left; padding-left: 3%;"> 
            <div class="row">
       <div class="section-heading">
                            <h2>احدث العقارات</h2>
                            <p> تجد في هذا القسم احدث العقارات التي تمت اضافتها </p>
                        </div>
                
                @foreach($latests as $latest)
                <div class="col-md-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure>{!! Html::image('images/akari/1.jpg') !!}</figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <p class="title" style="width:100%;float:right;direction:rtl;"><strong>{{ $latest->title }}</strong></p>
                                            <p style="direction:rtl;">{{ $latest->disc }}</p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn-inline">..المزيد</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


                
                
                
                
            </div>

            {{ $latests->links() }}
        </div>
    </section>
   <!--<section class="aboutUs">
    <div class="container">
        <div class="row">
        <div class="col-md-6"><img src="assets/images/about.jpg" class="img-center" alt=""></div>
            <div class="col-md-6">
                <div><h2>Our Team</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus, vero mollitia velit ad consectetur. Alias, laborum excepturi nihil autem nemo numquam, ipsa architecto non, magni consequuntur quam.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus, vero mollitia velit ad consectetur. Alias, laborum excepturi nihil autem nemo numquam, ipsa architecto non, magni consequuntur quam.</p>
                </div>
                <br>
            </div>
        </div> 
    
    </div>
    </section>-->
      <section class="news-box top-margin" >
        <div class="container" style="width:75%;float: left; padding-left: 5%;"> 
            <div class="row">
       <div class="section-heading">
                            <h2>اكثر العقارات مشاهدة</h2>
                                                        <p> تجد في هذا القسم العقارات التي تمت مشاهدتها والاهتمام بها </p>

                        </div>
                @foreach($mosts as $most)
                <div class="col-md-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure>{!! Html::image('images/akari/1.jpg') !!}</figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <p class="title" style="width:100%;float:right;direction:rtl;"><strong>{{ $most->title }}</strong> -  <small>{{ $most->vue }}</small></p>
                                            <p style="direction:rtl;">{{ $most->disc }}</p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn-inline">..المزيد</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


                
                
                
            </div>

            {{ $mosts->links() }}
        </div>
    </section> 
    
    
    <div class="clearfix">
    </div>
    
    
    <section class="container">
            
            <div class="row">
            <div class="section-heading">
                            <h2>خدماتنـــــا</h2>
                            <p> أهم مايميزنا عن الغير  , ويجعل موقعنا متميزاً  </p>
                        </div>
                 
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="featured-box">
                        <i class="fa fa-eye fa-2x"></i>
                        <div class="text">
                            <h3>إيجار</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featured-box">
                        <i class="fa fa-quote-right fa-2x"></i>
                        <div class="text">
                            <h3>بيع</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featured-box">
                        <i class="fa fa-arrows fa-2x"></i>
                        <div class="text">
                            <h3>استثمار</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>
                </div>
            </div>

        </section>




















@endsection

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