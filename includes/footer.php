<div class="footer-outer py-4 lg:py-6 bg-white dark:bg-gray-900 text-gray-900 dark:text-white text-opacity-50">
                <div class="container max-w-xl">
                    <div class="footer-inner vstack gap-6 xl:gap-8">
                        <div class="uc-footer-bottom panel vstack gap-4 justify-center lg:fs-5">
                            <nav class="footer-nav">
                            
                                <ul class="nav-x gap-2 lg:gap-4 justify-center text-center text-uppercase fw-medium">
                                <?php $query=mysqli_query($con,"select * from tblcategory ORDER BY id DESC LIMIT 8");
            while($row=mysqli_fetch_array($query))
        {
    ?> 
                                    <li><a class="hover:text-gray-900 dark:hover:text-white duration-150" href="sub-category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a></li><?php }?>
                                </ul>

                            </nav>
                            <div class="footer-social hstack justify-center gap-2 lg:gap-3">
                                <ul class="nav-x gap-2">
                                    <li>
                                        <a class="hover:text-gray-900 dark:hover:text-white duration-150" href="#ln"><i class="icon icon-2 unicon-logo-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="hover:text-gray-900 dark:hover:text-white duration-150" href="#fb"><i class="icon icon-2 unicon-logo-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="hover:text-gray-900 dark:hover:text-white duration-150" href="#x"><i class="icon icon-2 unicon-logo-x-filled"></i></a>
                                    </li>
                                    <li>
                                        <a class="hover:text-gray-900 dark:hover:text-white duration-150" href="#in"><i class="icon icon-2 unicon-logo-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a class="hover:text-gray-900 dark:hover:text-white duration-150" href="#yt"><i class="icon icon-2 unicon-logo-youtube"></i></a>
                                    </li>
                                </ul>
                                <div class="vr"></div>
                                <div class="d-inline-block">
                                    <a href="#" class="hstack gap-1 text-none fw-medium">
                                        <i class="icon icon-1 unicon-earth-filled"></i>
                                        <span>English</span>
                                       <!-- <span data-uc-drop-parent-icon=""></span> -->
                                    </a>
                                    <div class="p-2 bg-white dark:bg-gray-800 shadow-xs w-150px" data-uc-drop="mode: click; boundary: !.uc-footer-bottom; animation: uc-animation-slide-top-small; duration: 150;">
                                        <ul class="nav-y gap-1 fw-medium items-end">
                                            <li><a href="#en">English</a></li>
                                            <li><a href="#ar">Hindi</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-copyright vstack sm:hstack justify-center items-center gap-1 lg:gap-2">
                                <p>BoundryLine © 2024, All rights reserved.</p>
                                <ul class="nav-x gap-2 fw-medium">
                                    <li>Designed By : <a class="uc-link text-underline hover:text-gray-900 dark:hover:text-white duration-150" href="https://nimix.in/">Nimix Technology</a></li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>