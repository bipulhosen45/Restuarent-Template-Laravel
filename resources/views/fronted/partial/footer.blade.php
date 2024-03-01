<footer class="bg1">
    <div class="container p-t-40 p-b-70">
        <div class="row">
            @foreach($contacts as $contact)
            <div class="col-sm-6 col-md-4 p-t-50">

                <h4 class="txt13 m-b-33">
                    Contact Us
                </h4>
                <ul class="m-b-70">
                    <li class="txt14 m-b-14">
                        <i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i> 
                        {{$contact->address}}
                    </li>
                    <li class="txt14 m-b-14">
                        <i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i> 
                        {{$contact->phone}}
                    </li>
                    <li class="txt14 m-b-14">
                        <i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
                        <a href="" class="__cf_email__">{{$contact->email}}</a>
                    </li>
                </ul>

                <h4 class="txt13 m-b-32">
                    Opening Times
                </h4>
                <ul>
                    <li class="txt14">
                        {{$contact->time}}
                    </li>
                    <li class="txt14">
                        {{$contact->day}}
                    </li>
                </ul>
            </div>
            @endforeach
            <div class="col-sm-6 col-md-4 p-t-50">

                <h4 class="txt13 m-b-33">
                    Latest twitter
                </h4>

                @foreach($footers as $footer)
                <div class="m-b-25">
                    <span class="fs-13 color2 m-r-5">
                        <i class="fa fa-{{$footer->icon}}" aria-hidden="true"></i>
                    </span>
                    <a href="#" class="txt15">
                        {{$footer->title}}
                    </a>
                    <p class="txt14 m-b-18 ">
                        {{$footer->sub_title}}
                        <a href="#" class="txt15 d-block">
                            {{$footer->url}}
                        </a>
                    </p>
                    <span class="txt16">
                        {{$footer->date}}
                    </span>
                </div>
                @endforeach
            </div>
            <div class="col-sm-6 col-md-4 p-t-50">

                <h4 class="txt13 m-b-38">
                    Gallery
                </h4>

                <div class="wrap-gallery-footer flex-w">
                    @foreach($galleries as $gallery)
                    <a class="item-gallery-footer wrap-pic-w" href="{{asset('uploads/gallery/'.$gallery->image)}}"
                        data-lightbox="gallery-footer">
                        <img src="{{asset('uploads/gallery/'.$gallery->image)}}" width="100%" alt="GALLERY" style="height: 65px !important;">
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="end-footer bg2">
        <div class="container">
            <div class="flex-sb-m flex-w p-t-22 p-b-22">
                <div class="p-t-5 p-b-5">
                    @foreach($topbars as $topbar)
                    <a href="#" class="fs-15 c-white"><i class="fa fa-{{$topbar->icon}} m-l-18"
                            aria-hidden="true"></i></a>
                    @endforeach
                </div>
                <div class="txt17 p-r-20 p-t-5 p-b-5">
                    Copyright by PATO &copy; 2023.
                    <a href="#" class="txt18">
                        All Right Reserved.
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>