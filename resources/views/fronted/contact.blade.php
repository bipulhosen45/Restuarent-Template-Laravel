@php
    $topbars = App\Models\Topbar::all();
    $logos = App\Models\Logo::all();
    $galleries = App\Models\Gallery::all();
    $gallery_categories = App\Models\GalleryCategory::all();
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

    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url({{asset('fronted')}}/images/bg-title-page-02.jpg);">
        <h2 class="tit6 t-center">
            Contact
        </h2>
    </section>

    <section class="section-contact bg1-pattern p-t-90 p-b-113">

        <div class="container">
            <div class="map bo8 bo-rad-10 of-hidden">
                <div class="contact-map size37" id="google_map" data-map-x="40.704644" data-map-y="-74.011987"
                    data-pin="{{asset('fronted')}}/images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8791241459107!2d90.38311007492406!3d23.751689488727507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8afc5d28667%3A0x7e461056d052d494!2sPanthapath%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1701882421730!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="container">
            <h3 class="tit7 t-center p-b-62 p-t-105">
                Send us a Message
            </h3>
            <form action="{{ route('usersignup.signup') }}" method="POST" class="wrap-form-reservation size22 m-l-r-auto">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <span class="txt9">Name</span>
                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <span class="txt9"> Email</span>
                        <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <span class="txt9"> Phone</span>
                        <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-12">
                        <span class="txt9">Message</span>
                        <textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" name="message" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="wrap-btn-booking flex-c-m m-t-13">
                    <button type="submit" class="btn3 flex-c-m size36 txt11 trans-0-4">
                        Submit
                    </button>
                </div>
            </form>
            <div class="row p-t-135">
                <div class="col-sm-8 col-md-4 col-lg-4 m-l-r-auto p-t-30">
                    <div class="dis-flex m-l-23">
                        <div class="p-r-40 p-t-6">
                            <img src="{{asset('fronted')}}/images/icons/map-icon.png" alt="IMG-ICON">
                        </div>
                        <div class="flex-col-l">
                            <span class="txt5 p-b-10">
                                Location
                            </span>
                            @foreach($contacts as $contact)
                            <span class="txt23 size38">
                                {{$contact->address}}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-3 col-lg-4 m-l-r-auto p-t-30">
                    <div class="dis-flex m-l-23">
                        <div class="p-r-40 p-t-6">
                            <img src="{{asset('fronted')}}/images/icons/phone-icon.png" alt="IMG-ICON">
                        </div>
                        <div class="flex-col-l">
                            <span class="txt5 p-b-10">
                                Call Us
                            </span>
                            <span class="txt23 size38">
                                {{$contact->phone}}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-5 col-lg-4 m-l-r-auto p-t-30">
                    <div class="dis-flex m-l-23">
                        <div class="p-r-40 p-t-6">
                            <img src="{{asset('fronted')}}/images/icons/clock-icon.png" alt="IMG-ICON">
                        </div>
                        <div class="flex-col-l">
                            <span class="txt5 p-b-10">
                                Opening Hours
                            </span>
                            <span class="txt23 size38">
                                {{$contact->time}} <br/> {{$contact->day}}
                            </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Footer section -->
    @include('fronted.partial.footer')

    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>

    <div id="dropDownSelect1"></div>

      <!--Script section -->
      @include('fronted.partial.script')