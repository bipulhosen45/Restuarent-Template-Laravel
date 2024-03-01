
<header>
    <div class="wrap-menu-header gradient1 trans-0-4">
        <div class="container h-full">
            <div class="wrap_header trans-0-3">

                <div class="logo">
                    @foreach ($logos as $logo)
                    <a href="/">
                        <img src="{{asset('uploads/logo/'.$logo->image)}}" alt="IMG-LOGO" data-logofixed="{{asset('uploads/logo/'.$logo->image)}}">
                    </a>
                    @endforeach
                </div>

                <div class="wrap_menu p-l-25 p-l-0-xl">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="{{route('menu_page.index')}}">Menu</a>
                            </li>
                            <li>
                                <a href="{{route('reservation_page.index')}}">Reservation</a>
                            </li>
                            <li>
                                <a href="{{route('gallery_page.index')}}">Gallery</a>
                            </li>
                            <li>
                                <a href="{{route('about_page.index')}}">About</a>
                            </li>
                            <li>
                                <a href="{{route('blog_page.index')}}">Blog</a>
                            </li>
                            <li>
                                <a href="{{route('contact_page.index')}}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="social flex-w flex-l-m p-r-20">
                    <a href="{{route('register')}}" class="btn btn-danger text-white"> Sign Up</a>
                    @foreach($topbars as $topbar)
                    <a href="#"><i class="fa fa-{{$topbar->icon}} m-l-21" aria-hidden="true"></i></a>
                    @endforeach
                    <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                </div>
            </div>
        </div>
    </div>
</header>