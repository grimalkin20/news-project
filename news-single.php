<?php 
session_start();
error_reporting(0);
include('admin/includes/config.php');
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
   }
   
   if(isset($_POST['submit']))
   {
     //Verifying CSRF Token
   if (!empty($_POST['csrftoken'])) {
       if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
   $name=$_POST['name'];
   $email=$_POST['email'];
   $comment=$_POST['comment'];
   $postid=intval($_GET['nid']);
   $st1='0';
   $query=mysqli_query($con,"insert into tblcomments(postId,name,email,comment,status) values('$postid','$name','$email','$comment','$st1')");
   if($query):
     echo "<script>alert('Comment has been submitted. It will be displayed after admin approval.');</script>";
     unset($_SESSION['token']);
   else :
    echo "<script>alert('Something went wrong. Please try again.');</script>";  
   
   endif;
   
   }
   }
   }
   $postid=intval($_GET['nid']);
   
       $sql = "SELECT viewCounter FROM tblposts WHERE id = '$postid'";
       $result = $con->query($sql);
   
       if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
               $visits = $row["viewCounter"];
               $sql = "UPDATE tblposts SET viewCounter = $visits+1 WHERE id ='$postid'";
       $con->query($sql);
   
           }
       } else {
           echo "no results";
       }
       
   
   
?>
<!DOCTYPE html>
<html lang="zxx" dir="ltr">
    
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>News Details - BoundryLine</title>
        <meta name="description" content="BoundryLine a clean, modern and pixel-perfect multipurpose blogging HTML5 website template.">
        <meta name="keywords" content="saas, saas template, site template, software, startup, digital product, html5, landing, marketing, bootstrap, uikit3, agency, ai, digital agency, it solutions, nodejs">
        <link rel="canonical" href="https://unistudio.co/html/BoundryLine">
        <meta name="theme-color" content="#2757fd">

        <!-- Open Graph Tags -->
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="BoundryLine">
        <meta property="og:description" content="Full-featured, professional-looking news, editorial and magazine website template.">
        <meta property="og:url" content="https://unistudio.co/html/BoundryLine/">
        <meta property="og:site_name" content="BoundryLine">
        <meta property="og:image" content="../../../unistudio.co/html/BoundryLine/assets/images/common/seo-image.html">
        <meta property="og:image:width" content="1180">
        <meta property="og:image:height" content="600">
        <meta property="og:image:type" content="image/png">

        <!-- Twitter Card Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="BoundryLine">
        <meta name="twitter:description" content="Full-featured, professional-looking news, editorial and magazine website template.">
        <meta name="twitter:image" content="../../../unistudio.co/html/BoundryLine/assets/images/common/seo-image.html">

        <link rel="canonical" href="https://unistudio.co/html/BoundryLine/">

        <!-- preload head styles -->
        <link rel="preload" href="assets/css/unicons.min.css" as="style">
        <link rel="preload" href="assets/css/swiper-bundle.min.css" as="style">

        <!-- preload footer scripts -->
        <link rel="preload" href="assets/js/libs/jquery.min.js" as="script">
        <link rel="preload" href="assets/js/libs/scrollmagic.min.js" as="script">
        <link rel="preload" href="assets/js/libs/swiper-bundle.min.js" as="script">
        <link rel="preload" href="assets/js/libs/anime.min.js" as="script">
        <link rel="preload" href="assets/js/helpers/data-attr-helper.js" as="script">
        <link rel="preload" href="assets/js/helpers/swiper-helper.js" as="script">
        <link rel="preload" href="assets/js/helpers/anime-helper.js" as="script">
        <link rel="preload" href="assets/js/helpers/anime-helper-defined-timelines.js" as="script">
        <link rel="preload" href="assets/js/uikit-components-bs.js" as="script">
        <link rel="preload" href="assets/js/app.js" as="script">

        <!-- app head for bootstrap core -->
        <script src="assets/js/app-head-bs.js"></script>

        <!-- include uni-core components -->
        <link rel="stylesheet" href="assets/js/uni-core/css/uni-core.min.css">

        <!-- include styles -->
        <link rel="stylesheet" href="assets/css/unicons.min.css">
        <link rel="stylesheet" href="assets/css/prettify.min.css">
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!-- include main style -->
        <link rel="stylesheet" href="assets/css/theme/demo-seven.min.css">

        <!-- include scripts -->
        <script src="assets/js/uni-core/js/uni-core-bundle.min.js"></script>
    </head>
    <body class="uni-body panel bg-white text-gray-900 dark:bg-black dark:text-gray-200 overflow-x-hidden">

        <!--  Search modal -->
                <?php include('includes/modals.php');?>

        <!-- Header start -->
        <header class="uc-header header-seven uc-navbar-sticky-wrap z-999" data-uc-sticky="sel-target: .uc-navbar-container; cls-active: uc-navbar-sticky; cls-inactive: uc-navbar-transparent; end: !*;">
                <?php include('includes/header.php');?>
        </header>

        <!-- Header end -->

        <!-- Wrapper start -->
        <div id="wrapper" class="wrap overflow-hidden-x">
            <div class="breadcrumbs panel z-1 py-2 bg-gray-25 dark:bg-gray-100 dark:bg-opacity-5 dark:text-white">
                <div class="container max-w-xl">
                    <ul class="breadcrumb nav-x justify-center gap-1 fs-7 sm:fs-6 m-0">
                        <li><a href="index.php">Home</a></li>
                        <li><i class="unicon-chevron-right opacity-50"></i></li>
                        <li><a href="JavaScript:Void(0)">News</a></li>
                        <li><i class="unicon-chevron-right opacity-50"></i></li>
                        <li><a href="JavaScript:Void(0)">Details</a></li>
                    </ul>
                </div>
            </div>

<?php

$pid=intval($_GET['nid']);
$currenturl="http://".$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];;
 $query=mysqli_query($con,"select 
 tblposts.viewCounter,
 tblposts.PostTitle as posttitle,
 tblposts.PostImage,
 tblcategory.CategoryName as category
 ,tblcategory.id as cid,
 tblsubcategory.SubcategoryId,
 tblsubcategory.Subcategory as subcategory,
 tblposts.PostDetails as postdetails,
 tblposts.PostingDate as postingdate,
 tblposts.PostUrl as url,
 tblposts.postedBy,
 tblposts.lastUpdatedBy,
 tblposts.UpdationDate from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$pid'");
while ($row=mysqli_fetch_array($query)) {

?>

            <article class="post type-post single-post py-4 lg:py-6 xl:py-9">
                <div class="container max-w-xl">
                    <div class="post-header">
                        <div class="panel vstack gap-4 md:gap-6 xl:gap-8 text-center">
                            <div class="panel vstack items-center max-w-400px sm:max-w-500px xl:max-w-md mx-auto gap-2 md:gap-3">
                                <h1 class="h4 sm:h2 lg:h1 xl:display-6"><?php echo htmlentities($row['posttitle']);?></h1>
                                <p>By :&nbsp;<?php echo htmlentities($row['postedBy']);?></p>
                                <ul class="post-share-icons nav-x gap-1 dark:text-white">
                                    <li>
                                        <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle" href="http://www.facebook.com/share.php?u=<?php echo $currenturl;?>"><i class="unicon-logo-facebook icon-1"></i></a>
                                    </li>
                                    <li>
                                        <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle" href="https://twitter.com/share?url=<?php echo $currenturl;?>"><i class="unicon-logo-x-filled icon-1"></i></a>
                                    </li>
                                    <li>
                                        <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle" href="https://web.whatsapp.com/send?text=<?php echo $currenturl;?>"><i><img src="assets/images/whatsapp.svg"></i></a>
                                    </li>
                                    <li>
                                        <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle" href="<?php echo $currenturl;?>"><i class="unicon-link icon-1"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <figure class="featured-image m-0">
                                <figure class="featured-image m-0 ratio ratio-2x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>" data-uc-img="loading: lazy">
                                </figure>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="panel mt-4 lg:mt-6 xl:mt-9">
                    <div class="container max-w-lg">
                        <div class="post-content panel fs-6 md:fs-5" data-uc-lightbox="animation: scale">
                            <p><?php 
                            $pt=$row['postdetails']; echo  (substr($pt,0));?>
                            </p>
                            <!--
                            <figure class="my-3 sm:my-4">
                                <figure class="featured-image m-0 ratio ratio-3x2 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="assets/images/demo-seven/posts/post-2.jpg" alt="Pink Marketing, by Mak" data-uc-img="loading: lazy">
                                    <a href="assets/images/demo-seven/posts/post-2.jpg" class="position-cover" data-caption="Pink Marketing, by Mak"></a>
                                </figure>
                                <figcaption class="fs-7 mt-1 text-center text-gray-400 dark:text-gray-200">Pink Marketing, by Mak</figcaption>
                            </figure>
                            
                            <div class="panel my-3">
                                <figure class="float-start me-3 mb-0">
                                    <figure class="featured-image m-0 ratio ratio-1x1 sm:w-300px rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="assets/images/demo-seven/posts/post-3.jpg" alt="Great Schools and Entertainment" data-uc-img="loading: lazy">
                                        <a href="assets/images/demo-seven/posts/post-3.jpg" class="position-cover" data-caption="Great Schools and Entertainment"></a>
                                    </figure>
                                    <figcaption class="fs-7 mt-1 text-center text-gray-400 dark:text-gray-200">Great Schools and Entertainment</figcaption>
                                </figure>
                                <p>Bike paths and sidewalks make getting to and from the city’s many festivals, museums, restaurants and music venues easy. A range of amenities provides many things to do in Bellevue. About 40 percent of the city’s population are minorities, which contributes to an overall diverse range of lifestyles and ideas.</p>
                                <p>While Denver sits at the base of the Rocky Mountains, it’s not considered a mountain town since it takes at least an hour to get to the Rockies for snowboarding and ski activities, a local expert explained. Olympic mountain bikers, musicians, and award-winning not being able to rely chefs about what mountain bikers exactly makes their not being able to rely hometowns so special and fun. In fact, not being able to rely on spoken word made them better storytellers. They fully understood and used the power of showing without words. They fully understood and used the power of showing without words.</p>
                            </div>
                            <p>Probably the oldest and most important unwritten rule in film industry says that you shouldn’t rely much on words to tell your story. In fact, you should rely on them as less as possible is simply the way most brands will decide to go in 2016 & beyond, as they try to tell their story to their customers.</p>
                            <p class="mt-3">I talked to climbers, Olympic mountain bikers, musicians, and award-winning chefs about what exactly makes their hometowns so special and fun.</p> -->
                        </div>
                        <div class="post-footer panel vstack sm:hstack gap-3 justify-between justifybetween border-top py-4 mt-4 xl:py-9 xl:mt-9">
                            <ul class="nav-x gap-narrow text-primary">
                                <li><span class="text-black dark:text-white me-narrow">Tags:</span></li>
                               <li>
                                    <a href="#" class="uc-link gap-0 dark:text-white">Updating Soon <span class="text-black dark:text-white">,</span></a>
                                </li>
                               <!--  <li>
                                    <a href="#" class="uc-link gap-0 dark:text-white">Life Style <span class="text-black dark:text-white">,</span></a>
                                </li>
                                <li>
                                    <a href="#" class="uc-link gap-0 dark:text-white">Tech <span class="text-black dark:text-white">,</span></a>
                                </li>
                                <li><a href="#" class="uc-link gap-0 dark:text-white">Travel</a></li>-->
                            </ul>
                            <ul class="nav-x gap-narrow text-primary">
                                <li ><span class="text-black dark:text-white">Category :</span><a href="sub-category.php?category-<?php echo htmlentities($row['cid'])?>?category-name=<?php echo (htmlentities($row['subcategory'])); ?>">
                                    <?php echo htmlentities($row['subcategory']);?></a></li>
                            </ul>
                            <ul class="post-share-icons nav-x gap-narrow">
                                <li class="me-1"><span class="text-black dark:text-white">Share:</span></li>
                                <li>
                                    <a class="btn btn-md btn-outline-gray-100 p-0 w-32px lg:w-40px h-32px lg:h-40px text-dark dark:text-white dark:border-gray-600 hover:bg-primary hover:border-primary hover:text-white rounded-circle" href="http://www.facebook.com/share.php?u=<?php echo $currenturl;?>"><i class="unicon-logo-facebook icon-1"></i></a>
                                </li>
                                <li>
                                    <a class="btn btn-md btn-outline-gray-100 p-0 w-32px lg:w-40px h-32px lg:h-40px text-dark dark:text-white dark:border-gray-600 hover:bg-primary hover:border-primary hover:text-white rounded-circle" href="https://twitter.com/share?url=<?php echo $currenturl;?>"><i class="unicon-logo-x-filled icon-1"></i></a>
                                </li>
                                <li>
                                    <a class="btn btn-md btn-outline-gray-100 p-0 w-32px lg:w-40px h-32px lg:h-40px text-dark dark:text-white dark:border-gray-600 hover:bg-primary hover:border-primary hover:text-white rounded-circle" href="https://web.whatsapp.com/send?text=<?php echo $currenturl;?>"><i><img src="assets/images/whatsapp.svg"></i></a>
                                </li>
                                
                            </ul>
                        </div>
                        <?php 
                                $sts=1;
                                $query=mysqli_query($con,"select name,comment,postingDate from  tblcomments where postId='$pid' and status='$sts' ORDER BY postId DESC LIMIT 5");
                                while ($row=mysqli_fetch_array($query)) {
                         ?>
                        <div class="post-author panel py-4 px-3 sm:p-3 xl:p-4 bg-gray-25 dark:bg-opacity-10 rounded lg:rounded-2">
                            <div class="row g-4 items-center">
                                <div class="col">
                                    <div class="panel vstack items-start gap-2 md:gap-3">
                                        <h4 class="m-0"><?php echo htmlentities($row['name']);?></h4>
                                        <p class="fs-6 lg:fs-5"><?php echo htmlentities($row['comment']);?></p>
                                    </div>
                                </div>
                            </div>
                        </div><?php } ?>
                    <!--<div class="post-navigation panel vstack sm:hstack justify-between gap-2 mt-8 xl:mt-9">
                            <div class="new-post panel hstack w-100 sm:w-1/2">
                                <div class="panel hstack justify-center w-100px h-100px">
                                    <figure class="featured-image m-0 ratio ratio-1x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="assets/images/demo-seven/posts/img-02.jpg" alt="Tech Innovations Reshaping the Retail Landscape: AI Payments" data-uc-img="loading: lazy">
                                        <a href="news-single.php" class="position-cover" data-caption="Tech Innovations Reshaping the Retail Landscape: AI Payments"></a>
                                    </figure>
                                </div>
                                <div class="panel vstack justify-center px-2 gap-1 w-1/3">
                                    <span class="fs-7 opacity-60">Prev Article</span>
                                    <h6 class="h6 lg:h5 m-0">Tech Innovations Reshaping the Retail Landscape: AI Payments</h6>
                                </div>
                                <a href="news-single.php" class="position-cover"></a>
                            </div>
                            <div class="new-post panel hstack w-100 sm:w-1/2">
                                <div class="panel vstack justify-center px-2 gap-1 w-1/3 text-end">
                                    <span class="fs-7 opacity-60">Next Article</span>
                                    <h6 class="h6 lg:h5 m-0">The Rise of AI-Powered Personal Assistants: How They Manage</h6>
                                </div>
                                <div class="panel hstack justify-center w-100px h-100px">
                                    <figure class="featured-image m-0 ratio ratio-1x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="assets/images/demo-seven/posts/img-01.jpg" alt="The Rise of AI-Powered Personal Assistants: How They Manage" data-uc-img="loading: lazy">
                                        <a href="news-single.php" class="position-cover" data-caption="The Rise of AI-Powered Personal Assistants: How They Manage"></a>
                                    </figure>
                                </div>
                                <a href="news-single.php" class="position-cover"></a>
                            </div>
                        </div> -->
                        <div class="post-related panel border-top pt-2 mt-8 xl:mt-9">
                            <h4 class="h5 xl:h4 mb-5 xl:mb-6">Latest articles:</h4>
                            <div class="row child-cols-6 md:child-cols-3 gx-2 gy-4 sm:gx-3 sm:gy-6">
                            <?php $query=mysqli_query($con,"select * from tblposts ORDER BY id DESC LIMIT 8");
                                 while($row=mysqli_fetch_array($query))
                                   {
                                ?>
                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <figure class="featured-image m-0 ratio ratio-4x3 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['PostTitle']);?>" data-uc-img="loading: lazy">
                                            <a href="JavaScript:Void(0)" class="position-cover" data-caption="<?php echo htmlentities($row['PostTitle']);?>"></a>
                                        </figure>
                                        <div class="post-header panel vstack gap-1">
                                            <h5 class="h6 md:h5 m-0 text-truncate-2">
                                                <a class="text-none" href="news-single.php?nid=<?php echo htmlentities($row['id']);?>?url_id=<?php echo (strtolower(htmlentities($row['PostUrl']))); ?>"><?php echo htmlentities($row['PostTitle']);?></a>
                                            </h5>
                                            <div class="post-date hstack gap-narrow fs-7 opacity-60">
                                                <span><?php echo htmlentities($row['PostingDate']);?></span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <a href="#comment" class="btn h-56px w-100 mt-8 xl:mt-9 text-black dark:text-white bg-gray-25 dark:bg-opacity-10 hover:bg-gray-50 dark:hover:bg-gray-700">
                            <span>Be the first to write a comment.</span>
                        </a>
                        <form name="comment" method="post" enctype="">
                                <fieldset>
                                <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" />
                                    <div class="form-group">
                                        <label>Name*</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter your fullname" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter your Valid email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Your comment here...</label>
                                        <textarea class="form-control" name="comment" rows="3" placeholder="Comment" required></textarea>
                                    </div>
                                    <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-send" name="submit">Post Comment</button>
                                    </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </article>
<?php }?>
            <!-- Newsletter -->
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
