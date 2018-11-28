@extends('frontbuil.layouts.app')

@section('title')
Welcome
@endsection

@section('keywords')
Exchange web application
@endsection


@section('content')
   
@include('frontbuil.partials.aside4profile')
    
    



                <section class="news-box top-margin">
        <div class="container" style="width:75%;float: left; padding-left: 3%;"> 
            <div class="row">
       <div class="section-heading">
                            <h2>احدث العقارات</h2>
                            <p> تجد في هذا القسم احدث العقارات التي تمت اضافتها </p>
                        </div>

                        <div>
                
          <h1>My rating</h1>
@include('frontbuil.partials.rating')

		</div>



<!---->


                <h3>عنا</h3>
                <p>
                    <img src="assets/images/about.jpg" alt="" class="img-rounded pull-right" width="300">
               
                    مرحبا بك بموقع عقاري . كوم اول موقع يمني يعمل في العقارات ومتخصص فيه ,
                    حتى تسهل عليك عملية البحث عن العقار الذي تريد شراءه او ايجاره او عرضه للبيع .
                    
                    الموقع يتيح لك العديد من الخيارات التي تسهل عليك عملك الذي تريد القيام به.
                </p>
                <p>Consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.</p>
                
                <h3>انجازاتنا </h3>
                <strong>2016</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
                <strong>2013</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
                <strong>2012</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
                <strong>2011</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>

<!---->


                
            </div>

            
        </div>


            <div class="row">
       <div class="section-heading">
            <h2>بعض من عقاراتنا</h2>
            <p>ويمكنك رؤيتها بكاملها علر <a href="route('profile.my-buildings', $id)">هذا الرابط</a></p>
        </div>
                
                @foreach($activBuil as $a)
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

            {{ $activBuil->links() }}
        </div>


			<div class="row">
			<div class="section-heading">
							<h2>تواصل معنا</h2>
							<p> يمكن التواصل معنا الأن </p>
						</div>
				 
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
						<i class="fa fa-eye fa-2x"></i>
						<div class="text">
							<h3>رقم الهاتف</h3>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<i class="fa fa-quote-right fa-2x"></i>
						<div class="text">
							<h3>البريد الإلكتروني</h3>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<i class="fa fa-arrows fa-2x"></i>
						<div class="text">
							<h3>العنوان</h3>
							العنوان
						</div>
					</div>
				</div>
			</div>






			<div style="width: 500px; height: 500px;">
				{!! Mapper::render() !!}
			</div>



    </section>


    
    
    <div class="clearfix">
    </div>

























@endsection

@section('scripts')
<script>

</script>

@endsection