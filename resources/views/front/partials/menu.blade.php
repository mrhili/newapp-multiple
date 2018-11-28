
        <!-- Menu -->
        <div class="wrap_menu">
            <nav class="menu">
                <ul class="main_menu">


                    <!--class="sale-noti">-->


                @foreach($businessTypes as $key1 => $businessType )
                    <li>
                        <a href="#" >{{ $businessTypes[$key1] }}</a>
                        <ul class="sub_menu">

                            @foreach($realEstateTypes as $key2 => $realEstateType)
                                                    
                            <li><a href="{{ route('quick',[$key1, $key2 ]) }}">{{ $realEstateTypes[$key2] }}</a></li>

                            @endforeach
                        </ul>
                    </li>
                @endforeach








                @if (Auth::guest())
                    <li class=""><a href="{{ route('login') }}">login</a></li>
                    <li class=""><a href="{{ route('register') }}">register</a></li>

                {{--
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <i
                                    class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            @if(Auth::check())
                                @if(Auth::user()->role==1)
                                    <li>
                                        <a href="{{ url('/') }}"><i class="fa fa-tachometer"></i> Admin Dashboard</a>
                                    </li>
                                @endif
                                <li role="presentation" class="divider"></li>
                            @endif
                            <li>{!! Form::open( ['route' => 'logout', 'method' => 'post'] )!!}

                                <button class="btn btn-xs btn-danger"><i class="fa fa-sign-out"></i> Logout</button>

                            </li>{!! Form::close()!!}
                        </ul>
                    </li>
                --}}
                @endif






                








                </ul>
            </nav>
        </div>