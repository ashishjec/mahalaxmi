<!--// Footer Start //-->
            <style>
                                    
                .footer .footer-top .footer-widget .footer-title {
                        color: #fff;
                        margin-bottom: 10
                    px
                    ;
                        font-weight: 600;
                    }
                    .footer .footer-top .footer-widget .footer-links li a {
                        color: #fff;
                        opacity: 0.8;
                    }
                    
                    .footer .copyright {
                    background: #062d4b;
                    padding: 10px;
                    }
                    .footer .footer-top {
                    padding: 30px 0 50px 0;
}

.footer-links li a {
    color: #fff;
    opacity: 0.8;
    margin-top: -7px;
    margin-bottom: -7px;
}
            </style>
            <footer class="footer horizontal-scroll2!" style="background-color:#000; font-family: poppins;">
                
                <div class="container">
                    <div class="row" style="padding-top: 25px; ">
                        <div class="col-md-9">

<?php

$footerab = "SELECT * FROM footer where id = '1'";
$sqlfooterab=$dbconn->prepare($footerab);
$sqlfooterab->execute();
$wlvdfooterab=$sqlfooterab->fetchAll(PDO::FETCH_OBJ);

 foreach($wlvdfooterab as $rowsfooterab)

?>


                            
                            <p style="color: #fff; font-size: 1.8em;">About Mahalaxmi</p><br>
                            <p style="color: grey; font-size: 0.7em; font-family: poppins;"><?php echo $rowsfooterab->f_about; ?> 
                            <a href="https://nsws.in.net/development/mahalaxmi/version10/index.php?page=Company-Profile" style="color: #fff;">Read More >></a><span class="icon icon-angle-double-right"></span></p>
                            
                            
                            <div class="footer-top horizontal-scroll!" style="padding-top: -10px;">
                    <div class="container " style="padding-top:5px;">
                        <div class="row" style="font-size: 0.8rem; margin-bottom: -50px;">
                            <div class="col-md-6 col-lg-3 footer-widget-resp">
                                <div class="footer-widget footer-widget-pl">
                                    <p class="footer-title">ABOUT US</p>

                                    <ul class="footer-links">
                                        <li>
                                            <a href="index.php?page=Company-Profile">Company Profile</a>
                                        </li>
                                        
                                        <li>
                                            <a href="index.php?page=Chairman&name=Naveen%20Singhal">Chairman's Message</a>
                                        </li>
                                        <li>
                                            <a href="index.php?page=Team">Team</a>
                                        </li>
                                         
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 footer-widget-resp">
                                <div class="footer-widget footer-widget-pl">
                                    <p class="footer-title">OUR COMPANIES</p>
                                    <ul class="footer-links">

<?php
$busi1 = "SELECT * FROM homepage where status = 'Active' and homepage_type = 'Website_Groups' order by id asc";
$sqlbusi1=$dbconn->prepare($busi1);
$sqlbusi1->execute();
$wlvdbusi1=$sqlbusi1->fetchAll(PDO::FETCH_OBJ);

if($sqlbusi1->rowCount() > 0){
  
    foreach($wlvdbusi1 as $rowsbusi1){
$fieldbusi11 = $rowsbusi1->homepage_content_1;

  
?>                                         
                                         <li>
                                            <a href="index.php?page=CSR&name=Environment"><?php echo $fieldbusi11; ?></a>
                                        </li>
<?php }} ?>                                        
                                         <li>
                                            <a href="#">Mahalaxmi India Pvt Ltd</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            
                            
                            <div class="col-md-6 col-lg-3 footer-widget-resp">
                                <div class="footer-widget footer-widget-pl">
                                    <p class="footer-title">OUR BUSINESS</p>
                                    <ul class="footer-links">
<?php
$busi = "SELECT * FROM businesses where status = 'Active' and bus_type = 'SingleBusiness' order by id asc";
$sqlbusi=$dbconn->prepare($busi);
$sqlbusi->execute();
$wlvdbusi=$sqlbusi->fetchAll(PDO::FETCH_OBJ);

if($sqlbusi->rowCount() > 0){
  
    foreach($wlvdbusi as $rowsbusi){
$fieldbusi1 = $rowsbusi->bus_name;

  
?>                                        
                                        <li>
                                            <a href="index.php?page=SingleBusiness&name=Coal"><?php echo $fieldbusi1 ?></a>
                                        </li>
<?php }} ?>                                        
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 footer-widget-resp">
                                <div class="footer-widget footer-widget-pl">
                                    <p class="footer-title">MORE LINKS</p>
                                    <ul class="footer-links">
                                        <li>
                                            <a href="index.php?page=Sustainability">CSR</a>
                                        </li>
                                        <li>
                                            <a href="index.php?page=Career">Career</a>
                                        </li>
                                        
                                        <li>
                                            <a href="index.php?page=Contact">Contact Us</a>
                                        </li>
                                       
                                         
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        
                        </div>
                        
                        <div class="col-md-3">
<?php

$footerab2 = "SELECT * FROM footer where id = '2'";
$sqlfooterab2=$dbconn->prepare($footerab2);
$sqlfooterab2->execute();
$wlvdfooterab2=$sqlfooterab2->fetchAll(PDO::FETCH_OBJ);

 foreach($wlvdfooterab2 as $rowsfooterab2)

?>                            
                            <p><strong>CONTACT US</strong></p>
                            <h2 style="font-size: 1.7rem; color: #fff"><?php echo $rowsfooterab2->f_about; ?></h2><br>
                            <br>
                            <span class="fa fa-location" style="color: #007bff;"></span>
                            <span style="font-size: 0.8rem;"><strong><span style="color: #fff;">&nbsp;Address:</strong><span style="color: #fff;"><?php echo $rowsfooterab2->f_address; ?></span></span><br>
                            <span class="fa fa-envelope" style="color: #007bff;"></span>
                            <span style="font-size: 0.8rem; margin-top: 10px;"><strong>&nbsp;<span style="color: #fff;">Email: </strong><a href="#" style="color: #fff;"><?php echo $rowsfooterab2->f_email; ?></a></span></span>
                            
                                
                            
                        </div>
                    </div>
                </div>
                
                
                <div class="copyright" style="background-color:#000; padding-top: 10px;">
                    <div class="container" style="margin-bottom: 10px;">
                        <div class="row">
                        <div class="col-md-6">
                        <p class="copyright-text">
                            <img src="assets/img/Mahalaxmi-Logo1.svg"></p>
                        </div>
                        <div class="col-md-6" style="text-align: right; font-size: 15px;">
                            <span>Mahalaxmi Group © 2016. All Rights Reserved.
Website Developed & Maintained by<a href="#"> Mahalaxmi Group of India</a></span>
                        </div>    
                        
                        </div>
                    </div>
                </div>



            </footer>
            <!--// Footer End //-->

            <!--// Search Form Start //-->
            <div class="modal fade custom-modal" id="searchForm" tabindex="-1" role="dialog" aria-labelledby="searchFormLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="searchFormLabel">Search</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="index.html" method="POST">
                                <div class="popup-form-group mb-0">
                                    <input type="text" class="popup-form-control" name="search_form" required placeholder="Search Here *">
                                    <span class="fa fa-search"></span>
                                    <button type="submit" class="search-button" name="search_form_submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Search Form End //-->

            <!--// Get Quote Form Start //-->
            <div class="modal fade custom-modal" id="quoteForm" tabindex="-1" role="dialog" aria-labelledby="quoteFormLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="quoteFormLabel">Get in Touch</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="index.html" method="POST">
                                <div class="popup-form-group">
                                    <input type="text" class="popup-form-control" name="get_offer_your_name" required placeholder="Your Name *">
                                    <span class="fas fa-user"></span>
                                </div>
                                <div class="popup-form-group">
                                    <input type="text" class="popup-form-control" name="get_offer_your_email" required placeholder="Your E-Mail *">
                                    <span class="fas fa-envelope"></span>
                                </div>
                                <div class="popup-form-group">
                                    <input type="text" class="popup-form-control" name="get_offer_your_phone" required placeholder="Your Phone *">
                                    <span class="fas fa-phone"></span>
                                </div>
                                <div class="popup-form-group">
                                    <input type="text" class="popup-form-control" name="get_offer_services_name" required placeholder="Services Name *">
                                    <span class="fas fa-bookmark"></span>
                                </div>
                                <div class="popup-form-group">
                                    <textarea class="popup-form-control" name="get_offer_services_special_request" required  cols="30" rows="5" placeholder="Special Request *"></textarea>
                                    <span class="fas fa-envelope-open"></span>
                                </div>
                                <div class="popup-form">
                                    <button type="submit" class="login-button" name="login_form_submit">Submit<i class="fa fa-thumbs-up"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Get Quote  Form End //-->

        </main>
        <!--// Main Area End //-->

        <a href="#" data-scroll-goto="0" class="scroll-top-btn">
            <i class="fa fa-arrow-up"></i>
        </a>
        <!--// .scroll-top-btn // -->

        <div id="preloader-wrap">
            <div class="preloader-inner">
                <div class="gooey">
                    <span class="dot"></span>
                    <div class="dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <!--// Preloader // -->

    </div>
    <!--// Page Wrapper End //-->

    <!--// JQuery //-->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
    <!--// Images Loaded //-->
    <script src="assets/js/images.loaded.min.js"></script>
    <!--// Magnific Popup //-->
    <script src="assets/js/magnific.popup.min.js"></script>
    <!--// Popper Popup //-->
    <script src="assets/js/popper.min.js"></script>
    <!--// Bootstrap //-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--// Wow Js //-->
    <script src="assets/js/wow.min.js"></script>
    <!--// Waypoint Js //-->
    <script src="assets/js/waypoint.min.js"></script>
    <!--// Counter Up Js //-->
    <script src="assets/js/counter.up.min.js"></script>
    <!--// JQuery Easing Functions //-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--// ScrollIt //-->
    <script src="assets/js/scrollit.min.js"></script>
    <!--// Owl Carousel //-->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!--// Isotope Gallery //-->
    <script src="assets/js/isotope.min.js"></script>
    <!--// MB YTB Player //-->
    <script src="assets/js/jquery.mb-ytb.min.js"></script>
    <!--// Main Js //-->
    
    
<?php 
   
    if ($page == 'Company-Profile') {
        echo "<script src='assets/js/main.js'></script>";

    }elseif ($page == '') {
         echo "<script src='assets/js/main.js'></script>";
        
    }elseif ($page == 'Sustainability') {
         echo "<script src='assets/js/main.js'></script>";
                                        
    }elseif ($page == 'Career') {
         echo "<script src='assets/js/main.js'></script>";
                                        
    }elseif ($page == 'Energy') {
         echo "<script src='assets/js/main.js'></script>";
                                        
    }
    elseif ($page == 'Group-Of-Verticals') {
         echo "<script src='assets/js/main.js'></script>";
        
    }elseif ($page == 'SingleBusiness') {
         echo "<script src='assets/js/main.js'></script>";
        
    }else{ 
        
        
        
        echo "<script src='assets/js/main-alt.js'></script>";
       
       ?>
       
       
       <?php


    }
?>
    
    <!--// JQuery MB YTPlayer init //-->
    <script>
        $( document ).ready(function() {
            $("#video-background").mb_YTPlayer();
        });
    </script>
    
    <script>
        $(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } 
  });
});
    </script>
</body>
</html>