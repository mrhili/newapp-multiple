    <!-- Slide1 -->
    <section class="slide1">
        <div class="wrap-slick1">
            <div class="slick1">
                @foreach($sliders as $item =>$slider)
                <div class="item-slick1 item{{ $item }}-slick1" style="background-image: url(images/slider/{{ $slider->img  }});">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="fadeInUp">
                            {{ $slider->bold_message }}
                        </h2>

                        <span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="fadeInDown">
                            {{ $slider->top_message }}
                        </span>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                            <!-- Button -->
                            <a href="{{url('/'.$slider->link )}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                {{ $slider->button_message }}
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>