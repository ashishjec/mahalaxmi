<?php 

//Select Homepage Title
$select= "SELECT * FROM `homepage` WHERE id = '1'";
$sql=$dbconn->prepare($select);
$sql->execute();
$wlvd=$sql->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd as $rows);



//Select Homepage About Image
$select1= "SELECT * FROM `homepage` WHERE id = '2'";
$sql1=$dbconn->prepare($select1);
$sql1->execute();
$wlvd1=$sql1->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd1 as $rows1);


//Select Homepage About Description
$select3= "SELECT * FROM `homepage` WHERE id = '3'";
$sql3=$dbconn->prepare($select3);
$sql3->execute();
$wlvd3=$sql3->fetchAll(PDO::FETCH_OBJ);
foreach($wlvd3 as $rows3);



?>

<!--// About Start //-->
            <section class="section" id="about" style="background-image: url('assets/img/bg13.png');">
                <div class="container">
                    <div class="row">


                         
                        <div class="col-lg-7 col-xl-6 col-md-12 animate__animated animate__slideInLeft animate__delay-1s" >
                            <div class="about-inner">
                                <!--<span>About Us</span>-->
                                <h4 style="font-family: Poppins"><?php echo $rows->homepage_content_1;?> <span style="font-family: Poppins; font-size: 39px; font-weight: 500;"><?php echo $rows->homepage_content_2;?></span></h4>
                                
                                <p class="shadow-lg p-5 mb-5 bg-white rounded" style="text-align: justify; font-family:Poppins; background-color: #fff; color: #000; " >
                                    <?php echo $rows3->homepage_content_1;?>
                                </p>
                            </div>
                             
                        </div>
                        <div class="col-lg-5 col-xl-6 col-md-12">
                            <div class="about-img">
                                <img src="assets/img/home/<?php echo $rows1->homepage_content_1;?>" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--// About End //-->