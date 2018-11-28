@extends('front.layouts.app')

@section('title')
Welcome
@endsection

@section('keywords')
Exchange web application
@endsection


@section('content')
	@include('front.partials.slider')
	@include('front.partials.showAds')
	@include('front.partials.quickSearch')
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