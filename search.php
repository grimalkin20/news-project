<?php 
session_start();
error_reporting(0);
include('admin/includes/config.php');

$postid=intval($_GET['nid']);

    $sql = "SELECT viewCounter FROM tblposts WHERE id = '$postid'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["viewCounter"];
            $sql = "UPDATE tblposts SET viewCounter = $visits+1 WHERE id ='$postid'";
    $con->query($sql);

        }
    } 
?>
<!DOCTYPE html>
<html lang="zxx" dir="ltr">
    
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search - BoundryLine</title>
        <meta name="description" content="BoundryLine a clean, modern and pixel-perfect multipurpose blogging HTML5 website template.">
        <meta name="keywords" content="saas, saas template, site template, software, startup, digital product, html5, landing, marketing, bootstrap, uikit3, agency, ai, digital agency, it solutions, nodejs">
        <meta name="theme-color" content="#2757fd">

        <!-- Open Graph Tags -->
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="BoundryLine">
        <meta property="og:description" content="Full-featured, professional-looking news, editorial and magazine website template.">
        <meta property="og:site_name" content="BoundryLine">
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
                        <li><span class="opacity-50">Posts Archive</span></li>
                    </ul>
                </div>
            </div>

            <!-- Section start -->
            <div class="section panel overflow-hidden">
                <div class="section-outer panel py-6 lg:py-9">
                    <div class="container max-w-xl">
                        <div class="section-inner panel vstack gap-3 sm:gap-6 lg:gap-9" data-anime="targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100);">
                            <header class="page-header vstack justify-center items-center gap-2 md:gap-4 text-center max-w-650px mx-auto">
                                <h1 class="h4m-0">Posts Archive</h1>
                            </header>
                            <div class="row child-cols-12 sm:child-cols-4 col-match gy-4 sm:gy-6 xl:gy-8 gx-2 xl:gx-4">
 <?php 
        if($_POST['searchtitle']!=''){
$st=$_SESSION['searchtitle']=$_POST['searchtitle'];
}
$st;
             




     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select 
tblposts.id as pid,
tblposts.PostTitle as posttitle,
tblcategory.CategoryName as category,
tblsubcategory.Subcategory as subcategory,
tblposts.PostDetails as postdetails,
tblposts.PostingDate as postingdate,
tblposts.postedBy,
tblposts.viewCounter,
tblposts.PostUrl as url,
tblposts.PostImage from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.PostTitle like '%$st%' and tblposts.Is_Active=1 LIMIT $offset, $no_of_records_per_page");

$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
echo "No record found";
}
else {
while ($row=mysqli_fetch_array($query)) {


?>
                                <div>
                                            <article class="post type-post panel vstack gap-2">
                                                <div class="post-image panel overflow-hidden">
                                                    <figure class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="assets/images/common/img-fallback.png" data-src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>" data-uc-img="loading: lazy">
                                                        <a href="news-single.php?nid=<?php echo htmlentities($row['pid']);?>?url_id=<?php echo (strtolower(htmlentities($row['url']))); ?>" class="position-cover" data-caption="<?php echo htmlentities($row['posttitle']);?>"></a>
                                                    </figure>
                                                    
                                                    <div class="position-absolute top-0 end-0 w-150px h-150px rounded-top-end bg-gradient-45 from-transparent via-transparent to-black opacity-50"></div>

                                                </div>
                                                <div class="post-header panel vstack gap-1 lg:gap-2">
                                                    <h3 class="post-title h6 sm:h5 xl:h4 m-0 text-truncate-2 m-0">
                                                        <a class="text-none" href="news-single.php?nid=<?php echo htmlentities($row['pid']);?>?url_id=<?php echo (strtolower(htmlentities($row['url']))); ?>"><?php echo htmlentities($row['posttitle']);?></a>
                                                    </h3>
                                                    <div>
                                                        <div class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                            <div class="meta">
                                                                <div class="hstack gap-2">
                                                                    <div>
                                                                        <div class="post-author hstack gap-1">
                                                                            
                                                                            <a href="JavaScript:Void(0)" class="text-black dark:text-white text-none fw-bold"><?php echo htmlentities($row['postedBy']);?></a>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span><?php echo htmlentities($row['postingdate']);?></span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#post_comment" class="post-comments text-none hstack gap-narrow">
                                                                            <i class="icon-narrow unicon-view"></i>
                                                                            <span><?php echo htmlentities($row['viewCounter']);?></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                <?php }?><?php }?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section end -->

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
