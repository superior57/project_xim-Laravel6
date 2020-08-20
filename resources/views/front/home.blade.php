@extends('master')

@push('styles')
<style>
    

    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function() {
 
 $("#owl-demo").owlCarousel({

     navigation : true, // Show next and prev buttons
     slideSpeed : 300,
     paginationSpeed : 400,
     singleItem:true

     // "singleItem:true" is a shortcut for:
     // items : 1, 
     // itemsDesktop : false,
     // itemsDesktopSmall : false,
     // itemsTablet: false,
     // itemsMobile : false

 });

});
</script>    
@endpush

@section('header')
@include('layouts.header')
@endsection

@section('content')

    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/home/hero-img.png');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center">
                <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text text-left">
                        <h1 class="mt-5 mb-5">El Futuro De La <br> Logistica Mexicana</h1>
                        <p class="mb-5" style="font-size: 18px;">Sed Ut Perspiciatis Unde Omnis Iste Natus Error Sit Voluptate <br> Accusantium Doloremque Laudantium.</p>
                        <p class="mb-5"><button class="btn btn-primary btn-learn-more">Learn More <span class="icon-long-arrow-right pl-1"></span></button></p>
                        {{-- <button class="btn btn-arrow-down"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></button> --}}
                        <div class="mouse">
                            <a href="#" class="mouse-icon ">
                                <div class="btn-arrow-down"><span class="ion-ios-arrow-round-down"></span></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pb" style="margin-bottom: 150px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <h2 class="mb-3">Sed Ut Perspiciatis <br> Unde Omnis Iste Natus</h2>
                    <h3 class="mb-5">Sed ut perspiciatis unde omnis iste natus error sit <br> voluptate accusantium doloremque</h3>
                    <hr class="container-hr">
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media sed-card block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon mb-5 d-flex align-items-center justify-content-center">
                                <span><img src="{{ asset('images/home/media-ellips.png') }}" alt="SED" width="35"></span></div>
                            <h3>Sed Ut Perspiciatis <br> Unde Omnis Iste Natus</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus <br> error sit voluptate accusantium doloremque</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media sed-card block-6 services services-2 active">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon mb-5 d-flex align-items-center justify-content-center">
                                <span><img src="{{ asset('images/home/white-media-ellips.png') }}" alt="SED" width="35"></span></div>
                            <h3>Sed Ut Perspiciatis <br> Unde Omnis Iste Natus</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus <br> error sit voluptate accusantium doloremque</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media sed-card block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon mb-5 d-flex align-items-center justify-content-center">
                                <span><img src="{{ asset('images/home/media-ellips.png') }}" alt="SED" width="35"></span></div>
                            <h3>Sed Ut Perspiciatis <br> Unde Omnis Iste Natus</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus <br> error sit voluptate accusantium doloremque</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section goto-here section-reviews mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="man-photo ftco-animate" style="background-image: url('{{ asset('images/home/man-1.jpg') }}');">
                        <div class="quote-area">
                            <span class="icon-quote-left"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="description mb-5">
                        <p class="mb-5">totam rem aperiam, eaque ipsa quae ab illo inventore 
                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
                            sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
                            adipisci velit, sed quia non numquam eius </p>
                        <h3>- Jhon Doe</h3>
                        <h4> <span>Ceo @</span>  ExtraTruck</h4>
                    </div>                    
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-section section-reviews">
        <div class="container">
          <div class="row ftco-animate">
            <div class="col-md-12">
                <div id="owl-demo" class="owl-carousel owl-theme"> 
                    <div class="item"><img src="assets/fullimage1.jpg" alt="The Last of us"></div>
                    <div class="item"><img src="assets/fullimage2.jpg" alt="GTA V"></div>
                    <div class="item"><img src="assets/fullimage3.jpg" alt="Mirror Edge"></div>                   
                </div>
            </div>
          </div>
        </div>
      </section> --}}

    <section class="ftco-section ftco-degree-bg services-section">
        <div class="overlay" style="background-image: url({{ asset('images/home/desktop-1.png') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 text-left heading-section heading-section-dark ftco-animate pr-5">
                    <h2 class="mb-5">Sed Ut Unde <br> Omnis Iste Natus</h2>
                    <h4 class="pr-5 mb-5">Sed ut perspiciatis unde omnis <br> iste natus error sit voluptate</h4>
                    <div class="row mb-5">
                        <div class="col-md-4">
                            <hr class="container-hr">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-learn-more">Learn More <span class="icon-long-arrow-right pl-1"></span></button>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section mb-5">
        <div class="overlay" style="position: absolute;
        top: 10rem;
        left: 0;
        right: auto;
        bottom: 6rem;
        content: '';
        opacity: 1;
        width: 528px;
  height: 631px;
  background-color: #1b30ed;
        "></div>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center my-md-5 align-items-center"
                    style="background-image: url(images/home/screen-1.png); z-index: 1; margin-50px;">
                </div>
                <div class="col-md-6 wrap-about ftco-animate">
                    <div class="heading-section p-5 text-center" style="">
                        <h2 class="mb-5" style="margin-top: 100px;">Sed Ut Unde <br> Omnis Iste Natus</h2>
                        <h4 class="pr-5 mb-5">Sed ut perspiciatis unde omnis <br> iste natus error sit voluptate</h4>
                        <hr class="container-hr mb-5">
                        <button class="btn btn-primary btn-learn-more">Learn More <span class="icon-long-arrow-right pl-1"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- <section class="ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-4 mb-4">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="305">0</strong>
                            <span>Area <br>Population</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-4 mb-4">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="1090">0</strong>
                            <span>Total <br>Properties</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-4 mb-4">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="209">0</strong>
                            <span>Average <br>House</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-4 mb-4">
                        <div class="text d-flex align-items-center">
                            <strong class="number" data-number="67">0</strong>
                            <span>Total <br>Branches</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-3">Happy Clients</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-agent ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Agents</span>
                    <h2 class="mb-4">Our Agents</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ftco-animate">
                    <div class="agent">
                        <div class="img">
                            <img src="images/team-1.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">James Stallon</a></h3>
                            <p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10
                                    Properties</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="agent">
                        <div class="img">
                            <img src="images/team-2.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">James Stallon</a></h3>
                            <p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10
                                    Properties</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="agent">
                        <div class="img">
                            <img src="images/team-3.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">James Stallon</a></h3>
                            <p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10
                                    Properties</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="agent">
                        <div class="img">
                            <img src="images/team-4.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">James Stallon</a></h3>
                            <p class="h-info"><span class="position">Listing</span> <span class="details">&mdash; 10
                                    Properties</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2>Recent Blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text">
                            <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                            <div class="meta mb-3">
                                <div><a href="#">July. 24, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <a href="blog-single.html" class="block-20 img"
                                style="background-image: url('images/image_1.jpg');">
                            </a>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text">
                            <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                            <div class="meta mb-3">
                                <div><a href="#">July. 24, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <a href="blog-single.html" class="block-20 img"
                                style="background-image: url('images/image_2.jpg');">
                            </a>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text">
                            <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                            <div class="meta mb-3">
                                <div><a href="#">July. 24, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <a href="blog-single.html" class="block-20 img"
                                style="background-image: url('images/image_3.jpg');">
                            </a>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text">
                            <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                            <div class="meta mb-3">
                                <div><a href="#">July. 24, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <a href="blog-single.html" class="block-20 img"
                                style="background-image: url('images/image_4.jpg');">
                            </a>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection

@section('footer')
@include('layouts.footer')
@endsection
