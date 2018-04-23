<?include "cms/header.php"?>
        <!-- Page Inner -->
        <section class="lis-bg-light pb-5">
            <div class="container pt-5">
                <div class="row wow fadeInUp">
                    <div class="col-12 col-sm-6">
                        <div class="page-title">
                            <h2>Add Property Listing</h2>
                            <p class="mb-0">Lorem ipsum dolor sit amet, ut latine</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 text-left text-sm-right">
                        <ol class="breadcrumb mb-0 pl-0 bg-transparent">
                            <li class="breadcrumb-item d-inline-block float-none"><a href="#" class="lis-light">Home</a></li>
                            <li class="breadcrumb-item d-inline-block float-none active">Add Listing</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--End Page Inner -->
        <!-- Pricing -->
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 mb-5 mb-lg-0">

                        <div class="card lis-brd-light wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="card-body p-0">
                                <div class="row p-4">
                                    <div class="col-12 col-md-3">
                                        <div class="form-group lis-relative">
                                            <h6 class="lis-font-weight-500">Have an account?</h6>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <div class="form-group lis-relative">
                                            Sign in If you don’t have an account you can create one below by entering your email address/username. Your account details will be confirmed via email. <a href="#modal" class="login_form">Sign in</a>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row p-4">
                                    <div class="col-12 col-sm-12 mb-3">
                                        <h6 class="lis-font-weight-500"><i class="fa fa-tag pr-2 lis-f-14"></i>  Categories & Tags</h6>

                                    </div>
                                    <div class="col-12 col-sm-12">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-2 col-form-label">Categories</label>
                                            <div class="col-12 col-md-10">
                                                <select class="form-control border-top-0 border-left-0 border-right-0 rounded-0" id="inlineFormCustomSelect">
                                                    <option selected>Select Category</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-2 col-form-label">Tags(optional)</label>
                                            <div class="col-12 col-md-10">
                                                <select class="form-control border-top-0 border-left-0 border-right-0 rounded-0" id="inlineFormCustomSelect">
                                                    <option selected>Add Tag</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <hr/>

                                <div class="row p-4">
                                    <div class="col-12 col-sm-12 mb-3">
                                        <h6 class="lis-font-weight-500"><i class="fa fa-align-left pr-2 lis-f-14"></i>  Name & Description </h6>

                                    </div>
                                    <div class="col-12 col-sm-12">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-2 col-form-label">Email</label>
                                            <div class="col-12 col-md-10">
                                                <input class="form-control border-top-0 border-left-0 border-right-0 rounded-0" placeholder="Your email address" type="text" value="" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-2 col-form-label">Title</label>
                                            <div class="col-12 col-md-10">
                                                <input class="form-control border-top-0 border-left-0 border-right-0 rounded-0" type="text" placeholder="Your listing name" value="" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-2 col-form-label">Tagline</label>
                                            <div class="col-12 col-md-10">
                                                <input class="form-control border-top-0 border-left-0 border-right-0 rounded-0" type="text" placeholder="Say something catchy!" value="" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-2 col-form-label">Description</label>
                                            <div class="col-12 col-md-10">
                                                <textarea class="form-control border-top-0 border-left-0 border-right-0 rounded-0" placeholder="Type listing description"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <hr/>

                                <div class="row p-4">
                                    <div class="col-12 col-sm-12 mb-3">
                                        <h6 class="lis-font-weight-500"><i class="fa fa-file-image-o pr-2 lis-f-14"></i> Images </h6>

                                    </div>
                                    <div class="col-12 col-sm-12">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-3 col-form-label">Logo</label>
                                            <div class="col-12 col-md-9">
                                                <input class="form-control border-0"  type="file"  id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-3 col-form-label">Cover Image</label>
                                            <div class="col-12 col-md-9">
                                                <input class="form-control border-0" type="file"  id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-3 col-form-label">Gallery Images(optional)</label>
                                            <div class="col-12 col-md-9">
                                                <input class="form-control border-0" type="file"  id="example-text-input">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <hr/>

                                <div class="row p-4">
                                    <div class="col-12 col-sm-12 mb-3">
                                        <h6 class="lis-font-weight-500"><i class="fa fa-info-circle pr-2 lis-f-14"></i>  Contact information </h6>

                                    </div>
                                    <div class="col-12 col-sm-12">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-3 col-form-label">Email</label>
                                            <div class="col-12 col-md-9">
                                                <input class="form-control border-top-0 border-left-0 border-right-0 rounded-0" placeholder="Your email address" type="text" value="" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-3 col-form-label">Phone number(optional)</label>
                                            <div class="col-12 col-md-9">
                                                <input class="form-control border-top-0 border-left-0 border-right-0 rounded-0" type="text" placeholder="Your phone number" value="" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-3 col-form-label">Website(optional)</label>
                                            <div class="col-12 col-md-9">
                                                <input class="form-control border-top-0 border-left-0 border-right-0 rounded-0" type="text" placeholder="Your website address" value="" id="example-text-input">
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <hr/>

                                <div class="row p-4">
                                    <div class="col-12 col-sm-12 mb-3">
                                        <h6 class="lis-font-weight-500"><i class="fa fa-share-alt pr-2 lis-f-14"></i>  Social information </h6>

                                    </div>
                                    <div class="col-12 col-sm-12 social-information">
                                        <div class="form-group row">
                                            <div class="col-12 col-md-5">

                                                <select class="form-control border-top-0 border-left-0 border-right-0 rounded-0" id="inlineFormCustomSelect">

                                                    <option value="1">Twitter</option>
                                                    <option value="2">Facebook</option>
                                                    <option value="3">Pinterest</option>
                                                    <option value="3">Tumblr</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <input class="form-control border-top-0 border-left-0 border-right-0 rounded-0" placeholder="Enter url..." type="text" value="" id="example-text-input">
                                            </div>
                                            <div class="col-12 col-md-1">
                                                <a href="#" class="btn btn-primary trash"><i class="fa fa-trash  lis-f-14"></i></a>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-md-5">

                                                <select class="form-control border-top-0 border-left-0 border-right-0 rounded-0" id="inlineFormCustomSelect">
                                                    <option value="3">Pinterest</option>
                                                    <option value="1">Twitter</option>
                                                    <option value="2">Facebook</option>                                                    
                                                    <option value="3">Tumblr</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <input class="form-control border-top-0 border-left-0 border-right-0 rounded-0" placeholder="Enter url..." type="text" value="" id="example-text-input">
                                            </div>
                                            <div class="col-12 col-md-1">
                                                <a href="#" class="btn btn-primary trash"><i class="fa fa-trash  lis-f-14"></i></a>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-md-5">

                                                <select class="form-control border-top-0 border-left-0 border-right-0 rounded-0" id="inlineFormCustomSelect">
                                                    <option value="3">Tumblr</option>
                                                    <option value="1">Twitter</option>
                                                    <option value="2">Facebook</option>
                                                    <option value="3">Pinterest</option>

                                                </select>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <input class="form-control border-top-0 border-left-0 border-right-0 rounded-0" placeholder="Enter url..." type="text" value="" id="example-text-input">
                                            </div>
                                            <div class="col-12 col-md-1">
                                                <a href="#" class="btn btn-primary trash"><i class="fa fa-trash  lis-f-14"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-12 mb-3">
                                        <a  href="#" class="add-row btn btn-primary"><i class="fa fa-plus pr-2 lis-f-14"></i>  Add More </a>

                                    </div>
                                </div>

                                <hr/>
                                <div class="row p-4">
                                    <div class="col-12 col-sm-12 mb-3">
                                        <h6 class="lis-font-weight-500"><i class="fa fa-key pr-2 lis-f-14"></i>  Property details</h6>

                                    </div>
                                    <div class="col-12 col-sm-12">
                                        <div class="form-group row">
                                             <div class="col-12">
                                            <label class="custom-checkbox">Sale
                                                <input type="radio" checked="checked" name="radio">
                                                <span class="radiobtn"></span>
                                            </label>
                                            <label class="custom-checkbox ml-3">Rent
                                                <input type="radio" name="radio">
                                                <span class="radiobtn"></span>
                                            </label>
                                             </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-2 col-form-label">Rent ($)</label>
                                            <div class="col-12 col-md-5">
                                                <input class="form-control border-top-0 border-left-0 border-right-0 rounded-0" placeholder="2,500" type="text" value="" id="example-text-input">
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <select class="form-control border-top-0 border-left-0 border-right-0 rounded-0" id="inlineFormCustomSelect">

                                                    <option value="1">Month</option>
                                                    <option value="1">Year</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-2 col-form-label">Area (m2)</label>
                                            <div class="col-12 col-md-10">
                                              <input class="form-control border-top-0 border-left-0 border-right-0 rounded-0" placeholder="3258" type="text" value="" id="example-text-input">
                                            </div>
                                         
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-2 col-form-label">Bedrooms</label>
                                            <div class="col-12 col-md-10">
                                                <select class="form-control border-top-0 border-left-0 border-right-0 rounded-0" id="inlineFormCustomSelect">

                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="1">5</option>
                                                    <option value="1">6</option>
                                                    <option value="1">7</option>
                                                    <option value="1">8</option>
                                                    <option value="1">9</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-2 col-form-label">Bathrooms</label>
                                            <div class="col-12 col-md-10">
                                                <select class="form-control border-top-0 border-left-0 border-right-0 rounded-0" id="inlineFormCustomSelect">

                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="1">5</option>
                                                    <option value="1">6</option>
                                                    <option value="1">7</option>
                                                    <option value="1">8</option>
                                                    <option value="1">9</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-2 col-form-label">Garages</label>
                                            <div class="col-12 col-md-10">
                                                <select class="form-control border-top-0 border-left-0 border-right-0 rounded-0" id="inlineFormCustomSelect">

                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="1">5</option>
                                                    <option value="1">6</option>
                                                    <option value="1">7</option>
                                                    <option value="1">8</option>
                                                    <option value="1">9</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-2 col-form-label">Property Type</label>
                                            <div class="col-12 col-md-10">
                                                <select class="form-control border-top-0 border-left-0 border-right-0 rounded-0" id="inlineFormCustomSelect">

                                                    <option value="1">Apartment</option>
                                                    <option value="1">Villa</option>
                                                    <option value="1">House</option>
                                                   
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-2 col-form-label">Construction Year</label>
                                            <div class="col-12 col-md-10">
                                                <select class="form-control border-top-0 border-left-0 border-right-0 rounded-0" id="inlineFormCustomSelect">

                                                    <option value="1">2017</option>
                                                    <option value="1">2016</option>
                                                    <option value="1">2015</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-2 col-form-label">Last Renovation</label>
                                            <div class="col-12 col-md-10">
                                                <select class="form-control border-top-0 border-left-0 border-right-0 rounded-0" id="inlineFormCustomSelect">

                                                    <option value="1">2017</option>
                                                    <option value="1">2016</option>
                                                    <option value="1">2015</option>
                                                   
                                                </select>
                                            </div>
                                            
                                        </div>

                                    </div>

                                </div>

                                <hr/>

                                <div class="row p-4">
                                    <div class="col-12 col-sm-12 mb-3">
                                        <h6 class="lis-font-weight-500"><i class="fa fa-link pr-2 lis-f-14"></i>  Amenities </h6>

                                    </div>
                                    <div class="col-12 col-sm-12 social-information">
                                        <div class="form-group row">
                                            <div class="col-12 col-md-4">

                                                <label class="custom-checkbox">Car Parking
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>

                                            </div>
                                            <div class="col-12 col-md-4">

                                                <label class="custom-checkbox">Accepted Bank Cards
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-4">

                                                <label class="custom-checkbox">Wheelchair Accessible
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-md-4">

                                                <label class="custom-checkbox">Smoking Allowed
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>

                                            </div>
                                            <div class="col-12 col-md-4">

                                                <label class="custom-checkbox">Events
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-4">

                                                <label class="custom-checkbox">Good for Kids
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-md-4">

                                                <label class="custom-checkbox">Wireless Internet
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>

                                            </div>
                                            <div class="col-12 col-md-4">

                                                <label class="custom-checkbox">Friendly Workspace
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-4">

                                                <label class="custom-checkbox">Outdoor Seating
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-md-4">

                                                <label class="custom-checkbox">Elevator in Building
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <label class="custom-checkbox">Street Parking
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>

                                            </div>
                                            <div class="col-12 col-md-4">

                                                <label class="custom-checkbox">Takes Reservations
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>




                                        </div>


                                    </div>

                                </div>
                                <hr/>

                                <div class="row p-4">
                                    <div class="col-12 col-sm-12 mb-3">
                                        <h6 class="lis-font-weight-500"><i class="fa fa-map-o pr-2 lis-f-14"></i>  Location </h6>

                                    </div>
                                    <div class="col-12 col-sm-12">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-2 col-form-label">Address</label>
                                            <div class="col-12 col-md-10">
                                                <input class="form-control border-top-0 border-left-0 border-right-0 rounded-0" placeholder="e.g. 2438 Progress Way, Donnelly, MN, 56235" type="text" value=""  id="us2-address" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-12 col-md-2 col-form-label">Decimal degrees</label>
                                            <div class="col-12 col-md-5">
                                                <input class="form-control border-top-0 border-left-0 border-right-0 rounded-0" type="text" placeholder="Latitude" value="" id="us2-lat">
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input class="form-control border-top-0 border-left-0 border-right-0 rounded-0" type="text" placeholder="Longitude" value="" id="us2-lon">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-12">
                                        <div id="us2" class="w-100"></div>	
                                    </div>
                                    <div class="col-12 col-sm-12"> <a href="#" class="btn btn-primary btn-default mt-3"> Save & Preview</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Pricing -->
        <!-- Features -->
        <section class="lis-bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInRight mb-4 mb-lg-0 text-center">
                        <div class="px-3">
                            <div class="h1 lis-dark"><i class="fa fa-money"></i></div>
                            <h6 class="lis-f-20 lis-font-weight-500">Money Back Guarantee</h6> In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInRight mb-4 mb-lg-0 text-center">
                        <div class="px-3">
                            <div class="h1 lis-dark"><i class="fa fa-check-square-o"></i></div>
                            <h6 class="lis-f-20 lis-font-weight-500">Simple Demo Import</h6> In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInRight text-center">
                        <div class="px-3">
                            <div class="h1 lis-dark"><i class="fa fa-users"></i></div>
                            <h6 class="lis-f-20 lis-font-weight-500">Fast Support Team</h6> In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Features -->
        <!-- Footer-->
        <section class="image-bg footer lis-grediant grediant-bt pb-0">
            <div class="background-image-maker"></div>
            <div class="holder-image"> <img src="dist/images/bg3.jpg" alt="" class="img-fluid d-none"> </div>
            <div class="container">
                <div class="row pb-5">
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                                <h5 class="footer-head">Useful Links</h5>
                                <ul class="list-unstyled footer-links lis-line-height-2_5">
                                    <li>
                                        <A href="#"><i class="fa fa-angle-right pr-1"></i> Add Listing</A>
                                    </li>
                                    <li>
                                        <A href="#"><i class="fa fa-angle-right pr-1"></i> Sign In</A>
                                    </li>
                                    <li>
                                        <A href="#"><i class="fa fa-angle-right pr-1"></i> Register</A>
                                    </li>
                                    <li>
                                        <A href="#"><i class="fa fa-angle-right pr-1"></i> Pricing</A>
                                    </li>
                                    <li>
                                        <A href="#"><i class="fa fa-angle-right pr-1"></i> Contact Us</A>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                                <h5 class="footer-head">My Account</h5>
                                <ul class="list-unstyled footer-links lis-line-height-2_5">
                                    <li>
                                        <A href="#"><i class="fa fa-angle-right pr-1"></i> Dashboard</A>
                                    </li>
                                    <li>
                                        <A href="#"><i class="fa fa-angle-right pr-1"></i> Profile</A>
                                    </li>
                                    <li>
                                        <A href="#"><i class="fa fa-angle-right pr-1"></i> My Listing</A>
                                    </li>
                                    <li>
                                        <A href="#"><i class="fa fa-angle-right pr-1"></i> Favorites</A>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-md-0">
                                <h5 class="footer-head">Pages</h5>
                                <ul class="list-unstyled footer-links lis-line-height-2_5">
                                    <li>
                                        <A href="#"><i class="fa fa-angle-right pr-1"></i> Blog</A>
                                    </li>
                                    <li>
                                        <A href="#"><i class="fa fa-angle-right pr-1"></i> Our Partners</A>
                                    </li>
                                    <li>
                                        <A href="#"><i class="fa fa-angle-right pr-1"></i> How It Work</A>
                                    </li>
                                    <li>
                                        <A href="#"><i class="fa fa-angle-right pr-1"></i> Privacy Policy</A>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <h5 class="footer-head">Help</h5>
                                <ul class="list-unstyled footer-links lis-line-height-2_5">
                                    <li>
                                        <A href="#"><i class="fa fa-angle-right pr-1"></i> Add Listing</A>
                                    </li>
                                    <li>
                                        <A href="#"><i class="fa fa-angle-right pr-1"></i> Sign In</A>
                                    </li>
                                    <li>
                                        <A href="#"><i class="fa fa-angle-right pr-1"></i> Register</A>
                                    </li>
                                    <li>
                                        <A href="#"><i class="fa fa-angle-right pr-1"></i> Pricing</A>
                                    </li>
                                    <li>
                                        <A href="#"><i class="fa fa-angle-right pr-1"></i> Contact Us</A>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="footer-logo">
                            <a href="#"><img src="dist/images/logo-v1.png" alt="" class="img-fluid" /></a>
                        </div>
                        <p class="my-4">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu in felis eu pede mollis enim.</p> <a href="#" class="text-white"><u>App Download</u></a>
                        <ul class="list-inline mb-0 mt-2">
                            <li class="list-inline-item">
                                <A href="#"><img src="dist/images/play-store.png" alt="" class="img-fluid" /></a>
                            </li>
                            <li class="list-inline-item">
                                <A href="#"><img src="dist/images/google-play.png" alt="" class="img-fluid" /></a>
                            </li>
                            <li class="list-inline-item">
                                <A href="#"><img src="dist/images/windows.png" alt="" class="img-fluid" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom mt-5 py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 text-center text-md-left mb-3 mb-md-0"> <span> &copy; 2017 Lister. Powered by <a href="#" class="lis-primary">PSD2allconversion.</a></span> </div>
                        <div class="col-12 col-md-6 text-center text-md-right">
                            <ul class="list-inline footer-social mb-0">
                                <li class="list-inline-item pr-3">
                                    <A href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item pr-3">
                                    <A href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item pr-3">
                                    <A href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li class="list-inline-item pr-3">
                                    <A href="#"><i class="fa fa-tumblr"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <A href="#"><i class="fa fa-pinterest-p"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End  Footer-->
        <!-- Top To Bottom-->
        <a href="#" class="scrollup text-center lis-bg-primary lis-rounded-circle-50">
            <div class="text-white mb-0 lis-line-height-1_7 h3"><i class="icofont icofont-long-arrow-up"></i></div>
        </a>
        <!-- End Top To Bottom-->
        <!-- Login /Register Form-->
        <div class="container">


            <div id="modal" class="popupContainer" style="display: none;">
                <header class="popupHeader">
                    <span class="header_title">Login</span>
                    <span class="modal_close"><i class="fa fa-times"></i></span>
                </header>

                <div class="popupBody">
                    <!-- Social Login -->						

                    <!-- Username & Password Login form -->
                    <div class="user_login">
                        <form>

                            <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 " placeholder="username or email address" />
                            <br />


                            <input type="password" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 " placeholder="password" />
                            <br />

                            <div class="checkbox">
                                <input id="remember" type="checkbox" />
                                <label for="remember">Remember me on this computer</label>
                            </div>

                            <div class="action_btns">

                                <a href="#" class="btn btn-primary btn-default mt-3 w-100">Login</a>
                            </div>
                        </form>
                        <br/>
                        Sign in with your social network<br/>
                        <ul class="list-inline my-0">
                            <li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-linkedin"></i></a></li>
                            <li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-tumblr"></i></a></li>
                            <li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                        <hr/>
                        Don't have an account <a href="#" class="register_form">Sign Up</a>
                    </div>

                    <!-- Register Form -->
                    <div class="user_register">
                        <form>

                            <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0" placeholder="Username" />
                            <br />


                            <input type="email" class="form-control border-top-0 border-left-0 border-right-0 rounded-0" placeholder="Email Address" />
                            <br />


                            <input type="password" class="form-control border-top-0 border-left-0 border-right-0 rounded-0" placeholder="Password" />
                            <br />

                            <div class="checkbox">
                                <input id="send_updates" type="checkbox" />
                                <label for="send_updates">Send me occasional email updates</label>
                            </div>

                            <div class="action_btns">
                                <a href="#" class="btn btn-primary btn-default mt-3 w-100">Register</a>
                            </div>
                        </form>
                        <br/>
                        Register with your social network<br/>
                        <ul class="list-inline my-0">
                            <li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-linkedin"></i></a></li>
                            <li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-tumblr"></i></a></li>
                            <li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                        <hr/>
                        Already have an account <a href="#" class="login_form">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Login /Register Form-->
        <!-- jQuery -->

       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjsIpyXFoB7_5_E2DgO_-CTDMHKM0cW4I&sensor=false&libraries=places"></script>
        <script src="dist/js/plugins.min.js"></script>
        <script src="dist/js/common.js"></script>
        <script src="dist/js/jquery.locationpicker.js"></script>
        <script src="dist/js/add-listing.js"></script>
    </body>

</html>