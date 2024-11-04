<style type="text/css">
  /*   
a {
  display: inline-block;
  position: relative;
  text-decoration: none;
  color: inherit;
  z-index: 1;
}

a::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: .07em;
  height: .1em;
  width: 100%;
  background: linear-gradient(110deg, #fff,  #0445e0);
  z-index: -1;
  transition: height .25s cubic-bezier(.6,0,.4,1);
}
 */

.card1 {
  position: relative;
  top: 0;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.21);
   
  margin: 0px;
  -webkit-transition: all 1s ease;/* WebKit */
  -moz-transition: all 1s ease;/* Firefox */
  -o-transition: all 1s ease;/* Opera */
  transition: all 1s ease;/* Standard */
}

.card1:hover {
  top: -05px;
  border-radius: 0px;
}
</style>
 
<div style="font-family:Poppins; color:#000; font-size: 14px; font-weight: 500;padding-top: 30px; padding-bottom: 30px; padding-left: 20px; background-color:#e0e0e0">
You Are Here > <a href="index.php?page=Contact" style="color:#000;">Contact</a>  
</div>
<section class="section" style="background-color: #fff; text-align:center;background-image: url('assets/img/bg13.png');" >
     <!--
         <div class="container-fluid" style="text-align:center; margin-top: -100px;background-image: url('assets/img/whitebg.png');">
            <div class="row" style="text-align:center; ">
            <div class="col-md-12" style="text-align:center; padding-top:200px; padding-bottom:150px; ">
             <span style="font-family:Poppins; text-align:center; color: #fff; font-size: 25px;">Chairman's Message</span>
         </div>
        </div>
        
        </div>
-->
     <div class="container" style="margin-top:-70px">
         <div class="row" style="margin-bottom:10px">
            <div class="col-md-12">
                <span style="font-size:30px; font-family:Poppins; color:#000">Contact Us</span>
            </div>
           </div>
           <hr>
           
           <?php
           $name = $_GET['name'];
           $select_latest1 = "SELECT * FROM contact where status = 'Active' and id = '$name' order by id desc";
                $sql131=$dbconn->prepare($select_latest1);
                $sql131->execute();
                $wlvd131=$sql131->fetchAll(PDO::FETCH_OBJ);
                
                
                  
                    foreach($wlvd131 as $rows131)
                $field7A1 = $rows131->con_map;
                
                if($field7A1 == ''){
                   ?>
                   <div class="row">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7165.056850472266!2d91.8055169!3d26.1143082!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5f30f2db3e97%3A0x1c8bc9945dcb6690!2sMahalaxmi%20Continental%20Ltd!5e0!3m2!1sen!2sin!4v1643969420794!5m2!1sen!2sin" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
           </div>
                   <?php
                }else{
                    ?>
                    
                    <div class="row">
               <iframe src="<?php echo $field7A1?>" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
           </div>
                    
                    <?php
                }
           
           ?>
           
           
           <div class="row" style="padding-top:10px;padding-bottom:10px; text-align:center">
               <div class="col-md-12" style="text-align:center;padding-top:20px;padding-bottom:20px; ">
               <span style="font-family:Poppins; font-size: 25px; color:#000; ">Our Offices</span>
               </div>
               
               <div class="blog-carousel owl-carousel owl-theme">
                   
                   
      
                       <?php 
                
                $select_latest = "SELECT * FROM contact where status = 'Active' order by id asc";
                $sql13=$dbconn->prepare($select_latest);
                $sql13->execute();
                $wlvd13=$sql13->fetchAll(PDO::FETCH_OBJ);
                
                if($sql13->rowCount() > 0){
                  
                    foreach($wlvd13 as $rows13){
                $field7A = $rows13->con_name;
                $field7B= $rows13->con_address;
                $field7C = $rows13->con_phone;
                $field7D = $rows13->con_email;
                
                $field7E = $rows13->con_map;
                $field7F = $rows13->id;
                  
                  ?>
                        <div class="item">
                             <div class="row p-4 card1" style="height:280px; margin-bottom:10px">
                                 <a href='index.php?page=Contact&name=<?php echo $field7F;?>' style="color:#000">
                                 <div class="col-md-12" style="text-align:justify; font-size: 13px;">
                                       <span style="font-family:Poppins; font-size:21px; text-align: left"><?php echo $field7A;?></span>
                                       <hr>
                                        
                                        <div class="row" style="margin-bottom:10px">
                                            <div class="col-md-2"><img src="assets/img/pin.png" height="20"> </div>
                                            <div class="col-md-10" style="text-align:justify;"><?php echo $field7B;?></div>
                                        </div>
            
            
                                        <div class="row" style="margin-bottom:10px">
                                            <div class="col-md-2"><img src="assets/img/phone1.png" height="20"> </div>
                                            <div class="col-md-10" style="text-align:justify;"><?php echo $field7C;?></div>
                                        </div>
                                         
                                         
                                        <div class="row" style="margin-bottom:10px">
                                            <div class="col-md-2"><img src="assets/img/email.png" height="20"> </div>
                                            <div class="col-md-10" style="text-align:justify;"><?php echo $field7D;?></div>
                                        </div>
                                    </div>
                                    </a>
                             </div>
                        </div>
          <?php }} ?>            
                    </div>
           </div>
  

<?php

if (isset($_POST['submitmes'])) {
						    
$con_name = $_POST['con_name'];
$con_phone = $_POST['con_phone'];
$con_email = $_POST['con_email'];
$con_depart = $_POST['con_depart'];
$con_mes = $_POST['con_mes'];
						    

$con = "INSERT contact_increase SET 
con_name = '$con_name',
con_phone = '$con_phone',
con_email = '$con_email',
con_depart = '$con_depart',
con_mes = '$con_mes', status = 'Active'";

$con = $dbconn->prepare($con);  
$con->execute();

 //header("Location: index.php?page=Thanks");
 echo '<script type="text/javascript">sweetAlert("Thank you for contacting. ", "We shall contact you soon!",  "success")</script>';
}

?> 

           
           
            <form method="POST" action="">
            <div class="row p-4 shadow-lg" style=" margin-top:50px; padding-top: 29px; background-color:#fff">
               
                <div class="col-md-12" style="text-align:center; margin-bottom: 20px;"><span style="font-family:Poppins; font-size:20px;">
                   Drop Us A Message <br>
                </span>
                </div>

                 
                
                    <div class="col-md-6 p-1">
                         <input type="text" name="con_name" class="form-control" placeholder="Your Name">
                    </div>

                
                    <div class="col-md-6 p-1">
                         <input type="email" name="con_email" class="form-control" placeholder="Your Email">
                    </div>

                    <div class="col-md-6 p-1">
                         <input type="text" name="con_phone" class="form-control" placeholder="Your Phone">
                    </div>

                    <div class="col-md-6 p-1">
                         <select name="con_depart" class="form-control">
                             <option value="">---Select Department---</option>
                             <option >General Enquiry</option>
                             <option >Customer Feedback</option>
                             <option >Sustainability</option>
                             <option >Investors</option>
                         </select>
                    </div>
                    <div class="col-md-12 p-1">
                        <textarea name="con_mes" class="form-control" placeholder="Write Your Message"></textarea>
                    </div>
                    <div class="col-md-12" style="margin-top:20px"></div>
                    <div class="col-md-4"></div>
                    
                    <div class="col-md-4" style="text-align:center">
                        <button type="submit" name="submitmes" class="btn btn-primary">Submit Message</button>
                        
                    </div>
                    <div class="col-md-4"></div>

                    <div class="col-md-12" style="margin-top:20px"></div>
                    

                

                     
                
                 
           </div>  
           </form>
     </div>
         


    
    </div>
    
</section>
 
