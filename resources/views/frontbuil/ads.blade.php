@extends('frontbuil.layouts.app')

@section('title')
Welcome
@endsection

@section('keywords')
Exchange web application
@endsection


@section('content')
    
    



                <section class="news-box top-margin">
        <div class="container" style="width:75%;float: left; padding-left: 3%;"> 
            <div class="row">
       <div class="section-heading">
                            <h2>احدث العقارات</h2>
                            <p> تجد في هذا القسم احدث العقارات التي تمت اضافتها </p>
                            <p><a href="{{ URL::previous() }}">back</a></p>
                        </div>
 
            </div>

            
        </div>


            <div class="row">

                
                @foreach($ads as $a)
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

            {{ $ads->links() }}
        </div>



    </section>


    
    
    <div class="clearfix">
    </div>

























@endsection

@section('scripts')
<script>

</script>

@endsection