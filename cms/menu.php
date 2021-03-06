<nav class="navbar navbar-toggleable-md navbar-expand-lg navbar-light py-lg-0 py-4">
                <a class="navbar-brand mr-4 mr-md-5" href="/"><img src="/cms/images/logo-v1.png" alt=""></a> 

				
                <div id="dl-menu" class="dl-menuwrapper d-block d-lg-none float-right">
                    <button>Open Menu</button>
                    <ul class="dl-menu">

                        <li class="nav-item active dropdown">
                            <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">Home</a>
                            <ul class="dl-submenu">
                                <li class="dl-back"><a href="#">back</a></li>
                                <li><a href="index.html">Home 1</a></li>
                                <li><a href="index-2.html">Home 2</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">Explore</a>
                            <ul class="dl-submenu">
                                <li class="dl-back"><a href="#">back</a></li>
                                <li><a href="listing-explore-place-profile.html">Explore Place</a></li>
                                <li><a href="listing-explore-event-profile.html">Explore Event</a></li>
                                <li><a href="listing-explore-property-profile.html">Explore Property</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">Listing</a>
                            <ul class="dl-submenu">
                                <li class="dl-back"><a href="#">back</a></li>
                                <li class="dropdown-submenu"><a tabindex="-1" href="#">Listing By Categories</a>
                                    <ul class="dl-submenu">
                                        <li class="dl-back"><a href="#">back</a></li>
                                        <li><a href="listing-categories-style1.html">Category 1</a></li>
                                        <li><a href="listing-categories-style2.html">Category 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a tabindex="-1" href="#">Listing No Map</a>
                                    <ul class="dl-submenu">
                                        <li class="dl-back"><a href="#">back</a></li>
                                        <li><a href="listing-no-map-sidebar.html">With Sidebar</a></li>
                                        <li><a href="listing-no-map-fullwidth.html">Full Width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a tabindex="-1" href="#">Half Screen Map</a>
                                    <ul class="dl-submenu">
                                        <li class="dl-back"><a href="#">back</a></li>
                                        <li><a href="half-screen-search-sidebar-place.html">With Search Place</a></li>
                                        <li><a href="half-screen-search-sidebar-event.html">With Search Event</a></li>
                                        <li><a href="half-screen-search-sidebar-property.html">With Search Property</a></li>
                                        <li><a href="half-screen-with-categories-sidebar.html">With Categories Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">Pages</a>
                            <ul class="dl-submenu">
                                <li class="dl-back"><a href="#">back</a></li>
                                <li class="dropdown-submenu"><a tabindex="-1" href="#">Blog</a>
                                    <ul class="dl-submenu">
                                        <li class="dl-back"><a href="#">back</a></li>
                                        <li><a href="blog-grid.html"> Blog Grid</a></li>
                                        <li><a href="blog-listing.html"> Blog Listing</a></li>
                                        <li><a href="blog-single.html"> Single Post</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html"> Contact</a></li>
                                <li><a href="user-profile.html"> User Profile</a></li>
                                <li><a href="faq.html"> Faq</a></li>
                                <li><a href="pricing.html"> Pricing Table</a></li>
                                <li><a href="coming-soon.html"> Coming Soon</a></li>
                                <li class="dropdown-submenu"><a tabindex="-1" href="#">404 Error</a>
                                    <ul class="dl-submenu">
                                        <li class="dl-back"><a href="#">back</a></li>
                                        <li><a href="error-dark.html"> 404 Error Dark</a></li>
                                        <li><a href="error-light.html"> 404 Error Light</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

<?if(isset($_SESSION["loguser"])){
						$usr = $_SESSION["loguser"];?>
						
						
                        <li class="text-white"><a href="/user-profile.php" class="text-white login_form"><?=$usr->login;?></a></li>
						<li class="text-white"><a href="/logout.php" class="text-white login_form">Выход</a></li>
						<li> <a href="/add-property-listing.php" ><i class="fa fa-plus pr-1"></i> Добавить жилье</a></li>
					<?}else{?>
					
                        <li><a href="#modal" class="text-white login_form"><i class="fa fa-sign-in pr-2"></i> Вход | Регистрация</a></li>

                        <li> <a href="/add-property-listing.php" ><i class="fa fa-plus pr-1"></i> Добавить жилье</a></li>
					<?}?>


                    </ul>
                </div>


                <div class="collapse navbar-collapse d-none d-lg-block" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active dropdown">
                            <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">Home <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home 1</a></li>
                                <li><a href="index-2.html">Home 2</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">Explore <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="listing-explore-place-profile.html">Explore Place</a></li>
                                <li><a href="listing-explore-event-profile.html">Explore Event</a></li>
                                <li><a href="listing-explore-property-profile.html">Explore Property</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">Listing <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"><a tabindex="-1" href="#">Listing By Categories</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="listing-categories-style1.html">Category 1</a></li>
                                        <li><a href="listing-categories-style2.html">Category 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a tabindex="-1" href="#">Listing No Map</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="listing-no-map-sidebar.html">With Sidebar</a></li>
                                        <li><a href="listing-no-map-fullwidth.html">Full Width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a tabindex="-1" href="#">Half Screen Map</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="half-screen-search-sidebar-place.html">With Search Place</a></li>
                                        <li><a href="half-screen-search-sidebar-event.html">With Search Event</a></li>
                                        <li><a href="half-screen-search-sidebar-property.html">With Search Property</a></li>
                                        <li><a href="half-screen-with-categories-sidebar.html">With Categories Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"><a tabindex="-1" href="#">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-grid.html"> Blog Grid</a></li>
                                        <li><a href="blog-listing.html"> Blog Listing</a></li>
                                        <li><a href="blog-single.html"> Single Post</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html"> Contact</a></li>
                                <li><a href="user-profile.html"> User Profile</a></li>
                                <li><a href="faq.html"> Faq</a></li>
                                <li><a href="pricing.html"> Pricing Table</a></li>
                                <li><a href="coming-soon.html"> Coming Soon</a></li>
                                <li class="dropdown-submenu"><a tabindex="-1" href="#">404 Error</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="error-dark.html"> 404 Error Dark</a></li>
                                        <li><a href="error-light.html"> 404 Error Light</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
					<?if(isset($_SESSION["loguser"])){
						$usr = $_SESSION["loguser"];
						?>
						<ul class="list-unstyled my-2 my-lg-0">
                        <li class="text-white"><i class="fa fa-sign-in pr-2"></i> <a href="/logout.php" class="text-white login_form">Выход</a> | <a href="/user-profile.php" class="text-white login_form"><?=$usr->login;?></a></li>
						</ul>
						<a href="/add-property-listing.php" class="btn btn-outline-light btn-sm ml-0 ml-lg-4 mt-3 mt-lg-0"><i class="fa fa-plus pr-1"></i> Сдать жилье</a>
					<?}else{?>
                    <ul class="list-unstyled my-2 my-lg-0">
                        <li class="text-white"><i class="fa fa-sign-in pr-2"></i> <a href="#modal" class="text-white login_form">Вход | Регистрация</a></li>
                    </ul>
                    <a href="/add-property-listing.php" class="btn btn-outline-light btn-sm ml-0 ml-lg-4 mt-3 mt-lg-0"><i class="fa fa-plus pr-1"></i> Сдать жилье</a>
					<?}?>
                </div>
            </nav>