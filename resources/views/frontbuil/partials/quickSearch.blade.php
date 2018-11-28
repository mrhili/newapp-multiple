        <div class="quick-search">
             
                      <div class="row">

                        	<div class="col-md-6 col-sm-6 col-xs-6">
	                            <div class="form-group">
	                              <label for="cities">المدينة</label>

	                              {!! Form::select('cities', $cities , null ,['id' => 'cities', 'class' => 'form-control', 'style' => 'width: 100%;']) !!}

	                            </div>


	                            <div class="form-group">
	                              <label for="location">الموقع</label>


	                              {!! Form::select('positions', [] , null ,['id' => 'positions', 'class' => 'form-control', 'style' => 'width: 100%;']) !!}


	                            </div>

                        	</div>


                        	<div class="col-md-6 col-sm-6 col-xs-6">

	                            <div class="form-group">
	                              <label for="type">  نوع العقار </label>
                                {!! Form::select('cat', $realEstateTypes, null, ['placeholder' => 'Pick', 'id' => 'realEstateTypes', 'class' => 'form-control']) !!}

	                                       
	                              </select>
	                            </div>




	                            <div class="form-group">
	                              <label for="status">  للايجار ام للبيع </label>

                                {!! Form::select('cat_business', $businessTypes, null, ['placeholder' => 'Pick', 'id' => 'businessTypes', 'class' => 'form-control']) !!}

	                            </div>


                        	</div>


                          <!-- break -->
                          <div class="col-md-6 col-sm-6 col-xs-6">

                            <div class="form-group">
                              <label for="minprice">اكبر سعر</label>
                              {!! Form::number('maxPrice', null,['class' => 'form-control', 'placeholder' => 'ادخل الحد الأقصى او اتركه فارغا']) !!}
                            </div>
                          </div>
                          <!-- break -->
                          <div class="col-md-6 col-sm-6 col-xs-6">

                            <div class="form-group">
                              <label for="maxprice">  اقل سعر  </label>
                              {!! Form::number('minPrice', null,['class' => 'form-control', 'placeholder' => 'ادخل الحد الادنى او اتركه فارغا']) !!}
                            </div>
                          </div>
<button type="submit" class="btn btn-block btn-info">إبحث<span class="fa fa-search" aria-hidden="true"></span></button>


                      </div>
                     
        </div>