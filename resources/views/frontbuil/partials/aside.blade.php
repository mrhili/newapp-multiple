  <!--
   //////////////////////////////////////////////////////////////////////////////////////////
    
  
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->

<div class="container" style="width: 25%;float: right;background-color: rgba(158, 27, 34, 0.85);;margin-top: 21.9%;padding-bottom: 2%;direction: rtl;">

    <div style="/* width:220px; *//* margin-right: 5px; */padding-top: 0;margin-top: 15%;margin-right: 5%;margin-left: 5%;">
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
