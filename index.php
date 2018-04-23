<?include "cms/header.php"?>

        <!-- Page Inner -->
        <section class="image-bg lis-grediant grediant-tb">
            <div class="background-image-maker"></div>
            <div class="holder-image">
                <img src="/cms/images/bg9.jpg" alt="" class="img-fluid d-none">
            </div>
            <div class="container">
                <div class="row justify-content-center pt-5">
                    <div class="col-12 col-md-10 text-center wow fadeInUp">
                        <div class="heading pb-5">
                            <h1 class="display-4">Найдите свое жилье</h1>
                            <h4 class="font-weight-normal mb-0">Изучайте достопримечательности, мероприятия и многое другое</h4>
                        </div>
                        <ul class="nav nav-tabs flex-column flex-sm-row" id="myTab" role="tablist">
                            <?/*<li class="nav-item mr-md-1">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-map-marker pr-1"></i> Места</a>
                            </li>
                            <li class="nav-item mr-md-1">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-microphone pr-1"></i> События</a>
                            </li>*/?>
                            <li class="nav-item mr-md-1">
                                <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="true"><i class="fa fa-home pr-1"></i> Жилье</a>
                            </li>
                        </ul>
                        <div class="tab-content bg-white p-5 rounded-bottom rounded-right" id="myTabContent">
                            <?/*
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4" placeholder="What are you looking for?" />
                                            <div class="lis-search">
                                                <i class="fa fa-search lis-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4" placeholder="Location" />
                                            <div class="lis-search">
                                                <i class="fa fa-map-o lis-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="form-group">
                                            <select class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4">
                                                <option> All Categories</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                            <div class="lis-search">
                                                <i class="fa fa-tags lis-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <a href="#" class="btn btn-primary btn-block btn-lg"><i class="fa fa-search pr-1"></i> Search</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4" placeholder="What are you looking for?" />
                                            <div class="lis-search">
                                                <i class="fa fa-search lis-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4" placeholder="Location" />
                                            <div class="lis-search">
                                                <i class="fa fa-map-o lis-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="form-group">
                                            <select class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4">
                                                <option> All Categories</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                            <div class="lis-search">
                                                <i class="fa fa-tags lis-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <a href="#" class="btn btn-primary btn-block btn-lg"><i class="fa fa-search pr-1"></i> Search</a>
                                    </div>
                                </div>
                            </div>*/?>
                            <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4" placeholder="Что вы ищете?" />
                                            <div class="lis-search">
                                                <i class="fa fa-search lis-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4" placeholder="Где находится" />
                                            <div class="lis-search">
                                                <i class="fa fa-map-o lis-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="form-group">
                                            <select class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4">
                                                <option> Все категории</option>
                                                <option>Квартира полностью</option>
                                                <option>Комната</option>
                                                <option>Дом</option>
                                            </select>
                                            <div class="lis-search">
                                                <i class="fa fa-tags lis-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <a href="#" class="btn btn-primary btn-block btn-lg"><i class="fa fa-search pr-1"></i> Поиск</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Page Inner -->

        <!-- Categories -->
        <section class="lis-grediant grediant-tb-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 text-center">
                        <div class="heading pb-4">
                            <h2 class="f-weight-500">Discover Our Featured Categories.</h2>
                            <h5 class="lis-light">Find the best places</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-4 col-lg-2 wow fadeInUp mb-4 mb-lg-0 text-center">
                        <a href="#" class="text-white">
                            <div class="lis-categories lis-bg1 rounded lis-font-poppins py-4">
                                <div class="text-white mb-2 h2"><i class="icofont icofont-hotel-alt"></i></div> Hotel
                                <div class="categories-listing lis-absolute lis-left-0 lis-right-0 invisible lis-font-roboto">
                                    11 Listing
                                </div>
                            </div> 
                        </a>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-2 wow fadeInUp mb-4 mb-lg-0 text-center">
                        <a href="#" class="text-white">
                            <div class="lis-categories lis-bg2 rounded lis-font-poppins py-4">
                                <div class="text-white mb-2 h2"><i class="icofont icofont-beer"></i></div>
                                Bar & Club
                                <div class="categories-listing lis-absolute lis-left-0 lis-right-0 invisible lis-font-roboto">
                                    12 Listing
                                </div>
                            </div> 
                        </a>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-2 wow fadeInUp mb-4 mb-lg-0 text-center">
                        <a href="#" class="text-white">
                            <div class="lis-categories lis-bg3 rounded lis-font-poppins py-4">
                                <div class="text-white mb-2 h2"><i class="icofont icofont-radio-mic"></i></div>
                                Entertainment
                                <div class="categories-listing lis-absolute lis-left-0 lis-right-0 invisible lis-font-roboto">
                                    13 Listing
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-2 wow fadeInUp mb-4 mb-sm-0 text-center">
                        <a href="#" class="text-white">
                            <div class="lis-categories lis-bg4 rounded lis-font-poppins py-4">
                                <div class="text-white mb-2 h2"><i class="icofont icofont-fast-food"></i></div>
                                Restaurant 
                                <div class="categories-listing lis-absolute lis-left-0 lis-right-0 invisible lis-font-roboto">
                                    14 Listing
                                </div>
                            </div> 
                        </a>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-2 wow fadeInUp mb-4 mb-sm-0 text-center">
                        <a href="#" class="text-white">
                            <div class="lis-categories lis-bg5 rounded lis-font-poppins py-4">
                                <div class="text-white mb-2 h2"><i class="icofont icofont-travelling"></i></div>
                                Tour & Travels
                                <div class="categories-listing lis-absolute lis-left-0 lis-right-0 invisible lis-font-roboto">
                                    15 Listing
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-2 wow fadeInUp text-center">
                        <a href="#" class="text-white">
                            <div class="lis-categories lis-bg6 rounded lis-font-poppins py-4">
                                <div class="text-white mb-2 h2"><i class="icofont icofont-medical-sign-alt"></i></div>
                                Medical
                                <div class="categories-listing lis-absolute lis-left-0 lis-right-0 invisible lis-font-roboto">
                                    16 Listing
                                </div>
                            </div> 
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center mt-5">
                        <a href="#" class="btn btn-success btn-default">View More Featured Categories</a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Categories -->

        <!-- Visited Places -->
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 text-center">
                        <div class="heading pb-4">
                            <h2 class="f-weight-500">Most Visited Places</h2>
                            <h5 class="lis-light">Discover & connect with top-rated local businesses</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid px-0">
                <div class="fullwidth-carousel-container center slider">
                    <div>
                        <div class="card lis-brd-light text-center text-lg-left">
                            <a href="#">
                                <div class="lis-grediant grediant-tb-light2 lis-relative modImage rounded-top">
                                    <img src="/cms/images/img1.jpg" alt="" class="img-fluid rounded-top w-100" />
                                </div>
                                <div class="lis-absolute lis-right-20 lis-top-20">
                                    <div class="lis-post-meta border border-white text-white rounded lis-f-14">Open</div>
                                </div>
                            </a>     
                            <div class="card-body pt-0">
                                <div class="media d-block d-lg-flex lis-relative">
                                    <img src="/cms/images/card-logo.png" alt="" class="lis-mt-minus-15 img-fluid d-lg-flex mx-auto mr-lg-3 mb-4 mb-lg-0 border lis-border-width-2 rounded-circle border-white" width="80" />
                                    <div class="media-body align-self-start mt-2">
                                        <h6 class="mb-0 lis-font-weight-600"><A href="#" class="lis-dark">Chico Express Car Taxi and Limo Service</A></h6>
                                    </div>
                                </div>
                                <ul class="list-unstyled my-4 lis-line-height-2">
                                    <li><i class="fa fa-phone pr-2"></i> +88 25 5894 2589</li>
                                    <li><i class="fa fa-map-o pr-2"></i> First Street, New York, USA</li>
                                </ul>
                                <div class="clearfix">
                                    <div class="float-none float-lg-left mb-3 mb-lg-0 mt-1">
                                        <A href="#" class="text-white"><i class="icofont icofont-travelling px-2 lis-bg5 py-2 lis-rounded-circle-50 lis-f-14"></i></A>
                                        <A href="#" class="lis-id-info lis-light p-2 lis-rounded-circle-50 lis-f-14">1 More...</A>
                                    </div>
                                    <div class="float-none float-lg-right mt-1">
                                        <A href="#" class="lis-light lis-f-14"><i class="fa fa-envelope-o lis-id-info  lis-rounded-circle-50 text-center"></i></A>
                                        <A href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info  lis-rounded-circle-50 text-center"></i></A>
                                        <A href="#" class="lis-green-light text-white text-white p-2 lis-rounded-circle-50 lis-f-14 lis-line-height-2"><i class="fa fa-star"></i> 4.0</A>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card lis-brd-light text-center text-lg-left">
                            <a href="#">
                                <div class="lis-grediant grediant-tb-light2 lis-relative modImage rounded-top">
                                    <img src="/cms/images/img2.jpg" alt="" class="img-fluid rounded-top w-100" />
                                </div>

                                <div class="lis-absolute lis-right-20 lis-top-20">
                                    <div class="lis-post-meta border border-white text-white rounded lis-f-14">Closed</div>
                                </div>
                            </a>    
                            <div class="card-body pt-0">
                                <div class="media d-block d-lg-flex lis-relative">
                                    <img src="/cms/images/card-logo2.png" alt="" class="lis-mt-minus-15  img-fluid d-lg-flex mx-auto mr-lg-3 mb-4 mb-lg-0 border lis-border-width-2 rounded-circle border-white" width="80" />
                                    <div class="media-body align-self-start mt-2">
                                        <h6 class="mb-0 lis-font-weight-600"><A href="#" class="lis-dark">Bodega Garage - Filipino Night Club</A></h6>
                                    </div>
                                </div>
                                <ul class="list-unstyled my-4 lis-line-height-2">
                                    <li><i class="fa fa-phone pr-2"></i> +88 25 5894 2589</li>
                                    <li><i class="fa fa-map-o pr-2"></i> First Street, New York, USA</li>
                                </ul>
                                <div class="clearfix">
                                    <div class="float-none float-lg-left mb-3 mb-lg-0 mt-1">
                                        <A href="#" class="text-white"><i class="icofont icofont-radio-mic px-2 lis-bg3 py-2 lis-rounded-circle-50 lis-f-14"></i></A>
                                        <A href="#" class="text-white"><i class="icofont icofont-beer px-2 lis-bg2 py-2 lis-rounded-circle-50 lis-f-14"></i></A>
                                        <A href="#" class="lis-id-info lis-light p-2 lis-rounded-circle-50 lis-f-14">1 More...</A>
                                    </div>
                                    <div class="float-none float-lg-right mt-1">
                                        <A href="#" class="lis-light lis-f-14"><i class="fa fa-envelope-o lis-id-info  lis-rounded-circle-50 text-center"></i></A>
                                        <A href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info  lis-rounded-circle-50 text-center"></i></A>
                                        <A href="#" class="lis-green-light text-white p-2 lis-rounded-circle-50 lis-f-14"><i class="fa fa-star"></i> 5.0</A>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card lis-brd-light text-center text-lg-left">
                            <a href="#">
                                <div class="lis-grediant grediant-tb-light2 lis-relative modImage rounded-top">
                                    <img src="/cms/images/img3.jpg" alt="" class="img-fluid rounded-top w-100" />
                                </div>
                                <div class="lis-absolute lis-right-20 lis-top-20">
                                    <div class="lis-post-meta border border-white text-white rounded lis-f-14">Open</div>
                                </div>
                            </a>    
                            <div class="card-body pt-0">
                                <div class="media d-block d-lg-flex lis-relative">
                                    <img src="/cms/images/card-logo3.png" alt="" class="lis-mt-minus-15 img-fluid d-lg-flex mx-auto mr-lg-3 mb-4 mb-lg-0 border lis-border-width-2 rounded-circle border-white" width="80" />
                                    <div class="media-body align-self-start mt-2">
                                        <h6 class="mb-0 lis-font-weight-600"><A href="#" class="lis-dark">Regal Cinemas Destiny USA 19 IMAX & RPX</A></h6>
                                    </div>
                                </div>
                                <ul class="list-unstyled my-4 lis-line-height-2">
                                    <li><i class="fa fa-phone pr-2"></i> +88 25 5894 2589</li>
                                    <li><i class="fa fa-map-o pr-2"></i> First Street, New York, USA</li>
                                </ul>
                                <div class="clearfix">
                                    <div class="float-none float-lg-left mb-3 mb-lg-0 mt-1">
                                        <A href="#" class="text-white"><i class="icofont icofont-radio-mic px-2 lis-bg3 py-2 lis-rounded-circle-50 lis-f-14"></i></A>
                                        <A href="#" class="lis-id-info lis-light p-2 lis-rounded-circle-50 lis-f-14">1 More...</A>
                                    </div>
                                    <div class="float-none float-lg-right mt-1">
                                        <A href="#" class="lis-light lis-f-14"><i class="fa fa-envelope-o lis-id-info  lis-rounded-circle-50 text-center"></i></A>
                                        <A href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info  lis-rounded-circle-50 text-center"></i></A>
                                        <A href="#" class="lis-green-light text-white p-2 lis-rounded-circle-50 lis-f-14"><i class="fa fa-star"></i> 4.5</A>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card lis-brd-light text-center text-lg-left">
                            <a href="#">
                                <div class="lis-grediant grediant-tb-light2 lis-relative modImage rounded-top">
                                    <img src="/cms/images/img4.jpg" alt="" class="img-fluid rounded-top w-100" />
                                </div>
                                <div class="lis-absolute lis-right-20 lis-top-20">
                                    <div class="lis-post-meta border border-white text-white rounded lis-f-14">Closed</div>
                                </div>
                            </a>    
                            <div class="card-body pt-0">
                                <div class="media d-block d-lg-flex lis-relative">
                                    <img src="/cms/images/card-logo4.png" alt="" class="lis-mt-minus-15 img-fluid d-lg-flex mx-auto mr-lg-3 mb-4 mb-lg-0 border lis-border-width-2 rounded-circle border-white" width="80" />
                                    <div class="media-body align-self-start mt-2">
                                        <h6 class="mb-0 lis-font-weight-600"><A href="#" class="lis-dark">Pembridge Palace Hotel and Resort</A></h6>
                                    </div>
                                </div>
                                <ul class="list-unstyled my-4 lis-line-height-2">
                                    <li><i class="fa fa-phone pr-2"></i> +88 25 5894 2589</li>
                                    <li><i class="fa fa-map-o pr-2"></i>First Street, New York, USA</li>
                                </ul>
                                <div class="clearfix">
                                    <div class="float-none float-lg-left mb-3 mb-lg-0 mt-1">
                                        <A href="#" class="text-white"><i class="icofont icofont-hotel-alt px-2 lis-bg1 py-2 lis-rounded-circle-50 lis-f-14"></i></A>
                                        <A href="#" class="text-white"><i class="icofont icofont-fast-food px-2 lis-bg2 py-2 lis-rounded-circle-50 lis-f-14"></i></A>
                                        <A href="#" class="lis-id-info lis-light p-2 lis-rounded-circle-50 lis-f-14">2 More...</A>
                                    </div>
                                    <div class="float-none float-lg-right mt-1">
                                        <A href="#" class="lis-light lis-f-14"><i class="fa fa-envelope-o lis-id-info  lis-rounded-circle-50 text-center"></i></A>
                                        <A href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info  lis-rounded-circle-50 text-center"></i></A>
                                        <A href="#" class="lis-green-light text-white p-2 lis-rounded-circle-50 lis-f-14"><i class="fa fa-star"></i> 4.5</A>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card lis-brd-light text-center text-lg-left">
                            <a href="#">
                                <div class="lis-grediant grediant-tb-light2 lis-relative modImage rounded-top">
                                    <img src="/cms/images/img5.jpg" alt="" class="img-fluid rounded-top w-100" />
                                </div>
                                <div class="lis-absolute lis-right-20 lis-top-20">
                                    <div class="lis-post-meta border border-white text-white rounded lis-f-14">Open</div>
                                </div>
                            </a>    
                            <div class="card-body pt-0">
                                <div class="media d-block d-lg-flex lis-relative">
                                    <img src="/cms/images/card-logo5.png" alt="" class="lis-mt-minus-15 img-fluid d-lg-flex mx-auto mr-lg-3 mb-4 mb-lg-0 border lis-border-width-2 rounded-circle border-white" width="80" />
                                    <div class="media-body align-self-start mt-2">
                                        <h6 class="mb-0 lis-font-weight-600"><A href="#" class="lis-dark">Vintage Italian Beer Bar & Restaurant</A></h6>
                                    </div>
                                </div>
                                <ul class="list-unstyled my-4 lis-line-height-2">
                                    <li><i class="fa fa-phone pr-2"></i> +88 25 5894 2589</li>
                                    <li><i class="fa fa-map-o pr-2"></i> First Street, New York, USA</li>
                                </ul>
                                <div class="clearfix">
                                    <div class="float-none float-lg-left mb-3 mb-lg-0 mt-1">
                                        <A href="#" class="text-white"><i class="icofont icofont-travelling px-2 lis-bg5 py-2 lis-rounded-circle-50 lis-f-14"></i></A>
                                        <A href="#" class="lis-id-info lis-light p-2 lis-rounded-circle-50 lis-f-14">1 More...</A>
                                    </div>
                                    <div class="float-none float-lg-right mt-1">
                                        <a href="#" class="lis-light lis-f-14"><i class="fa fa-envelope-o lis-id-info  lis-rounded-circle-50 text-center"></i></a>
                                        <A href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info  lis-rounded-circle-50 text-center"></i></A>
                                        <A href="#" class="lis-green-light text-white p-2 lis-rounded-circle-50 lis-f-14"><i class="fa fa-star"></i> 4.0</A>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card lis-brd-light text-center text-lg-left">
                            <a href="#">
                                <div class="lis-grediant grediant-tb-light2 lis-relative modImage rounded-top">
                                    <img src="/cms/images/img12.jpg" alt="" class="img-fluid rounded-top w-100" />
                                </div>
                                <div class="lis-absolute lis-right-20 lis-top-20">
                                    <div class="lis-post-meta border border-white text-white rounded lis-f-14">Open</div>
                                </div>
                            </a>    
                            <div class="card-body pt-0">
                                <div class="media d-block d-lg-flex lis-relative">
                                    <img src="/cms/images/card-logo6.png" alt="" class="lis-mt-minus-15 img-fluid d-lg-flex mx-auto mr-lg-3 mb-4 mb-lg-0 border lis-border-width-2 rounded-circle border-white" width="80" />
                                    <div class="media-body align-self-start mt-2">
                                        <h6 class="mb-0 lis-font-weight-600"><A href="#" class="lis-dark">Vintage Italian Beer Bar & Restaurant</A></h6>
                                    </div>
                                </div>
                                <ul class="list-unstyled my-4 lis-line-height-2">
                                    <li><i class="fa fa-phone pr-2"></i> +88 25 5894 2589</li>
                                    <li><i class="fa fa-map-o pr-2"></i> First Street, New York, USA</li>
                                </ul>
                                <div class="clearfix">
                                    <div class="float-none float-lg-left mb-3 mb-lg-0 mt-1">
                                        <A href="#" class="text-white"><i class="icofont icofont-travelling px-2 lis-bg5 py-2 lis-rounded-circle-50 lis-f-14"></i></A>
                                        <A href="#" class="lis-id-info lis-light p-2 lis-rounded-circle-50 lis-f-14">1 More...</A>
                                    </div>
                                    <div class="float-none float-lg-right mt-1">
                                        <A href="#" class="lis-light lis-f-14"><i class="fa fa-envelope-o lis-id-info  lis-rounded-circle-50 text-center"></i></A>
                                        <A href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info  lis-rounded-circle-50 text-center"></i></A>
                                        <A href="#" class="lis-green-light text-white p-2 lis-rounded-circle-50 lis-f-14"><i class="fa fa-star"></i> 4.0</A>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Visited Places -->

        <!-- Features -->
        <section class="image-bg lis-grediant grediant-full">
            <div class="background-image-maker"></div>
            <div class="holder-image">
                <img src="/cms/images/bg2.jpg" alt="" class="img-fluid d-none">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 text-center">
                        <div class="heading pb-4">
                            <h2>Get Associated With Us</h2>
                            <h5 class="font-weight-normal">Expolore top-rated attractions, activities and more</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 text-center wow fadeInUp mb-5 mb-md-0">
                        <div class="lis-features-box lis-brd-light border rounded px-4 py-5">
                            <div  class="h1"><i class="fa fa-address-card-o h1"></i></div>
                            <h5>Add Your Listing</h5>
                            Maecs tempus, tellus eget rhoncus, sem condimentum quam semper libero.
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-center wow fadeInUp mb-5 mb-md-0">
                        <div class="lis-features-box lis-brd-light border rounded px-4 py-5">
                            <div  class="h1"><i class="fa fa-bullhorn h1"></i></div>
                            <h5>Advertise & Promote</h5>
                            Maecs tempus, tellus eget rhoncus, sem condimentum quam semper libero.
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-center wow fadeInUp">
                        <div class="lis-features-box lis-brd-light border rounded px-4 py-5">
                            <div  class="h1"><i class="fa fa-handshake-o h1"></i></div>
                            <h5>Partner With Us</h5>
                            Maecs tempus, tellus eget rhoncus, sem condimentum quam semper libero.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Features -->

        <!-- Upcoming Events -->
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 text-center">
                        <div class="heading pb-4">
                            <h2>Upcoming Events</h2>
                            <h5 class="font-weight-normal lis-light">Discover & connect with top-rated local businesses</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInUp mb-5 mb-lg-0">
                        <div class="card lis-brd-light bg-transparent">
                            <a href="#">
                                <div class="modImage lis-grediant grediant-tb-light2 lis-relative rounded-top">
                                    <img src="/cms/images/img6.jpg" alt="" class="img-fluid rounded-top w-100">
                                </div>
                                <div class="lis-absolute lis-right-20 lis-top-20">
                                    <div class="lis-post-meta border border-white text-white rounded lis-f-14">Oct 18-20</div>
                                </div>
                            </a>    
                            <div class="card-body">
                                <div class="media d-block d-sm-flex text-center text-sm-left">
                                    <div class="d-block d-sm-flex">
                                        <ul class="list-unstyled my-0">
                                            <li class="lis-font-weight-600 mb-2 h6"><a href="#" class="lis-dark">Enchanted Valley Carnival</a></li>
                                            <li><i class="fa fa-map-o pr-2"></i> Bishop Avenue, New York</li>
                                        </ul>
                                    </div>
                                    <div class="media-body align-self-center text-center text-sm-right mt-3 mt-sm-0">
                                        <a href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info  lis-rounded-circle-50 text-center"></i></a>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInUp mb-5 mb-lg-0">
                        <div class="card lis-brd-light bg-transparent">
                            <a href="#">
                                <div class="modImage lis-grediant grediant-tb-light2 lis-relative rounded-top">
                                    <img src="/cms/images/img7.jpg" alt="" class="img-fluid rounded-top w-100">
                                </div>
                                <div class="lis-absolute lis-right-20 lis-top-20">
                                    <div class="lis-post-meta border border-white text-white rounded lis-f-14">Nov 13-15</div>
                                </div>
                            </a>     
                            <div class="card-body">
                                <div class="media d-block d-sm-flex text-center text-sm-left">
                                    <div class="d-block d-sm-flex">
                                        <ul class="list-unstyled my-0">
                                            <li class="lis-font-weight-600 mb-2 h6"><a href="#" class="lis-dark">Timeout 72 Hours</a></li>
                                            <li><i class="fa fa-map-o pr-2"></i> North Street, New York, USA</li>
                                        </ul>
                                    </div>
                                    <div class="media-body align-self-center text-center text-sm-right mt-3 mt-sm-0">
                                        <a href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info  lis-rounded-circle-50 text-center"></i></a>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInUp mb-4 mb-lg-0">
                        <div class="card lis-brd-light bg-transparent">
                            <a href="#">
                                <div class="modImage lis-grediant grediant-tb-light2 lis-relative rounded-top">
                                    <img src="/cms/images/img8.jpg" alt="" class="img-fluid rounded-top w-100">
                                </div>
                                <div class="lis-absolute lis-right-20 lis-top-20">
                                    <div class="lis-post-meta border border-white text-white rounded lis-f-14">Dec 28-31</div>
                                </div>
                            </a>    
                            <div class="card-body">
                                <div class="media d-block d-sm-flex text-center text-sm-left">
                                    <div class="d-block d-sm-flex">
                                        <ul class="list-unstyled my-0">
                                            <li class="lis-font-weight-600 mb-2 h6"><a href="#" class="lis-dark">VH1 Supersonic 2018</a></li>
                                            <li><i class="fa fa-map-o pr-2"></i> Bishop Avenue, New York</li>
                                        </ul>
                                    </div>
                                    <div class="media-body align-self-center text-center text-sm-right mt-3 mt-sm-0">
                                        <a href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info  lis-rounded-circle-50 text-center"></i></a>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Upcoming Events -->

        <!-- Featured Property -->
        <section class="lis-bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 text-center">
                        <div class="heading pb-4">
                            <h2>Featured Properties</h2>
                            <h5 class="font-weight-normal lis-light">Discover & connect with top-rated local businesses</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInUp mb-5 mb-lg-0">
                        <div class="card lis-brd-light">
                            <a href="#">
                                <div class="modImage lis-grediant grediant-tb-light2 lis-relative rounded-top">
                                    <img src="/cms/images/img9.jpg" alt="" class="img-fluid rounded-top w-100">
                                </div>
                                <div class="lis-absolute lis-right-20 lis-top-20">
                                    <div class="lis-post-meta border border-white text-white rounded lis-f-14">For Sale</div>
                                </div>
                            </a>    
                            <div class="card-body">
                                <h6 class="lis-font-weight-600 mb-2"><a href="#" class="lis-dark">Villa in Melbourne City</a></h6>
                                <ul class="list-unstyled mt-0">
                                    <li><i class="fa fa-map-o pr-2"></i>1903 Hollywood, NJ 85624, USA</li>
                                </ul>
                                <div class="media pt-2">
                                    <div class="d-flex">
                                        <h5 class="lis-primary mb-0"><span class="lis-f-14 lis-dark">Price:</span> $13,80,000 </h5>
                                    </div>
                                    <div class="media-body align-self-center text-right">
                                        <a href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info  lis-rounded-circle-50 text-center"></i></a>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="lis-devider"></div>
                            <ul class="list-inline mb-0 text-center lis-property-meta">
                                <li class="list-inline-item lis-brd-right lis-brd-light lis-meta-block float-left"><i class="fa fa-object-group pr-1"></i> 5842 m2</li>
                                <li class="list-inline-item lis-brd-right lis-brd-light lis-meta-block float-left"><i class="fa fa-bed pr-1"></i> 4 Bed</li>
                                <li class="list-inline-item lis-meta-block float-left"><i class="fa fa-bath pr-1"></i> 3 Bath</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInUp mb-5 mb-lg-0">
                        <div class="card lis-brd-light">
                            <a href="#">
                                <div class="modImage lis-grediant grediant-tb-light2 lis-relative rounded-top">
                                    <img src="/cms/images/img10.jpg" alt="" class="img-fluid rounded-top w-100">
                                </div>
                                <div class="lis-absolute lis-right-20 lis-top-20">
                                    <div class="lis-post-meta border border-white text-white rounded lis-f-14">For Rent</div>
                                </div>
                            </a>    
                            <div class="card-body">
                                <h6 class="lis-font-weight-600 mb-2"><A href="#" class="lis-dark">Family House in Omaha</A></h6>
                                <ul class="list-unstyled mt-0">
                                    <li><i class="fa fa-map-o pr-2"></i>15421 Southwest, NJ 32568, USA</li>
                                </ul>
                                <div class="media pt-2">
                                    <div class="d-flex">
                                        <h5 class="lis-primary mb-0"><span class="lis-f-14 lis-dark">Price:</span> $2,500 <small class="lis-light">/month</small> </h5>
                                    </div>
                                    <div class="media-body align-self-center text-right">
                                        <a href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info  lis-rounded-circle-50 text-center"></i></a>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="lis-devider"></div>
                            <ul class="list-inline mb-0 text-center lis-property-meta">
                                <li class="list-inline-item lis-brd-right lis-brd-light lis-meta-block float-left"><i class="fa fa-object-group pr-1"></i> 2018 m2</li>
                                <li class="list-inline-item lis-brd-right lis-brd-light lis-meta-block float-left"><i class="fa fa-bed pr-1"></i> 2 Bed</li>
                                <li class="list-inline-item lis-meta-block float-left"><i class="fa fa-bath pr-1"></i> 1 Bath</li>
                            </ul>
                        </div> 
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInUp mb-5 mb-lg-0">
                        <div class="card lis-brd-light">
                            <a href="#">
                                <div class="modImage lis-grediant grediant-tb-light2 lis-relative rounded-top">
                                    <img src="/cms/images/img11.jpg" alt="" class="img-fluid rounded-top w-100">
                                </div>
                                <div class="lis-absolute lis-right-20 lis-top-20">
                                    <div class="lis-post-meta border border-white text-white rounded lis-f-14">For Rent</div>
                                </div>
                            </a>   
                            <div class="card-body">
                                <h6 class="lis-font-weight-600 mb-2"><A href="#" class="lis-dark">Park Avenue Apartment </A></h6>
                                <ul class="list-unstyled mt-0">
                                    <li><i class="fa fa-map-o pr-2"></i>14228 Townshire Drive, NJ 06589, USA</li>
                                </ul>
                                <div class="media pt-2">
                                    <div class="d-flex">
                                        <h5 class="lis-primary mb-0"><span class="lis-f-14 lis-dark">Price:</span> $3,100 <small class="lis-light">/month</small> </h5>
                                    </div>
                                    <div class="media-body align-self-center text-right">
                                        <a href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info  lis-rounded-circle-50 text-center"></i></a>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="lis-devider"></div>
                            <ul class="list-inline mb-0 text-center lis-property-meta">
                                <li class="list-inline-item lis-brd-right lis-brd-light lis-meta-block float-left"><i class="fa fa-object-group pr-1"></i> 3258 m2</li>
                                <li class="list-inline-item lis-brd-right lis-brd-light lis-meta-block float-left"><i class="fa fa-bed pr-1"></i> 4 Bed</li>
                                <li class="list-inline-item lis-meta-block float-left"><i class="fa fa-bath pr-1"></i> 2 Bath</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Featured Property -->

        <!-- Work -->
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 text-center">
                        <div class="heading pb-4">
                            <h2>How Does It Work</h2>
                            <h5 class="font-weight-normal lis-light">Discover & connect with top-rated local businesses</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 text-center wow fadeInUp mb-5 mb-md-0">
                        <div class="icon-box box-line box-line-dotted1 lis-relative">
                            <img src="/cms/images/icon-1.png" alt="" class="img-fluid mb-4 z-index-99  lis-relative" />
                            <h5>1. Find Interesting Place</h5>
                            <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-center wow fadeInUp mb-5 mb-md-0">
                        <div class="icon-box box-line box-line-dotted2 lis-relative">
                            <img src="/cms/images/icon-2.png" alt="" class="img-fluid mb-4 z-index-99  lis-relative" />
                            <h5>2. Choose a Category</h5>
                            <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-center wow fadeInUp mb-5 mb-md-0">
                        <div class="icon-box">
                            <img src="/cms/images/icon-3.png" alt="" class="img-fluid mb-4 z-index-99  lis-relative" />
                            <h5>3. Contact with Owners</h5>
                            <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Work -->

        <!-- Pricing -->
        <section class="lis-bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 text-center">
                        <div class="heading pb-4">
                            <h2>Choose Your Plan</h2>
                            <h5 class="font-weight-normal lis-light">Discover & connect with top-rated local businesses</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInUp mb-5 mb-lg-0 text-center">
                        <div class="price-table">
                            <div class="price-header lis-bg-light lis-rounded-top py-4 border border-bottom-0 lis-brd-light">
                                <h5 class="text-uppercase lis-latter-spacing-2">Basic</h5>
                                <h1 class="display-4 lis-font-weight-500"><sup>$</sup> 39 <small>/mo</small></h1>
                                <p class="mb-0">Basic User Membership</p>
                            </div>
                            <div class="border border-top-0 lis-brd-light bg-white py-5 lis-rounded-bottom">
                                <ul class="list-unstyled lis-line-height-3">
                                    <li>One Time Fee</li>
                                    <li>One Listing</li>
                                    <li>90 Days Availability</li>
                                    <li>Featured In Search Results</li>
                                    <li>24/7 Support</li>
                                </ul>
                                <a href="#" class="btn btn-primary-outline btn-md lis-rounded-circle-50"><i class="fa fa-shopping-cart pr-2"></i>Order Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInUp mb-5 mb-lg-0 text-center">
                        <div class="price-table active">
                            <div class="price-header lis-bg-primary py-4 text-white lis-rounded-top">
                                <h5 class="text-uppercase lis-latter-spacing-2 text-white">Premium</h5>
                                <h1 class="display-4 lis-font-weight-500 text-white"><sup>$</sup> 69 <small>/mo</small></h1>
                                <p class="mb-0">Permium User Membership</p>
                            </div>
                            <div class="border border-top-0 lis-brd-light bg-white py-5 lis-rounded-bottom">
                                <ul class="list-unstyled lis-line-height-3">
                                    <li>One Time Fee</li>
                                    <li>One Listing</li>
                                    <li>90 Days Availability</li>
                                    <li>Featured In Search Results</li>
                                    <li>24/7 Support</li>
                                </ul>
                                <a href="#" class="btn btn-primary btn-md lis-rounded-circle-50"><i class="fa fa-shopping-cart pr-2"></i>Order Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInUp text-center">
                        <div class="price-table">
                            <div class="price-header lis-bg-light lis-rounded-top py-4 border border-bottom-0 lis-brd-light">
                                <h5 class="text-uppercase lis-latter-spacing-2">business</h5>
                                <h1 class="display-4 lis-font-weight-500"><sup>$</sup> 99 <small>/mo</small></h1>
                                <p class="mb-0">Basic User Membership</p>
                            </div>
                            <div class="border border-top-0 lis-brd-light bg-white py-5 lis-rounded-bottom">
                                <ul class="list-unstyled lis-line-height-3">
                                    <li>One Time Fee</li>
                                    <li>One Listing</li>
                                    <li>90 Days Availability</li>
                                    <li>Featured In Search Results</li>
                                    <li>24/7 Support</li>
                                </ul>
                                <a href="#" class="btn btn-primary-outline btn-md lis-rounded-circle-50"><i class="fa fa-shopping-cart pr-2"></i>Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--End Pricing -->

        <!-- Blog -->
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 text-center">
                        <div class="heading pb-4">
                            <h2>Letest Tips &amp; Blog</h2>
                            <h5 class="font-weight-normal lis-light">Discover &amp; connect with top-rated local businesses</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInUp mb-5 mb-lg-0">
                        <div class="card border-0 lis-relative">
                            <a href="#">
                                <div class="modImage lis-grediant grediant-tb-light2 lis-relative rounded">
                                    <img src="/cms/images/blog1.jpg" alt="" class="img-fluid rounded">
                                </div> 

                                <div class="lis-absolute lis-right-20 lis-top-20">
                                    <div class="lis-post-meta border border-white text-white rounded lis-f-14">Bar &amp; Club</div>
                                </div>
                            </a>    
                            <div class="pt-4">
                                <span class="lis-light">16 October 2017</span>
                                <a href="#" class="lis-dark"><h6 class="mt-2">Donec vitae sapien ut libero></h6></a>
                                <p>Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus nullam accumsan dui.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInUp mb-5 mb-lg-0">
                        <div class="card border-0 lis-relative">
                            <a href="#">
                                <div class="modImage lis-grediant grediant-tb-light2 lis-relative rounded">
                                    <img src="/cms/images/blog2.jpg" alt="" class="img-fluid rounded">
                                </div> 
                                <div class="lis-absolute lis-right-20 lis-top-20">
                                    <div class="lis-post-meta border border-white text-white rounded lis-f-14">Bar &amp; Club</div>
                                </div>
                            </a>
                            <div class="pt-4">
                                <span class="lis-light">24 October 2017</span>
                                <a href="#" class="lis-dark"><h6 class="mt-2">Donec vitae sapien ut libero></h6></a>
                                <p>Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus nullam accumsan dui.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInUp">
                        <div class="card border-0 lis-relative">
                            <a href="#">
                                <div class="modImage lis-grediant grediant-tb-light2 lis-relative rounded">
                                    <img src="/cms/images/bg2.jpg" alt="" class="img-fluid rounded">
                                </div> 
                                <div class="lis-absolute lis-right-20 lis-top-20">
                                    <div class="lis-post-meta border border-white text-white rounded lis-f-14">Bar &amp; Club</div>
                                </div>
                            </a>    
                            <div class="pt-4">
                                <span class="lis-light">30 October 2017</span>
                                <a href="#" class="lis-dark"><h6 class="mt-2">Donec vitae sapien ut libero></h6></a>
                                <p>Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus nullam accumsan dui.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Blog -->

        <!-- Call To Action -->
        <section class="lis-bg-primary py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 text-center wow fadeInUp">
                        <div class="heading">
                            <h2 class="text-uppercase lis-line-height-1_5 text-white">WE WOULD LOVE TO HEAR ABOUT START YOUR NEW PROJECT?</h2>
                            <a href="#" class="btn btn-outline-light btn-default text-uppercase">Add Your Listing Here</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--End Call To Action -->

<?include "cms/footer.php"?>