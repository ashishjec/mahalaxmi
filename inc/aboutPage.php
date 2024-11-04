<?php 

//Select Homepage Title
$select= "SELECT * FROM `company` WHERE id = '1'";
$sql=$dbconn->prepare($select);
$sql->execute();
$wlvd=$sql->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd as $rows);


//Select Homepage Title
$select1= "SELECT * FROM `company` WHERE id = '2'";
$sql1=$dbconn->prepare($select1);
$sql1->execute();
$wlvd1=$sql1->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd1 as $rows1);


//Select Homepage Title
$select3= "SELECT * FROM `company` WHERE id = '3'";
$sql3=$dbconn->prepare($select3);
$sql3->execute();
$wlvd3=$sql3->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd3 as $rows3);



//Select Homepage Title
$select4= "SELECT * FROM `company` WHERE id = '5'";
$sql4=$dbconn->prepare($select4);
$sql4->execute();
$wlvd4=$sql4->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd4 as $rows4);

//Select Homepage Title
$select5= "SELECT * FROM `company` WHERE id = '4'";
$sql5=$dbconn->prepare($select5);
$sql5->execute();
$wlvd5=$sql5->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd5 as $rows5);

//Select Homepage Title
$select6= "SELECT * FROM `company` WHERE id = '6'";
$sql6=$dbconn->prepare($select6);
$sql6->execute();
$wlvd6=$sql6->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd6 as $rows6);


//Select Homepage Title
$select7= "SELECT * FROM `company` WHERE id = '7'";
$sql7=$dbconn->prepare($select7);
$sql7->execute();
$wlvd7=$sql7->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd7 as $rows7);


//Select Homepage Title
$select8= "SELECT * FROM `company` WHERE id = '8'";
$sql8=$dbconn->prepare($select8);
$sql8->execute();
$wlvd8=$sql8->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd8 as $rows8);


//Select Homepage Title
$select9= "SELECT * FROM `company` WHERE id = '9'";
$sql9=$dbconn->prepare($select9);
$sql9->execute();
$wlvd9=$sql9->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd9 as $rows9);


//Select Homepage Title
$select10= "SELECT * FROM `company` WHERE id = '10'";
$sql10=$dbconn->prepare($select10);
$sql10->execute();
$wlvd10=$sql10->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd10 as $rows10);


//Select Homepage Title
$select11= "SELECT * FROM `company` WHERE id = '11'";
$sql11=$dbconn->prepare($select11);
$sql11->execute();
$wlvd11=$sql11->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd11 as $rows11);


//Select Homepage Title
$select12= "SELECT * FROM `company` WHERE id = '12'";
$sql12=$dbconn->prepare($select12);
$sql12->execute();
$wlvd12=$sql12->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd12 as $rows12);


//Select Homepage Title
$select13= "SELECT * FROM `company` WHERE id = '13'";
$sql13=$dbconn->prepare($select13);
$sql13->execute();
$wlvd13=$sql13->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd13 as $rows13);


//Select Homepage Title
$select14= "SELECT * FROM `company` WHERE id = '14'";
$sql14=$dbconn->prepare($select14);
$sql14->execute();
$wlvd14=$sql14->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd14 as $rows14);


?>


<div class="" style="background-image: url('assets/img/bg13.png');">
<section class="section" style='text-align:center; background-image: url("assets/img/company/<?php echo $rows->company_content_4 ;?>");' >
    <div class="container" style="padding-top: 200px;padding-bottom: 200px;text-align:center;">
        <span style="font-family:Poppins; font-size: 30px; color:#fff"><?php echo $rows->company_content_1 ;?></span>
     </div>
</section>
    
    <style type="text/css">
     

 

.card1 {
  position: relative;
  top: 0;
  background-color: #fff;
  border-radius: 1px;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.21);
   
  margin:20px;
  -webkit-transition: all 1s ease;/* WebKit */
  -moz-transition: all 1s ease;/* Firefox */
  -o-transition: all 1s ease;/* Opera */
  transition: all 1s ease;/* Standard */
}

.card1:hover {
  top: -2px;
  border-radius: 0px;
   
}
</style>
   
<div style="font-family:Poppins; color:#000; font-size: 14px; font-weight: 500;padding-top: 30px; padding-bottom: 30px; padding-left: 20px; background-color:#e0e0e0">
You Are Here > <a href="#" style="color:#000;">About</a> > <a style="color:#000;" href="index.php?page=<?php echo $page?>"><?php echo $page?></a>
</div>
    
 

    <?php 
    if($browser == 'Desktop'){
        ?>
        
        <div class="container" >
        <div class="row">
            <div class="col-md-12 shadow-lg p-5 mb-5 bg-white rounded card1" style="text-align:justify; color: #000; padding-top:30px; font-family:Poppins; margin-top: 40px;">
                                
                
            <?php echo $rows1->company_content_1 ;?>

            </div>
            <!--
            <div class="col-md-6">
                <img src="assets/img/about5.png" >
            </div>
        -->
        </div>

    </div>
         <div class="container" style="text-align:center;">
         <div class="row" style="padding-top:30px; padding-bottom:30px; text-align:center;">
                 
                <div class="col-md-5 shadow-lg card1 p-4"   style="border-radius: 1px 60px 1px 60px ;color: #000;background: #fff; padding: 20px;   border-color: #6e6c6c; border-style:solid;text-align:justify">
                    <span style="font-family:Poppins; font-size:30px; color: #000; text-align:center; font-weight: 500;">Our Mission</span><hr><br>
                    <span style="text-align:justify;">
                  <span style="color:#000; font-size: 18px"><?php echo $rows3->company_content_1 ;?></span>
                    <br>
                        <!--<br><br>
                        <strong>It is dedicated to diligently applying their mining expertise to attain economic advantages.</strong>
                        <br>
                        <br>
                        <ul>
                            <li>Perform unique operations</li>
                            <li>Maximize transportation advantages</li>
                            <li>Cultivate unique partnerships</li>
                            <li>Sustain efficiency and standardization</li>
                            <li>Follow Systematic procedures</li>
                        </ul>
--> 
                    </span>
                </div> 

                <div class="col-md-1"></div>
                <div class="col-md-5 shadow-lg card1 p-4"   style="border-radius: 1px 60px 1px 60px ;color: #000; background: #fff; padding: 20px; margin-right: 5px; border-color: #6e6c6c; border-style:solid;text-align:justify">
                    <span style="font-family:Poppins; font-size:30px; color: #000; text-align:center; font-weight: 500;">Our Vision</span><hr><br>
                    <span style="color:#000; font-size: 18px"><?php echo $rows4->company_content_1 ;?></span>
                    

                    <br>
                </div> 
                
            </div>
     </div>
        <?php
    }else{
        ?>
        
        <div class="container" >
        <div class="row">
            <div class="col-md-12 card1" style="text-align:justify; color: #000; padding-top:30px; font-family:Poppins; margin-top: 40px;">
                                
                
            <?php echo $rows1->company_content_1 ;?>

            </div>
            <!--
            <div class="col-md-6">
                <img src="assets/img/about5.png" >
            </div>
        -->
        </div>

    </div>
         <?php 
         if($browser == 'Desktop'){
             ?>
             <div class="container" style="text-align:center;">
         <div class="row" style="padding-top:30px; padding-bottom:30px; text-align:center;">
                 
                <div class="col-md-6 p-4"   style="border-radius: 1px 60px 1px 60px ;color: #000;background: #fff; padding: 20px; margin-right: 5px; border-color: #6e6c6c; border-style:solid;text-align:justify">
                    <span style="font-family:Poppins; font-size:30px; color: #000; text-align:center; font-weight: 500;">Our Mission</span><hr><br>
                    <span style="text-align:justify;">
                  <span style="color:#000; font-size: 18px"><?php echo $rows3->company_content_1 ;?></span>
                    <br>
                        <!--<br><br>
                        <strong>It is dedicated to diligently applying their mining expertise to attain economic advantages.</strong>
                        <br>
                        <br>
                        <ul>
                            <li>Perform unique operations</li>
                            <li>Maximize transportation advantages</li>
                            <li>Cultivate unique partnerships</li>
                            <li>Sustain efficiency and standardization</li>
                            <li>Follow Systematic procedures</li>
                        </ul>
--> 
                    </span>
                </div> 

                <div class="col-md-1"></div>
                <div class="col-md-6  p-4"   style="border-radius: 1px 60px 1px 60px ;color: #000; background: #fff; padding: 20px; ; border-color: #6e6c6c; border-style:solid;text-align:justify">
                    <span style="font-family:Poppins; font-size:30px; color: #000; text-align:center; font-weight: 500;">Our Vision</span><hr><br>
                    <span style="color:#000; font-size: 18px"><?php echo $rows4->company_content_1 ;?></span>
                    

                    <br>
                </div> 
                
            </div>
     </div>
             <?php
         }else{
             ?>
             <div class="container" style="text-align:center;">
         <div class="row" style="padding-top:30px; padding-bottom:30px; text-align:center;">
                 
                <div class="col-md-6 p-4 card1"   style="text-align:justify">
                    <span style="font-family:Poppins; font-size:30px; color: #000; text-align:center; font-weight: 500;">Our Mission</span><hr><br>
                    <span style="text-align:justify;">
                  <span style="color:#000; font-size: 18px"><?php echo $rows3->company_content_1 ;?></span>
                    <br>
                        <!--<br><br>
                        <strong>It is dedicated to diligently applying their mining expertise to attain economic advantages.</strong>
                        <br>
                        <br>
                        <ul>
                            <li>Perform unique operations</li>
                            <li>Maximize transportation advantages</li>
                            <li>Cultivate unique partnerships</li>
                            <li>Sustain efficiency and standardization</li>
                            <li>Follow Systematic procedures</li>
                        </ul>
--> 
                    </span>
                </div> 

                <div class="col-md-1"></div>
                <div class="col-md-6  p-4 card1"   style="text-align:justify">
                    <span style="font-family:Poppins; font-size:30px; color: #000; text-align:center; font-weight: 500;">Our Vision</span><hr><br>
                    <span style="color:#000; font-size: 18px"><?php echo $rows4->company_content_1 ;?></span>
                    

                    <br>
                </div> 
                
            </div>
     </div>
             <?php
         }
         ?>
         
         
        <?php
    }
    ?>
     
     <style>
          .counter-section i {
     display: block;
     margin: 0 0 10px
 }

 .counter-section span.counter {
     font-size: 40px;
     color: #000;
     line-height: 60px;
     display: block;
     font-family: "Oswald", sans-serif;
     letter-spacing: 2px
 }

 .counter-title {
     font-size: 12px;
     letter-spacing: 2px;
     text-transform: uppercase
 }

 .counter-icon {
     top: 25px;
     position: relative
 }

 .counter-style2 .counter-title {
     letter-spacing: 0.55px;
     float: left
 }

 .counter-style2 span.counter {
     letter-spacing: 0.55px;
     float: left;
     margin-right: 10px
 }

 .counter-style2 i {
     float: right;
     line-height: 26px;
     margin: 0 10px 0 0
 }

 .counter-subheadline span {
     float: right
 }

 .medium-icon {
     font-size: 40px !important;
     margin-bottom: 15px !important
 }

  
     </style>
     
     <section class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        
        <div class="row" style="margin-top:100px">
            <div class="col-md-12" style="text-align:center"><span style="font-family:Poppins; font-size:25px;margin-top:100px; padding-bottom:100px; color:#000">At A Glance</span></div>
        </div>
        <div class="row" style="margin-top:70px">
            
            
             
            <!-- counter -->
            <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;"> <i class="<?php echo $rows5->company_content_1 ;?>"></i> <span id="anim-number-pizza" class="counter-number"></span> <span class="timer counter alt-font appear" data-to="980" data-speed="7000"><?php echo $rows5->company_content_2 ;?></span>
                <p class="counter-title"><?php echo $rows5->company_content_4 ;?></p>
            </div> 
            <!-- end counter -->
             
              
            <!-- counter -->
            <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;"> <i class="<?php echo $rows6->company_content_1 ;?>"></i> <span id="anim-number-pizza" class="counter-number"></span> <span class="timer counter alt-font appear" data-to="980" data-speed="7000"><?php echo $rows6->company_content_2 ;?></span>
                <p class="counter-title"><?php echo $rows6->company_content_4 ;?></p>
            </div> 
            <!-- end counter -->
             
              
            <!-- counter -->
            <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;"> <i class="<?php echo $rows7->company_content_1 ;?>"></i> <span id="anim-number-pizza" class="counter-number"></span> <span class="timer counter alt-font appear" data-to="980" data-speed="7000"><?php echo $rows7->company_content_2 ;?></span>
                <p class="counter-title"><?php echo $rows7->company_content_4 ;?></p>
            </div> 
            <!-- end counter -->
             
              
            <!-- counter -->
            <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;"> <i class="<?php echo $rows8->company_content_1 ;?>"></i> <span id="anim-number-pizza" class="counter-number"></span> <span class="timer counter alt-font appear" data-to="980" data-speed="7000"><?php echo $rows8->company_content_2 ;?></span>
                <p class="counter-title"><?php echo $rows8->company_content_4 ;?></p>
            </div> 
            <!-- end counter -->
             
             
              </div>
    </div>
</section>


<script>
    $(document).ready(function() {

$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 4000,
easing: 'swing',
step: function (now) {
$(this).text(Math.ceil(now));
}
});
});

});
</script>



     <div class="container-fluid" >
        <div class="row" style="background-color:#fff9">

              

            <div class="col-md-12" style="text-align:center; color: #000; padding-top:30px; font-family:Poppins; margin-top: 40px;">
                                
                <span style="font-family:Poppins; font-size:25px">Verticals</span>

                <div class="row" style="padding-top: 50px; padding-bottom: 0px; text-align: center;">

                    <div class="col-md-1 " style="text-align: center;"></div>
                    <div class="col-md-1 " style="text-align: center;"></div>
                    <div class="col-md-1 card1" style="text-align: center;">
                        <a href="<?php echo $rows9->company_content_2 ;?>"><img src="assets/img/company/<?php echo $rows9->company_content_4 ;?>"  height="70" style="padding-top:10px"></a>
                        <br>
                        <br>
                        <a href="<?php echo $rows9->company_content_2 ;?>" style="color: #000;font-size: 13px;"> <?php echo $rows9->company_content_1 ;?></a>
                    </div>
                      
                    <div class="col-md-1 card1" style="text-align: center;">
                        <a href="<?php echo $rows10->company_content_2 ;?>"><img src="assets/img/company/<?php echo $rows10->company_content_4 ;?>"  height="70" style="padding-top:10px;"></a>
                        <br>
                        <br>
                        <a href="<?php echo $rows10->company_content_2 ;?>" style="font-size: 13px;color: #000;"><?php echo $rows10->company_content_1 ;?></a>
                    </div>
                      
                     <div class="col-md-1 card1" style="text-align: center;">
                         <a href="<?php echo $rows11->company_content_2 ;?>">
                        <img src="assets/img/company/<?php echo $rows11->company_content_4 ;?>"  height="70" style="padding-top:10px">
                        </a>
                        <br>
                        <br>
                        <a href="<?php echo $rows11->company_content_2 ;?>" style="font-size: 13px;color: #000;"><?php echo $rows11->company_content_1 ;?></a>
                    </div>
                      
                       
                     <div class="col-md-1 card1" style="text-align: center;">
                         <a href="<?php echo $rows12->company_content_2 ;?>">
                        <img src="assets/img/company/<?php echo $rows12->company_content_4 ;?>"  height="70" style="padding-top:10px">
                        </a>
                        <br>
                        <br>
                        <a href="<?php echo $rows12->company_content_2 ;?>" style="font-size: 13px;color: #000;"><?php echo $rows12->company_content_1 ;?></a>
                    </div>
                       
                       
                     <div class="col-md-1 card1" style="text-align: center;">
                         <a href="<?php echo $rows13->company_content_2 ;?>">
                        <img src="assets/img/company/<?php echo $rows13->company_content_4 ;?>"  height="70" style="padding-top:10px">
                        </a>
                        <br>
                        <br>
                        <a href="<?php echo $rows13->company_content_2 ;?>" style="font-size: 13px;color: #000;"><?php echo $rows13->company_content_1 ;?></a>
                    </div>
                    <!--
                     <div class="col-md-1 card1" style="text-align: center;">
                        <img src="assets/img/iccon6.png"  height="70" style="padding-top:10px">
                        <br>
                        <br>
                        <a href="index.php?page=Energy" style="color: #000;">Paper</a>
                    </div>
                        -->
                    <div class="col-md-1 card1" style="text-align: center;">
                        <a href="<?php echo $rows14->company_content_2 ;?>">
                        <img src="assets/img/company/<?php echo $rows14->company_content_4 ;?>"  height="70" style="padding-top:10px">
                        </a>
                        <br>
                        <br>
                        <a href="<?php echo $rows14->company_content_2 ;?>" style="font-size: 13px;color: #000;">Commodities</a>
                    </div>
                    <!--
                    <div class="col-md-1 card1" style="text-align: center;">
                        <img src="assets/img/iccon8.png"  height="70" style="padding-top:10px">
                        <br>
                        <br>
                        <a href="index.php?page=Energy" style="color: #000;">Sugar</a>
                    </div>

                     <div class="col-md-1 card1 " style="text-align: center;">
                        <img src="assets/img/iccon9.png"  height="70" style="padding-top:10px">
                        <br>
                        <br>
                        <a href="index.php?page=Energy" style="color: #000;">Dairy</a>
                    </div>
                     <div class="col-md-1 card1" style="text-align: center;">
                        <img class="" src="assets/img/iccon10.png" height="70" style="padding-top:10px">
                        <br>
                        <br>
                        <a href="index.php?page=Energy" style="color: #000;">Bamboo</a>
                    </div>
                    -->
                </div>

                 

            </div>

            
            

            
        </div>
         
     </div> 
    <!--
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 

-->
     <div class="container" > 
        <link rel="stylesheet" href="assets/css/timeline.css">
            <div class="row">
            <div class="col-md-12" style="padding-bottom:20px; padding-top:70px; text-align: center;">
                <span style="font-family:Poppins; font-size:25px;color:#000">Our Timeline</span>

            </div>
            <div class="row1">
              <div class="main-timeline">
                
 <?php
 
  $select_enquiry = "SELECT * FROM company where status = 'Active' and company_type = 'Timeline' order by id desc";
$sql21=$dbconn->prepare($select_enquiry);
 $sql21->execute();
 $wlvd21=$sql21->fetchAll(PDO::FETCH_OBJ);
 if($sql21->rowCount() > 0){
  
    foreach($wlvd21 as $rows21){
$year = $rows21->company_content_1;
$shortdesc = $rows21->company_content_2;
$longdesc = $rows21->company_content_3;
$timeID = $rows21->id;
 
 ?>
 
 
                
                <div class="timeline">
                  <a href="#" class="timeline-content" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $timeID ;?>">
                    <div class="timeline-year"><?php echo $year ;?></div>
                    <h3 class="title"><?php echo $year ;?></h3>
                    <p class="description shadow-lg p-3 mb-5 bg-white rounded">
                      <?php echo $shortdesc ;?> <br> 
                      <span style="font-size:12px;color:blue">Read More >></span>
                         


                    </p>
                  </a>
                  
                </div>
                
                
                
      <?php }} ?>          
                
                <!--
                
                <div class="timeline">
                  <a href="#" class="timeline-content">
                    <div class="timeline-year">2014</div>
                    <h3 class="title">2014</h3>
                    <p class="description shadow-lg p-3 mb-5 bg-white rounded">
                      Imports Coal from Australia, Indonesia and South Africa. The group also enter into Real Estate construction and other commodities.
                    </p>
                  </a>
                </div>
                <div class="timeline">
                  <a href="#" class="timeline-content">
                    <div class="timeline-year">2013</div>
                    <h3 class="title">2013</h3>
                    <p class="description shadow-lg p-3 mb-5 bg-white rounded">
                      The Group enters into Import Coal Business and its first freight carrying Import coal reaches from Baltimore, USA. Refinances credit facilities at Allahabad Bank, State Bank of Travancore, State Bank of India and Punjab National Bank.


                    </p>
                  </a>
                </div>
                <div class="timeline">
                  <a href="#" class="timeline-content">
                    <div class="timeline-year">2012</div>
                    <h3 class="title">2012</h3>
                    <p class="description shadow-lg p-3 mb-5 bg-white rounded" style="text-align:left">
                      Total Turnover reaches the mark of 500 per annum from Coal Trading Business. The company enters into new long term contract with Hindustan Paper Corporation Ltd (HPCL), Panchgram and Jagiroad, and subsequently becomes the largest supplier of coal to HPCL. <br> <br>Group offices reach vital locations at U.P, Bihar, Rajasthan, Gujarat and North Eastern Indian Sector.  <br> <br>Liaison with APMDTC, Arunachal Pradesh.  <br> <br>Liaison with AIIDC, Assam.
                    </p>
                  </a>
                </div>

                
                <div class="timeline">
                  <a href="#" class="timeline-content">
                    <div class="timeline-year">2010</div>
                    <h3 class="title">2010</h3>
                    <p class="description shadow-lg p-3 mb-5 bg-white rounded" style="text-align:left">
                      The Mahalaxmi Group celebrates its 25th Anniversary. It has become one of the Largest Coal Trading business house in North Eastern Region.


                    </p>
                  </a>
                </div>
                <div class="timeline">
                  <a href="#" class="timeline-content">
                    <div class="timeline-year">2009</div>
                    <h3 class="title">2009</h3>
                    <p class="description shadow-lg p-3 mb-5 bg-white rounded" style="text-align:left">
                      Engages in Coal Trading with Coal India and its subsidiaries NEC and BCCL Ltd. through e-auction. Signs Fuel Supply Agreement with Govt. for Handling and Stockist Agent of Coal for Nagaland, Assam for distribution of coals to various SSI units.
                        <br><br>
                        Mahalaxmi Foundation founded and organised Yog Shivirs, Naturopathy Treatment Camps, Medical Camps at Guwahati, Assam.


                    </p>
                  </a>
                </div>
                 
                <div class="timeline">
                  <a href="#" class="timeline-content">
                    <div class="timeline-year">2004</div>
                    <h3 class="title">2004</h3>
                    <p class="description shadow-lg p-3 mb-5 bg-white rounded" style="text-align: left;">
                      Maa Kamakhya Coke Industries incorporated and starts its Coal production and supply.
                        <br>
                        <br>
                        Mahalaxmi Mining Pvt Ltd incorporated and enters into coal mining at Naginimora, Nagaland.
                    </p>
                  </a>
                </div> 
                <div class="timeline">
                  <a href="#" class="timeline-content">
                    <div class="timeline-year">2002</div>
                    <h3 class="title">2002</h3>
                    <p class="description shadow-lg p-3 mb-5 bg-white rounded" style="text-align: left;">
                      Mahalaxmi Continental Ltd was formed to streamline and manage all the Coal Trading Activities of the group.


                    </p>
                  </a>
                </div>
                <div class="timeline">
                  <a href="#" class="timeline-content">
                    <div class="timeline-year">1985</div>
                    <h3 class="title">1985</h3>
                    <p class="description shadow-lg p-3 mb-5 bg-white rounded" style="text-align: left;">
                      The Foundation stone to Mahalaxmi Group was laid by Shri Laxmi Chand, Chairman of the Group in this year.




                    </p>
                  </a>
                </div>
                
                
                -->
              </div>
            </div>
        </div>
    </div>  



    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <div class="container">
         <div class="row" style="padding-top:30px; padding-bottom:30px">
                 
                
                
            </div>
     </div>


<!--

    <div class="container-fluid" style="background-color: #e0e0e0; margin-bottom: -100px;">

        <div class="row" style="text-align:center; padding-top:10px; padding-bottom:40px; margin-top:30px" >
            <div class="col-md-12">
                <h4 style="margin: 50px; font-family: Poppins;">Our Accolades</h4>

            </div>
            <div class="col-md-3">
                <img src="assets/img/forbes.svg" height="100px">
            </div>
            <div class="col-md-3">
                <img src="assets/img/forbes.svg" height="100px">
            </div>
            <div class="col-md-3">
                <img src="assets/img/forbes.svg" height="100px">
            </div>
            <div class="col-md-3">
                <img src="assets/img/forbes.svg" height="100px">
            </div>
        </div>        
           
    </div>


-->

 
 
  <?php
 
  $select_enquiry = "SELECT * FROM company where status = 'Active' and company_type = 'Timeline' order by id desc";
$sql21=$dbconn->prepare($select_enquiry);
 $sql21->execute();
 $wlvd21=$sql21->fetchAll(PDO::FETCH_OBJ);
 if($sql21->rowCount() > 0){
  
    foreach($wlvd21 as $rows21){
$year = $rows21->company_content_1;
$shortdesc = $rows21->company_content_2;
$longdesc = $rows21->company_content_3;
$timeID = $rows21->id;
 
 ?>
 
 <div class="modal fade" id="exampleModal<?php echo $timeID ;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Year: <?php echo $year ;?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <?php echo $longdesc ;?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            
            <?php }} ?>
    
</div>
