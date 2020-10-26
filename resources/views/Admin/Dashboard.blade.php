@extends('Admin.layouts.app')
@section('tittle' , 'Dashboard')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Welcome {{ Auth::user()->name }}!</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">Dashboard</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- *************************************************************** -->
    <!-- Start Earnings & Carousel Widget -->
    <!-- *************************************************************** -->
    <div class="row align-items-stretch">
        <!-- twitter timeline-->
        <div class="col-xl-9 col-lg-8 col-md-12 d-flex align-items-stretch justify-content-strech">
            <div class="card w-100">
                <a class="twitter-timeline" data-width="1500" data-height="500" data-dnt="true" data-theme="light" href="https://twitter.com/UIPMoviesID?ref_src=twsrc%5Etfw">Tweets by UIPMoviesID</a>
            </div>
            <!-- endtwitter timeline-->
        </div>
        <div class="col-xl-3 col-lg-4 col-md-12 d-flex align-items-stretch justify-content-strech">
            <div class="card w-100">
                <div class="card-body position-relative">
                    <h4 class="card-title mb-4">Latest Update</h4>
                    <div id="carouselExampleFade" class="carousel slide status-carousel" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('assets/images/widgets/widget-carousel.jpg')}}" class="status-img img-fluid mb-1 rounded d-block w-100" alt="img-1" />
                                <h4 class="card-title mt-4">Nkike Shoes</h4>
                                <p class="text-muted">Lorem ipsum dolor sit amet, conse adipiscing spacing
                                    goes...</p>
                                <div class="d-flex align-items-center">
                                    <h6 class="font-weight-normal">Progress</h6>
                                    <div class="ml-auto">
                                        <h6 class="font-weight-normal">82%</h6>
                                    </div>
                                </div>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('assets/images/widgets/widget-carousel.jpg')}}" class="status-img img-fluid mb-1 rounded d-block w-100" alt="img-1" />
                                <h5 class="card-title mt-4">Nkike Shoes</h5>
                                <p class="text-muted">Lorem ipsum dolor sit amet, conse adipiscing spacing
                                    goes...</p>
                                <div class="d-flex align-items-center">
                                    <h6 class="font-weight-normal">Progress</h6>
                                    <div class="ml-auto">
                                        <h6 class="font-weight-normal">82%</h6>
                                    </div>
                                </div>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('assets/images/widgets/widget-carousel.jpg')}}" class="status-img img-fluid mb-1 rounded d-block w-100" alt="img-1" />
                                <h5 class="card-title mt-4">Nkike Shoes</h5>
                                <p class="text-muted">Lorem ipsum dolor sit amet, conse adipiscing spacing
                                    goes...</p>
                                <div class="d-flex align-items-center">
                                    <h6 class="font-weight-normal">Progress</h6>
                                    <div class="ml-auto">
                                        <h6 class="font-weight-normal">82%</h6>
                                    </div>
                                </div>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span aria-hidden="true"><i class="fas fa-chevron-left text-dark font-12"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span aria-hidden="true"><i class="fas fa-chevron-right text-dark font-12"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- facebook timeline-->
    <div class="row">
        <div class="col-md-8">
            <div id="fb-root"></div>
            <div class="fb-page" data-href="https://id-id.facebook.com/BoxOfficeMovieIndonesia" data-tabs="timeline" data-width="2500" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://id-id.facebook.com/BoxOfficeMovieIndonesia" class="fb-xfbml-parse-ignore"><a href="https://id-id.facebook.com/BoxOfficeMovieIndonesia">Box Office Movie Indonesia</a></blockquote>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card w-100 h-500">
                <div class="card-body position-relative">
                    <h4 class="card-title mb-4">New Subscriber</h4>
                    <div id="carouselExampleFade" class="carousel slide status-carousel" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('assets/images/widgets/widget-carousel.jpg')}}" class="status-img img-fluid mb-1 rounded d-block w-100" alt="img-1" />
                                <h4 class="card-title mt-4">Nkike Shoes</h4>
                                <p class="text-muted">Lorem ipsum dolor sit amet, conse adipiscing spacing
                                    goes...</p>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('assets/images/widgets/widget-carousel.jpg')}}" class="status-img img-fluid mb-1 rounded d-block w-100" alt="img-1" />
                                <h5 class="card-title mt-4">Nkike Shoes</h5>
                                <p class="text-muted">Lorem ipsum dolor sit amet, conse adipiscing spacing
                                    goes...</p>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('assets/images/widgets/widget-carousel.jpg')}}" class="status-img img-fluid mb-1 rounded d-block w-100" alt="img-1" />
                                <h5 class="card-title mt-4">Nkike Shoes</h5>
                                <p class="text-muted">Lorem ipsum dolor sit amet, conse adipiscing spacing
                                    goes...</p>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span aria-hidden="true"><i class="fas fa-chevron-left text-dark font-12"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span aria-hidden="true"><i class="fas fa-chevron-right text-dark font-12"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- endfacebook timeline-->

    <!-- *************************************************************** -->
    <!-- End Earnings & Carousel Widget -->
    <!-- *************************************************************** -->
    <!-- *************************************************************** -->
    <!-- *************************************************************** -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
@endsection