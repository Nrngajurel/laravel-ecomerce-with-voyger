
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="tel:"><i class="fa fa-phone"></i> {{ setting('site.phone_number') }}</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> {{ setting('site.company_email') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                            Nepal
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>Nepal</li>
                            <li>India</li>
                            <li>China</li>
                            <li>Canada</li>
                            <li>USA</li>
                        </ul>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ setting('site.fb_link') }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ setting('site.tw_link') }}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-1">
                    <ul class="nav">
                        <li><a href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i> <span class="bg-primary round">{{ Cart::content()->count() }}</span></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-md-3 logo"style="display: flex">

                    <a href="{{ route('LandingPage.index') }}" style="width: 40%">
                        <img src="{{ asset('storage/'.setting('site.logo'))  }}" alt="{{ config('site.name') }}" width="40%"/>
                    </a>
                    <a href="{{ route('LandingPage.index') }}" class="pb-3">
                        <h2>{{ setting('site.title') }}</h2>
                    </a>



                </div>

                <div class="mainmenu pull-left col-md-7 col-sm-12" style="">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        <li ><a href="{{ route('LandingPage.index') }}" @if(Request::is('/')) class="active" @endif>Home</a></li>
                        <li><a href="{{ route('Shop.index') }}" @if(Request::is('shop')) class="active" @endif>Shop</a>

                        </li>
                        <li><a href="{{ route('checkout.index') }}" >Checkout</a></li>
                        <li><a href="#">Blog</a>

                        </li>

                        <li><a href="{{route('contact.index')}}" class="{{ Request::is('contact')? 'active':''}}" >Contact Us</a></li>
                        @guest
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('account.create') }}">Login/Register</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                <div class="col-md-2 search_box pull-right">
                    <form action="{{ route('Shop.index') }}" method="get">
                        <input type="text" placeholder="Search..." class="form-control" name="q"/>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">


            </div>
        </div>
    </div><!--/header-bottom-->
</header>