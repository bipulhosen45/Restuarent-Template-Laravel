<aside class="sidebar trans-0-4">
    <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>
    <ul class="menu-sidebar p-t-95 p-b-70">
        <li class="t-center m-b-13">
            <a href="/" class="txt19">Home</a>
        </li>
        <li class="t-center m-b-13">
            <a href="{{route('menu_page.index')}}" class="txt19">Menu</a>
        </li>
        <li class="t-center m-b-13">
            <a href="{{route('gallery_page.index')}}" class="txt19">Gallery</a>
        </li>
        <li class="t-center m-b-13">
            <a href="{{route('about_page.index')}}" class="txt19">About</a>
        </li>
        <li class="t-center m-b-13">
            <a href="{{route('blog_page.index')}}" class="txt19">Blog</a>
        </li>
        <li class="t-center m-b-13">
            <a href="{{route('contact_page.index')}}" class="txt19">Contact</a>
        </li>
        <li class="t-center m-b-13">
            <a href="{{route('login')}}" class="txt19 btn btn-primary btn-sm text-whtie">Sign In</a>
        </li>
        <li class="t-center m-b-33">
            <a href="{{route('register')}}" class="txt19 btn btn-warning btn-sm text-whtie">Sign Up</a>
        </li>
        <li class="t-center">

            <a href="{{route('reservation_page.index')}}" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
                Reservation
            </a>
        </li>
    </ul>
    <div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
        <h4 class="txt20 m-b-33">
            Gallery
        </h4>
    <!-- Gallery section dynamic-->
        <div class="wrap-gallery-sidebar flex-w">
            @foreach($galleries as $gallery)
            <a class="item-gallery-sidebar wrap-pic-w" href="{{asset('uploads/gallery/'.$gallery->image)}}"
                data-lightbox="gallery-footer">
                <img src="{{asset('uploads/gallery/'.$gallery->image)}}" alt="GALLERY" width="100%" style="height: 55px !important;">
            </a>
         @endforeach
        </div>
    </div>
</aside>