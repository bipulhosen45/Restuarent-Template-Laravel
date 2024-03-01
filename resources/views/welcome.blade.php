@include('fronted.partial.topbar')

<body class="animsition">

 <!-- Header Section  dynamic-->
 @include('fronted.partial.navbar')

 <!-- Sidebar Section dynamic-->
 @include('fronted.partial.sidebar')

<!-- Slider Section dynamic-->
    <section class="section-slide" id="home">
        <div class="wrap-slick1">
            <div class="slick1">
                @foreach($sliders as $slider)
                <div class="item-slick1 item1-slick1" style="background-image: url({{asset('uploads/slider/'.$slider->image)}});">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15"
                            data-appear="fadeInDown">
                            {{$slider->title}}
                        </span>
                        <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37"
                            data-appear="fadeInUp">
                            {{$slider->sub_title}}
                        </h2>
                        <div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">

                            <a href="{{route('menu_page.index')}}" class="btn1 flex-c-m size1 txt3 trans-0-4">
                                Look Menu
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="wrap-slick1-dots"></div>
        </div>
    </section>

 <!-- About welcome Section dynamic-->
    <section class="section-welcome bg1-pattern p-t-120 p-b-105">
        <div class="container">
            <div class="row">
                @foreach($welcomes as $welcome)
                <div class="col-md-6 p-t-45 p-b-30">
                    <div class="wrap-text-welcome t-center">
                        <span class="tit2 t-center">
                            {{$welcome->title}}
                        </span>
                        <h3 class="tit3 t-center m-b-35 m-t-5">
                            {{$welcome->header}}
                        </h3>
                        <p class="t-center m-b-22 size3 m-l-r-auto">
                            {{$welcome->sub_title}}
                        </p>
                        <a href="/" class="txt4">
                            {{$welcome->link}}
                            <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 p-b-30">
                    <div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                        <img src="{{asset('uploads/welcome/'.$welcome->image)}}" alt="IMG-OUR">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

<!-- About Section dynamic-->
    <section class="section-intro">
        <div class="header-intro parallax100 t-center p-t-135 p-b-158"
            style="background-image: url({{asset('fronted')}}/images/bg-intro-01.jpg);">
            <span class="tit2 p-l-15 p-r-15">
                Discover
            </span>
            <h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
                Pato Place
            </h3>
        </div>
        <div class="content-intro bg-white p-t-77 p-b-133">
            <div class="container">
                <div class="row">
                    @foreach($abouts as $about)
                    <div class="col-md-4 p-t-30">
                        <div class="blo1">
                            <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                                <a href="#"><img src="{{asset('uploads/about/'.$about->image)}}" alt="IMG-INTRO"></a>
                            </div>
                            <div class="wrap-text-blo1 p-t-35">
                                <a href="#">
                                    <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                        {{$about->title}}
                                    </h4>
                                </a>
                                <p class="m-b-20">
                                    {{$about->sub_title}}
                                </p>
                                <a href="#" class="txt4">
                                    Learn More
                                    <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

<!-- Menu Section dynamic-->
    <section class="section-ourmenu bg2-pattern p-t-115 p-b-120">
        <div class="container">
            <div class="title-section-ourmenu t-center m-b-22">
                <span class="tit2 t-center">
                    Discover
                </span>
                <h3 class="tit5 t-center m-t-2">
                    Our Menu
                </h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        @foreach($menus as $menu)
                        <div class="col-sm-4">

                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30" style="width: 100%; height:250px">
                                <img src="{{asset('uploads/menu/'.$menu->image)}}" alt="IMG-MENU">

                                <a href="#" class="btn2 flex-c-m txt5 ab-c-m size2 btn btn-light btn-sm">
                                   {{$menu->category}}
                                </a>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="col-sm-6">

                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="{{asset('fronted')}}/images/our-menu-05.jpg" alt="IMG-MENU">

                                <a href="#" class="btn2 flex-c-m txt5 ab-c-m size5">
                                    Dinner
                                </a>
                            </div>
                        </div>
                        <div class="col-12">

                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="{{asset('fronted')}}/images/our-menu-13.jpg" alt="IMG-MENU">

                                <a href="#" class="btn2 flex-c-m txt5 ab-c-m size6">
                                    Happy Hour
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="row">
                        <div class="col-12">

                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="{{asset('fronted')}}/images/our-menu-08.jpg" alt="IMG-MENU">

                                <a href="#" class="btn2 flex-c-m txt5 ab-c-m size7">
                                    Drink
                                </a>
                            </div>
                        </div>
                        <div class="col-12">

                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="{{asset('fronted')}}/images/our-menu-10.jpg" alt="IMG-MENU">

                                <a href="#" class="btn2 flex-c-m txt5 ab-c-m size8">
                                    Starters
                                </a>
                            </div>
                        </div>
                        <div class="col-12">

                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="{{asset('fronted')}}/images/our-menu-16.jpg" alt="IMG-MENU">

                                <a href="#" class="btn2 flex-c-m txt5 ab-c-m size9">
                                    Dessert
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

 <!-- Event Section dynamic-->
    <section class="section-event">
        <div class="wrap-slick2">
            <div class="slick2">
                <div class="item-slick2 item2-slick2"
                style="background-image: url({{asset('fronted')}}/images/bg-event-02.jpg);">
                <div class="wrap-content-slide2 p-t-115 p-b-208">
                    <div class="container">
                        
                        <div class="title-event t-center m-b-52">
                            <span class="tit2 p-l-15 p-r-15">
                                Upcomming
                            </span>
                            <h3
                                class="tit6 t-center p-l-15 p-r-15 p-t-3">
                                 Events
                            </h3>
                        </div>
                        
                        @foreach($events as $event)
                            <div class="blo2 flex-w flex-str flex-col-c-m-lg animated visible-false" data-appear="fadeInDown">

                                <a href="#" class="wrap-pic-blo2 bg2-blo2"
                                    style="background-image: url({{asset('uploads/event/'.$event->image)}});">
                                    <div
                                        class="time-event size10 txt6 effect1">
                                        <span class="txt-effect1 flex-c-m">
                                            {{$event->eventDate}}
                                        </h4>
                                        </span>
                                    </div>
                                </a>
                                <div
                                    class="wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30">
                                    <h4 class="tit7 t-center m-b-10">
                                        {{$event->header}}
                                    </h4>
                                    <p class="t-center">
                                        {{$event->title}}
                                    </p>
                                    <div
                                        class="flex-sa-m flex-w w-full m-t-40">
                                        <div class="size11 flex-col-c-m">
                                            <span
                                                class="dis-block t-center txt7 m-b-2 days">
                                                {{$event->dayDigit}}
                                            </span>
                                            <span
                                                class="dis-block t-center txt8">
                                                {{$event->dayName}}
                                            </span>
                                        </div>
                                        <div class="size11 flex-col-c-m">
                                            <span
                                                class="dis-block t-center txt7 m-b-2 hours">
                                                {{$event->houreDigit}}
                                            </span>
                                            <span
                                                class="dis-block t-center txt8">
                                                {{$event->houreName}}
                                            </span>
                                        </div>
                                        <div class="size11 flex-col-c-m">
                                            <span
                                                class="dis-block t-center txt7 m-b-2 minutes">
                                                {{$event->minDigit}}
                                            </span>
                                            <span
                                                class="dis-block t-center txt8">
                                                {{$event->minName}}
                                            </span>
                                        </div>
                                        <div class="size11 flex-col-c-m">
                                            <span
                                                class="dis-block t-center txt7 m-b-2 seconds">
                                                {{$event->secDigit}}
                                            </span>
                                            <span
                                                class="dis-block t-center txt8">
                                                {{$event->secName}}
                                            </span>
                                        </div>
                                    </div>
                                    <a href="#" class="txt4 m-t-40">
                                        View Details
                                        <i
                                            class="fa fa-long-arrow-right m-l-10"
                                            aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
            <div class="wrap-slick2-dots"></div>
        </div>
    </section>

<!-- Reservation Section dynamic-->
    <section class="section-booking bg1-pattern p-t-100 p-b-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-b-30">
                    <div class="t-center">
                        <span class="tit2 t-center">
                            Reservation
                        </span>
                        <h3 class="tit3 t-center m-b-35 m-t-2">
                            Book table
                        </h3>
                    </div>
                    <form action="{{route('reservation.store')}}" method="POST" class="wrap-form-booking">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">

                                <span for="date" class="txt9">
                                    Date
                                </span>
                                <div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text"
                                        name="date" id="date">
                                    <i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18"
                                        aria-hidden="true"></i>
                                </div>

                                <span for="time" class="txt9">
                                    Time
                                </span>
                                <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">

                                    <select class="selection-1" name="time" id="time">
                                        <option>8:00</option>
                                        <option>9:00</option>
                                        <option>9:30</option>
                                        <option>10:00</option>
                                        <option>10:30</option>
                                        <option>11:00</option>
                                        <option>11:30</option>
                                        <option>12:00</option>
                                        <option>12:30</option>
                                        <option>13:00</option>
                                        <option>13:30</option>
                                        <option>14:00</option>
                                        <option>14:30</option>
                                        <option>15:00</option>
                                        <option>15:30</option>
                                        <option>16:00</option>
                                        <option>16:30</option>
                                        <option>17:00</option>
                                        <option>17:30</option>
                                        <option>18:00</option>
                                    </select>
                                </div>

                                <span class="txt9">
                                    People
                                </span>
                                <div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">

                                    <select class="selection-1" name="person" id="person">
                                        <option>1 person</option>
                                        <option>2 people</option>
                                        <option>3 people</option>
                                        <option>4 people</option>
                                        <option>5 people</option>
                                        <option>6 people</option>
                                        <option>7 people</option>
                                        <option>8 people</option>
                                        <option>9 people</option>
                                        <option>10 people</option>
                                        <option>11 people</option>
                                        <option>12 people</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <span class="txt9">
                                    Name
                                </span>
                                <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" id="name"
                                        placeholder="Name">
                                </div>

                                <span class="txt9">
                                    Phone
                                </span>
                                <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" id="phone"
                                        placeholder="Phone">
                                </div>

                                <span class="txt9">
                                    Email
                                </span>
                                <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" id="email"
                                        placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="wrap-btn-booking flex-c-m m-t-6">

                            <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                                Book Table
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 p-b-30 p-t-18">
                    @foreach($images as $image)
                    <div class="wrap-pic-booking size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                        <img src="{{asset('uploads/image/'.$image->image)}}" alt="IMG-OUR">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

<!-- Review Section -->
    <section class="section-review p-t-115">

        <div class="title-review t-center m-b-2">
            <span class="tit2 p-l-15 p-r-15">
                Customers Say
            </span>
            <h3 class="tit8 t-center p-l-20 p-r-15 p-t-3">
                Review
            </h3>
        </div>

        <div class="wrap-slick3">
            <div class="slick3">
                <div class="item-slick3 item1-slick3">
                    <div class="wrap-content-slide3 p-b-50 p-t-50">
                        <div class="container">
                            <div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false"
                                data-appear="zoomIn">
                                <img src="{{asset('fronted')}}/images/avatar-01.jpg" alt="IGM-AVATAR">
                            </div>
                            <div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
                                <p class="t-center txt12 size15 m-l-r-auto">
                                    “ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem,
                                    mattis in pre-tium nec, fermentum viverra dui ”
                                </p>
                                <div class="star-review fs-18 color0 flex-c-m m-t-12">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                </div>
                                <div class="more-review txt4 t-center animated visible-false m-t-32"
                                    data-appear="fadeInUp">
                                    Marie Simmons ˗ New York
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-slick3 item2-slick3">
                    <div class="wrap-content-slide3 p-b-50 p-t-50">
                        <div class="container">
                            <div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false"
                                data-appear="zoomIn">
                                <img src="{{asset('fronted')}}/images/avatar-04.jpg" alt="IGM-AVATAR">
                            </div>
                            <div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
                                <p class="t-center txt12 size15 m-l-r-auto">
                                    “ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem,
                                    mattis in pre-tium nec, fermentum viverra dui ”
                                </p>
                                <div class="star-review fs-18 color0 flex-c-m m-t-12">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                </div>
                                <div class="more-review txt4 t-center animated visible-false m-t-32"
                                    data-appear="fadeInUp">
                                    Marie Simmons ˗ New York
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-slick3 item3-slick3">
                    <div class="wrap-content-slide3 p-b-50 p-t-50">
                        <div class="container">
                            <div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false"
                                data-appear="zoomIn">
                                <img src="{{asset('fronted')}}/images/avatar-05.jpg" alt="IGM-AVATAR">
                            </div>
                            <div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
                                <p class="t-center txt12 size15 m-l-r-auto">
                                    “ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem,
                                    mattis in pre-tium nec, fermentum viverra dui ”
                                </p>
                                <div class="star-review fs-18 color0 flex-c-m m-t-12">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                </div>
                                <div class="more-review txt4 t-center animated visible-false m-t-32"
                                    data-appear="fadeInUp">
                                    Marie Simmons ˗ New York
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-slick3-dots m-t-30"></div>
        </div>
    </section>

 <!-- Video Section dynamic-->
 @foreach($videos as $video)
    <section class="section-video parallax100" style="background-image: url({{asset('uploads/video/'.$video->image)}});">
        <div class="content-video t-center p-t-225 p-b-250">
            <span class="tit2 p-l-15 p-r-15">
                Discover
            </span>
            <h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
                {{$video->title}}
            </h3>
            <div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal"
                data-target="#modal-video-01">
                <div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">
                    <i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>
 @endforeach

<!-- blog Section ddynamic-->
    <section class="section-blog bg-white p-t-115 p-b-123">
        <div class="container">
            <div class="title-section-ourmenu t-center m-b-22">
                <span class="tit2 t-center">
                    Latest News
                </span>
                <h3 class="tit5 t-center m-t-2">
                    The Blog
                </h3>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-md-4 p-t-30">
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                            <a href="{{route('blog_details_page.index')}}"><img src="{{asset('uploads/blog/'.$blog->image)}}" alt="IMG-INTRO"></a>
                            <div class="time-blog">
                                {{$blog->date}}
                            </div>
                        </div>
                        <div class="wrap-text-blo1 p-t-35">
                            <a href="{{route('blog_details_page.index')}}">
                                <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    {{$blog->title}}
                                </h4>
                            </a>
                            <p class="m-b-20">
                                {{$blog->sub_title}}
                            </p>
                            <a href="{{route('blog_details_page.index')}}" class="txt4">
                                Continue Reading
                                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

<!-- User signup Section -->
    <div class="section-signup bg1-pattern p-t-85 p-b-85">
        <form action="{{route('usersignup.signup')}}" method="POST" class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
            @csrf

            <span class="txt5 m-10">
                Specials Sign up
            </span>
            <div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" id="email"
                    placeholder="Email Adrress">
                <i class="fa fa-envelope ab-r-m m-r-18" aria-hidden="true"></i>
            </div>

            <button type="submit" name="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
                Sign-up
            </button>
        </form>
    </div>

<!-- Footer Section dynamic-->
@include('fronted.partial.footer')

<!-- Dropdown Section dynamic-->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>

    <div id="dropDownSelect1"></div>

    <div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document" data-dismiss="modal">
            <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>
            <div class="wrap-video-mo-01">
                <div class="w-full wrap-pic-w op-0-0"><img src="{{asset('fronted')}}/images/icons/video-16-9.jpg" alt="IMG"></div>
                <div class="video-mo-01">
                    @foreach($videos as $video)
                    <iframe src="{{$video->url}}"
                        allowfullscreen></iframe>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Main script-->
@include('fronted.partial.script')