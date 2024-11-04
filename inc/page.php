<section class="section" style="text-align:center; background-image: url('assets/img/bg13.png');" >
    

    <div class="container-fluid" style="text-align:center; margin-top: -100px;background-image: url('assets/img/blogDetail.png');">
        <div class="row" style="text-align:center; ">
            <div class="col-md-12" style="text-align:center; padding-top:250px; padding-bottom:200px; ">
             <span style="font-family:Poppins; text-align:center; color: #fff; font-size: 25px;"><?php 
                 $name = $_GET['name'];
                 echo $name;?></span>
         </div>
        </div>
        
    </div> 
 
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xl-12 col-md-12" style="text-align:center;color: #fff; background-color:#fff; padding-top: 20px;">
             
                 

                <?php 

                    $select_page = "SELECT * FROM web_contents where web_name = '$name'"; //Select from database
                    $sql = $dbconn->prepare($select_page); //Prepare or process
                    $sql->execute(); //function run
                    $data=$sql->fetchAll(PDO::FETCH_OBJ);
                    foreach($data as $rows);
                    echo "<span style='background-color: #fff;text-align:justify'>$rows->web_desc</span>";


                ?>
            </div>
        </div>
    </div>
</section>