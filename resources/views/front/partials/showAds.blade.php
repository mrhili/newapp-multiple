



    <!-- Our product -->
    <section class="bgwhite p-t-45 p-b-58">
        <div class="container">
            <div class="sec-title p-b-22">
                <h3 class="m-text5 t-center">
                    Our Products
                </h3>
            </div>


            
            <!-- Tab01 -->
            <div class="tab01">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    @php
                        $counting = 0;
                    @endphp

                    @foreach($businessTypes as $b => $businessType )

                        <li class="nav-item">
                            <a class="nav-link {{ ($loop->first)? 'active': '' }}" data-toggle="tab" href="#businessType-{{ $counting }}" role="tab">{{ $businessTypes[$b] }}</a>
                        </li>

                        @php
                            $counting++;
                        @endphp

                    @endforeach

                    @php
                        $counting = 0;
                    @endphp
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-t-35">
                    <!-- - -->
                    @php
                        $businessTypes2 = $businessTypes;
                    @endphp

                    @php
                        $counting = 0;
                    @endphp
                    @foreach($businessTypes2 as $bt => $businessType )
                    <div class="tab-pane fade {{ ($loop->first)? 'show active': '' }}" id="businessType-{{ $counting }}" role="tabpanel">

                        @foreach($realEstateTypes as $k => $realEstateType)
                        <h5 class="text-center">{{ $realEstateTypes[ $k ] }}</h5>
                        <hr />
                        <div class="row">
                            




                            @forelse( App\Ads::where('cat_business', $bt)->where('cat', $k)->where('status', true)->take(4)->get() as $desc )

                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->

                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <img src="images/item-02.jpg" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            {{ $desc->title }}
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
                                            ${{ $desc->price }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @empty

                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                            Empty
                            </div>

                            @endforelse


                        </div>
                        @endforeach
                    </div>

                    @php
                        $counting++;
                    @endphp

                    @endforeach
                    @php
                        $counting = 0;
                    @endphp
                </div>
            </div>
        </div>
    </section>