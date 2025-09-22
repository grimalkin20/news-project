<div id="live_now" class="live_now section panel uc-dark swiper-parent">
    <div class="section-outer panel py-4 lg:py-6 bg-gray-900 text-white">
        <div class="container max-w-xl">
            <div class="block-layout slider-thumbs-layout slider-thumbs panel vstack gap-2 lg:gap-3 panel overflow-hidden">
                <div class="block-header panel">
                    <h2 class="h6 ft-tertiary fw-bold ls-0 text-uppercase hstack gap-narrow m-0 text-black dark:text-white">
                        <i class="icon-1 fw-bold unicon-dot-mark text-red" data-uc-animate="flash"></i>
                        <span>Live now</span>
                    </h2>
                </div>
                <div class="block-content">
                    <div class="row child-cols-12 g-2" data-uc-grid>
                        <div class="md:col-8 lg:col-9">
                            <div class="panel overflow-hidden rounded">
                                <div class="swiper swiper-main" data-uc-swiper="connect: .swiper-thumbs; items: 1; gap: 8; parallax: true; fade: true; effect: fade; dots: .swiper-pagination; disable-class: last-slide;">
                                    <div class="swiper-wrapper">
                                    <?php 
								$query=mysqli_query($con,"select * from tblmedia ORDER BY id DESC LIMIT 4");
								while ($row=mysqli_fetch_array($query)) {
							?>

                                        <div class="swiper-slide">
                                            <article class="post type-post h-250px md:h-350px lg:h-500px bg-black uc-dark">
                                                <div class="post-media panel overflow-hidden position-cover">
                                                    <div class="featured-video bg-gray-700 ratio ratio-3x2">
                                                        
                                                        <iframe class="video-cover video-lazyload min-h-100px" preload="none" loop playsinline 
                                                        src="<?php echo $row['MediaUrl'];?>" title="Boundry Line News" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="border-radius: 10px;"></iframe>
                                                        
                                                    </div>
                                                </div>
                                                
                                                <div class="post-header panel position-absolute bottom-0 vstack justify-between gap-2 xl:gap-4 max-300px lg:max-w-600px p-2 md:p-4 xl:p-6 z-1">
                                                    <h3 class="post-title h4 lg:h3 xl:h2 m-0 text-truncate-2" data-swiper-parallax-x="-8">
                                                        <a class="text-none" href="JavaScript:Void(0)"><?php echo $row['MediaTitle'];?></a>
                                                    </h3>
                                                    <div data-swiper-parallax-x="8">
                                                        <div class="post-meta panel hstack justify-between fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                            <div class="actions">
                                                                <div class="hstack gap-1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <?php }?>
                                    </div>

                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination top-auto start-auto bottom-0 end-0 m-2 md:m-4 xl:m-6 text-white d-none md:d-inline-flex justify-end w-auto"></div>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-4 lg:col-3">
                            <div class="panel md:vstack gap-1 h-100">

                                <!-- Slides thumbs -->
                                <div
                                    class="swiper swiper-thumbs swiper-thumbs-progress rounded order-2"
                                    data-uc-swiper="items: 2;
                gap: 4; 
                disable-class: last-slide;"
                                    data-uc-swiper-s="items: auto;
                direction: vertical;
                autoHeight: true;
                mousewheel: true;
                freeMode: false;
                watchSlidesVisibility: true;
                watchSlidesProgress: true;
                watchOverflow: true"
                                >
                                    <div class="swiper-wrapper md:flex-1">

                                    <?php 
								$query=mysqli_query($con,"select * from tblmedia ORDER BY id DESC LIMIT 4");
								while ($row=mysqli_fetch_array($query)) {
							?>
                                        <div class="swiper-slide overflow-hidden rounded min-h-64px lg:min-h-100px">
                                            <div class="swiper-slide-progress position-cover z-0">
                                                <span></span>
                                            </div>
                                            <article class="post type-post panel uc-transition-toggle p-1 z-1">
                                                <div class="row gx-1">
                                                    <div class="col-auto post-media-wrap">
                                                        <div class="post-media panel overflow-hidden w-50px lg:w-64px rounded">
                                                            <div class="featured-video bg-gray-700 ratio ratio-3x4">
                                                               
                                                                <iframe class="video-cover video-lazyload min-h-100px" preload="none" loop playsinline
                                                                src="<?php echo $row['MediaUrl'];?>" title="Boundry Line News" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="border-radius: 10px;"></iframe>
                                                                
                                                            </div>
                                                            <div class="has-video-overlay position-absolute top-0 end-0 w-40px h-40px lg:w-64px lg:h-64px   bg-gradient-45 from-transparent via-transparent to-black opacity-50"></div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <p class="fs-6 m-0 text-truncate-2 text-gray-900 dark:text-white"><?php echo $row['MediaTitle'];?></p>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>

                                <!-- Tablet, Desktop and big screens nav -->
                                <div class="swiper-prev btn btn-2xs lg:btn-xs btn-primary w-100 d-none md:d-flex order-1">Prev</div>
                                <div class="swiper-next btn btn-2xs lg:btn-xs btn-primary w-100 d-none md:d-flex order-3">Next</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>