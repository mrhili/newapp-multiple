    <div class="navbar navbar-inverse">
        
        
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="index.html">
                    {!! Html::image('images/akari/logo.png', 'Techro HTML5 template"')!!}
                </a>
            </div>
            <div class="navbar-collapse collapse" >
                <ul class="nav navbar-nav mainNav">

                <li class="active"><a href="index.html">بحث متقدم</a></li>

                @foreach($businessTypes as $key1 => $businessType )
                    <li class="dropdown" style="color: #070808;">


                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >{{ $businessTypes[$key1] }} <b class="caret"></b></a>
                        <ul class="dropdown-menu" style="text-align: right;">

                            @foreach($realEstateTypes as $key2 => $realEstateType)
                                                    
                            <li><a href="{{ route('quick',[$key1, $key2 ]) }}">{{ $realEstateTypes[$key2] }}</a></li>

                            @endforeach
                        </ul>
                    </li>
                @endforeach










                @if (Auth::guest())
                    <li class=""><a href="{{ route('login') }}">دخول</a></li>
                    <li class=""><a href="{{ route('register') }}">تسجيل</a></li>
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
                @endif




                

                
                </ul>
            </div>
            
            
            
            
        </div>
    </div>
    <!-- /.navbar -->