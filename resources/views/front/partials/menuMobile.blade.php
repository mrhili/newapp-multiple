

                @foreach($businessTypes as $key1 => $businessType )
                    <li class="item-menu-mobile">
                        <a href="#" >{{ $businessTypes[$key1] }}</a>
                        <ul class="sub_menu">

                            @foreach($realEstateTypes as $key2 => $realEstateType)
                                                    
                            <li><a href="{{ route('quick',[$key1, $key2 ]) }}">{{ $realEstateTypes[$key2] }}</a></li>

                            @endforeach
                        </ul>
                        <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                    </li>
                @endforeach

                @if (Auth::guest())
                    <li class="item-menu-mobile"><a href="{{ route('login') }}">login</a></li>
                    <li class="item-menu-mobile"><a href="{{ route('register') }}">register</a></li>

                @endif
                   