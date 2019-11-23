<!--
 =========================================================
 * Material Kit - v2.0.6
 =========================================================

 * Product Page: https://www.creative-tim.com/product/material-kit
 * Copyright 2019 Creative Tim (http://www.creative-tim.com)
   Licensed under MIT (https://github.com/creativetimofficial/material-kit/blob/master/LICENSE.md)


 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->


 <!DOCTYPE html>
<html lang="en" class="nav">

<head>
  <title>S'wooft</title>
  <link rel="apple-touch-icon" sizes="57x57" href="assets/img/icon.ico/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/img/icon.ico/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/img/icon.ico/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/icon.ico/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/img/icon.ico/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/img/icon.ico/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/img/icon.ico/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/img/icon.ico/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon.ico/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/img.ico/icon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/icon.ico/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/icon.ico/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/icon.ico/favicon-16x16.png">
  <link rel="manifest" href="assets/img/icon.ico/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/img/icon.ico/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/a196dee797.js" crossorigin="anonymous"></script>
  <!-- Material Kit CSS -->
  <link href="assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  <?php 
     require 'simple_html_dom.php';
     define('WP_USE_THEMES', false);
     require('blog/wp-blog-header.php');
     function debug_to_console($data) {
       $output = json_encode($data);
   
       echo "<script>console.log($output);</script>";
   }
   ?>
   
 </head>
 
 <body class="sidebar-collapse" style="width: 100%;">
   <nav class="navbar navbar-color-on-scroll fixed-top navbar-expand-lg navbar-transparent" color-on-scroll="100">
     <div class="container">
       <div class="navbar-translate">
         <a href="index.html">
           <div class="logo-big">
             <img src="assets/img/swooft-logo-new-clear.png" class="img-fluid" height="70px" width="70px" />
           </div>
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
           aria-label="Toggle navigation">
           <span class="sr-only">Toggle navigation</span>
           <span class="navbar-toggler-icon"></span>
           <span class="navbar-toggler-icon"></span>
           <span class="navbar-toggler-icon"></span>
         </button>
       </div>
       <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item dropdown">
             <a href="#pablo" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               About
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <a class="dropdown-item" href="our-team.html">Team S'wooft</a>
               <a class="dropdown-item" href="community.html">Community</a>
             </div>
           </li>
           <li class="nav-item">
             <a href="services-rates.html" class="nav-link">
               Services & Rates
             </a>
           </li>
           <li class="nav-item">
             <a href="blog.php" class="nav-link">
               Blog
             </a>
           </li>
           <li class="nav-item">
             <a href="faqs.html" class="nav-link">
               FAQs
             </a>
           </li>
           <li class="nav-item">
             <a href="#pablo" class="nav-link">
               Apply
             </a>
           </li>
           <li class="nav-item">
             <a href="contact-us.html" class="nav-link">
               Contact Us
             </a>
           </li>
         </ul>
       </div>
     </div>
   </nav>
   <div class="page-header header-filter header-small" data-parallax="true"
     style="background-image: url(assets/img/blog/blog-2.png); transform: translate3d(0px, 0px, 0px);"></div>
   <div class="main main-raised">
     <div class="container">
       <!-- <section class="section text-center"> -->
       <div class="card card-nav-tabs card-plain">
         <div class="card-header card-header-info">
           <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
           <div class="nav-tabs-navigation">
             <div class="nav-tabs-wrapper">
               <ul class="nav nav-tabs justify-content-center" data-tabs="tabs">
                 <li class="nav-item">
                   <a id="all" onclick="showAll()" class="category nav-link active show" href="#" data-toggle="tab" style="">All Posts<div
                       class="ripple-container"></div></a>
                 </li>
                 <li class="nav-item">
                   <a id="community" onclick="showOurCommunity()" class="category nav-link" href="#" data-toggle="tab" style="">Our Community<div class="ripple-container">
                     </div></a>
                 </li>
                 <li class="nav-item">
                   <a id="spotlight" onclick="showStaffSpotlight()" class="category nav-link" href="#" data-toggle="tab" style="">Staff Spotlight<div class="ripple-container">
                     </div></a>
                 </li>
                 <li class="nav-item">
                   <a id="education" onclick="showPetEducation()" class="category nav-link" href="#" data-toggle="tab" style="">Pet Education<div class="ripple-container">
                     </div></a>
                 </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="blog-post" id="blog-post-list">
            <div class="tab-content justify-content-center">
              <div class="tab-pane active show">
                <div class="card-columns justify-content-center" id="all-posts">
                <?php
                     $number_of_posts = -1;
                     $args = array( 'numberposts' => $number_of_posts );
                     $recent_posts = wp_get_recent_posts( $args );
                     foreach( $recent_posts as $recent_post ){
                       $startime = new DateTime($recent_post['post_date']);
                       $sinceposted = $startime->diff(new DateTime());
                       $category = get_the_category($recent_post['ID'])[0];
                       $sincepostedstr = '';
                       if($sinceposted->y > 0){
                         if($sinceposted->y > 1)
                           $sincepostedstr = $sinceposted->y.' years ago';
                         else
                           $sincepostedstr = $sinceposted->y.' year ago';
                       } else if($sinceposted->m > 0){
                         if($sinceposted->m > 1)
                           $sincepostedstr = $sinceposted->m.' months ago';
                         else
                           $sincepostedstr = $sinceposted->m.' month ago';
                       } else if($sinceposted->d > 0){
                         if($sinceposted->d > 1)
                           $sincepostedstr = $sinceposted->d.' days ago';
                         else
                           $sincepostedstr = $sinceposted->d.' day ago';
                       } else if($sinceposted->h > 0){
                         if($sinceposted->h > 1)
                           $sincepostedstr = $sinceposted->h.' hours ago';
                         else
                           $sincepostedstr = $sinceposted->h.' hour ago';
                       } else if($sinceposted->i > 0){
                         if($sinceposted->i > 1)
                           $sincepostedstr = $sinceposted->i.' minutes ago';
                         else
                           $sincepostedstr = $sinceposted->i.' minute ago';
                       } else if($sinceposted->s > 0){
                         if($sinceposted->s > 1)
                           $sincepostedstr = $sinceposted->s.' seconds ago';
                         else
                           $sincepostedstr = $sinceposted->s.' second ago';
                       }
                       $html = str_get_html($recent_post['post_content']);
                       $img = $html->find('img');
                       $source = $img[0]->src;
                       echo '<div class="'.$category->name.' blogCard">';
                       echo '<div class="card mb-3 mr-3">';
                       echo '<a href="singleblog.php?id='.$recent_post['ID'].'">';
                       if($source){
                         echo '<img class="card-img-top" src="'.$source.'" alt="Card image cap">';
                       } else {
                         echo '<img class="card-img-top" src="assets/img/swooft-logo-new-clear.png" alt="Card image cap">';
                       }
                       echo '</a>';
                       echo '<div class="card-body">';
                       echo '<a class="a-hidden" href="singleblog.php?id='.$recent_post['ID'].'">';
                       echo '<h4 class="card-title">'.$recent_post['post_title'].'</h4>';
                       echo '<p class="card-text a-hidden">'.substr($recent_post['post_content'], 0, 100).'...</p>';
                       echo '</a>';
                       echo '<p class="card-text">';
                       echo '<small class="text-muted">Posted '.$sincepostedstr.'</small>';
                       // echo '<a href="#" class="float-right" id="commentlink"><small class="text-muted">Write a
                       //      comment</small></a>';
                       echo '</p>';
                       echo '</div>';
                       echo '</div>';
                       echo '</div>';
                     }
                   ?>
                </div>
              </div>
              <!-- </section> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer footer-default">
    <div class="container ">
      <nav class="float-left">
        <ul>
          <li>
            <a>Phone: 773-340-1775</a>
          </li>
          <li>
          </li>
          <a href="http://www.facebook.com/swooftchicago" style="color: black;"><i
              class="fab fa-facebook-square"></i></a>
          <a href="https://www.instagram.com/swooftchicago/" style="color: black"><i class="fab fa-instagram"></i></a>
          <a href="http://www.yelp.com/biz/swooft-dog-walking-and-pet-care-chicago" style="color: black"><i
              class="fab fa-yelp"></i></a>
          <a href="https://www.youtube.com/channel/UC37oPPjkBDbl7fgrgQ9ekzA?view_as=subscriber" style="color: black;"><i
              class="fab fa-youtube"></i></a>
        </ul>
        <p>3943 N. Austin Ave. Chicago, IL 60634</p>
      </nav>
      <div class="copyright float-right">
        <p>&copy; All Rights Reserved for S'wooft, LLC
          <script>
            document.write(new Date().getFullYear())
          </script>
        </p>
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin  -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>
  <script type="text/javascript">
    var ref = getUrlVars()["ref"];
     var allBlogCards = $(".blogCard");
     function showOurCommunity(){
       allBlogCards.show();
       var notOurCommunity = $('.blogCard').not('.our-community')
       for (let i = 0; i < notOurCommunity.length; i++){
         notOurCommunity.hide();
       }
     }
     function showStaffSpotlight(){
       allBlogCards.show();
       var notStaffSpotlight = $('.blogCard').not('.staff-spotlight')
       for (let i = 0; i < notStaffSpotlight.length; i++){
         notStaffSpotlight.hide();
       }
     }
     function showPetEducation(){
       allBlogCards.show();
       var notPetEducation = $('.blogCard').not('.pet-education')
       for (let i = 0; i < notPetEducation.length; i++){
         notPetEducation.hide();
       }
     }
     function showAll(){
       allBlogCards.show();
     }
     function getUrlVars() {
      var vars = {};
      var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
      });
      return vars;
     }
     if(ref){
      $('.category').removeClass('active');
      switch (ref) {
        case "all":
          $('#all').toggleClass('active');
          showAll();
          break;
        case "community":
          showOurCommunity();
          $('#community').toggleClass('active');
          break;
        case "spotlight":
          showStaffSpotlight();
          $('#spotlight').toggleClass('active');
          break;
        case "education":
          showPetEducation();
          $('#education').toggleClass('active');
          break;
      }
    }
   </script>
</body>

</html>