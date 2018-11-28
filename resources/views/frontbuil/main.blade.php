@extends('frontbuil.layouts.app')

@section('title')
Welcome
@endsection

@section('keywords')
Exchange web application
@endsection


@section('content')




   
@include('frontbuil.partials.aside')
    
    

                <section class="news-box top-margin">
        <div class="container" style="width:75%;float: left; padding-left: 3%;"> 
            <div class="row">
       <div class="section-heading">
                            <h2>احدث العقارات</h2>
                            <p> تجد في هذا القسم احدث العقارات التي تمت اضافتها </p>
                        </div>
                
                @foreach($as as $a)
                <div class="col-md-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure>{!! Html::image('images/akari/1.jpg') !!}</figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <p class="title" style="width:100%;float:right;direction:rtl;"><strong>{{ $a->title }}</strong></p>
                                            <p style="direction:rtl;">{{ $a->disc }}</p>
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


    
    
    <div class="clearfix">
    </div>
    
    

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