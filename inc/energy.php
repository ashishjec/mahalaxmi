<style type="text/css">
	 

 

.card1 {
  position: relative;
  top: 0;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.21);
   
  margin: 10px;
  -webkit-transition: all 1s ease;/* WebKit */
  -moz-transition: all 1s ease;/* Firefox */
  -o-transition: all 1s ease;/* Opera */
  transition: all 1s ease;/* Standard */
}

.card1:hover {
  top: -20px;
  border-radius: 0px;
}




</style>


<style type="text/css">
    /* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
.flip-card {
  background-color: transparent;
  width: 220px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */

}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #fff;
  color: black;
  border-color: #0445e0;
  border-style: solid;
  border-size: 1px;
  padding: 10px;
}

/* Style the back side */
.flip-card-back {
  background-color: #fff;
  color: white;
  transform: rotateY(180deg);
  border-color: #0445e0;
  border-style: solid;
  border-size: 1px;
  padding: 10px;
}
</style>



<style type="text/css">
   .image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>

<section class="section" style="text-align:center; background-image: url('assets/img/energyBG.png');" >
    <div class="container" style="padding-top: 200px;padding-bottom: 200px;text-align:center;">
    	<span style="font-family:Poppins; font-size: 30px; color:#fff">Mahalaxmi Energy</span>
     </div>
</section>
  <?php include ('inc/breadcrumb-dark.php') ?>
 <hr>
<section class="section " style="background-image: url('assets/img/bg13.png');">
    <div class="container animate__animated animate__slideInLeft animate__delay-1s" style="padding-top: 0px;padding-bottom: 50px;text-align:center;">
    	
    	<div class="row">
    		
    		<div class="col-md-7" style="padding-bottom:20px; padding-top:20px ; text-align: justify;">
                <div class="card1 p-5" style="padding:20px;  text-align: justify;">
    			<span style="font-family:Poppins; font-size: 25px; color:#000">Mahalaxmi Energy</span>
    			<br>
    			<br>
    			<span style="font-family:Poppins; font-size: 14px; color:#000; ">
    				Mahalaxmi Group primarily focus at supplying and trading Coal that tends to the needs of both Public and Private sector.<br><br>

                    From state to state and continent to continent, our reach spans across the world. 

                    We consequently supply the coal by ocean freight to clients either at discharge port or directly to customers’ power stations by barge or rail cars.<br><br>

                    We are the Transporting agent of coal in the states of Assam, Rajasthan, U.P. & Bihar and cater to the demands of high profile public sector companies like the Hindustan Paper Corp. Ltd. (Assam), Trident Group (Punjab), Nahar Industrial Ent. Ltd., IOL Chemicals & Pharmaceuticals Ltd. and more.




    			</span>
            </div>
    			 
    		</div>


            <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="flip-card">
                              <div class="flip-card-inner" >
                                <div class="flip-card-front" style="border-radius: 1px 60px 1px 60px;vertical-align: middle;text-align: center; padding-top: 70px; background-image: linear-gradient( 135deg, #FDEB71 10%, #F8D800 100%);border-color: #fff;">
                                  <span style="font-family:Poppins; font-size: 30px; font-weight:500">Fact 1</span>
                                </div>
                                <div class="flip-card-back" style="border-radius: 1px 60px 1px 60px ;">
                                  <h2>Fact 1</h2>
                                  <p>1000+ Numbers imported during the last financial year. This made a history and several awards recieved.</p>
                                  
                                </div>
                              </div>
                            </div>

                        </div>

                        <div class="col-md-3"></div>


                        <div class="col-md-4" style="padding-top:40px">
                            <div class="flip-card">
                              <div class="flip-card-inner" >
                                <div class="flip-card-front" style="border-radius: 1px 60px 1px 60px;vertical-align: middle;text-align: center; padding-top: 70px; background-image: linear-gradient( 135deg, #ABDCFF 10%, #0396FF 100%);
                                    border-color: #fff;">
                                  <span style="font-family:Poppins; font-size: 30px; font-weight:500">Fact 2</span>
                                </div>
                                <div class="flip-card-back" style="border-radius: 1px 60px 1px 60px ;">
                                  <h2>Fact 2</h2>
                                  <p>1000+ Numbers imported during the last financial year. This made a history and several awards recieved.</p>
                                  
                                </div>
                              </div>
                            </div>

                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-4">
                            <div class="flip-card">
                              <div class="flip-card-inner" >
                                <div class="flip-card-front" style="border-radius: 1px 60px 1px 60px;vertical-align: middle;text-align: center; padding-top: 70px; background-image: linear-gradient( 135deg, #FEB692 10%, #EA5455 100%);border-color: #fff;">
                                  <span style="font-family:Poppins; font-size: 30px; font-weight:500">Fact 3</span>
                                </div>
                                <div class="flip-card-back" style="border-radius: 1px 60px 1px 60px ;">
                                  <h2>Fact 3</h2>
                                  <p>1000+ Numbers imported during the last financial year. This made a history and several awards recieved.</p>
                                  
                                </div>
                              </div>
                            </div>

                        </div>

                        <div class="col-md-3"></div>


                        <div class="col-md-4" style="padding-top:40px">
                            <div class="flip-card">
                              <div class="flip-card-inner" >
                                <div class="flip-card-front" style="border-radius: 1px 60px 1px 60px;vertical-align: middle;text-align: center; padding-top: 70px; background-image: linear-gradient( 135deg, #81FBB8 10%, #28C76F 100%);
                                    border-color: #fff;">
                                  <span style="font-family:Poppins; font-size: 30px; font-weight:500">Fact 4</span>
                                </div>
                                <div class="flip-card-back" style="border-radius: 1px 60px 1px 60px ;">
                                  <h2>Fact 4</h2>
                                  <p>1000+ Numbers imported during the last financial year. This made a history and several awards recieved.</p>
                                  
                                </div>
                              </div>
                            </div>

                        </div>
                    </div>
            </div>
    	</div>

  <!--      

        <div class="row" style="padding-top: 50px; padding-bottom: 0px; padding-right: 2px;">

                <div class="col-md-12" style="text-align:center">
                    <span style="font-family:Poppins; font-size:30px; color:#000">Group Companies</span>
                </div>
                     
                    <div class="col-md-2 card1" style="text-align: center;">
                        <img src="assets/img/iccon1.png"  height="70" style="padding-top:10px">
                        <br>
                        <br>
                        Mahalaxmi Continental Ltd.
                    </div>
                      
                    <div class="col-md-2 card1" style="text-align: center;">
                        <img src="assets/img/iccon2.png"  height="70" style="padding-top:10px">
                        <br>
                        <br>
                        Mahalaxmi Associates Pvt. Ltd.
                    </div>
                      
                     <div class="col-md-2 card1" style="text-align: center;">
                        <img src="assets/img/iccon3.png"  height="70" style="padding-top:10px">
                        <br>
                        <br>
                        Mahalaxmi India Pvt. Ltd.
                    </div>
                      
                       
                      
                       <div class="col-md-2 card1" style="text-align: center;">
                        <img src="assets/img/iccon4.png"  height="70" style="padding-top:10px">
                        <br>
                        <br>
                        Maa Kamakhya Coke Industries
                    </div>


                      <div class="col-md-2 card1" style="text-align: center;">
                        <img src="assets/img/iccon5.png"  height="70" style="padding-top:10px">
                        <br>
                        <br>
                        Pride Coke Pvt. Ltd.
                    </div>
                      
        </div>
-->
<div class="row" >
    <div class="col-md-12" style="text-align:center; padding-top:100px; padding-bottom:10px">
   <span style="font-family:Poppins; font-size: 25px; color:#000">More About Mahalaxmi Energy</span> 
   </div>
</div>


<div class="row">
    <div class="col-md-7 card1" style="background-image:url('assets/img/eg1.png'); height: 400px;  ">
        <div class="row">
            <div class="col-md-12" style="margin-top: 175px; background-color: #0000008a; text-align: left;">
                <span style="font-family:Poppins; font-size:25px; text-align: left;color: #fff;">
                    Test Title
                </span>
                <p style="font-family:Poppins; color:#fff; padding-top:5px; padding-bottom:5px">A small one or two line goes here. A small one or two line goes here. A small one or two line goes here.<br></p>
            </div>
        </div>
    </div>

    <div class="col-md-4 card1" style="background-image:url('assets/img/eg2.png'); height: 400px;  ">
        <div class="row">
            <div class="col-md-12" style="margin-top: 175px; background-color: #0000008a; text-align: left;">
                <span style="font-family:Poppins; font-size:25px; color:#fff">
                    Test Title
                </span>
                <p style="font-family:Poppins; color:#fff; padding-top:5px; padding-bottom:5px">A small one or two line goes here. A small one or two line goes here.<br></p>
            </div>
        </div>
    </div>



    <div class="col-md-4 card1" style="background-image:url('assets/img/eg4.png'); height: 400px;  ">
        <div class="row">
            <div class="col-md-12" style="margin-top: 175px; background-color: #0000008a; text-align: left;">
                <span style="font-family:Poppins; font-size:25px; color:#fff">
                    Test Title
                </span>
                <p style="font-family:Poppins; color:#fff; padding-top:5px; padding-bottom:5px">A small one or two line goes here. A small one or two line goes here.<br></p>
            </div>
        </div>
    </div>


    <div class="col-md-7 card1" style="background-image:url('assets/img/eg3.png'); height: 400px;  ">
        <div class="row">
            <div class="col-md-12" style="margin-top: 175px; background-color: #0000008a; text-align: left;">
                <span style="font-family:Poppins; font-size:25px; color:#fff">
                    Test Title
                </span>
                <p style="font-family:Poppins; color:#fff; padding-top:5px; padding-bottom:5px">A small one or two line goes here. A small one or two line goes here. A small one or two line goes here.<br></p>
            </div>
        </div>
    </div>



     
       <div class="col-md-7 card1" style="background-image:url('assets/img/eg1.png'); height: 400px;  ">
        <div class="row">
            <div class="col-md-12" style="margin-top: 175px; background-color: #0000008a; text-align: left;">
                <span style="font-family:Poppins; font-size:25px; text-align: left;color: #fff;">
                    Test Title
                </span>
                <p style="font-family:Poppins; color:#fff; padding-top:5px; padding-bottom:5px">A small one or two line goes here. A small one or two line goes here. A small one or two line goes here.<br></p>
            </div>
        </div>
    </div>

    <div class="col-md-4 card1" style="background-image:url('assets/img/eg2.png'); height: 400px;  ">
        <div class="row">
            <div class="col-md-12" style="margin-top: 175px; background-color: #0000008a; text-align: left;">
                <span style="font-family:Poppins; font-size:25px; color:#fff">
                    Test Title
                </span>
                <p style="font-family:Poppins; color:#fff; padding-top:5px; padding-bottom:5px">A small one or two line goes here. A small one or two line goes here.<br></p>
            </div>
        </div>
    </div>



    <div class="col-md-4 card1" style="background-image:url('assets/img/eg4.png'); height: 400px;  ">
        <div class="row">
            <div class="col-md-12" style="margin-top: 175px; background-color: #0000008a; text-align: left;">
                <span style="font-family:Poppins; font-size:25px; color:#fff">
                    Test Title
                </span>
                <p style="font-family:Poppins; color:#fff; padding-top:5px; padding-bottom:5px">A small one or two line goes here. A small one or two line goes here.<br></p>
            </div>
        </div>
    </div>


    <div class="col-md-7 card1" style="background-image:url('assets/img/eg3.png'); height: 400px;  ">
        <div class="row">
            <div class="col-md-12" style="margin-top: 175px; background-color: #0000008a; text-align: left;">
                <span style="font-family:Poppins; font-size:25px; color:#fff">
                    Test Title
                </span>
                <p style="font-family:Poppins; color:#fff; padding-top:5px; padding-bottom:5px">A small one or two line goes here. A small one or two line goes here. A small one or two line goes here.<br></p>
            </div>
        </div>
    </div>



     
       
       
       
</div>
       
      
 </div>
</section>
 

