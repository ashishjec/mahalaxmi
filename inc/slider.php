

<!--// Main Area Start //-->
        <main class="main-area">

            <!--// Hero Section Start  
            <section class="hero-banner" id="hero_video" style="width:100%; height:900px;padding-top: 600px;">
                
<?php 

//Select Homepage Title
$select_video= "SELECT * FROM `homepage` WHERE id = '50'";
$sql33=$dbconn->prepare($select_video);
$sql33->execute();
$wlvd33=$sql33->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd33 as $rows33);

?>                 
                <div id="video-background" class="player bg-overlay" 
                    data-property="{videoURL:'<?php echo $rows33->homepage_content_2;  ?>',containment:'#hero_video',showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'high'}">
                    
                </div>
                
                
                 
               
                <div class="hero-overlay" style="padding-bottom:10px"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-xl-6 col-md-10">
                            <div class="hero-inner">
                                 <h6>Welcome To</h6>
                                <h1>Mahalaxmi Group</h1>
                                <p style="font-size: 30px;">
                                    Keeping Dreams Alive
                                </p>
                                -->
                                
                                <!---
                                <a href="#" class="default-primary-btn"><span>Get Offer</span></a>

                                
                            </div>
                             
                        </div>
                    </div>
                </div>
               
                <div class="row" style="text-align:right"><a class="ct-btn-scroll ct-js-btn-scroll" href="#about"><img alt="Arrow Down Icon" src="https://raw.githubusercontent.com/solodev/scroll-down-anchor/master/images/arrow-down-1.png"></a></div>
            </section>
            
            -->
            
            <section>
                <div class="overlay"></div>

  <!-- The HTML5 video element that will create the background video on the header -->
  
    
    <?php 
    if($browser == 'Mobile'){
        ?>
        <video width="100%" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
          <source src="assets/video/<?php echo $rows33->homepage_content_2; ?>" type="video/mp4">
           
           
        </video>
        <?php
    }elseif($browser == 'Desktop'){
        ?>
        <video width="100%"   playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source  src="assets/video/<?php echo $rows33->homepage_content_2; ?>" type="video/mp4">
        </video>
        <?php
    }
    ?>
    
    
  </video>
  <!--
  <div class="row" style="text-align:right"><a class="ct-btn-scroll ct-js-btn-scroll" href="#about"><img alt="Arrow Down Icon" src="https://raw.githubusercontent.com/solodev/scroll-down-anchor/master/images/arrow-down-1.png"></a></div>
  
  -->

  <!-- The header content -->
   
            </section>
             
            <!--// Hero Section End //-->

            <!--
            <section class="top-adres-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-4 hero-info-item-wrap">
                            <div class="hero-info-item">
                                <i class="fa fa-map-marker-alt"></i>
                                <div class="text">
                                    <h6>Address:</h6>
                                    <span>1073 W Stephen Ave, Clawson</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4 hero-info-item-wrap">
                            <div class="hero-info-item">
                                <i class="fas fa-mobile-alt"></i>
                                <div class="text">
                                    <h6>Call Us:</h6>
                                    <span>+1 200-222-4444</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 hero-info-item-wrap">
                            <div class="hero-info-item">
                                <i class="fa fa-envelope-open-text"></i>
                                <div class="text">
                                    <h6>Email:</h6>
                                    <span><a href="/cdn-cgi/l/email-protection#bddfd4c7c7ded2cfcdc4fdd8c5dcd0cdd1d893ded2d0"><span class="__cf_email__" data-cfemail="b9dbd0c3c3dad6cbc9c0f9dcc1d8d4c9d5dc97dad6d4">[email&#160;protected]</span></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>     
           Top Address info End //-->