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
        style="background-image: url({{ asset('fronted') }}/images/bg-title-page-02.jpg);">
        <h2 class="tit6 t-center">
            Gallery
        </h2>
    </section>

    <div class="section-gallery p-t-118 p-b-100">
        <div
            class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
            <button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
                All Photo
            </button>
            @foreach ($gallery_categories as $gallery_categories)
                <button class="label-gallery txt26 trans-0-4 " data-bs-toggle="offcanvas" data-bs-target="#{{$gallery_categories->slug}}" aria-controls="offcanvasExample">
                    {{$gallery_categories->name}}
                </button>
            @endforeach
        </div>

        <div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25" >
            @foreach ($galleries as $gallery)
                <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events" id="{{$gallery->gallery_categories->slug}}">
                <img src="{{asset('uploads/gallery/'.$gallery->image) }}" alt="IMG-GALLERY" width="100%" style="height: 300px!important;">
                    <div class="overlay-item-gallery trans-0-4 flex-c-m">
                        <a class="btn-show-gallery flex-c-m fa fa-search" href="{{ asset('uploads/gallery/' . $gallery->image) }}" data-lightbox="gallery"></a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination flex-c-m flex-w p-l-15 p-r-15 m-t-24 m-b-50">
            <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
            <a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
            <a href="#" class="item-pagination flex-c-m trans-0-4">3</a>
        </div>
    </div>

    <!--signup section -->
    <div class="section-signup bg1-pattern p-t-85 p-b-85">
        <form action="{{ route('usersignup.signup') }}" method="POST"
            class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
            @csrf
            <span class="txt5 m-10">
                Specials Sign up
            </span>
            <div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email-address"
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


    <!--Script section -->
    @include('fronted.partial.script')
