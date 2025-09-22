<?php 
session_start();
error_reporting(0);
include('admin/includes/config.php');

?>
<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
        <?php include('includes/meta-head.php');?>
</head>
    <body class="uni-body panel bg-white text-gray-900 dark:bg-black dark:text-white text-opacity-50 overflow-x-hidden">

        <!--  Search modal -->
        <?php include('includes/modals.php');?>

        <!-- Header start -->
        <header class="uc-header header-seven uc-navbar-sticky-wrap z-999" data-uc-sticky="sel-target: .uc-navbar-container; cls-active: uc-navbar-sticky; cls-inactive: uc-navbar-transparent; end: !*;">
            <?php include('includes/header.php');?>
        </header>

        <!-- Header end -->

        <!-- Wrapper start -->
        <div id="wrapper" class="wrap overflow-hidden-x">

            <!-- Section start -->
            <div class="section panel overflow-hidden swiper-parent border-top">
                <div class="section-outer panel py-2 lg:py-4 dark:text-white">
                    <div class="container max-w-xl">
                        <div class="section-inner panel vstack gap-2">
                            <div class="block-layout carousel-layout vstack gap-2 lg:gap-3 panel">
                                <div class="block-content panel">
                                    <div class="swiper" data-uc-swiper="items: 1; gap: 16; dots: .dot-nav; next: .nav-next; prev: .nav-prev; disable-class: d-none;" data-uc-swiper-s="items: 3; gap: 24;" data-uc-swiper-l="items: 4; gap: 24;">
                                        <div class="swiper-wrapper">
                                        <?php $query=mysqli_query($con,"select * from tblposts ORDER BY id DESC LIMIT 10");
                                 while($row=mysqli_fetch_array($query))
                                   {
                                ?>
                                            <div class="swiper-slide">
                                                <div>
                                                    <article class="post type-post panel uc-transition-toggle gap-2">
                                                        <div class="row child-cols g-2" data-uc-grid>
                                                            <div class="col-auto">
                                                                <div class="post-media panel overflow-hidden max-w-64px min-w-64px">
                                                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1">
                                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="#" data-uc-img="loading: lazy">
                                                                    </div>
                                                                    <a href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>" class="position-cover"></a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="post-header panel vstack justify-between gap-1">
                                                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                                                        <a class="text-none hover:text-primary duration-150" href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>"><?php echo htmlentities($row['PostTitle']);?></a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                    <div class="swiper-nav nav-prev position-absolute top-50 start-0 translate-middle btn btn-alt-primary text-black rounded-circle p-0 border shadow-xs w-32px h-32px z-1">
                                        <i class="icon-1 unicon-chevron-left"></i>
                                    </div>
                                    <div class="swiper-nav nav-next position-absolute top-50 start-100 translate-middle btn btn-alt-primary text-black rounded-circle p-0 border shadow-xs w-32px h-32px z-1">
                                        <i class="icon-1 unicon-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section end -->

            <!-- Section start -->

            <div class="section panel mb-4 lg:mb-6">
                <div class="section-outer panel">
                    <div class="container max-w-xl">
                        <div class="section-inner panel vstack gap-4">
                            <div class="section-content">
                                <div class="row child-col-12 lg:child-cols g-4 lg:g-6 col-match">
                                    <div class="lg:col-9">
                                        <div class="block-layout slider-layout swiper-parent uc-dark">
                                            <div class="block-content panel uc-visible-toggle">
                                                <div class="swiper" data-uc-swiper="items: 1; active: 1; gap: 4; prev: .nav-prev; next: .nav-next; autoplay: 6000; parallax: true; fade: true; effect: fade; disable-class: d-none;">
                                                    <div class="swiper-wrapper">
                                                    <?php $query=mysqli_query($con,"select * from tblposts ORDER BY id DESC LIMIT 5");
                                 while($row=mysqli_fetch_array($query))
                                   {
                                ?>
                                                   
                                                        <div class="swiper-slide">
                                                            <article class="post type-post panel uc-transition-toggle vstack gap-2 lg:gap-3 h-100 overflow-hidden uc-dark">
                                                                <div class="post-media panel overflow-hidden h-100">
                                                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 h-100 d-none md:d-block">
                                                                        <canvas class="h-100 w-100"></canvas>
                                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="Solo Travel: Some Tips and Destinations for the Adventurous Explorer" data-uc-img="loading: lazy">
                                                                    </div>
                                                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9 d-block md:d-none">
                                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['PostTitle']);?>" data-uc-img="loading: lazy">
                                                                    </div>
                                                                </div>
                                                                <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-90"></div>
                                                                <div class="post-header panel vstack justify-end items-start gap-1 p-2 sm:p-4 position-cover text-white" data-swiper-parallax-y="-24">
                                                                    <div class="post-date hstack gap-narrow fs-7 text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                                        <span><?php echo htmlentities($row['PostingDate']);?></span>
                                                                    </div>
                                                                    <h3 class="post-title h5 lg:h4 xl:h3 m-0 max-w-600px text-white text-truncate-2">
                                                                        <a class="text-none text-white" href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>"><?php echo htmlentities($row['PostTitle']);?></a>
                                                                    </h3>
                                                                    
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="swiper-nav nav-prev position-absolute top-50 start-0 translate-middle-y btn btn-alt-primary text-black rounded-circle p-0 mx-2 border-0 shadow-xs w-32px h-32px z-1 uc-hidden-hover">
                                                    <i class="icon-1 unicon-chevron-left"></i>
                                                </div>
                                                <div class="swiper-nav nav-next position-absolute top-50 end-0 translate-middle-y btn btn-alt-primary text-black rounded-circle p-0 mx-2 border-0 shadow-xs w-32px h-32px z-1 uc-hidden-hover">
                                                    <i class="icon-1 unicon-chevron-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:col-3">
                                        <div class="panel cstack gap-2 h-100">
                                            <div>
                                                <div class="widget ad-widget vstack gap-2">
                                                    <div class="widget-title text-center">
                                                        <h5 class="fs-7 ft-tertiary text-uppercase m-0">Sponsore</h5>
                                                    </div>
                                                    <div class="widget-content">
                                                        <a class="cstack max-w-300px mx-auto text-none" href="JavaScript:Void(0)" target="_blank" rel="nofollow">
                                                            <img class="d-none sm:d-block" src="assets/images/common/ad-desktop.jpg" alt="Ad slot">
                                                            <img class="d-block sm:d-none" src="assets/images/common/ad-mobile.html" alt="Ad slot">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           <!-- Section end -->

            <!-- Section start -->
            <div class="section panel overflow-hidden">
                <div class="section-outer panel">
                    <div class="container max-w-xl">
                        <div class="section-inner">
                            <div class="row child-cols-12 lg:child-cols g-4 lg:g-6 col-match" data-uc-grid>
                                <div class="lg:col-8">
                                    <div class="block-layout grid-layout vstack gap-2 lg:gap-3 panel overflow-hidden">
                                        <div class="block-header panel pt-1 border-top">
                                            <h2 class="h6 ft-tertiary fw-bold ls-0 text-uppercase m-0 text-black dark:text-white">
                                                <a class="hstack d-inline-flex gap-0 text-none hover:text-primary duration-150" href="JavaScript:Void(0)">
                                                    <span>Poltics</span>
                                                    <i class="icon-1 fw-bold unicon-chevron-right"></i>
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="block-content">
                                            <div class="panel row child-cols-12 md:child-cols g-2 lg:g-4 col-match sep-y" data-uc-grid>
                                                <div class="col-12 md:col-6 order-0 md:order-1">
                                                    <div>
                                                    <?php $query=mysqli_query($con,"select * from tblposts ORDER BY id DESC LIMIT 1");
                                 while($row=mysqli_fetch_array($query))
                                   {
                                ?>
                                                        <article class="post type-post panel uc-transition-toggle vstack gap-2 lg:gap-3 h-100 overflow-hidden uc-dark">
                                                            <div class="post-media panel overflow-hidden h-100">
                                                                <div class="featured-image bg-gray-25 dark:bg-gray-800 h-100 d-none md:d-block">
                                                                    <canvas class="h-100 w-100"></canvas>
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo $row['PostImage'];?>" alt="The Importance of Sleep: Tips for Better Rest and Recovery" data-uc-img="loading: lazy">
                                                                </div>
                                                                <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9 d-block md:d-none">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo $row['PostImage'];?>" alt="The Importance of Sleep: Tips for Better Rest and Recovery" data-uc-img="loading: lazy">
                                                                </div>
                                                            </div>
                                                            <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-90"></div>
                                                            <div class="post-header panel vstack justify-end items-start gap-1 p-2 sm:p-4 position-cover text-white">
                                                                <div class="post-date hstack gap-narrow fs-7 text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                                    <span>2h</span>
                                                                </div>
                                                                <h3 class="post-title h5 lg:h4 m-0 max-w-600px text-white text-truncate-2">
                                                                    <a class="text-none text-white" href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>">
                                                                        <?php echo htmlentities($row['PostTitle']);?></a>
                                                                </h3>
                                                                <div>
                                                                    <div class="post-meta panel hstack justify-between fs-7 text-white text-opacity-60 mt-1">
                                                                        <div class="meta">
                                                                            <div class="hstack gap-2">
                                                                                <div>
                                                                                    <div class="post-author hstack gap-1">
                                                                                        <a href="page-author.html" class="text-black dark:text-white text-none fw-bold"><?php echo htmlentities($row['postedBy']);?></a>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <a href="#views" class="post-comments text-none hstack gap-narrow">
                                                                                        <i class="icon-narrow unicon-view"></i>
                                                                                        <span><?php echo htmlentities($row['viewCounter']);?></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="actions">
                                                                            <div class="hstack gap-1"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article><?php }?>
                                                    </div>
                                                </div>
                                                <div class="order-1 md:order-0">
                                                    <div class="row child-cols-12 g-2 lg:g-4 sep-x" data-uc-grid>
                                                    <?php $query=mysqli_query($con,"select * from tblposts WHERE CategoryId = '2' ORDER BY id DESC LIMIT 4");
                                 while($row=mysqli_fetch_array($query))
                                   {
                                ?>
                                                        <div>
                                                            <article class="post type-post panel uc-transition-toggle">
                                                                <div class="row child-cols g-2 lg:g-3" data-uc-grid>
                                                                    <div>
                                                                        <div class="post-header panel vstack justify-between gap-1">
                                                                            <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                <a class="text-none hover:text-primary duration-150" href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>"><?php echo htmlentities($row['PostTitle']);?></a>
                                                                            </h3>
                                                                            <div class="post-date hstack gap-narrow fs-7 text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                                                <span><?php echo htmlentities($row['PostingDate']);?></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="post-media panel overflow-hidden max-w-72px min-w-72px">
                                                                            <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1">
                                                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo $row['PostImage'];?>" alt="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles" data-uc-img="loading: lazy">
                                                                            </div>
                                                                            <a href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>" class="position-cover"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <?php }?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:col-4">
                                    <div class="block-layout grid-layout vstack gap-2 lg:gap-3 panel overflow-hidden">
                                        <div class="block-header panel pt-1 border-top">
                                            <h2 class="h6 ft-tertiary fw-bold ls-0 text-uppercase m-0 text-black dark:text-white">
                                                <a class="hstack d-inline-flex gap-0 text-none hover:text-primary duration-150" href="JavaScript:Void(0)">
                                                    <span>Sports</span>
                                                    <i class="icon-1 fw-bold unicon-chevron-right"></i>
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="block-content">
                                            <div class="row child-cols-12 g-2 lg:g-4 sep-x" data-uc-grid>
                                            <?php $query=mysqli_query($con,"select * from tblposts WHERE CategoryId = '1' ORDER BY id DESC LIMIT 4");
                                 while($row=mysqli_fetch_array($query))
                                   {
                                ?>
                                                <div>
                                                    <article class="post type-post panel uc-transition-toggle">
                                                        <div class="row child-cols g-2 lg:g-3" data-uc-grid>
                                                            <div>
                                                                <div class="post-header panel vstack justify-between gap-1">
                                                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                                                        <a class="text-none hover:text-primary duration-150" href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>"><?php echo htmlentities($row['PostTitle']);?></a>
                                                                    </h3>
                                                                    <div class="post-date hstack gap-narrow fs-7 text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                                        <span><?php echo htmlentities($row['PostingDate']);?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="post-media panel overflow-hidden max-w-72px min-w-72px">
                                                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1">
                                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo $row['PostImage'];?>" alt="Solo Travel: Some Tips and Destinations for the Adventurous Explorer" data-uc-img="loading: lazy">
                                                                    </div>
                                                                    <a href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>" class="position-cover"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section end -->

            <!-- Section start -->
            <div class="section panel overflow-hidden swiper-parent">
                <div class="section-outer panel py-4 lg:py-6 dark:text-white">
                    <div class="container max-w-xl">
                        <div class="section-inner panel vstack gap-2">
                            <div class="block-layout carousel-layout vstack gap-2 lg:gap-3 panel">
                                <div class="block-header panel pt-1 border-top">
                                    <h2 class="h6 ft-tertiary fw-bold ls-0 text-uppercase m-0 text-black dark:text-white">Hot now</h2>
                                </div>
                                <div class="block-content panel">
                                    <div class="swiper" data-uc-swiper="items: 2; gap: 16; dots: .dot-nav; next: .nav-next; prev: .nav-prev; disable-class: d-none;" data-uc-swiper-s="items: 3; gap: 24;" data-uc-swiper-l="items: 5; gap: 24;">
                                        <div class="swiper-wrapper">
                                        <?php $query=mysqli_query($con,"select * from tblposts WHERE PostingDate > CURRENT_TIME - INTERVAL 30 DAY
ORDER BY viewCounter / (UNIX_TIMESTAMP() - UNIX_TIMESTAMP(PostingDate)) DESC LIMIT 10");
                                                    while($row=mysqli_fetch_array($query))
                                                    {
                                                ?>
                                            <div class="swiper-slide">
                                                <div>
                                                    <article class="post type-post panel uc-transition-toggle vstack gap-2">
                                                        <div class="post-media panel overflow-hidden">
                                                            <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-3x2">
                                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo $row['PostImage'];?>" alt="<?php echo htmlentities($row['PostTitle']);?>" data-uc-img="loading: lazy">
                                                            </div>
                                                            <a href="JavaScript:Void(0)" class="position-cover"></a>
                                                        </div>
                                                        <div class="post-header panel vstack gap-1">
                                                            <h3 class="post-title h6 m-0 text-truncate-2">
                                                                <a class="text-none hover:text-primary duration-150" href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>"><?php echo htmlentities($row['PostTitle']);?></a>
                                                            </h3>
                                                            <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                                                <div>
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span><?php echo htmlentities($row['PostingDate']);?></span>
                                                                    </div>
                                                                </div>
                                                                <div>·</div>
                                                                <div>
                                                                    <a href="#views" class="post-comments text-none hstack gap-narrow">
                                                                        <i class="icon-narrow unicon-view"></i>
                                                                        <span><?php echo htmlentities($row['viewCounter']);?></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                    <div class="swiper-nav nav-prev position-absolute top-50 start-0 translate-middle btn btn-alt-primary text-black rounded-circle p-0 border shadow-xs w-32px lg:w-40px h-32px lg:h-40px z-1">
                                        <i class="icon-1 unicon-chevron-left"></i>
                                    </div>
                                    <div class="swiper-nav nav-next position-absolute top-50 start-100 translate-middle btn btn-alt-primary text-black rounded-circle p-0 border shadow-xs w-32px lg:w-40px h-32px lg:h-40px z-1">
                                        <i class="icon-1 unicon-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section end -->

            <!-- Section start -->
            <div class="section panel overflow-hidden">
                <div class="section-outer panel">
                    <div class="container max-w-xl">
                        <div class="section-inner">
                            <div class="row child-cols-12 lg:child-cols g-4 lg:g-6 col-match" data-uc-grid>
                                <div class="lg:col-8 order-0 lg:order-2">
                                    <div class="block-layout grid-layout vstack gap-2 lg:gap-3 panel overflow-hidden">
                                        <div class="block-header panel pt-1 border-top">
                                            <h2 class="h6 ft-tertiary fw-bold ls-0 text-uppercase m-0 text-black dark:text-white">
                                                <a class="hstack d-inline-flex gap-0 text-none hover:text-primary duration-150" href="JavaScript:Void(0)">
                                                    <span>National</span>
                                                    <i class="icon-1 fw-bold unicon-chevron-right"></i>
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="block-content">
                                            <div class="panel row child-cols-12 md:child-cols g-2 lg:g-4 col-match sep-y" data-uc-grid>
                                                <div class="col-12 md:col-6 order-0 md:order-1">
                                                    <div>
                                                    <?php $query=mysqli_query($con,"select * from tblposts WHERE CategoryId = '6' ORDER BY id DESC LIMIT 1");
                                 while($row=mysqli_fetch_array($query))
                                   {
                                ?>
                                                        <article class="post type-post panel uc-transition-toggle vstack gap-2 lg:gap-3 h-100 overflow-hidden uc-dark">
                                                            <div class="post-media panel overflow-hidden h-100">
                                                                <div class="featured-image bg-gray-25 dark:bg-gray-800 h-100 d-none md:d-block">
                                                                    <canvas class="h-100 w-100"></canvas>
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo $row['PostImage'];?>" alt="The Importance of Sleep: Tips for Better Rest and Recovery" data-uc-img="loading: lazy">
                                                                </div>
                                                                <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9 d-block md:d-none">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo $row['PostImage'];?>" alt="The Importance of Sleep: Tips for Better Rest and Recovery" data-uc-img="loading: lazy">
                                                                </div>
                                                            </div>
                                                            <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-90"></div>
                                                            <div class="post-header panel vstack justify-end items-start gap-1 p-2 sm:p-4 position-cover text-white">
                                                                <div class="post-date hstack gap-narrow fs-7 text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                                    <span>2h</span>
                                                                </div>
                                                                <h3 class="post-title h5 lg:h4 m-0 max-w-600px text-white text-truncate-2">
                                                                    <a class="text-none text-white" href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>">
                                                                        <?php echo htmlentities($row['PostTitle']);?></a>
                                                                </h3>
                                                                <div>
                                                                    <div class="post-meta panel hstack justify-between fs-7 text-white text-opacity-60 mt-1">
                                                                        <div class="meta">
                                                                            <div class="hstack gap-2">
                                                                                <div>
                                                                                    <div class="post-author hstack gap-1">
                                                                                        <a href="page-author.html" class="text-black dark:text-white text-none fw-bold"><?php echo htmlentities($row['postedBy']);?></a>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <a href="#views" class="post-comments text-none hstack gap-narrow">
                                                                                        <i class="icon-narrow unicon-view"></i>
                                                                                        <span><?php echo htmlentities($row['viewCounter']);?></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="actions">
                                                                            <div class="hstack gap-1"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article><?php }?>
                                                    </div>

                                                </div>
                                                <div class="order-1 md:order-0">
                                                    <div class="row child-cols-12 g-2 lg:g-4 sep-x" data-uc-grid>
                                                    <?php $query=mysqli_query($con,"select * from tblposts WHERE CategoryId = '2' ORDER BY id DESC LIMIT 4");
                                                    while($row=mysqli_fetch_array($query))
                                                    {
                                                    ?>
                                                        <div>
                                                            <article class="post type-post panel uc-transition-toggle">
                                                                <div class="row child-cols g-2 lg:g-3" data-uc-grid>
                                                                    <div>
                                                                        <div class="post-header panel vstack justify-between gap-1">
                                                                            <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                <a class="text-none hover:text-primary duration-150" href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>"><?php echo htmlentities($row['PostTitle']);?></a>
                                                                            </h3>
                                                                            <div class="post-date hstack gap-narrow fs-7 text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                                                <span><?php echo htmlentities($row['PostingDate']);?></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="post-media panel overflow-hidden max-w-72px min-w-72px">
                                                                            <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1">
                                                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo $row['PostImage'];?>" alt="<?php echo htmlentities($row['PostTitle']);?>" data-uc-img="loading: lazy">
                                                                            </div>
                                                                            <a href="JavaScript:Void(0)" class="position-cover"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <?php }?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:col-4 order-1">
                                    <div class="block-layout grid-layout vstack gap-2 lg:gap-3 panel overflow-hidden">
                                        <div class="block-header panel pt-1 border-top">
                                            <h2 class="h6 ft-tertiary fw-bold ls-0 text-uppercase m-0 text-black dark:text-white">
                                                <a class="hstack d-inline-flex gap-0 text-none hover:text-primary duration-150" href="JavaScript:Void(0)">
                                                    <span>World</span>
                                                    <i class="icon-1 fw-bold unicon-chevron-right"></i>
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="block-content">
                                            <div class="row child-cols-12 g-2 lg:g-4 sep-x" data-uc-grid>
                                            <?php $query=mysqli_query($con,"select * from tblposts WHERE CategoryId = '3' ORDER BY id DESC LIMIT 4");
                                                    while($row=mysqli_fetch_array($query))
                                                    {
                                                    ?>
                                                <div>
                                                    <article class="post type-post panel uc-transition-toggle">
                                                        <div class="row child-cols g-2 lg:g-3" data-uc-grid>
                                                            <div>
                                                                <div class="post-header panel vstack justify-between gap-1">
                                                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                                                        <a class="text-none hover:text-primary duration-150" href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>"><?php echo htmlentities($row['PostTitle']);?></a>
                                                                    </h3>
                                                                    <div class="post-date hstack gap-narrow fs-7 text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                                        <span><?php echo htmlentities($row['PostingDate']);?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="post-media panel overflow-hidden max-w-72px min-w-72px">
                                                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1">
                                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo $row['PostImage'];?>" alt="<?php echo htmlentities($row['PostTitle']);?>" data-uc-img="loading: lazy">
                                                                    </div>
                                                                    <a href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>" class="position-cover"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section end -->

            <!-- Section start -->
            <div class="section panel overflow-hidden">
                <div class="section-outer panel py-4 lg:py-6 dark:text-white">
                    <div class="container max-w-xl">
                        <div class="section-inner">
                            <div class="row child-cols-12 lg:child-cols g-4 lg:g-6 col-match" data-uc-grid>
                                <div class="lg:col-4">
                                    <div class="block-layout list-layout vstack gap-2 lg:gap-3 panel overflow-hidden">
                                        <div class="block-header panel pt-1 border-top">
                                            <h2 class="h6 ft-tertiary fw-bold ls-0 text-uppercase m-0 text-black dark:text-white">
                                                <a class="hstack d-inline-flex gap-0 text-none hover:text-primary duration-150" href="JavaScript:Void(0)">
                                                    <span>Tech</span>
                                                    <i class="icon-1 fw-bold unicon-chevron-right"></i>
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="block-content">
                                            <div class="row child-cols-12 g-2 lg:g-4 sep-x" data-uc-grid>
                                            
                                                <div><?php $query=mysqli_query($con,"select * from tblposts WHERE CategoryId = '9' ORDER BY id DESC LIMIT 1");
                                                    while($row=mysqli_fetch_array($query))
                                                    {
                                                    ?>

                                                    <article class="post type-post panel uc-transition-toggle vstack gap-2      lg:gap-3 overflow-hidden uc-dark">
                                                        <div class="post-media panel overflow-hidden">
                                                            <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-4x3">
                                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo $row['PostImage'];?>" alt="<?php echo htmlentities($row['PostTitle']);?>" data-uc-img="loading: lazy">
                                                            </div>
                                                        </div>
                                                        <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-90"></div>
                                                        <div class="post-header panel vstack justify-start items-start flex-column-reverse gap-1 p-2 position-cover text-white">
                                                            <div class="post-meta panel hstack justify-between fs-7 text-white text-opacity-60 mt-1">
                                                                <div class="meta">
                                                                    <div class="hstack gap-2">
                                                                        <div>
                                                                            <div class="post-author hstack gap-1">
                                                                                <a href="JavaScript:Void(0)" class="text-black dark:text-white text-none fw-bold"><?php echo htmlentities($row['postedBy']);?></a>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <a href="#views" class="post-comments text-none hstack gap-narrow">
                                                                                <i class="icon-narrow unicon-view"></i>
                                                                                <span><?php echo htmlentities($row['viewCounter']);?></span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="actions">
                                                                    <div class="hstack gap-1"></div>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 lg:h5 m-0 m-0 max-w-600px text-white text-truncate-2">
                                                                <a class="text-none text-white" href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>"><?php echo htmlentities($row['PostTitle']);?></a>
                                                            </h3>
                                                            <div class="post-date hstack gap-narrow fs-7 text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                                <span><?php echo htmlentities($row['PostingDate']);?></span>
                                                            </div>
                                                        </div>
                                                        <a href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>" class="position-cover"></a>
                                                    </article><?php }?>
                                                </div>
                                                <?php $query=mysqli_query($con,"select * from tblposts WHERE CategoryId = '9' ORDER BY id DESC LIMIT 3");
                                                    while($row=mysqli_fetch_array($query))
                                                    {
                                                    ?>
                                                <div>
                                                    <article class="post type-post panel uc-transition-toggle">
                                                        <div class="row child-cols g-2 lg:g-3" data-uc-grid>
                                                            <div>
                                                                <div class="post-header panel vstack justify-between gap-1">
                                                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                                                        <a class="text-none hover:text-primary duration-150" href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>"><?php echo htmlentities($row['PostTitle']);?></a>
                                                                    </h3>
                                                                    <div class="post-date hstack gap-narrow fs-7 text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                                        <span><?php echo htmlentities($row['PostingDate']);?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="post-media panel overflow-hidden max-w-72px min-w-72px">
                                                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1">
                                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo $row['PostImage'];?>" alt="<?php echo htmlentities($row['PostTitle']);?>" data-uc-img="loading: lazy">
                                                                    </div>
                                                                    <a href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>" class="position-cover"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:col-4">
                                    <div class="block-layout list-layout vstack gap-2 lg:gap-3 panel overflow-hidden">
                                        <div class="block-header panel pt-1 border-top">
                                            <h2 class="h6 ft-tertiary fw-bold ls-0 text-uppercase m-0 text-black dark:text-white">
                                                <a class="hstack d-inline-flex gap-0 text-none hover:text-primary duration-150" href="JavaScript:Void(0)">
                                                    <span>Business</span>
                                                    <i class="icon-1 fw-bold unicon-chevron-right"></i>
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="block-content">
                                            <div class="row child-cols-12 g-2 lg:g-4 sep-x" data-uc-grid>
                                                <div>
                                                <?php $query=mysqli_query($con,"select * from tblposts WHERE CategoryId = '7' ORDER BY id DESC LIMIT 1");
                                 while($row=mysqli_fetch_array($query))
                                   {
                                ?>
                                                    <article class="post type-post panel uc-transition-toggle vstack gap-2 lg:gap-3 overflow-hidden uc-dark">
                                                        <div class="post-media panel overflow-hidden">
                                                            <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-4x3">
                                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo $row['PostImage'];?>" alt="<?php echo htmlentities($row['PostTitle']);?>" data-uc-img="loading: lazy">
                                                            </div>
                                                        </div>
                                                        <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-90"></div>
                                                        <div class="post-header panel vstack justify-start items-start flex-column-reverse gap-1 p-2 position-cover text-white">
                                                            <div class="post-meta panel hstack justify-between fs-7 text-white text-opacity-60 mt-1">
                                                                <div class="meta">
                                                                    <div class="hstack gap-2">
                                                                        <div>
                                                                            <div class="post-author hstack gap-1">
                                                                                <a href="page-author.html" class="text-black dark:text-white text-none fw-bold"><?php echo htmlentities($row['postedBy']);?></a>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <a href="#views" class="post-comments text-none hstack gap-narrow">
                                                                                <i class="icon-narrow unicon-view"></i>
                                                                                <span><?php echo htmlentities($row['viewCounter']);?></span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="actions">
                                                                    <div class="hstack gap-1"></div>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 lg:h5 m-0 m-0 max-w-600px text-white text-truncate-2">
                                                                <a class="text-none text-white" href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>"><?php echo htmlentities($row['PostTitle']);?></a>
                                                            </h3>
                                                            <div class="post-date hstack gap-narrow fs-7 text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                                <span><?php echo htmlentities($row['PostingDate']);?></span>
                                                            </div>
                                                        </div>
                                                        <a href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>" class="position-cover"></a>
                                                    </article>
                                                    <?php }?>
                                                </div>
                                                
                                                <?php $query=mysqli_query($con,"select * from tblposts WHERE CategoryId = '7' ORDER BY id DESC LIMIT 3");
                                 while($row=mysqli_fetch_array($query))
                                   {
                                ?>
                                                <div>
                                                    <article class="post type-post panel uc-transition-toggle">
                                                        <div class="row child-cols g-2 lg:g-3" data-uc-grid>
                                                            <div>
                                                                <div class="post-header panel vstack justify-between gap-1">
                                                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                                                        <a class="text-none hover:text-primary duration-150" href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>"><?php echo htmlentities($row['PostTitle']);?></a>
                                                                    </h3>
                                                                    <div class="post-date hstack gap-narrow fs-7 text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                                        <span><?php echo htmlentities($row['PostingDate']);?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="post-media panel overflow-hidden max-w-72px min-w-72px">
                                                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1">
                                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo $row['PostImage'];?>" alt="<?php echo htmlentities($row['PostTitle']);?>" data-uc-img="loading: lazy">
                                                                    </div>
                                                                    <a href="JavaScript:Void(0)" class="position-cover"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:col-4">
                                    <div class="block-layout list-layout vstack gap-2 lg:gap-3 panel overflow-hidden">
                                        <div class="block-header panel pt-1 border-top">
                                            <h2 class="h6 ft-tertiary fw-bold ls-0 text-uppercase m-0 text-black dark:text-white">
                                                <a class="hstack d-inline-flex gap-0 text-none hover:text-primary duration-150" href="JavaScript:Void(0)">
                                                    <span>Arts & Entertainments</span>
                                                    <i class="icon-1 fw-bold unicon-chevron-right"></i>
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="block-content">
                                            <div class="row child-cols-12 g-2 lg:g-4 sep-x" data-uc-grid>
                                                <div>
                                                <?php $query=mysqli_query($con,"select * from tblposts WHERE CategoryId = '4' ORDER BY id DESC LIMIT 1");
                                 while($row=mysqli_fetch_array($query))
                                   {
                                ?>
                                                    <article class="post type-post panel uc-transition-toggle vstack gap-2 lg:gap-3 overflow-hidden uc-dark">
                                                        <div class="post-media panel overflow-hidden">
                                                            <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-4x3">
                                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo $row['PostImage'];?>" alt="<?php echo htmlentities($row['PostTitle']);?>" data-uc-img="loading: lazy">
                                                            </div>
                                                        </div>
                                                        <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-90"></div>
                                                        <div class="post-header panel vstack justify-start items-start flex-column-reverse gap-1 p-2 position-cover text-white">
                                                            <div class="post-meta panel hstack justify-between fs-7 text-white text-opacity-60 mt-1">
                                                                <div class="meta">
                                                                    <div class="hstack gap-2">
                                                                        <div>
                                                                            <div class="post-author hstack gap-1">
                                                                                <a href="page-author.html" class="text-black dark:text-white text-none fw-bold"><?php echo htmlentities($row['postedBy']);?></a>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <a href="#views" class="post-comments text-none hstack gap-narrow">
                                                                                <i class="icon-narrow unicon-view"></i>
                                                                                <span><?php echo htmlentities($row['viewCounter']);?></span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="actions">
                                                                    <div class="hstack gap-1"></div>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 lg:h5 m-0 m-0 max-w-600px text-white text-truncate-2">
                                                                <a class="text-none text-white" href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>"><?php echo htmlentities($row['PostTitle']);?></a>
                                                            </h3>
                                                            <div class="post-date hstack gap-narrow fs-7 text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                                <span><?php echo htmlentities($row['PostingDate']);?></span>
                                                            </div>
                                                        </div>
                                                        <a href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>" class="position-cover"></a>
                                                    </article>
                                                    <?php }?>
                                                </div>

                                                <?php $query=mysqli_query($con,"select * from tblposts WHERE CategoryId = '4' ORDER BY id DESC LIMIT 4");
                                 while($row=mysqli_fetch_array($query))
                                   {
                                ?>
                                                <div>
                                                    <article class="post type-post panel uc-transition-toggle">
                                                        <div class="row child-cols g-2 lg:g-3" data-uc-grid>
                                                            <div>
                                                                <div class="post-header panel vstack justify-between gap-1">
                                                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                                                        <a class="text-none hover:text-primary duration-150" href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>"><?php echo htmlentities($row['PostTitle']);?></a>
                                                                    </h3>
                                                                    <div class="post-date hstack gap-narrow fs-7 text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                                        <span><?php echo htmlentities($row['PostingDate']);?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="post-media panel overflow-hidden max-w-72px min-w-72px">
                                                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1">
                                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo $row['PostImage'];?>" alt="<?php echo htmlentities($row['PostTitle']);?>" data-uc-img="loading: lazy">
                                                                    </div>
                                                                    <a href="JavaScript:Void(0)" class="position-cover"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section end -->

            <!-- Section start Enter media code here -->
            <?php include('includes/media.php');?>
            

            <!-- Section end -->

            <!-- Section start -->
            <div id="latest_news" class="latest-news section panel">
                <div class="section-outer panel py-4 lg:py-6">
                    <div class="container max-w-xl">
                        <div class="section-inner">
                            <div class="content-wrap row child-cols-12 g-4 lg:g-6" data-uc-grid>
                                <div class="md:col-9">
                                    <div class="main-wrap panel vstack gap-3 lg:gap-6">
                                        <div class="block-layout grid-layout vstack gap-2 panel overflow-hidden">
                                            <div class="block-header panel pt-1 border-top">
                                                <h2 class="h6 ft-tertiary fw-bold ls-0 text-uppercase m-0 text-black dark:text-white">Latest</h2>
                                            </div>
                                            <div class="block-content">
                                                <div class="row child-cols-12 g-2 lg:g-4 sep-x">

                                                <?php $query=mysqli_query($con,"select * from tblposts ORDER BY id DESC LIMIT 12");
                                                    while($row=mysqli_fetch_array($query))
                                                    {
                                                ?>
                                                    <div>
                                                        <article class="post type-post panel uc-transition-toggle">
                                                            <div class="row child-cols g-2 lg:g-3" data-uc-grid>
                                                                <div class="col-auto">
                                                                    <div class="post-media panel overflow-hidden max-w-150px min-w-100px lg:min-w-250px">
                                                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-3x2">
                                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['PostTitle']);?>" data-uc-img="loading: lazy">
                                                                        </div>
                                                                        <a href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>" class="position-cover"></a>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="post-header panel vstack justify-between gap-1">
                                                                        <h3 class="post-title h5 lg:h4 m-0 text-truncate-2">
                                                                            <a class="text-none hover:text-primary duration-150" href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>"><?php echo htmlentities($row['PostTitle']);?></a>
                                                                        </h3>
                                                                    </div>
                                                                    <p class="post-excrept ft-tertiary fs-6 text-gray-900 dark:text-white text-opacity-60 text-truncate-2 my-1"><?php $pt=$row['PostDetails']; echo  (substr($pt));?></p>
                                                                    <div class="post-link">
                                                                        <a href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>" class="link fs-7 fw-bold text-uppercase text-none mt-1 pb-narrow p-0 border-bottom dark:text-white">
                                                                            <span>Read more</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                       <?php }?> 
                                                </div>
                                            </div>
                                            <div class="block-footer cstack lg:mt-2">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="md:col-3">
                                    <div class="sidebar-wrap panel vstack gap-2 pb-2" data-uc-sticky="end: .content-wrap; offset: 150; media: @m;">
                                        <div class="widget ad-widget vstack gap-2 text-center p-2 border">
                                            <div class="widgt-content">
                                                <a class="cstack max-w-300px mx-auto text-none" href="https://themeforest.net/user/reacthemes/portfolio" target="_blank" rel="nofollow">
                                                    <img class="d-block dark:d-none" src="assets/images/common/ad-desktop.jpg" alt="Ad slot">
                                                    <img class="d-none dark:d-block" src="assets/images/common/ad-desktop.jpg" alt="Ad slot">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="widget popular-widget vstack gap-2 p-2 border">
                                            <div class="widget-title text-center">
                                                <h5 class="fs-7 ft-tertiary text-uppercase m-0">Categories</h5>
                                            </div>
                                            <div class="widget-content">
                                                <div class="row child-cols-12 gx-4 gy-3 sep-x" data-uc-grid>
                                                <?php $query=mysqli_query($con,"select id,CategoryName from tblcategory LIMIT 12");
                                                    while($row=mysqli_fetch_array($query))
                                                    {
                                                ?>
                                                    <div>
                                                        <article class="post type-post panel uc-transition-toggle">
                                                            <div class="row child-cols g-2 lg:g-3" data-uc-grid>
                                                                <div>
                                                                    <div class="hstack items-start gap-3">
                                                                        <div class="post-header panel vstack justify-between gap-1">
                                                                            <h3 class="post-title h6 m-0">
                                                                                <a class="text-none hover:text-primary duration-150" href="sub-category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo $row['CategoryName'];?></a>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget social-widget vstack gap-2 text-center p-2 border">
                                            <div class="widgt-title">
                                                <h4 class="fs-7 ft-tertiary text-uppercase m-0">Follow @boundryline</h4>
                                            </div>
                                            <div class="widgt-content">
                                                <form class="vstack gap-1">
                                                    <input class="form-control form-control-sm fs-6 fw-medium h-40px w-full bg-white dark:bg-gray-800 dark:bg-gray-800 dark:border-white dark:border-opacity-15 dark:border-opacity-15" type="email" placeholder="Your email" required="">
                                                    <button class="btn btn-sm btn-primary" type="submit">Sign up</button>
                                                </form>
                                                <ul class="nav-x justify-center gap-1 mt-3">
                                                    <li>
                                                        <a href="#fb" class="cstack w-32px h-32px border rounded-circle hover:text-black dark:hover:text-white hover:scale-110 transition-all duration-150"><i class="icon icon-1 unicon-logo-facebook"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#x" class="cstack w-32px h-32px border rounded-circle hover:text-black dark:hover:text-white hover:scale-110 transition-all duration-150"><i class="icon icon-1 unicon-logo-x-filled"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#in" class="cstack w-32px h-32px border rounded-circle hover:text-black dark:hover:text-white hover:scale-110 transition-all duration-150"><i class="icon icon-1 unicon-logo-instagram"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#yt" class="cstack w-32px h-32px border rounded-circle hover:text-black dark:hover:text-white hover:scale-110 transition-all duration-150"><i class="icon icon-1 unicon-logo-youtube"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section end -->
        </div>

        <!-- Wrapper end -->

        <!-- Footer start -->
        <footer id="uc-footer" class="uc-footer panel uc-dark">
                <?php include('includes/footer.php');?>
        </footer>

        <!-- Footer end -->

        <!-- include jquery & bootstrap js -->
        <script defer src="assets/js/libs/jquery.min.js"></script>
        <script defer src="assets/js/libs/bootstrap.min.js"></script>

        <!-- include scripts -->
        <script defer src="assets/js/libs/anime.min.js"></script>
        <script defer src="assets/js/libs/swiper-bundle.min.js"></script>
        <script defer src="assets/js/libs/scrollmagic.min.js"></script>
        <script defer src="assets/js/helpers/data-attr-helper.js"></script>
        <script defer src="assets/js/helpers/swiper-helper.js"></script>
        <script defer src="assets/js/helpers/anime-helper.js"></script>
        <script defer src="assets/js/helpers/anime-helper-defined-timelines.js"></script>
        <script defer src="assets/js/uikit-components-bs.js"></script>

        <!-- include app script -->
        <script defer src="assets/js/app.js"></script>

        <script>
            // Schema toggle via URL
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            const getSchema = urlParams.get("schema");
            if (getSchema === "dark") {
                setDarkMode(1);
            } else if (getSchema === "light") {
                setDarkMode(0);
            }
        </script>
    </body>

</html>
