<nav class="uc-navbar-container text-gray-900 dark:text-white fs-6 z-1">
                <div class="uc-top-navbar panel z-3 overflow-hidden bg-primary-600 swiper-parent" style="--uc-nav-height: 32px" data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;">
                    <div class="container container-full">
                        <div class="uc-navbar-item">
                            <div class="swiper swiper-ticker swiper-ticker-sep px-2" style="--uc-ticker-gap: 32px" data-uc-swiper="items: auto; gap: 32; center: true; center-bounds: true; autoplay: 10000; speed: 10000; autoplay-delay: 0.1; loop: true; allowTouchMove: false; freeMode: true; autoplay-disableOnInteraction: true;">
                                <div class="swiper-wrapper">
                                    <?php $query=mysqli_query($con,"select * from tblposts ORDER BY id DESC LIMIT 12");
                                                    while($row=mysqli_fetch_array($query))
                                                    {
                                                ?>
                                    <div class="swiper-slide text-white">
                                        <div class="type-post post panel">
                                            <a href="#underMaintainance" class="fs-7 fw-normal text-none text-inherit">
                                                <?php //echo htmlentities($row['PostTitle']);?>Under Maintenance
                                            </a>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uc-center-navbar panel hstack z-2 min-h-48px d-none lg:d-flex" data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;">
                    <div class="container max-w-xl">
                        <div class="navbar-container hstack border-bottom">
                            <div class="uc-navbar-center gap-2 lg:gap-3 flex-1">
                                <ul class="uc-navbar-nav gap-3 justify-between flex-1 fs-6 fw-bold" style="--uc-nav-height: 48px">
                        <!--    <li>
                                        <a href="#"><span class="icon-1 unicon-finance"></span></a>
                                        <div class="uc-navbar-dropdown ft-primary text-unset p-3 pb-4 rounded-0 hide-scrollbar" data-uc-drop=" offset: 0; boundary: !.navbar-container; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                                            <div class="row child-cols col-match g-2">
                                                <div class="col-2">
                                                    <ul class="uc-nav uc-navbar-dropdown-nav">
                                                        <li><a href="sub-category.php">Trending</a></li>
                                                        <li><a href="sub-category.php">Politics</a></li>
                                                        <li><a href="sub-category.php">Opinions</a></li>
                                                        <li><a href="sub-category.php">World</a></li>
                                                        <li><a href="sub-category.php">Media</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-2">
                                                    <ul class="uc-nav uc-navbar-dropdown-nav">
                                                        <li><a href="sub-category.php">Tech</a></li>
                                                        <li><a href="sub-category.php">Business</a></li>
                                                        <li><a href="sub-category.php">Fashion</a></li>
                                                        <li><a href="sub-category.php">Arts</a></li>
                                                        <li><a href="sub-category.php">Food</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-2">
                                                    <ul class="uc-nav uc-navbar-dropdown-nav">
                                                        <li><a href="sub-category.php">Economy</a></li>
                                                        <li><a href="sub-category.php">Finance</a></li>
                                                        <li><a href="sub-category.php">Education</a></li>
                                                        <li><a href="sub-category.php">Health</a></li>
                                                        <li><a href="sub-category.php">National</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-2">
                                                    <ul class="uc-nav uc-navbar-dropdown-nav">
                                                        <li><a href="sub-category.php">E-Books</a></li>
                                                        <li><a href="sub-category.php">Press</a></li>
                                                        <li><a href="sub-category.php">Podcasts</a></li>
                                                        <li><a href="sub-category.php">Entertainments</a></li>
                                                        <li><a href="sub-category.php">Weather</a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <div class="uc-navbar-newsletter panel vstack">
                                                        <h6 class="fs-6 ft-tertiary fw-medium">Newsletter</h6>
                                                        <form class="hstack gap-1 bg-gray-300 bg-opacity-10">
                                                            <input type="email" class="form-control-plaintext form-control-xs fs-6 dark:text-white" placeholder="Your email address..">
                                                            <button type="submit" class="btn btn-sm btn-primary fs-6 rounded-0">Subscribe</button>
                                                        </form>
                                                        <p class="fs-7 mt-1">Do not worry, we don't spam!</p>
                                                        <ul class="nav-x gap-2 mt-3">
                                                            <li>
                                                                <a href="#fb"><i class="icon icon-2 unicon-logo-facebook"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#x"><i class="icon icon-2 unicon-logo-x-filled"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#in"><i class="icon icon-2 unicon-logo-instagram"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#yt"><i class="icon icon-2 unicon-logo-youtube"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> -->
                                    <li>
                                        <a href="posts.php">Latest</a>
                                    </li>

                                    <?php $query=mysqli_query($con,"select id,CategoryName from tblcategory LIMIT 8");
                                                    while($row=mysqli_fetch_array($query))
                                                    {
                                                ?>
                                    <li>
                                        <a href="sub-category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo $row['CategoryName'];?></a>
                                    </li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uc-bottom-navbar panel z-1">
                    <div class="container max-w-xl">
                        <div class="uc-navbar min-h-72px lg:min-h-100px" data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;">
                            <div class="uc-navbar-left">
                                <div>
                                    <a class="uc-menu-trigger icon-2" href="#uc-menu-panel" data-uc-toggle></a>
                                </div>
                                <div class="uc-navbar-item d-none lg:d-inline-flex">
                                    <a class="btn btn-xs gap-narrow ps-1 border rounded-pill fw-bold dark:text-white hover:bg-gray-25 dark:hover:bg-gray-900" href="#live_now" data-uc-scroll="offset: 128">
                                        <i class="icon icon-narrow unicon-dot-mark text-red" data-uc-animate="flash"></i>
                                        <span>Live</span>
                                    </a>
                                </div>
                                <div class="uc-logo d-block md:d-none">
                                    <a href="index.php">
                                        <img class="w-100px text-dark dark:text-white" src="assets/images/logo.png" alt="BounderLine" data-uc-svg>
                                    </a>
                                </div>
                            </div>
                            <div class="uc-navbar-center">
                                <div class="uc-logo d-none md:d-block">
                                    <a href="index.php">
                                        <img class="w-150px text-dark dark:text-white" src="assets/images/logo.png" alt="BoundryLine" data-uc-svg>
                                    </a>
                                </div>
                            </div>
                            <div class="uc-navbar-right gap-2 lg:gap-3">
                                <div class="uc-navbar-item d-inline-flex lg:d-none">
                                    <a class="btn btn-xs gap-narrow ps-1 border rounded-pill fw-bold dark:text-white hover:bg-gray-25 dark:hover:bg-gray-900" href="#live_now" data-uc-scroll="offset: 128">
                                        <i class="icon icon-narrow unicon-dot-mark text-red" data-uc-animate="flash"></i>
                                        <span>Live</span>
                                    </a>
                                </div>
                                <!--
                                <div class="uc-navbar-item d-none lg:d-inline-flex">
                                    <a class="uc-account-trigger position-relative btn btn-sm border-0 p-0 gap-narrow duration-0 dark:text-white" href="#uc-account-modal" data-uc-toggle>
                                        <i class="icon icon-2 fw-medium unicon-user-avatar"></i>
                                    </a>
                                </div>
                                -->
                                <div class="uc-navbar-item d-none lg:d-inline-flex">
                                    <a class="uc-search-trigger cstack text-none text-dark dark:text-white" href="#uc-search-modal" data-uc-toggle>
                                        <i class="icon icon-2 fw-medium unicon-search"></i>
                                    </a>
                                </div>
                                <div class="uc-navbar-item d-none lg:d-inline-flex">
                                    <div class="uc-modes-trigger btn btn-xs w-32px h-32px p-0 border fw-normal rounded-circle dark:text-white hover:bg-gray-25 dark:hover:bg-gray-900" data-darkmode-toggle="">
                                        <label class="switch">
                                            <span class="sr-only">Dark toggle</span>
                                            <input type="checkbox">
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>