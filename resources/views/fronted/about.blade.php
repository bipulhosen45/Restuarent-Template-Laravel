@php
    $topbars = App\Models\Topbar::all();
    $logos = App\Models\Logo::all();
    $galleries = App\Models\Gallery::all();
    $contacts = App\Models\Contact::all();
    $footers = App\Models\Footer::all();
    $welcomes = App\Models\Welcome::all();
    $videos = App\Models\Video::all();
    $images = App\Models\Image::all();
@endphp

<!--topbar section -->
@include('fronted.partial.topbar')

<body class="animsition">
<!--navbar section -->
    @include('fronted.partial.navbar')
<!--sidebar section -->
    @include('fronted.partial.sidebar')

    @foreach($welcomes as $welcome)

    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url({{asset('fronted')}}/images/bg-title-page-03.jpg);">
        <h2 class="tit6 t-center">
            About Us
        </h2>
    </section>
  

    <section class="bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15">
        <span class="tit2 t-center">
            {{$welcome->title}}
        </span>
        <h3 class="tit3 t-center m-b-35 m-t-5">
            {{$welcome->link}}
        </h3>
        <p class="t-center size32 m-l-r-auto">
            {{$welcome->sub_title}}
        </p>
    </section>
    @endforeach

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
    <section class="bg1-pattern p-t-120 p-b-105">
        <div class="container">
            
            @foreach($welcomes as $welcome)
            <div class="row">
                <div class="col-md-6 p-t-45 p-b-30">
                    <div class="wrap-text-delicious t-center">
                        <span class="tit2 t-center">
                            Delicious
                        </span>
                        <h3 class="tit3 t-center m-b-35 m-t-5">
                            RECIPES
                        </h3>
                        <p class="t-center m-b-22 size3 m-l-r-auto">
                            {{$welcome->sub_title}}
                        </p>
                    </div>
                </div>
                <div class="col-md-6 p-b-30">
                    <div class="wrap-pic-delicious size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                        <img src="{{asset('uploads/welcome/'.$welcome->image)}}" alt="IMG-OUR">
                    </div>
                </div>
            </div>
            @endforeach
            @foreach($images as $image)
            <div class="row p-t-170">
                <div class="col-md-6 p-b-30">
                    <div class="wrap-pic-romantic size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                        <img src="{{asset('uploads/image/'.$image->image)}}" alt="IMG-OUR">
                    </div>
                </div>
                <div class="col-md-6 p-t-45 p-b-30">
                    <div class="wrap-text-romantic t-center">
                        <span class="tit2 t-center">
                            Romantic
                        </span>
                        <h3 class="tit3 t-center m-b-35 m-t-5">
                            Restaurant
                        </h3>
                        <p class="t-center m-b-22 size3 m-l-r-auto">
                            Fusce iaculis, quam quis volutpat cursus, tellus quam varius eros, in euismod lorem nisl in
                            ante. Maecenas imperdiet vulputate dui sit amet vestibulum. Nulla quis suscipit nisl.
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
   
    <div class="parallax0 parallax100" style="background-image: url({{asset('fronted')}}/images/bg-cover-video-02.jpg);">
        <div class="overlay0-parallax t-center size33"></div>
    </div>

    <section class="section-chef bgwhite p-t-115 p-b-95">
        <div class="container t-center">
            <span class="tit2 t-center">
                Meet Our
            </span>
            <h3 class="tit5 t-center m-b-50 m-t-5">
                Chef
            </h3>
            <div class="row">
                <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">

                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                            <a href="#"><img src="{{asset('fronted')}}/images/avatar-02.jpg" alt="IGM-AVATAR"></a>
                        </div>
                        <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
                            <a href="#" class="txt34 dis-block p-b-6">
                                Peter Hart
                            </a>
                            <span class="dis-block t-center txt35 p-b-25">
                                Chef
                            </span>
                            <p class="t-center">
                                Donec porta eleifend mauris ut effici-tur. Quisque non velit vestibulum, lob-ortis mi
                                eget, rhoncus nunc
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">

                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                            <a href="#"><img src="{{asset('fronted')}}/images/avatar-03.jpg" alt="IGM-AVATAR"></a>
                        </div>
                        <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
                            <a href="#" class="txt34 dis-block p-b-6">
                                Joyce Bowman
                            </a>
                            <span class="dis-block t-center txt35 p-b-25">
                                Chef
                            </span>
                            <p class="t-center">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultricies felis a sem
                                tempus tempus.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">

                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                            <a href="#"><img src="{{asset('fronted')}}/images/avatar-05.jpg" alt="IGM-AVATAR"></a>
                        </div>
                        <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
                            <a href="#" class="txt34 dis-block p-b-6">
                                Peter Hart
                            </a>
                            <span class="dis-block t-center txt35 p-b-25">
                                Chef
                            </span>
                            <p class="t-center">
                                Phasellus aliquam libero a nisi varius, vitae placerat sem aliquet. Ut at velit nec
                                ipsum iaculis posuere quis in sapien
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-signup bg1-pattern p-t-85 p-b-85">
        <form action="{{route('usersignup.signup')}}" method="POST" class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
            @csrf
            <span class="txt5 m-10">
                Specials Sign up
            </span>
            <div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" id="email" name="email"
                    placeholder="Email Adrress">
                <i class="fa fa-envelope ab-r-m m-r-18" aria-hidden="true"></i>
            </div>

            <button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
                Sign-up
            </button>
        </form>
    </div>
<!--Footer section -->
    @include('fronted.partial.footer')

    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>

    <div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document" data-dismiss="modal">
            <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>
            <div class="wrap-video-mo-01">
                <div class="w-full wrap-pic-w op-0-0"><img src="{{asset('fronted')}}/images/icons/video-16-9.jpg" alt="IMG"></div>
                <div class="video-mo-01">
                    <iframe src="https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

<!--Script section -->
@include('fronted.partial.script')
